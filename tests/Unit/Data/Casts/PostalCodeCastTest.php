<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Internationalization\Values\PostalCode;
use Tests\Fakes\CastData;

it('can cast a postal code', function (): void {
    $castData = CastData::from([
        'countryCode' => 'FI',
        'postalCode' => '00100',
    ]);

    expect($castData->postalCode)->toBeInstanceOf(PostalCode::class);
});
