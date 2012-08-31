<?php

namespace Winyum\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\AbstractTableGateway;

class RepositoryTable extends AbstractTableGateway {
    protected $table = 'DEPOTS';
    protected $tableName = 'WINYUM.DEPOTS';

    public function __construct(Adapter $adapter) {
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Repository());
        $this->initialize();

        return $this;
    }

    public function fetchAll()
    {
        $resultSet = $this->select();
        return $resultSet;
    }

    /**
     * @throws Exception quand pas de ligne trouvée
     */
    public function getRepository($name) {
        $rowset = $this->select(array('NOM' => $name));
        $row = $rowset->current();
        if(!$row) {
            throw new \Exception($this->translate("Impossible de retrouver le dépôt $name"));
        }
        return $row;
    }

    public function fetchAllActives() {
        $resultSet = $this->select('ACTIF = 1');
        return $resultSet;
    }

    public function fetchAllActiveMasters() {
        $resultSet = $this->select('ACTIF = 1 and NOM = MASTER');
        return $resultSet;
    }

    public function fetchAllActivePRODMasters() {
        $where = 'ACTIF = 1 and NOM = MASTER and ENV_PTED = \'P\'';
        $resultSet = $this->select($where);
        return $resultSet;
    }

    public function fetchAllActiveTESTMasters() {
        $where = 'ACTIF = 1 and NOM = MASTER and ENV_PTED = \'T\'';
        $resultSet = $this->select($where);
        return $resultSet;
    }

    public function fetchAllActiveEVALMasters() {
        $where = 'ACTIF = 1 and NOM = MASTER and ENV_PTED = \'E\'';
        $resultSet = $this->select($where);
        return $resultSet;
    }

    public function countAllActivePRODMasters() {
        return $this->fetchAllActiveEVALMasters()->count();
    }
}
?>
