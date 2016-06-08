<?php

/**
 * The Service Manager component can be configured by passing an associative array to the component's constructor.
 *
 * @see https://zendframework.github.io/zend-servicemanager/configuring-the-service-manager/
 */

use Zend\ServiceManager\Factory\InvokableFactory;
use Site\Controller;
use Site\Factory;

return [
    'factories'          => [
        "Site\Options\ModuleOptions"     => Factory\ModuleOptionsFactory::class,

    ],
    'services'           => [],
    'abstract_factories' => [],
    'delegators'         => [],
    'shared'             => [],
    'shared_by_default'  => true
];
