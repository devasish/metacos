<?php

App::uses('AppController', 'Controller');

/**
 * SubjectProductionTests Controller
 *
 * @property SubjectProductionTest $SubjectProductionTest
 * @property PaginatorComponent $Paginator
 */
class SubjectProductionTestsController extends AppController {

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
        $this->SubjectProductionTest->recursive = 0;
        $this->set('subjectProductionTests', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->SubjectProductionTest->exists($id)) {
            throw new NotFoundException(__('Invalid subject production test'));
        }
        $options = array('conditions' => array('SubjectProductionTest.' . $this->SubjectProductionTest->primaryKey => $id));
        $this->set('subjectProductionTest', $this->SubjectProductionTest->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->SubjectProductionTest->create();
            if ($this->SubjectProductionTest->save($this->request->data)) {
                $this->Session->setFlash(__('The subject production test has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The subject production test could not be saved. Please, try again.'), 'flash_warning');
            }
        }
        $jobs = $this->SubjectProductionTest->Job->find('list');
        $users = $this->SubjectProductionTest->User->find('list');
        $this->set(compact('jobs', 'users'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->SubjectProductionTest->exists($id)) {
            throw new NotFoundException(__('Invalid subject production test'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->SubjectProductionTest->save($this->request->data)) {
                $this->Session->setFlash(__('The subject production test has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $this->request->data['SubjectProductionTest']['id']));
            } else {
                $this->Session->setFlash(__('The subject production test could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $options = array('conditions' => array('SubjectProductionTest.' . $this->SubjectProductionTest->primaryKey => $id));
            $this->request->data = $this->SubjectProductionTest->find('first', $options);
        }
        $jobs = $this->SubjectProductionTest->Job->find('list');
        $users = $this->SubjectProductionTest->User->find('list');
        $jobDetails = $this->SubjectProductionTest->Job->find('first', ['conditions' => ["Job.id" => $this->request->data['SubjectProductionTest']['job_id']]]);
        $this->set(compact('jobs', 'users', 'jobDetails'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->SubjectProductionTest->id = $id;
        if (!$this->SubjectProductionTest->exists()) {
            throw new NotFoundException(__('Invalid subject production test'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->SubjectProductionTest->delete()) {
            $this->Session->setFlash(__('The subject production test has been deleted.'));
        } else {
            $this->Session->setFlash(__('The subject production test could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
