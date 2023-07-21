<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Vendedor Controller
 *
 * @property \App\Model\Table\VendedorTable $Vendedor
 * @method \App\Model\Entity\Vendedor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VendedorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $vendedor = $this->paginate($this->Vendedor);

        $this->set(compact('vendedor'));
    }

    /**
     * View method
     *
     * @param string|null $id Vendedor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vendedor = $this->Vendedor->get($id, [
            'contain' => ['Facturas'],
        ]);

        $this->set(compact('vendedor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vendedor = $this->Vendedor->newEmptyEntity();
        if ($this->request->is('post')) {
            $vendedor = $this->Vendedor->patchEntity($vendedor, $this->request->getData());
            if ($this->Vendedor->save($vendedor)) {
                $this->Flash->success(__('The vendedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vendedor could not be saved. Please, try again.'));
        }
        $this->set(compact('vendedor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vendedor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vendedor = $this->Vendedor->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vendedor = $this->Vendedor->patchEntity($vendedor, $this->request->getData());
            if ($this->Vendedor->save($vendedor)) {
                $this->Flash->success(__('The vendedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vendedor could not be saved. Please, try again.'));
        }
        $this->set(compact('vendedor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vendedor id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vendedor = $this->Vendedor->get($id);
        if ($this->Vendedor->delete($vendedor)) {
            $this->Flash->success(__('The vendedor has been deleted.'));
        } else {
            $this->Flash->error(__('The vendedor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
