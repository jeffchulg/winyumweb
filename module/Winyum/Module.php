<?php
// module/WinYUM/Module.php
namespace Winyum;

use Winyum\Model\RepositoryTable;

class Module
{
    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }


    public function getServiceConfig() {
        return array(
            'factories' => array(
                'Winyum\Model\RepositoryTable' =>  function($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $table     = new RepositoryTable($dbAdapter);
                    return $table;
                },
            ),
        );
    }
}
?>
