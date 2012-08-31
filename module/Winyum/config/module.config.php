<?php
// module/Winyum/conﬁg/module.config.php:
return array(
    'controllers' => array(
        'invokables' => array(
            'Winyum\Controller\Winyum' => 'Winyum\Controller\WinyumController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'winyum' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/winyum[/:action][/:name]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'name' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller' => 'Winyum\Controller\Winyum',
                        'action'     => 'index',
                    ),
                    'deploy' => array(
                        'controller' => 'Winyum\Controller\Winyum',
                        'action'     => 'deploy',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'winyum' => __DIR__ . '/../view',
        ),
    ),
    'assetic_configuration' => array(

        'modules' => array(
            'winyum' => array(

                # module root path for yout css and js files
                'root_path' => __DIR__ . '/../assets',

                # collection od assets
                'collections' => array(

                    'base_images' => array(
                        'assets' => array(
                            'images/*.png',
                            'images/*.ico',
                        ),
                        'options' => array(
                            'move_raw' => true,
                        )
                    ),
                ),
            ),
        ),
    ),
);
