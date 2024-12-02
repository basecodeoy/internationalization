<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Internationalization\Enums\CountryCode;
use BaseCodeOy\Internationalization\Formatters\PostalLabelFormatter;
use BaseCodeOy\Internationalization\Values\Address;

dataset('sender_recipient_country_codes', fn (): array => [
    [CountryCode::EE->value, CountryCode::EE->value],
    [CountryCode::EE->value, CountryCode::FI->value],
    [CountryCode::EE->value, CountryCode::LT->value],
    [CountryCode::EE->value, CountryCode::LV->value],
    [CountryCode::EE->value, CountryCode::SE->value],

    [CountryCode::FI->value, CountryCode::EE->value],
    [CountryCode::FI->value, CountryCode::FI->value],
    [CountryCode::FI->value, CountryCode::LT->value],
    [CountryCode::FI->value, CountryCode::LV->value],
    [CountryCode::FI->value, CountryCode::SE->value],

    [CountryCode::LT->value, CountryCode::EE->value],
    [CountryCode::LT->value, CountryCode::FI->value],
    [CountryCode::LT->value, CountryCode::LT->value],
    [CountryCode::LT->value, CountryCode::LV->value],
    [CountryCode::LT->value, CountryCode::SE->value],

    [CountryCode::LV->value, CountryCode::EE->value],
    [CountryCode::LV->value, CountryCode::FI->value],
    [CountryCode::LV->value, CountryCode::LT->value],
    [CountryCode::LV->value, CountryCode::LV->value],
    [CountryCode::LV->value, CountryCode::SE->value],

    [CountryCode::SE->value, CountryCode::EE->value],
    [CountryCode::SE->value, CountryCode::FI->value],
    [CountryCode::SE->value, CountryCode::LT->value],
    [CountryCode::SE->value, CountryCode::LV->value],
    [CountryCode::SE->value, CountryCode::SE->value],
]);

it('can format finnish address', function (string $senderCountryCode, string $recipientCountryCode): void {
    expect(
        PostalLabelFormatter::format(
            Address::from([
                'countryCode' => CountryCode::from($senderCountryCode),
                'administrativeArea' => 'administrativeArea',
                'locality' => 'locality',
                'dependentLocality' => 'dependentLocality',
                'postalCode' => 'postalCode',
                'sortingCode' => 'sortingCode',
                'addressLine1' => 'addressLine1',
                'addressLine2' => 'addressLine2',
                'addressLine3' => 'addressLine3',
                'organization' => 'organization',
                'fullName' => 'fullName',
                'givenName' => 'givenName',
                'additionalName' => 'additionalName',
                'familyName' => 'familyName',
                'locale' => 'locale',
            ]),
            Address::from([
                'countryCode' => CountryCode::from($recipientCountryCode),
                'administrativeArea' => 'administrativeArea',
                'locality' => 'locality',
                'dependentLocality' => 'dependentLocality',
                'postalCode' => 'postalCode',
                'sortingCode' => 'sortingCode',
                'addressLine1' => 'addressLine1',
                'addressLine2' => 'addressLine2',
                'addressLine3' => 'addressLine3',
                'organization' => 'organization',
                'fullName' => 'fullName',
                'givenName' => 'givenName',
                'additionalName' => 'additionalName',
                'familyName' => 'familyName',
                'locale' => 'locale',
            ]),
        ),
    )->toMatchSnapshot();
})->with('sender_recipient_country_codes');
