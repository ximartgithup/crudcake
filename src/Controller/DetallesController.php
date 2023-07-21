<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Detalles Controller
 *
 * @property \App\Model\Table\DetallesTable $Detalles
 * @method \App\Model\Entity\Detalle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DetallesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Facturas', 'Productos'],
        ];
        $detalles = $this->paginate($this->Detalles);

        $this->set(compact('detalles'));
    }

    /**
     * View method
     *
     * @param string|null $id Detalle id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detalle = $this->Detalles->get($id, [
            'contain' => ['Facturas', 'Productos'],
        ]);

        $this->set(compact('detalle'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $detalle = $this->Detalles->newEmptyEntity();
        if ($this->request->is('post')) {
            $detalle = $this->Detalles->patchEntity($detalle, $this->request->getData());
            if ($this->Detalles->save($detalle)) {
                $this->Flash->success(__('The detalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detalle could not be saved. Please, try again.'));
        }
        $facturas = $this->Detalles->Facturas->find('list', ['limit' => 200])->all();
        $productos = $this->Detalles->Productos->find('list', ['limit' => 200])->all();
        $this->set(compact('detalle', 'facturas', 'productos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Detalle id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detalle = $this->Detalles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detalle = $this->Detalles->patchEntity($detalle, $this->request->getData());
            if ($this->Detalles->save($detalle)) {
                $this->Flash->success(__('The detalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The detalle could not be saved. Please, try again.'));
        }
        $facturas = $this->Detalles->Facturas->find('list', ['limit' => 200])->all();
        $productos = $this->Detalles->Productos->find('list', ['limit' => 200])->all();
        $this->set(compact('detalle', 'facturas', 'productos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Detalle id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detalle = $this->Detalles->get($id);
        if ($this->Detalles->delete($detalle)) {
            $this->Flash->success(__('The detalle has been deleted.'));
        } else {
            $this->Flash->error(__('The detalle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
