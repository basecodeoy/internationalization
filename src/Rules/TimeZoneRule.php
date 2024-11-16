<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Internationalization\Rules;

use Illuminate\Contracts\Validation\ValidationRule;
use Symfony\Component\Intl\Timezones;

final readonly class TimeZoneRule implements ValidationRule
{
    /**
     * {@inheritDoc}
     */
    #[\Override()]
    public function validate(string $attribute, mixed $value, \Closure $fail): void
    {
        if (!Timezones::exists((string) $value)) {
            $fail('The :attribute must be a valid timezone.');
        }
    }
}