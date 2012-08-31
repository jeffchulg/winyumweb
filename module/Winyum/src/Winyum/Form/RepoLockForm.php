<?php

namespace Winyum\Form ;

use Zend\Form\Form;

class RepoLockForm extends Form {

    public function __construct($name=null) {
        // ignorer le nom passer en argument
        parent::__construct('repolock');
        $this->setAttribute('method','post');
        $this->add(array(
            'name' => 'NOM',
            'attributes' => array(

            )
        ));
        $this->add(array(
            'name' => 'LOCKTYPE',

        ));
    }

}

?>
