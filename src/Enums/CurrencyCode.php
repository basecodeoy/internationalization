<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Internationalization\Enums;

/**
 * @see \Symfony\Component\Intl\Currencies::getNames()
 */
enum CurrencyCode: string
{
    case AFN = 'AFN'; // Afghan Afghani
    case AFA = 'AFA'; // Afghan Afghani (1927–2002)
    case ALL = 'ALL'; // Albanian Lek
    case ALK = 'ALK'; // Albanian Lek (1946–1965)
    case DZD = 'DZD'; // Algerian Dinar
    case ADP = 'ADP'; // Andorran Peseta
    case AOA = 'AOA'; // Angolan Kwanza
    case AOK = 'AOK'; // Angolan Kwanza (1977–1991)
    case AON = 'AON'; // Angolan New Kwanza (1990–2000)
    case AOR = 'AOR'; // Angolan Readjusted Kwanza (1995–1999)
    case ARA = 'ARA'; // Argentine Austral
    case ARS = 'ARS'; // Argentine Peso
    case ARM = 'ARM'; // Argentine Peso (1881–1970)
    case ARP = 'ARP'; // Argentine Peso (1983–1985)
    case ARL = 'ARL'; // Argentine Peso Ley (1970–1983)
    case AMD = 'AMD'; // Armenian Dram
    case AWG = 'AWG'; // Aruban Florin
    case AUD = 'AUD'; // Australian Dollar
    case ATS = 'ATS'; // Austrian Schilling
    case AZN = 'AZN'; // Azerbaijani Manat
    case AZM = 'AZM'; // Azerbaijani Manat (1993–2006)
    case BSD = 'BSD'; // Bahamian Dollar
    case BHD = 'BHD'; // Bahraini Dinar
    case BDT = 'BDT'; // Bangladeshi Taka
    case BBD = 'BBD'; // Barbadian Dollar
    case BYN = 'BYN'; // Belarusian Ruble
    case BYB = 'BYB'; // Belarusian Ruble (1994–1999)
    case BYR = 'BYR'; // Belarusian Ruble (2000–2016)
    case BEF = 'BEF'; // Belgian Franc
    case BEC = 'BEC'; // Belgian Franc (convertible)
    case BEL = 'BEL'; // Belgian Franc (financial)
    case BZD = 'BZD'; // Belize Dollar
    case BMD = 'BMD'; // Bermudan Dollar
    case BTN = 'BTN'; // Bhutanese Ngultrum
    case VED = 'VED'; // Bolívar Soberano
    case BOB = 'BOB'; // Bolivian Boliviano
    case BOL = 'BOL'; // Bolivian Boliviano (1863–1963)
    case BOV = 'BOV'; // Bolivian Mvdol
    case BOP = 'BOP'; // Bolivian Peso
    case BAM = 'BAM'; // Bosnia-Herzegovina Convertible Mark
    case BAD = 'BAD'; // Bosnia-Herzegovina Dinar (1992–1994)
    case BAN = 'BAN'; // Bosnia-Herzegovina New Dinar (1994–1997)
    case BWP = 'BWP'; // Botswanan Pula
    case BRC = 'BRC'; // Brazilian Cruzado (1986–1989)
    case BRZ = 'BRZ'; // Brazilian Cruzeiro (1942–1967)
    case BRE = 'BRE'; // Brazilian Cruzeiro (1990–1993)
    case BRR = 'BRR'; // Brazilian Cruzeiro (1993–1994)
    case BRN = 'BRN'; // Brazilian New Cruzado (1989–1990)
    case BRB = 'BRB'; // Brazilian New Cruzeiro (1967–1986)
    case BRL = 'BRL'; // Brazilian Real
    case GBP = 'GBP'; // British Pound
    case BND = 'BND'; // Brunei Dollar
    case BGL = 'BGL'; // Bulgarian Hard Lev
    case BGN = 'BGN'; // Bulgarian Lev
    case BGO = 'BGO'; // Bulgarian Lev (1879–1952)
    case BGM = 'BGM'; // Bulgarian Socialist Lev
    case BUK = 'BUK'; // Burmese Kyat
    case BIF = 'BIF'; // Burundian Franc
    case KHR = 'KHR'; // Cambodian Riel
    case CAD = 'CAD'; // Canadian Dollar
    case CVE = 'CVE'; // Cape Verdean Escudo
    case KYD = 'KYD'; // Cayman Islands Dollar
    case XAF = 'XAF'; // Central African CFA Franc
    case XPF = 'XPF'; // CFP Franc
    case CLE = 'CLE'; // Chilean Escudo
    case CLP = 'CLP'; // Chilean Peso
    case CLF = 'CLF'; // Chilean Unit of Account (UF)
    case CNX = 'CNX'; // Chinese People’s Bank Dollar
    case CNY = 'CNY'; // Chinese Yuan
    case CNH = 'CNH'; // Chinese Yuan (offshore)
    case COP = 'COP'; // Colombian Peso
    case COU = 'COU'; // Colombian Real Value Unit
    case KMF = 'KMF'; // Comorian Franc
    case CDF = 'CDF'; // Congolese Franc
    case CRC = 'CRC'; // Costa Rican Colón
    case HRD = 'HRD'; // Croatian Dinar
    case HRK = 'HRK'; // Croatian Kuna
    case CUC = 'CUC'; // Cuban Convertible Peso
    case CUP = 'CUP'; // Cuban Peso
    case CYP = 'CYP'; // Cypriot Pound
    case CZK = 'CZK'; // Czech Koruna
    case CSK = 'CSK'; // Czechoslovak Hard Koruna
    case DKK = 'DKK'; // Danish Krone
    case DJF = 'DJF'; // Djiboutian Franc
    case DOP = 'DOP'; // Dominican Peso
    case NLG = 'NLG'; // Dutch Guilder
    case XCD = 'XCD'; // East Caribbean Dollar
    case DDM = 'DDM'; // East German Mark
    case ECS = 'ECS'; // Ecuadorian Sucre
    case ECV = 'ECV'; // Ecuadorian Unit of Constant Value
    case EGP = 'EGP'; // Egyptian Pound
    case GQE = 'GQE'; // Equatorial Guinean Ekwele
    case ERN = 'ERN'; // Eritrean Nakfa
    case EEK = 'EEK'; // Estonian Kroon
    case ETB = 'ETB'; // Ethiopian Birr
    case EUR = 'EUR'; // Euro
    case XEU = 'XEU'; // European Currency Unit
    case FKP = 'FKP'; // Falkland Islands Pound
    case FJD = 'FJD'; // Fijian Dollar
    case FIM = 'FIM'; // Finnish Markka
    case FRF = 'FRF'; // French Franc
    case XFO = 'XFO'; // French Gold Franc
    case XFU = 'XFU'; // French UIC-Franc
    case GMD = 'GMD'; // Gambian Dalasi
    case GEK = 'GEK'; // Georgian Kupon Larit
    case GEL = 'GEL'; // Georgian Lari
    case DEM = 'DEM'; // German Mark
    case GHS = 'GHS'; // Ghanaian Cedi
    case GHC = 'GHC'; // Ghanaian Cedi (1979–2007)
    case GIP = 'GIP'; // Gibraltar Pound
    case GRD = 'GRD'; // Greek Drachma
    case GTQ = 'GTQ'; // Guatemalan Quetzal
    case GWP = 'GWP'; // Guinea-Bissau Peso
    case GNF = 'GNF'; // Guinean Franc
    case GNS = 'GNS'; // Guinean Syli
    case GYD = 'GYD'; // Guyanaese Dollar
    case HTG = 'HTG'; // Haitian Gourde
    case HNL = 'HNL'; // Honduran Lempira
    case HKD = 'HKD'; // Hong Kong Dollar
    case HUF = 'HUF'; // Hungarian Forint
    case ISK = 'ISK'; // Icelandic Króna
    case ISJ = 'ISJ'; // Icelandic Króna (1918–1981)
    case INR = 'INR'; // Indian Rupee
    case IDR = 'IDR'; // Indonesian Rupiah
    case IRR = 'IRR'; // Iranian Rial
    case IQD = 'IQD'; // Iraqi Dinar
    case IEP = 'IEP'; // Irish Pound
    case ILS = 'ILS'; // Israeli New Shekel
    case ILP = 'ILP'; // Israeli Pound
    case ILR = 'ILR'; // Israeli Shekel (1980–1985)
    case ITL = 'ITL'; // Italian Lira
    case JMD = 'JMD'; // Jamaican Dollar
    case JPY = 'JPY'; // Japanese Yen
    case JOD = 'JOD'; // Jordanian Dinar
    case KZT = 'KZT'; // Kazakhstani Tenge
    case KES = 'KES'; // Kenyan Shilling
    case KWD = 'KWD'; // Kuwaiti Dinar
    case KGS = 'KGS'; // Kyrgystani Som
    case LAK = 'LAK'; // Laotian Kip
    case LVL = 'LVL'; // Latvian Lats
    case LVR = 'LVR'; // Latvian Ruble
    case LBP = 'LBP'; // Lebanese Pound
    case LSL = 'LSL'; // Lesotho Loti
    case LRD = 'LRD'; // Liberian Dollar
    case LYD = 'LYD'; // Libyan Dinar
    case LTL = 'LTL'; // Lithuanian Litas
    case LTT = 'LTT'; // Lithuanian Talonas
    case LUL = 'LUL'; // Luxembourg Financial Franc
    case LUC = 'LUC'; // Luxembourgian Convertible Franc
    case LUF = 'LUF'; // Luxembourgian Franc
    case MOP = 'MOP'; // Macanese Pataca
    case MKD = 'MKD'; // Macedonian Denar
    case MKN = 'MKN'; // Macedonian Denar (1992–1993)
    case MGA = 'MGA'; // Malagasy Ariary
    case MGF = 'MGF'; // Malagasy Franc
    case MWK = 'MWK'; // Malawian Kwacha
    case MYR = 'MYR'; // Malaysian Ringgit
    case MVR = 'MVR'; // Maldivian Rufiyaa
    case MVP = 'MVP'; // Maldivian Rupee (1947–1981)
    case MLF = 'MLF'; // Malian Franc
    case MTL = 'MTL'; // Maltese Lira
    case MTP = 'MTP'; // Maltese Pound
    case MRU = 'MRU'; // Mauritanian Ouguiya
    case MRO = 'MRO'; // Mauritanian Ouguiya (1973–2017)
    case MUR = 'MUR'; // Mauritian Rupee
    case MXV = 'MXV'; // Mexican Investment Unit
    case MXN = 'MXN'; // Mexican Peso
    case MXP = 'MXP'; // Mexican Silver Peso (1861–1992)
    case MDC = 'MDC'; // Moldovan Cupon
    case MDL = 'MDL'; // Moldovan Leu
    case MCF = 'MCF'; // Monegasque Franc
    case MNT = 'MNT'; // Mongolian Tugrik
    case MAD = 'MAD'; // Moroccan Dirham
    case MAF = 'MAF'; // Moroccan Franc
    case MZE = 'MZE'; // Mozambican Escudo
    case MZN = 'MZN'; // Mozambican Metical
    case MZM = 'MZM'; // Mozambican Metical (1980–2006)
    case MMK = 'MMK'; // Myanmar Kyat
    case NAD = 'NAD'; // Namibian Dollar
    case NPR = 'NPR'; // Nepalese Rupee
    case ANG = 'ANG'; // Netherlands Antillean Guilder
    case TWD = 'TWD'; // New Taiwan Dollar
    case NZD = 'NZD'; // New Zealand Dollar
    case NIO = 'NIO'; // Nicaraguan Córdoba
    case NIC = 'NIC'; // Nicaraguan Córdoba (1988–1991)
    case NGN = 'NGN'; // Nigerian Naira
    case KPW = 'KPW'; // North Korean Won
    case NOK = 'NOK'; // Norwegian Krone
    case OMR = 'OMR'; // Omani Rial
    case PKR = 'PKR'; // Pakistani Rupee
    case PAB = 'PAB'; // Panamanian Balboa
    case PGK = 'PGK'; // Papua New Guinean Kina
    case PYG = 'PYG'; // Paraguayan Guarani
    case PEI = 'PEI'; // Peruvian Inti
    case PEN = 'PEN'; // Peruvian Sol
    case PES = 'PES'; // Peruvian Sol (1863–1965)
    case PHP = 'PHP'; // Philippine Peso
    case PLN = 'PLN'; // Polish Zloty
    case PLZ = 'PLZ'; // Polish Zloty (1950–1995)
    case PTE = 'PTE'; // Portuguese Escudo
    case GWE = 'GWE'; // Portuguese Guinea Escudo
    case QAR = 'QAR'; // Qatari Riyal
    case RHD = 'RHD'; // Rhodesian Dollar
    case XRE = 'XRE'; // RINET Funds
    case RON = 'RON'; // Romanian Leu
    case ROL = 'ROL'; // Romanian Leu (1952–2006)
    case RUB = 'RUB'; // Russian Ruble
    case RUR = 'RUR'; // Russian Ruble (1991–1998)
    case RWF = 'RWF'; // Rwandan Franc
    case SVC = 'SVC'; // Salvadoran Colón
    case WST = 'WST'; // Samoan Tala
    case STN = 'STN'; // São Tomé & Príncipe Dobra
    case STD = 'STD'; // São Tomé & Príncipe Dobra (1977–2017)
    case SAR = 'SAR'; // Saudi Riyal
    case RSD = 'RSD'; // Serbian Dinar
    case CSD = 'CSD'; // Serbian Dinar (2002–2006)
    case SCR = 'SCR'; // Seychellois Rupee
    case SLE = 'SLE'; // Sierra Leonean Leone
    case SLL = 'SLL'; // Sierra Leonean Leone (1964—2022)
    case SGD = 'SGD'; // Singapore Dollar
    case SKK = 'SKK'; // Slovak Koruna
    case SIT = 'SIT'; // Slovenian Tolar
    case SBD = 'SBD'; // Solomon Islands Dollar
    case SOS = 'SOS'; // Somali Shilling
    case ZAR = 'ZAR'; // South African Rand
    case ZAL = 'ZAL'; // South African Rand (financial)
    case KRH = 'KRH'; // South Korean Hwan (1953–1962)
    case KRW = 'KRW'; // South Korean Won
    case KRO = 'KRO'; // South Korean Won (1945–1953)
    case SSP = 'SSP'; // South Sudanese Pound
    case SUR = 'SUR'; // Soviet Rouble
    case ESP = 'ESP'; // Spanish Peseta
    case ESA = 'ESA'; // Spanish Peseta (A account)
    case ESB = 'ESB'; // Spanish Peseta (convertible account)
    case LKR = 'LKR'; // Sri Lankan Rupee
    case SHP = 'SHP'; // St. Helena Pound
    case SDD = 'SDD'; // Sudanese Dinar (1992–2007)
    case SDG = 'SDG'; // Sudanese Pound
    case SDP = 'SDP'; // Sudanese Pound (1957–1998)
    case SRD = 'SRD'; // Surinamese Dollar
    case SRG = 'SRG'; // Surinamese Guilder
    case SZL = 'SZL'; // Swazi Lilangeni
    case SEK = 'SEK'; // Swedish Krona
    case CHF = 'CHF'; // Swiss Franc
    case SYP = 'SYP'; // Syrian Pound
    case TJR = 'TJR'; // Tajikistani Ruble
    case TJS = 'TJS'; // Tajikistani Somoni
    case TZS = 'TZS'; // Tanzanian Shilling
    case THB = 'THB'; // Thai Baht
    case TPE = 'TPE'; // Timorese Escudo
    case TOP = 'TOP'; // Tongan Paʻanga
    case TTD = 'TTD'; // Trinidad & Tobago Dollar
    case TND = 'TND'; // Tunisian Dinar
    case TRY = 'TRY'; // Turkish Lira
    case TRL = 'TRL'; // Turkish Lira (1922–2005)
    case TMT = 'TMT'; // Turkmenistani Manat
    case TMM = 'TMM'; // Turkmenistani Manat (1993–2009)
    case UGX = 'UGX'; // Ugandan Shilling
    case UGS = 'UGS'; // Ugandan Shilling (1966–1987)
    case UAH = 'UAH'; // Ukrainian Hryvnia
    case UAK = 'UAK'; // Ukrainian Karbovanets
    case AED = 'AED'; // United Arab Emirates Dirham
    case UYW = 'UYW'; // Uruguayan Nominal Wage Index Unit
    case UYU = 'UYU'; // Uruguayan Peso
    case UYP = 'UYP'; // Uruguayan Peso (1975–1993)
    case UYI = 'UYI'; // Uruguayan Peso (Indexed Units)
    case USD = 'USD'; // US Dollar
    case USN = 'USN'; // US Dollar (Next day)
    case USS = 'USS'; // US Dollar (Same day)
    case UZS = 'UZS'; // Uzbekistani Som
    case VUV = 'VUV'; // Vanuatu Vatu
    case VES = 'VES'; // Venezuelan Bolívar
    case VEB = 'VEB'; // Venezuelan Bolívar (1871–2008)
    case VEF = 'VEF'; // Venezuelan Bolívar (2008–2018)
    case VND = 'VND'; // Vietnamese Dong
    case VNN = 'VNN'; // Vietnamese Dong (1978–1985)
    case XOF = 'XOF'; // West African CFA Franc
    case CHE = 'CHE'; // WIR Euro
    case CHW = 'CHW'; // WIR Franc
    case YDD = 'YDD'; // Yemeni Dinar
    case YER = 'YER'; // Yemeni Rial
    case YUN = 'YUN'; // Yugoslavian Convertible Dinar (1990–1992)
    case YUD = 'YUD'; // Yugoslavian Hard Dinar (1966–1990)
    case YUM = 'YUM'; // Yugoslavian New Dinar (1994–2002)
    case YUR = 'YUR'; // Yugoslavian Reformed Dinar (1992–1993)
    case ZRN = 'ZRN'; // Zairean New Zaire (1993–1998)
    case ZRZ = 'ZRZ'; // Zairean Zaire (1971–1993)
    case ZMW = 'ZMW'; // Zambian Kwacha
    case ZMK = 'ZMK'; // Zambian Kwacha (1968–2012)
    case ZWD = 'ZWD'; // Zimbabwean Dollar (1980–2008)
    case ZWR = 'ZWR'; // Zimbabwean Dollar (2008)
    case ZWL = 'ZWL'; // Zimbabwean Dollar (2009)
}