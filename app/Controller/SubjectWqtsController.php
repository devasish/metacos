<?php

App::uses('AppController', 'Controller');

/**
 * SubjectWqts Controller
 *
 * @property SubjectWqt $SubjectWqt
 * @property PaginatorComponent $Paginator
 */
class SubjectWqtsController extends AppController {

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
        $this->SubjectWqt->recursive = 0;
        $this->set('subjectWqts', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->SubjectWqt->exists($id)) {
            throw new NotFoundException(__('Invalid subject wqt'));
        }
        $options = array('conditions' => array('SubjectWqt.' . $this->SubjectWqt->primaryKey => $id));
        $this->set('subjectWqt', $this->SubjectWqt->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->SubjectWqt->create();
            if ($this->SubjectWqt->save($this->request->data)) {
                $this->Session->setFlash(__('The subject wqt has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The subject wqt could not be saved. Please, try again.'));
            }
        }
        $jobs = $this->SubjectWqt->Job->find('list');
        $users = $this->SubjectWqt->User->find('list');
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
        if (!$this->SubjectWqt->exists($id)) {
            throw new NotFoundException(__('Invalid subject wqt'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->SubjectWqt->save($this->request->data)) {
                $this->Session->setFlash(__('The subject wqt has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $this->request->data['SubjectWqt']['id']));
            } else {
                $this->Session->setFlash(__('The subject wqt could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $options = array('conditions' => array('SubjectWqt.' . $this->SubjectWqt->primaryKey => $id));
            $this->request->data = $this->SubjectWqt->find('first', $options);
        }
        $jobs = $this->SubjectWqt->Job->find('list');
        $users = $this->SubjectWqt->User->find('list');
        $jobDetails = $this->SubjectWqt->Job->find('first', ['conditions' => ["Job.id" => $this->request->data['SubjectWqt']['job_id']]]);
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
        $this->SubjectWqt->id = $id;
        if (!$this->SubjectWqt->exists()) {
            throw new NotFoundException(__('Invalid subject wqt'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->SubjectWqt->delete()) {
            $this->Session->setFlash(__('The subject wqt has been deleted.'));
        } else {
            $this->Session->setFlash(__('The subject wqt could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
