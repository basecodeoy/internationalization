<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Internationalization\Values;

use Brick\PhoneNumber\PhoneNumber as Brick;
use Brick\PhoneNumber\PhoneNumberFormat;
use Brick\PhoneNumber\PhoneNumberParseException;
use Brick\PhoneNumber\PhoneNumberType;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Casts\Castable;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Creation\CreationContext;
use Spatie\LaravelData\Support\DataProperty;

/**
 * @see https://github.com/brick/phonenumber
 */
final class PhoneNumber extends Data implements \JsonSerializable, \Stringable, Castable
{
    public function __construct(
        public readonly Brick $phoneNumber,
        public readonly string $countryCode,
        public readonly ?string $geographicalAreaCode,
        public readonly ?string $nationalNumber,
        public readonly ?string $regionCode,
        public readonly ?string $numberType,
        public readonly bool $isPossible,
        public readonly bool $isValid,
    ) {}

    #[\Override()]
    public function __toString(): string
    {
        return $this->toString();
    }

    /**
     * @throws PhoneNumberParseException
     */
    public static function createFromString(string $phoneNumber, ?string $regionCode = null): self
    {
        $phoneNumber = Brick::parse($phoneNumber, $regionCode);

        return self::from([
            'phoneNumber' => $phoneNumber,
            'countryCode' => $phoneNumber->getCountryCode(),
            'geographicalAreaCode' => \in_array($phoneNumber->getGeographicalAreaCode(), ['', '0'], true) ? null : $phoneNumber->getGeographicalAreaCode(),
            'nationalNumber' => $phoneNumber->getNationalNumber(),
            'regionCode' => $phoneNumber->getRegionCode() !== null && $phoneNumber->getRegionCode() !== '' && $phoneNumber->getRegionCode() !== '0' ? $phoneNumber->getRegionCode() : null,
            'numberType' => $phoneNumber->getNumberType()->value,
            'isPossible' => $phoneNumber->isPossibleNumber(),
            'isValid' => $phoneNumber->isValidNumber(),
        ]);
    }

    public static function createFromExample(string $regionCode, PhoneNumberType $phoneNumberType = PhoneNumberType::FIXED_LINE): self
    {
        return self::createFromString(
            (string) Brick::getExampleNumber($regionCode, $phoneNumberType),
        );
    }

    #[\Override()]
    public static function dataCastUsing(...$arguments): Cast
    {
        return new class() implements Cast
        {
            public function cast(DataProperty $property, mixed $value, array $properties, CreationContext $context): mixed
            {
                return PhoneNumber::createFromString((string) $value);
            }
        };
    }

    /**
     * Returns a formatted string representation of this phone number.
     */
    public function format(PhoneNumberFormat $format): string
    {
        return $this->phoneNumber->format($format);
    }

    /**
     * Formats this phone number for out-of-country dialing purposes.
     *
     * @param string $regionCode The ISO 3166-1 alpha-2 country code
     */
    public function formatForCallingFrom(string $regionCode): string
    {
        return $this->phoneNumber->formatForCallingFrom($regionCode);
    }

    public function isEqualTo(self $other): bool
    {
        return $this->toString() === $other->toString();
    }

    public function toString(): string
    {
        return $this->format(PhoneNumberFormat::E164);
    }

    #[\Override()]
    public function jsonSerialize(): array
    {
        return [
            'phoneNumber' => $this->toString(),
        ];
    }
}
