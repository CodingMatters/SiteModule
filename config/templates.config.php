<?php

return [
    // Zend Framework Configuration
    'view_manager' => [
        'display_not_found_reason'  => true,
        'display_exceptions'        => true,
        'doctype'                   => 'HTML5',
        'not_found_template'        => 'error/404',
        'exception_template'        => 'error/index',
        'layout'                    => 'site/layout',
        'template_map' => [
            'layout/layout'             => __DIR__ . '/../templates/layout/site.phtml',
            'site/layout'               => __DIR__ . '/../templates/layout/site.phtml',
            'template/footer'           => __DIR__ . '/../templates/layout/partial/footer.phtml',
            'template/navigation'       => __DIR__ . '/../templates/layout/partial/navigation.phtml',
            'template/breadcrumbs'      => __DIR__ . '/../templates/layout/partial/breadcrumbs.phtml',            
            'error/404'                 => __DIR__ . '/../templates/error/404.phtml',
            'error/index'               => __DIR__ . '/../templates/error/index.phtml',
        ],
        'template_path_stack' => [
            'site' => __DIR__ . '/../templates',
        ],
    ],

    // Zend Expressive Configuration
    'templates'     => [
        'display_not_found_reason'  => true,
        'display_exceptions'        => true,
        'doctype'                   => 'HTML5',
        'not_found_template'        => 'error/404',
        'exception_template'        => 'error/index',
        'layout'                    => "default/layout",
        'map'       => [
            'default/layout'            => __DIR__ . '/../templates/layout/default.phtml',
            'site/layout'               => __DIR__ . '/../templates/layout/site.phtml',
            'template/footer'           => __DIR__ . '/../templates/layout/partial/footer.phtml',
            'template/navigation'       => __DIR__ . '/../templates/layout/partial/navigation.phtml',
            'template/breadcrumbs'      => __DIR__ . '/../templates/layout/partial/breadcrumbs.phtml',            
            'error/404'                 => __DIR__ . '/../templates/error/404.phtml',
            'error/index'               => __DIR__ . '/../templates/error/index.phtml',
        ],
        'paths'     => [
            'site'  => [__DIR__ . '/../templates']
        ]
    ],

    /**
     * Zend View Helpers
     */
    'view_helpers'  => [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => []
    ]
];
