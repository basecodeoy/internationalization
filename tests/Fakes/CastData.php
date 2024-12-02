<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Fakes;

use BaseCodeOy\Datobs\AbstractData;
use BaseCodeOy\Internationalization\Data\Casts\CountryCast;
use BaseCodeOy\Internationalization\Data\Casts\CurrencyCast;
use BaseCodeOy\Internationalization\Data\Casts\LanguageCast;
use BaseCodeOy\Internationalization\Data\Casts\LocaleCast;
use BaseCodeOy\Internationalization\Data\Casts\PhoneNumberCast;
use BaseCodeOy\Internationalization\Data\Casts\PostalCodeCast;
use BaseCodeOy\Internationalization\Data\Casts\PostalCodeStringCast;
use BaseCodeOy\Internationalization\Data\Casts\TimeZoneCast;
use BaseCodeOy\Internationalization\Values\Country;
use BaseCodeOy\Internationalization\Values\Currency;
use BaseCodeOy\Internationalization\Values\Language;
use BaseCodeOy\Internationalization\Values\Locale;
use BaseCodeOy\Internationalization\Values\PhoneNumber;
use BaseCodeOy\Internationalization\Values\PostalCode;
use BaseCodeOy\Internationalization\Values\TimeZone;
use Spatie\LaravelData\Attributes\WithCast;

final class CastData extends AbstractData
{
    public function __construct(
        #[WithCast(CountryCast::class)]
        public readonly ?Country $countryCode,
        #[WithCast(CurrencyCast::class)]
        public readonly ?Currency $currencyCode,
        #[WithCast(LanguageCast::class)]
        public readonly ?Language $languageCode,
        #[WithCast(LocaleCast::class)]
        public readonly ?Locale $localeCode,
        #[WithCast(PhoneNumberCast::class)]
        public readonly ?PhoneNumber $phoneNumber,
        #[WithCast(PostalCodeCast::class)]
        public readonly ?PostalCode $postalCode,
        #[WithCast(PostalCodeStringCast::class)]
        public readonly ?string $postalCodeString,
        #[WithCast(TimeZoneCast::class)]
        public readonly ?TimeZone $timeZone,
    ) {}
}
