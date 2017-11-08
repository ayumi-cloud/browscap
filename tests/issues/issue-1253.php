<?php

return [
    'issue-1253-A' => [
        'ua' => 'Mozilla/5.0 (Linux; U; xx-xx) AppleWebKit/528.5+ (KHTML, like Gecko, Safari/528.5+) Version/4.0 Kindle/3.0',
        'properties' => [
            'Comment' => 'Kindle',
            'Browser' => 'Kindle',
            'Browser_Type' => 'Browser',
            'Browser_Bits' => '32',
            'Browser_Maker' => 'Amazon.com, Inc.',
            'Browser_Modus' => 'unknown',
            'Version' => '3.0',
            'Platform' => 'Android',
            'Platform_Version' => 'unknown',
            'Platform_Description' => 'Android OS',
            'Platform_Bits' => '32',
            'Platform_Maker' => 'Google Inc',
            'Alpha' => false,
            'Beta' => false,
            'Frames' => true,
            'IFrames' => true,
            'Tables' => true,
            'Cookies' => true,
            'JavaScript' => true,
            'VBScript' => false,
            'JavaApplets' => true,
            'isSyndicationReader' => false,
            'Crawler' => false,
            'isFake' => false,
            'isAnonymized' => false,
            'isModified' => false,
            'CssVersion' => '3',
            'Device_Name' => 'Kindle',
            'Device_Maker' => 'Amazon.com, Inc.',
            'Device_Type' => 'Ebook Reader',
            'Device_Pointing_Method' => 'touchscreen',
            'Device_Code_Name' => 'Kindle',
            'Device_Brand_Name' => 'Amazon',
            'RenderingEngine_Name' => 'WebKit',
            'RenderingEngine_Version' => 'unknown',
            'RenderingEngine_Maker' => 'Apple Inc',
        ],
        'lite' => false,
        'standard' => true,
        'full' => true,
    ],
    'issue-1253-B' => [
        'ua' => 'Mozilla/5.0 (Linux; U; Android 2.3.4; en-us; Kindle Fire Build/GINGERBREAD) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
        'properties' => [
            'Comment' => 'Kindle Fire',
            'Browser' => 'Kindle Fire',
            'Browser_Type' => 'Browser',
            'Browser_Bits' => '32',
            'Browser_Maker' => 'Amazon.com, Inc.',
            'Browser_Modus' => 'unknown',
            'Version' => '4.0',
            'Platform' => 'Android',
            'Platform_Version' => '2.3',
            'Platform_Description' => 'Android OS',
            'Platform_Bits' => '32',
            'Platform_Maker' => 'Google Inc',
            'Alpha' => false,
            'Beta' => false,
            'Frames' => true,
            'IFrames' => true,
            'Tables' => true,
            'Cookies' => true,
            'JavaScript' => true,
            'VBScript' => false,
            'JavaApplets' => true,
            'isSyndicationReader' => false,
            'Crawler' => false,
            'isFake' => false,
            'isAnonymized' => false,
            'isModified' => false,
            'CssVersion' => '3',
            'Device_Name' => 'Kindle Fire',
            'Device_Maker' => 'Amazon.com, Inc.',
            'Device_Type' => 'Ebook Reader',
            'Device_Pointing_Method' => 'touchscreen',
            'Device_Code_Name' => 'Kindle Fire',
            'Device_Brand_Name' => 'Amazon',
            'RenderingEngine_Name' => 'WebKit',
            'RenderingEngine_Version' => 'unknown',
            'RenderingEngine_Maker' => 'Apple Inc',
        ],
        'lite' => false,
        'standard' => false,
        'full' => true,
    ],
    'issue-1253-B (standard + lite)' => [
        'ua' => 'Mozilla/5.0 (Linux; U; Android 2.3.4; en-us; Kindle Fire Build/GINGERBREAD) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
        'properties' => [
            'Comment' => 'Android Browser 4.0',
            'Browser' => 'Android',
            'Browser_Maker' => 'Google Inc',
            'Version' => '4.0',
            'Platform' => 'Android',
            'Crawler' => false,
            'Device_Type' => 'Mobile Phone',
            'Device_Pointing_Method' => 'touchscreen',
        ],
        'lite' => true,
        'standard' => true,
        'full' => false,
    ],
    'issue-1253-C' => [
        'ua' => 'Mozilla/5.0 (X11; U; Linux armv7l like Android; en-us) AppleWebKit/531.2+ (KHTML, like Gecko) Version/5.0 Safari/533.2+ Kindle/3.0+',
        'properties' => [
            'Comment' => 'Kindle',
            'Browser' => 'Kindle',
            'Browser_Type' => 'Browser',
            'Browser_Bits' => '32',
            'Browser_Maker' => 'Amazon.com, Inc.',
            'Browser_Modus' => 'unknown',
            'Version' => '5.0',
            'Platform' => 'Maemo',
            'Platform_Version' => 'unknown',
            'Platform_Description' => 'Maemo',
            'Platform_Bits' => '32',
            'Platform_Maker' => 'Linux Foundation',
            'Alpha' => false,
            'Beta' => false,
            'Frames' => true,
            'IFrames' => true,
            'Tables' => true,
            'Cookies' => true,
            'JavaScript' => true,
            'VBScript' => false,
            'JavaApplets' => true,
            'isSyndicationReader' => false,
            'Crawler' => false,
            'isFake' => false,
            'isAnonymized' => false,
            'isModified' => false,
            'CssVersion' => '3',
            'Device_Name' => 'Kindle 3',
            'Device_Maker' => 'Amazon.com, Inc.',
            'Device_Type' => 'Ebook Reader',
            'Device_Pointing_Method' => 'touchscreen',
            'Device_Code_Name' => 'Kindle 3',
            'Device_Brand_Name' => 'Amazon',
            'RenderingEngine_Name' => 'WebKit',
            'RenderingEngine_Version' => 'unknown',
            'RenderingEngine_Maker' => 'Apple Inc',
        ],
        'lite' => false,
        'standard' => true,
        'full' => true,
    ],
    'issue-1253-C (lite)' => [
        'ua' => 'Mozilla/5.0 (X11; U; Linux armv7l like Android; en-us) AppleWebKit/531.2+ (KHTML, like Gecko) Version/5.0 Safari/533.2+ Kindle/3.0+',
        'properties' => [
            'Comment' => 'Android Browser 5.0',
            'Browser' => 'Android',
            'Version' => '5.0',
            'Platform' => 'Android',
            'Device_Type' => 'Mobile Phone',
        ],
        'lite' => true,
        'standard' => false,
        'full' => false,
    ],
    'issue-1253-D' => [
        'ua' => 'Mozilla/5.0 (Linux; U; en-US) AppleWebKit/528.5+ (KHTML, like Gecko, Safari/528.5+) Version/4.0 Kindle/3.0 (screen 600x800; rotate)',
        'properties' => [
            'Comment' => 'Kindle',
            'Browser' => 'Kindle',
            'Browser_Type' => 'Browser',
            'Browser_Bits' => '32',
            'Browser_Maker' => 'Amazon.com, Inc.',
            'Browser_Modus' => 'unknown',
            'Version' => '3.0',
            'Platform' => 'Android',
            'Platform_Version' => 'unknown',
            'Platform_Description' => 'Android OS',
            'Platform_Bits' => '32',
            'Platform_Maker' => 'Google Inc',
            'Alpha' => false,
            'Beta' => false,
            'Frames' => true,
            'IFrames' => true,
            'Tables' => true,
            'Cookies' => true,
            'JavaScript' => true,
            'VBScript' => false,
            'JavaApplets' => true,
            'isSyndicationReader' => false,
            'Crawler' => false,
            'isFake' => false,
            'isAnonymized' => false,
            'isModified' => false,
            'CssVersion' => '3',
            'Device_Name' => 'Kindle',
            'Device_Maker' => 'Amazon.com, Inc.',
            'Device_Type' => 'Ebook Reader',
            'Device_Pointing_Method' => 'touchscreen',
            'Device_Code_Name' => 'Kindle',
            'Device_Brand_Name' => 'Amazon',
            'RenderingEngine_Name' => 'WebKit',
            'RenderingEngine_Version' => 'unknown',
            'RenderingEngine_Maker' => 'Apple Inc',
        ],
        'lite' => false,
        'standard' => true,
        'full' => true,
    ],
    'issue-1253-E' => [
        'ua' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.82 Safari/537.36 OPR/39.0.2256.43',
        'properties' => [
            'Comment' => 'Opera 39.0',
            'Browser' => 'Opera',
            'Browser_Type' => 'Browser',
            'Browser_Bits' => '64',
            'Browser_Maker' => 'Opera Software ASA',
            'Browser_Modus' => 'unknown',
            'Version' => '39.0',
            'Platform' => 'Linux',
            'Platform_Version' => 'unknown',
            'Platform_Description' => 'Linux',
            'Platform_Bits' => '64',
            'Platform_Maker' => 'Linux Foundation',
            'Alpha' => false,
            'Beta' => false,
            'Frames' => true,
            'IFrames' => true,
            'Tables' => true,
            'Cookies' => true,
            'JavaScript' => true,
            'VBScript' => false,
            'JavaApplets' => false,
            'isSyndicationReader' => false,
            'Crawler' => false,
            'isFake' => false,
            'isAnonymized' => false,
            'isModified' => false,
            'CssVersion' => '3',
            'Device_Name' => 'Linux Desktop',
            'Device_Maker' => 'unknown',
            'Device_Type' => 'Desktop',
            'Device_Pointing_Method' => 'mouse',
            'Device_Code_Name' => 'Linux Desktop',
            'Device_Brand_Name' => 'unknown',
            'RenderingEngine_Name' => 'Blink',
            'RenderingEngine_Version' => 'unknown',
            'RenderingEngine_Maker' => 'Google Inc',
        ],
        'lite' => true,
        'standard' => true,
        'full' => true,
    ],
];
