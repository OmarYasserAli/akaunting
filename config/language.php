<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enable All Language Routes
    |--------------------------------------------------------------------------
    |
    | This option enable language route.
    |
    */
    'route'         => true,

    /*
    |--------------------------------------------------------------------------
    | Enable Language Home Route
    |--------------------------------------------------------------------------
    |
    | This option enable language route to set language and return
    | to url('/')
    |
    */
    'home'          => false,

    /*
    |--------------------------------------------------------------------------
    | Add Language Code
    |--------------------------------------------------------------------------
    |
    | This option will add the language code to the redirected url
    |
    */
    'url'          => false,

    /*
    |--------------------------------------------------------------------------
    | Set strategy
    |--------------------------------------------------------------------------
    |
    | This option will determine the strategy used to determine the back url.
    | It can be 'session' (default) or 'referer'
    |
    */
    'back'          => 'session',

    /*
    |--------------------------------------------------------------------------
    | Carbon Language
    |--------------------------------------------------------------------------
    |
    | This option the language of carbon library.
    |
    */
    'carbon'        => true,

    /*
    |--------------------------------------------------------------------------
    | Date Language
    |--------------------------------------------------------------------------
    |
    | This option the language of jenssegers/date library.
    |
    */
    'date'          => false,

    /*
    |--------------------------------------------------------------------------
    | Auto Change Language
    |--------------------------------------------------------------------------
    |
    | This option allows to change website language to user's
    | browser language.
    |
    */
    'auto'          => true,

    /*
    |--------------------------------------------------------------------------
    | Routes Prefix
    |--------------------------------------------------------------------------
    |
    | This option indicates the prefix for language routes.
    |
    */
    'prefix'        => 'languages',

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | This option indicates the middleware to change language.
    |
    */
    'middleware'    => 'Akaunting\Language\Middleware\SetLocale',

    /*
    |--------------------------------------------------------------------------
    | Controller
    |--------------------------------------------------------------------------
    |
    | This option indicates the controller to be used.
    |
    */
    'controller'    => 'Akaunting\Language\Controllers\Language',

    /*
    |--------------------------------------------------------------------------
    | Flags
    |--------------------------------------------------------------------------
    |
    | This option indicates the flags features.
    |
    */
    'flags'         => ['width' => '22px', 'ul_class' => 'menu', 'li_class' => '', 'img_class' => ''],

    /*
    |--------------------------------------------------------------------------
    | Language code mode
    |--------------------------------------------------------------------------
    |
    | This option indicates the language code and name to be used, short/long
    | and english/native.
    | Short: language code (en)
    | Long: languagecode-COUNTRYCODE (en-GB)
    |
    */
    'mode'          => ['code' => 'long', 'name' => 'native'],

    /*
    |--------------------------------------------------------------------------
    | Allowed languages
    |--------------------------------------------------------------------------
    |
    | This options indicates the language allowed languages.
    |
    */
    'allowed'       => ['ar-SA', 'az-AZ', 'bg-BG', 'bn-BD', 'bs-BA', 'ca-ES', 'cs-CZ', 'da-DK', 'de-DE', 'el-GR', 'en-AU', 'en-GB', 'en-US', 'es-AR', 'es-ES', 'es-MX', 'et-EE', 'fa-IR', 'fr-FR', 'he-IL', 'hi-IN', 'hr-HR', 'hu-HU', 'id-ID', 'is-IS', 'it-IT', 'ja-JP', 'ka-GE', 'ko-KR', 'lt-LT', 'lv-LV', 'mk-MK', 'ms-MY', 'nb-NO', 'ne-NP', 'nl-NL', 'pl-PL', 'pt-BR', 'pt-PT', 'ro-RO', 'ru-RU', 'sk-SK', 'sl-SI', 'sr-RS', 'sq-AL', 'sv-SE', 'th-TH', 'tr-TR', 'uk-UA', 'ur-PK', 'uz-UZ',  'vi-VN', 'zh-CN', 'zh-TW'],

    /*
    |--------------------------------------------------------------------------
    | All Languages
    |--------------------------------------------------------------------------
    |
    | This option indicates the language codes and names.
    |
    */
    'all' => [
        ['short' => 'ar',       'long' => 'ar-SA',      'english' => 'Arabic',              'native' => '??????????????',                      'direction' => 'rtl'],
        ['short' => 'bg',       'long' => 'bg-BG',      'english' => 'Bulgarian',           'native' => '??????????????????',                    'direction' => 'ltr'],
        ['short' => 'bn',       'long' => 'bn-BD',      'english' => 'Bengali',             'native' => '???????????????',                           'direction' => 'ltr'],
        ['short' => 'cn',       'long' => 'zh-CN',      'english' => 'Chinese (S)',         'native' => '????????????',                      'direction' => 'ltr'],
        ['short' => 'cs',       'long' => 'cs-CZ',      'english' => 'Czech',               'native' => '??e??tina',                      'direction' => 'ltr'],
        ['short' => 'da',       'long' => 'da-DK',      'english' => 'Danish',              'native' => 'Dansk',                        'direction' => 'ltr'],
        ['short' => 'de',       'long' => 'de-DE',      'english' => 'German',              'native' => 'Deutsch',                      'direction' => 'ltr'],
        ['short' => 'de',       'long' => 'de-AT',      'english' => 'Austrian',            'native' => '??sterreichisches Deutsch',     'direction' => 'ltr'],
        ['short' => 'fi',       'long' => 'fi-FI',      'english' => 'Finnish',             'native' => 'Suomi',                        'direction' => 'ltr'],
        ['short' => 'fr',       'long' => 'fr-FR',      'english' => 'French',              'native' => 'Fran??ais',                     'direction' => 'ltr'],
        ['short' => 'el',       'long' => 'el-GR',      'english' => 'Greek',               'native' => '????????????????',                     'direction' => 'ltr'],
        ['short' => 'en',       'long' => 'en-AU',      'english' => 'English (AU)',        'native' => 'English (AU)',                 'direction' => 'ltr'],
        ['short' => 'en',       'long' => 'en-CA',      'english' => 'English (CA)',        'native' => 'English (CA)',                 'direction' => 'ltr'],
        ['short' => 'en',       'long' => 'en-GB',      'english' => 'English (GB)',        'native' => 'English (GB)',                 'direction' => 'ltr'],
        ['short' => 'en',       'long' => 'en-US',      'english' => 'English (US)',        'native' => 'English (US)',                 'direction' => 'ltr'],
        ['short' => 'es',       'long' => 'es-ES',      'english' => 'Spanish',             'native' => 'Espa??ol',                      'direction' => 'ltr'],
        ['short' => 'et',       'long' => 'et-EE',      'english' => 'Estonian',            'native' => 'Eesti',                        'direction' => 'ltr'],
        ['short' => 'he',       'long' => 'he-IL',      'english' => 'Hebrew',              'native' => '????????????????',                        'direction' => 'rtl'],
        ['short' => 'hi',       'long' => 'hi-IN',      'english' => 'Hindi',               'native' => '??????????????????',                           'direction' => 'ltr'],
        ['short' => 'hr',       'long' => 'hr-HR',      'english' => 'Croatian',            'native' => 'Hrvatski',                     'direction' => 'ltr'],
        ['short' => 'hu',       'long' => 'hu-HU',      'english' => 'Hungarian',           'native' => 'Magyar',                       'direction' => 'ltr'],
        ['short' => 'hy',       'long' => 'hy-AM',      'english' => 'Armenian',            'native' => '??????????????',                      'direction' => 'ltr'],
        ['short' => 'id',       'long' => 'id-ID',      'english' => 'Indonesian',          'native' => 'Bahasa Indonesia',             'direction' => 'ltr'],
        ['short' => 'it',       'long' => 'it-IT',      'english' => 'Italian',             'native' => 'Italiano',                     'direction' => 'ltr'],
        ['short' => 'ir',       'long' => 'fa-IR',      'english' => 'Persian',             'native' => '??????????',                        'direction' => 'rtl'],
        ['short' => 'jp',       'long' => 'ja-JP',      'english' => 'Japanese',            'native' => '?????????',                       'direction' => 'ltr'],
        ['short' => 'ka',       'long' => 'ka-GE',      'english' => 'Georgian',            'native' => '?????????????????????',                      'direction' => 'ltr'],
        ['short' => 'ko',       'long' => 'ko-KR',      'english' => 'Korean',              'native' => '?????????',                          'direction' => 'ltr'],
        ['short' => 'lt',       'long' => 'lt-LT',      'english' => 'Lithuanian',          'native' => 'Lietuvi??',                     'direction' => 'ltr'],
        ['short' => 'lv',       'long' => 'lv-LV',      'english' => 'Latvian',             'native' => 'Latvie??u valoda',              'direction' => 'ltr'],
        ['short' => 'mk',       'long' => 'mk-MK',      'english' => 'Macedonian',          'native' => '???????????????????? ??????????',             'direction' => 'ltr'],
        ['short' => 'ms',       'long' => 'ms-MY',      'english' => 'Malay',               'native' => 'Bahasa Melayu',                'direction' => 'ltr'],
        ['short' => 'mx',       'long' => 'es-MX',      'english' => 'Mexico',              'native' => 'Espa??ol de M??xico',            'direction' => 'ltr'],
        ['short' => 'nb',       'long' => 'nb-NO',      'english' => 'Norwegian',           'native' => 'Norsk Bokm??l',                 'direction' => 'ltr'],
        ['short' => 'ne',       'long' => 'ne-NP',      'english' => 'Nepali',              'native' => '??????????????????',                           'direction' => 'ltr'],
        ['short' => 'nl',       'long' => 'nl-NL',      'english' => 'Dutch',               'native' => 'Nederlands',                   'direction' => 'ltr'],
        ['short' => 'pl',       'long' => 'pl-PL',      'english' => 'Polish',              'native' => 'Polski',                       'direction' => 'ltr'],
        ['short' => 'pt-BR',    'long' => 'pt-BR',      'english' => 'Brazilian',           'native' => 'Portugu??s do Brasil',          'direction' => 'ltr'],
        ['short' => 'pt',       'long' => 'pt-PT',      'english' => 'Portuguese',          'native' => 'Portugu??s',                    'direction' => 'ltr'],
        ['short' => 'ro',       'long' => 'ro-RO',      'english' => 'Romanian',            'native' => 'Rom??n??',                       'direction' => 'ltr'],
        ['short' => 'ru',       'long' => 'ru-RU',      'english' => 'Russian',             'native' => '??????????????',                      'direction' => 'ltr'],
        ['short' => 'sr',       'long' => 'sr-RS',      'english' => 'Serbian (Cyrillic)',  'native' => '???????????? ??????????',                 'direction' => 'ltr'],
        ['short' => 'sr',       'long' => 'sr-CS',      'english' => 'Serbian (Latin)',     'native' => '???????????? ??????????',                 'direction' => 'ltr'],
        ['short' => 'sq',       'long' => 'sq-AL',      'english' => 'Albanian',            'native' => 'Shqip',                        'direction' => 'ltr'],
        ['short' => 'sk',       'long' => 'sk-SK',      'english' => 'Slovak',              'native' => 'Sloven??ina',                   'direction' => 'ltr'],
        ['short' => 'sl',       'long' => 'sl-SI',      'english' => 'Slovenian',           'native' => 'Sloven????ina',                  'direction' => 'ltr'],
        ['short' => 'sv',       'long' => 'sv-SE',      'english' => 'Swedish',             'native' => 'Svenska',                      'direction' => 'ltr'],
        ['short' => 'th',       'long' => 'th-TH',      'english' => 'Thai',                'native' => '?????????',                            'direction' => 'ltr'],
        ['short' => 'tr',       'long' => 'tr-TR',      'english' => 'Turkish',             'native' => 'T??rk??e',                       'direction' => 'ltr'],
        ['short' => 'tw',       'long' => 'zh-TW',      'english' => 'Chinese (T)',         'native' => '????????????',                     'direction' => 'ltr'],
        ['short' => 'uk',       'long' => 'uk-UA',      'english' => 'Ukrainian',           'native' => '????????????????????',                   'direction' => 'ltr'],
        ['short' => 'ur',       'long' => 'ur-PK',      'english' => 'Urdu (Pakistan)',     'native' => '????????',                         'direction' => 'rtl'],
        ['short' => 'uz',       'long' => 'uz-UZ',      'english' => 'Uzbek',               'native' => 'O\'zbek',                      'direction' => 'ltr'],
        ['short' => 'vi',       'long' => 'vi-VN',      'english' => 'Vietnamese',          'native' => 'Ti???ng Vi???t',                   'direction' => 'ltr'],
    ],

];
