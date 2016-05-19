<?php

use Academe\Scholarship;
use CodingMatters\Kernel;

return [
    "dependencies" =>  [
        'aliases'       => [],        
        'invokables'    => [],
        'factories'     => [
            Scholarship\Page\IndexPage::class => Kernel\Factory\PageFactory::class
        ],
    ],
    'routes' => [
        [
            'name' => 'scholarship',
            'path' => '/scholarship',
            'middleware' => Scholarship\Page\IndexPage::class,
            'allowed_methods' => ['GET'],
        ]
    ]
];