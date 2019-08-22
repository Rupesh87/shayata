<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 *  Teams Controller
 *
 *
 * @method \App\Model\Entity\Project[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TeamsController  extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
       
    }

    public function view($name = null)
    {
        $this->set('name', $name);
    }

    
}
