<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Internationalization\Values;

use Brick\Postcode\InvalidPostcodeException;
use Brick\Postcode\PostcodeFormatter;
use Brick\Postcode\UnknownCountryException;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Casts\Castable;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Creation\CreationContext;
use Spatie\LaravelData\Support\DataProperty;

final class PostalCode extends Data implements \Stringable, Castable
{
    public function __construct(
        public readonly string $postalCode,
    ) {}

    #[\Override()]
    public function __toString(): string
    {
        return $this->postalCode;
    }

    /**
     * @throws InvalidPostcodeException
     * @throws UnknownCountryException
     */
    public static function createFromString(string $postalCode, ?string $countryCode): self
    {
        if ($countryCode === null) {
            return new self($postalCode);
        }

        return new self((new PostcodeFormatter())->format($countryCode, $postalCode));
    }

    #[\Override()]
    public static function dataCastUsing(...$arguments): Cast
    {
        return new class() implements Cast
        {
            public function cast(DataProperty $property, mixed $value, array $properties, CreationContext $context): mixed
            {
                return PostalCode::createFromString((string) $value, null);
            }
        };
    }

    public function isEqualTo(self $other): bool
    {
        return $this->postalCode === $other->toString();
    }

    public function toString(): string
    {
        return $this->postalCode;
    }
}
