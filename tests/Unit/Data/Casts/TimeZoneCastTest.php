<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Internationalization\Values\TimeZone;
use Tests\Fakes\CastData;

it('can cast a currency', function (): void {
    $actual = CastData::from([
        'timeZone' => 'Europe/Helsinki',
    ]);

    expect($actual->timeZone)->toBeInstanceOf(TimeZone::class);
});
