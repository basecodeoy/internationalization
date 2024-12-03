<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Internationalization\Values\Locale;
use Tests\Fakes\CastData;

it('can cast a country', function (): void {
    $castData = CastData::from([
        'localeCode' => 'fi_FI',
    ]);

    expect($castData->localeCode)->toBeInstanceOf(Locale::class);
});
