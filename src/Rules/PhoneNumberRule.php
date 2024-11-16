<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Internationalization\Rules;

use BaseCodeOy\Internationalization\Values\PhoneNumber;
use Brick\PhoneNumber\PhoneNumberParseException;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Arr;

final class PhoneNumberRule implements DataAwareRule, ValidationRule
{
    private array $data = [];

    public function __construct(
        private readonly ?string $regionCode = null,
        private readonly ?string $regionCodeReference = null,
        private readonly bool $shouldBeStrict = false,
    ) {}

    /**
     * {@inheritDoc}
     */
    #[\Override()]
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    #[\Override()]
    public function validate(string $attribute, mixed $value, \Closure $fail): void
    {
        try {
            if ($this->regionCodeReference !== null) {
                $regionCode = Arr::get($this->data, $this->regionCodeReference);
            } else {
                $regionCode = $this->regionCode;
            }

            if ($this->shouldBeStrict) {
                $isValid = PhoneNumber::createFromString((string) $value, (string) $regionCode)->isValid;
            } else {
                $isValid = PhoneNumber::createFromString((string) $value, (string) $regionCode)->isPossible;
            }

            if ($isValid) {
                return;
            }
        } catch (PhoneNumberParseException) {
            //
        }

        $fail('The :attribute is not a valid phone number.');
    }
}
