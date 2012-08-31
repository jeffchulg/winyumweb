<?php
namespace Winyum\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class WinyumController extends AbstractActionController {
    protected $repoTable;

    public function indexAction() {
        $request = $this->getRequest();
        if($request->isPost()) {
            throw new \Exception($this->translate("Post request for Index...."));
        }

        $repoPROD = $this->getRepoTable()->fetchAllActivePRODMasters();
        $cntPROD = $repoPROD->count();

        $repoTEST = $this->getRepoTable()->fetchAllActiveTESTMasters();
        $cntTEST = $repoTEST->count();

        $repoEVAL = $this->getRepoTable()->fetchAllActiveEVALMasters();
        $cntEVAL = $repoEVAL->count();

        $repoALL = $this->getRepoTable()->fetchAllActiveMasters();
        $cntALL = $repoALL->count();

        $repoTblSet = null;
        $show = $this->params()->fromQuery('show','all');
        switch($show) {
            case 'prod' :
                $repoTblSet = $repoPROD;
                break;
            case 'test' :
                $repoTblSet = $repoTEST;
                break;
            case 'eval' :
                $repoTblSet = $repoEVAL;
                break;
            case 'all' :
            default :
                $repoTblSet = $repoALL;
        }

        return new ViewModel(array(
            'repos'     =>  $repoTblSet,
            'cntPROD'   =>  $cntPROD,
            'cntTEST'   =>  $cntTEST,
            'cntEVAL'   =>  $cntEVAL,
            'cntALL'    =>  $cntALL,
            'show'      =>  $show
        ));
    }

    public function deployAction() {
        $request = $this->getRequest();
        if($request->isPost()) {
            // TODO
        }

        $repo = $this->params()->fromRoute('name','');
        if(!$repo) {
            throw new \Exception($this->translate("No repository on which deploy"));
        }

        return new ViewModel();
    }

    public function lockAction() {
        $request = $this->getRequest();
        if($request->isPost()) {
            // TODO
        }

        $repo = $this->params()->fromRoute('name','');
        if(!$repo) {
            throw new \Exception($this->translate("No repository on which deploy"));
        }

        $lockType = (int)$this->params()->fromQuery('lock',0);

        // create form

        // populate form


        return new ViewModel();
    }

    public function lockHistAction() {
        return new ViewModel();
    }

    public function DeployHistAction() {
        return new ViewModel();
    }

    public function getRepoTable() {
        if (!$this->repoTable) {
            $sm = $this->getServiceLocator();
            $this->repoTable = $sm->get('Winyum\Model\RepositoryTable');
        }
        return $this->repoTable;
    }
}
