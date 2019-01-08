<?php

App::uses('AppController', 'Controller');

/**
 * Jobs Controller
 *
 * @property Job $Job
 * @property PaginatorComponent $Paginator
 */
class JobsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        if ($this->Auth->user('role') == 1) {
            $conditions = array('user_id' => $this->Auth->user('id'));
        } else {
            $conditions = array();
        }

        $limit = 10;
        $this->paginate = array(
            'limit' => $limit,
            'order' => 'Job.id DESC',
            'conditions' => $conditions
        );
        //$this->Job->recursive = 0;
        $this->set('jobs', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Job->exists($id)) {
            throw new NotFoundException(__('Invalid job'));
        }
        $options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
        $this->set('job', $this->Job->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->Auth->user('status') > 0) {
            if ($this->request->is('post')) {
                $redirect_controller = [];
                $redirect_model = [];

                $this->request->data['Job']['user_id'] = $this->Auth->user('id');
                //pr($this->request->data);
                $this->Job->create();
                if ($this->Job->saveAll($this->request->data)) {
                    $this->Session->setFlash(__('The job has been saved.'), 'flash_success');
                    $job_id = $this->Job->getLastInsertID();
                    return $this->redirect(array('action' => 'view', $job_id));
                } else {
                    $this->Session->setFlash(__('The job could not be saved. Please, try again.'), 'flash_warning');
                }
            }
        } else {
            $this->Session->setFlash(__('User not approved yet. Please, try again.'), 'flash_warning');
        }
//        $users = $this->Job->User->find('list');
        $this->Job->User->recursive = 0;
        $user = $this->Job->User->find('first', array('conditions' => array('id' => $this->Auth->user('id'))));
        $this->set(compact('user'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Job->exists($id)) {
            throw new NotFoundException(__('Invalid job'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $redirect_controller = [];
            $redirect_model = [];
            if ($this->request->data['Job']['has_subject_material_test']) {
                $this->request->data['SubjectMaterialTest'][0] = ['user_id' => $this->Auth->user('id')];
                $redirect_controller[] = "subject_material_tests";
                $redirect_model[] = 'SubjectMaterialTest';
            }

            if ($this->request->data['Job']['has_subject_production_test']) {
                $this->request->data['SubjectProductionTest'][0] = ['user_id' => $this->Auth->user('id')];
                $redirect_controller[] = "subject_production_tests";
                $redirect_model[] = 'SubjectProductionTest';
            }

            if ($this->request->data['Job']['has_subject_wps']) {
                $this->request->data['SubjectWp'][0] = ['user_id' => $this->Auth->user('id')];
                $redirect_controller[] = "subject_wps";
                $redirect_model[] = 'SubjectWp';
            }

            if ($this->request->data['Job']['has_subject_wqt']) {
                $this->request->data['SubjectWqt'][0] = ['user_id' => $this->Auth->user('id')];
                $redirect_controller[] = "subject_wqts";
                $redirect_model[] = 'SubjectWqt';
            }

            if ($this->Job->saveAll($this->request->data)) {
                $this->Session->setFlash(__('The job has been saved.'), 'flash_success');

                $curSubjDetails = $this->Job->{$redirect_model[0]}->findByJobId($this->request->data['Job']['id']);
//                pr($curSubjDetails);
                $curSubjId = $curSubjDetails[$redirect_model[0]]['id'];

                return $this->redirect(array('controller' => $redirect_controller[0], 'action' => 'edit', $curSubjId));
            } else {
                $this->Session->setFlash(__('The job could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
            $this->request->data = $this->Job->find('first', $options);
        }
        $users = $this->Job->User->find('list');
        $this->set(compact('users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Job->id = $id;
        if (!$this->Job->exists()) {
            throw new NotFoundException(__('Invalid job'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Job->delete()) {
            $this->Session->setFlash(__('The job has been deleted.'));
        } else {
            $this->Session->setFlash(__('The job could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
