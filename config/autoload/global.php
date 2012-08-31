<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overridding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */



return array(
    'navigation' => array(
        // The DefaultNavigationFactory we configured in (1) uses 'default' as the sitemap key
        'default' => array(
            // And finally, here is where we define our page hierarchy
            'home' => array(
                'label' => 'Home',
                'route' => 'home',
            ),
            'winyum' => array(
                'label' => 'WinYUM',
                'controller' => 'winyum',
                'action' => 'index',
                'route' => 'default',
                /*'pages' => array(
                    'index' => array(
                        'label' => 'Liste des dépôts',
                        'controller' => '', or create a seperate route insteed
                        'action' => 'add',
                        'route' => 'default',
                    ),
                ),*/
            ),
        ),
    ),
    /* for Database configuration
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => function ($sm) {
                $adapter = new BjyProfiler\Db\Adapter\ProfilingAdapter(array(
                    'driver'         => 'PDO_oci',
                    'dbname'         => '(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST = XX)(PORT = 1521))(CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = XX)))',
                    'username'       => 'USER',
                    'password'       => 'PASSWORD',
                    'charset'        => 'utf8',
                    'driver_options' => array(),
                ));

                $adapter->setProfiler(new BjyProfiler\Db\Profiler\Profiler);
                $adapter->injectProfilingStatementPrototype();
                return $adapter;
            },
        ),
    ),

     */

);
