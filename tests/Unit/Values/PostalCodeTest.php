<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Internationalization\Values\PostalCode;

it('can format finnish postal codes', function (): void {
    $phoneNumber = PostalCode::createFromString('12345', 'FI');

    expect($phoneNumber->toString())->toBe('12345');
});

it('can format swedish postal codes', function (): void {
    $phoneNumber = PostalCode::createFromString('12345', 'SE');

    expect($phoneNumber->toString())->toBe('123 45');
});

it('can format latvian postal codes', function (): void {
    $phoneNumber = PostalCode::createFromString('1234', 'LV');

    expect($phoneNumber->toString())->toBe('LV-1234');
});

it('can format lithuanian postal codes', function (): void {
    $phoneNumber = PostalCode::createFromString('12345', 'LT');

    expect($phoneNumber->toString())->toBe('12345');
});

it('can format estonian postal codes', function (): void {
    $phoneNumber = PostalCode::createFromString('12345', 'EE');

    expect($phoneNumber->toString())->toBe('12345');
});
