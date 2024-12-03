<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Internationalization\Values\PostalCode;

it('can format finnish postal codes', function (): void {
    $postalCode = PostalCode::createFromString('12345', 'FI');

    expect($postalCode->toString())->toBe('12345');
});

it('can format swedish postal codes', function (): void {
    $postalCode = PostalCode::createFromString('12345', 'SE');

    expect($postalCode->toString())->toBe('123 45');
});

it('can format latvian postal codes', function (): void {
    $postalCode = PostalCode::createFromString('1234', 'LV');

    expect($postalCode->toString())->toBe('LV-1234');
});

it('can format lithuanian postal codes', function (): void {
    $postalCode = PostalCode::createFromString('12345', 'LT');

    expect($postalCode->toString())->toBe('12345');
});

it('can format estonian postal codes', function (): void {
    $postalCode = PostalCode::createFromString('12345', 'EE');

    expect($postalCode->toString())->toBe('12345');
});
