<?php
namespace Winyum\Model;

class Repository {
    public $NOM;
    public $UPLOAD;
    public $LOGPATH;
    public $ACTIF;
    public $DESTINATION ;
    public $NOM_LOGICIEL;
    public $VERSION_LOGICIELLE;
    public $MAIL_GENERAL;
    public $ENV_PTED;
    public $MASTER ;
    public $LOCK_LEVEL;

    public function exchangeArray($data) {
        $this->NOM     = (isset($data['NOM'])) ? $data['NOM'] : null;
        $this->UPLOAD  = (isset($data['UPLOAD'])) ? $data['UPLOAD'] : null;
        $this->LOGPATH = (isset($data['LOGPATH'])) ? $data['LOGPATH'] : null;
        $this->ACTIF   = (isset($data['ACTIF'])) ? $data['ACTIF'] : null;
        $this->DESTINATION = (isset($data['DESTINATION'])) ? $data['DESTINATION'] : null;
        $this->NOM_LOGICIEL     = (isset($data['NOM_LOGICIEL'])) ? $data['NOM_LOGICIEL'] : null;
        $this->VERSION_LOGICIELLE     = (isset($data['VERSION_LOGICIELLE'])) ? $data['VERSION_LOGICIELLE'] : null;
        $this->MAIL_GENERAL = (isset($data['MAIL_GENERAL'])) ? $data['MAIL_GENERAL'] : null;
        $this->ENV_PTED  = (isset($data['ENV_PTED'])) ? $data['ENV_PTED'] : null;
        $this->MASTER  = (isset($data['MASTER'])) ? $data['MASTER'] : null;
        $this->LOCK_LEVEL  = (isset($data['LOCK_LEVEL'])) ? $data['LOCK_LEVEL'] : null;
    }
}
