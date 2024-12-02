<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Internationalization\Rules\CountryRule;
use Illuminate\Support\Facades\Validator;

it('pass with known values', function (): void {
    expect(Validator::make(
        ['attribute' => 'DE'],
        ['attribute' => new CountryRule()],
    )->passes())->toBeTrue();
});

it('fail with unknown values', function (): void {
    expect(Validator::make(
        ['attribute' => 'XX'],
        ['attribute' => new CountryRule()],
    )->fails())->toBeTrue();
});
