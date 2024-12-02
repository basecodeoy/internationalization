<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Internationalization\Values;

use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Casts\Castable;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Support\Creation\CreationContext;
use Spatie\LaravelData\Support\DataProperty;
use Symfony\Component\Intl\Currencies;
use Symfony\Component\Intl\Exception\MissingResourceException;

final class CurrencyCode extends Data implements \Stringable, Castable
{
    public function __construct(
        public readonly string $value,
        public readonly string $localized,
    ) {}

    #[\Override()]
    public function __toString(): string
    {
        return $this->value;
    }

    /**
     * @throws MissingResourceException
     */
    public static function createFromString(string $value): self
    {
        return new self(
            $value,
            Currencies::getName($value),
        );
    }

    #[\Override()]
    public static function dataCastUsing(...$arguments): Cast
    {
        return new class() implements Cast
        {
            public function cast(DataProperty $property, mixed $value, array $properties, CreationContext $context): mixed
            {
                return CurrencyCode::createFromString((string) $value);
            }
        };
    }

    public function isEqualTo(self $other): bool
    {
        return $this->value === $other->toString();
    }

    public function toString(): string
    {
        return $this->value;
    }
}
