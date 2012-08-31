<?php
return array(
    'modules' => array(
        'Application',
        'ZendDeveloperTools',
        'DoctrineModule',
        'Winyum',
        'AsseticBundle',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'config_cache_enabled' => false,
        'cache_dir'            => 'data/cache',
        'module_paths' => array(
            './module',
            './vendor',
        ),
        /*
        'lazy_loading' => array(
         Exemple 1 : chargement module Admin seulement si port 443
            'Administration' => array(
                'port' => '443',
                'remote_addr' => array('127.0.0.1'),
            ),
         * Exemple 2 :



        ),*/
    ),/*
    'service_manager' => array(
        'use_defaults' => true,
        'factories'    => array(
            'ModuleManager' => 'ZFMLL\Mvc\Service\ModuleManagerFactory',
        ),
        'services' => array(
            'RouteListener' => 'ZFMLL\Mvc\RouteListener',
        ),
    ),*/
);
