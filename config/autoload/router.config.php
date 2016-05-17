<?php

return [
    'routes' => [
        [
            'name' => 'scholarship',
            'path' => '/scholarship',
            'middleware' => Academe\Scholarship\Page\IndexPage::class,
            'allowed_methods' => ['GET'],
        ]
    ]
];