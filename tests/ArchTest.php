<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

arch('globals')
    ->expect(['dd', 'dump'])
    ->not->toBeUsed();

// arch('BaseCodeOy\Internationalization')
//     ->expect('BaseCodeOy\Internationalization')
//     ->toUseStrictTypes()
//     ->toBeFinal()
//     ->ignoring('BaseCodeOy\Internationalization\Enums');

// arch('BaseCodeOy\Internationalization\Formatters')
//     ->expect('BaseCodeOy\Internationalization\Formatters')
//     ->toUseStrictTypes()
//     ->toBeFinal()
//     ->toBeReadonly()
//     ->toHaveSuffix('Formatter');

// arch('BaseCodeOy\Internationalization\Rules')
//     ->expect('BaseCodeOy\Internationalization\Rules')
//     ->toHaveSuffix('Rule')
//     ->toUseStrictTypes()
//     ->toBeFinal()
//     ->toBeReadonly()
//     ->ignoring(BaseCodeOy\Internationalization\Rules\PhoneNumberRule::class);

// arch('BaseCodeOy\Internationalization\Values')
//     ->expect('BaseCodeOy\Internationalization\Values')
//     ->toUseStrictTypes()
//     ->toBeFinal();
