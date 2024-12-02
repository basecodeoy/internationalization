<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Internationalization\Data\Casts;

use BaseCodeOy\Internationalization\Values\Currency;
use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Support\Creation\CreationContext;
use Spatie\LaravelData\Support\DataProperty;

final class CurrencyCast implements Cast
{
    #[\Override()]
    public function cast(DataProperty $property, mixed $value, array $properties, CreationContext $context): ?Currency
    {
        if (!\is_string($value) || empty($value)) {
            return null;
        }

        return Currency::createFromString($value);
    }
}
