<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Datas Controller
 *
 * @property \App\Model\Table\DatasTable $Datas
 */
class DatasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('datas', $this->paginate($this->Datas));
        $this->set('_serialize', ['datas']);
    }

    /**
     * View method
     *
     * @param string|null $id Data id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $data = $this->Datas->get($id, [
            'contain' => []
        ]);
        $this->set('data', $data);
        $this->set('_serialize', ['data']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $data = $this->Datas->newEntity();
        if ($this->request->is('post')) {
            $data = $this->Datas->patchEntity($data, $this->request->data);
            if ($this->Datas->save($data)) {
                $this->Flash->success(__('The data has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The data could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('data'));
        $this->set('_serialize', ['data']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Data id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $data = $this->Datas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->Datas->patchEntity($data, $this->request->data);
            if ($this->Datas->save($data)) {
                $this->Flash->success(__('The data has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The data could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('data'));
        $this->set('_serialize', ['data']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Data id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $data = $this->Datas->get($id);
        if ($this->Datas->delete($data)) {
            $this->Flash->success(__('The data has been deleted.'));
        } else {
            $this->Flash->error(__('The data could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
