1<?php

App::uses('AppController', 'Controller');
/**
 * SubjectMaterialTests Controller
 *
 * @property SubjectMaterialTest $SubjectMaterialTest
 * @property PaginatorComponent $Paginator
 */
class SubjectMaterialTestsController extends AppController {

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
        $this->SubjectMaterialTest->recursive = 0;
        $this->set('subjectMaterialTests', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->SubjectMaterialTest->exists($id)) {
            throw new NotFoundException(__('Invalid subject material test'));
        }
        $options = array('conditions' => array('SubjectMaterialTest.' . $this->SubjectMaterialTest->primaryKey => $id));
        $this->set('subjectMaterialTest', $this->SubjectMaterialTest->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->SubjectMaterialTest->create();
            if ($this->SubjectMaterialTest->save($this->request->data)) {
                $this->Session->setFlash(__('The subject material test has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The subject material test could not be saved. Please, try again.'));
            }
        }
        $jobs = $this->SubjectMaterialTest->Job->find('list');
        $users = $this->SubjectMaterialTest->User->find('list');
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
        if (!$this->SubjectMaterialTest->exists($id)) {
            throw new NotFoundException(__('Invalid subject material test'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $tmp = "";
            foreach ($this->request->data['element_required_add'] as $key => $value) {
                if ($key > 0) $tmp .= ',';
                $tmp .= $value;
            }
            
            $this->request->data['SubjectMaterialTest']['element_required_add'] = $tmp;
            
            if ($this->SubjectMaterialTest->save($this->request->data)) {
                $this->Session->setFlash(__('The subject material test has been saved.'));
                return $this->redirect(array('action' => 'edit', $this->request->data['SubjectMaterialTest']['id']));
            } else {
                $this->Session->setFlash(__('The subject material test could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('SubjectMaterialTest.' . $this->SubjectMaterialTest->primaryKey => $id));
            $this->request->data = $this->SubjectMaterialTest->find('first', $options);
        }
        
        $jobs = $this->SubjectMaterialTest->Job->find('list');
        $users = $this->SubjectMaterialTest->User->find('list');
        $jobDetails = $this->SubjectMaterialTest->Job->find('first', ['conditions' => ["Job.id" => $this->request->data['SubjectMaterialTest']['job_id']]]);
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
        $this->SubjectMaterialTest->id = $id;
        if (!$this->SubjectMaterialTest->exists()) {
            throw new NotFoundException(__('Invalid subject material test'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->SubjectMaterialTest->delete()) {
            $this->Session->setFlash(__('The subject material test has been deleted.'));
        } else {
            $this->Session->setFlash(__('The subject material test could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
