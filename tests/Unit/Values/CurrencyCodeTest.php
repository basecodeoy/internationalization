<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Internationalization\Values\CurrencyCode;
use Symfony\Component\Intl\Exception\MissingResourceException;

it('creates from valid currency code string', function (): void {
    $validCurrencyCode = 'USD';
    $currency = CurrencyCode::createFromString($validCurrencyCode);

    expect($currency->toString())->toEqual($validCurrencyCode);
});

it('throws exception for invalid currency code string', function (): void {
    $invalidCurrencyCode = 'XXX';

    CurrencyCode::createFromString($invalidCurrencyCode);
})->throws(MissingResourceException::class);

it('returns correct localized string representation', function (): void {
    $validCurrencyCode = 'USD';
    $currency = CurrencyCode::createFromString($validCurrencyCode);

    expect($currency->localized)->toEqual('US Dollar');
});

it('returns correct string representation', function (): void {
    $validCurrencyCode = 'USD';
    $currency = CurrencyCode::createFromString($validCurrencyCode);

    expect($currency->toString())->toEqual($validCurrencyCode);
});
