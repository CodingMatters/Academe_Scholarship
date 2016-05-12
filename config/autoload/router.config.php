<?php

/**
 * ZF2 Routing Scheme Configuration
 * 
 * @todo Enable Zend Expressive Route Configuration With Middleware
 * 
 * <code>
 *   'routes' => [
 *       [
 *           'name' => 'prospectus',
 *           'path' => '/prospectus',
 *           'middleware' => Academe\Prospectus\Action\DashboardPageAction::class,
 *           'allowed_methods' => ['GET'],
 *       ]
 *   ]
 * </code>
 */
return [
    'router' => [
        'routes' => [
            'scholarship' => [
                'type'      => 'Literal',
                'options'   => [
                    'route'     => '/scholarship',
                    'defaults'  => [
                        'controller'    => 'Application\Controller\Index',
                        'action'        => 'index'
                    ]
                ],
                //                'may_terminate' => true,
                //                'child_routes' => []
            ]
        ]
    ]
];