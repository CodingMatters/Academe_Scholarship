<?php

use Academe\Scholarship;

return [
    "dependencies" =>  [
        'aliases'       => [],        
        'invokables'    => [],
        'factories'     => [
            Scholarship\Page\IndexPage::class => Scholarship\Factory\PageFactory::class
        ],
    ]    
];