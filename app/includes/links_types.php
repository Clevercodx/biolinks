<?php

return [
    'link' => [
        'icon' => 'fa fa-link',
        'color' => '#38b2ac',
    ],
    'biolink' => [
        'icon' => 'fa fa-fw fa-hashtag',
        'color' => '#383eb2',
        'whitelisted_background_image_extensions' => ['gif', 'png', 'jpg', 'jpeg', 'svg', 'mp4'],
        'whitelisted_favicon_image_extensions' => ['png', 'gif', 'ico'],
        'whitelisted_seo_image_extensions' => ['jpg', 'jpeg', 'png', 'gif'],
    ],
    'file' => [
        'icon' => 'fa fa-file',
        'color' => '#8c8c8c',
    ],
    'vcard' => [
        'icon' => 'fa fa-id-card',
        'color' => '#FAB005',

        'fields' => [
            'first_name' => [
                'max_length' => 64,
            ],
            'last_name' => [
                'max_length' => 64,
            ],
            'phone' => [
                'max_length' => 32,
            ],
            'email' => [
                'max_length' => 320,
            ],
            'url' => [
                'max_length' => 1024,
            ],
            'company' => [
                'max_length' => 64,
            ],
            'job_title' => [
                'max_length' => 64,
            ],
            'birthday' => [
                'max_length' => 16,
            ],
            'street' => [
                'max_length' => 128,
            ],
            'city' => [
                'max_length' => 64,
            ],
            'zip' => [
                'max_length' => 32,
            ],
            'region' => [
                'max_length' => 32,
            ],
            'country' => [
                'max_length' => 32,
            ],
            'note' => [
                'max_length' => 256,
            ],
            'social_label' => [
                'max_length' => 32
            ],
            'social_value' => [
                'max_length' => 1024
            ]
        ]
    ],
    'event' => [
        'icon' => 'fa fa-calendar-alt',
        'color' => '#0ea5e9',

        'fields' => [
            'name' => [
                'max_length' => 128,
            ],
            'note' => [
                'max_length' => 256,
            ],
            'url' => [
                'max_length' => 1024,
            ],
            'location' => [
                'max_length' => 128,
            ],
            'start_datetime' => [],
            'end_datetime' => [],
            'timezone' => [],
        ]
    ],
];
