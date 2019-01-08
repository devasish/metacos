<?php

App::uses('AppController', 'Controller');

/**
 * SubjectWps Controller
 *
 * @property SubjectWp $SubjectWp
 * @property PaginatorComponent $Paginator
 */
class SubjectWpsController extends AppController {

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
        $this->SubjectWp->recursive = 0;
        $this->set('subjectWps', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->SubjectWp->exists($id)) {
            throw new NotFoundException(__('Invalid subject wp'));
        }
        $options = array('conditions' => array('SubjectWp.' . $this->SubjectWp->primaryKey => $id));
        $this->set('subjectWp', $this->SubjectWp->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->SubjectWp->create();
            if ($this->SubjectWp->save($this->request->data)) {
                $this->Session->setFlash(__('The subject wp has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The subject wp could not be saved. Please, try again.'));
            }
        }
        $jobs = $this->SubjectWp->Job->find('list');
        $users = $this->SubjectWp->User->find('list');
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
        if (!$this->SubjectWp->exists($id)) {
            throw new NotFoundException(__('Invalid subject wp'));
        }
        if ($this->request->is(array('post', 'put'))) {
            
            $tmp = "";
            foreach ($this->request->data['element_required_add'] as $key => $value) {
                if ($key > 0) $tmp .= ',';
                $tmp .= $value;
            }
            
            $this->request->data['SubjectWp']['element_required_add'] = $tmp;
            
            if ($this->SubjectWp->save($this->request->data)) {
                $this->Session->setFlash(__('The subject wp has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $this->request->data['SubjectWp']['id']));
            } else {
                $this->Session->setFlash(__('The subject wp could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $options = array('conditions' => array('SubjectWp.' . $this->SubjectWp->primaryKey => $id));
            $this->request->data = $this->SubjectWp->find('first', $options);
        }
        $jobs = $this->SubjectWp->Job->find('list');
        $users = $this->SubjectWp->User->find('list');
        $jobDetails = $this->SubjectWp->Job->find('first', ['conditions' => ["Job.id" => $this->request->data['SubjectWp']['job_id']]]);
        $checkboxElementsRequired = [
            "C",
            "Si",
            "Mn",
            "P",
            "S",
            "Cr",
            "Mo",
            "Ni",
            "Cu",
            "Al",
            "N",
            "Nb/Cb",
            "Ti",
            "V",
            "As",
            "B",
            "Bi",
            "Ca",
            "Co",
            "Pb",
            "Sb",
            "Sn",
            "Ta",
            "La",
            "W",
            "Zr",
            "Fe"
        ];
        $this->set(compact('jobs', 'users', 'jobDetails', 'checkboxElementsRequired'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->SubjectWp->id = $id;
        if (!$this->SubjectWp->exists()) {
            throw new NotFoundException(__('Invalid subject wp'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->SubjectWp->delete()) {
            $this->Session->setFlash(__('The subject wp has been deleted.'));
        } else {
            $this->Session->setFlash(__('The subject wp could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
