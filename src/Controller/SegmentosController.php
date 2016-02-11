<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Segmentos Controller
 *
 * @property \App\Model\Table\SegmentosTable $Segmentos
 *
 * @method \App\Model\Entity\Segmento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SegmentosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $segmentos = $this->paginate($this->Segmentos);

        $this->set(compact('segmentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Segmento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $segmento = $this->Segmentos->get($id, [
            'contain' => ['Conteudos', 'PlanoEstudo']
        ]);

        $this->set('segmento', $segmento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $segmento = $this->Segmentos->newEntity();
        if ($this->request->is('post')) {
            $segmento = $this->Segmentos->patchEntity($segmento, $this->request->getData());
            if ($this->Segmentos->save($segmento)) {
                $this->Flash->success(__('The segmento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The segmento could not be saved. Please, try again.'));
        }
        $this->set(compact('segmento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Segmento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $segmento = $this->Segmentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $segmento = $this->Segmentos->patchEntity($segmento, $this->request->getData());
            if ($this->Segmentos->save($segmento)) {
                $this->Flash->success(__('The segmento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The segmento could not be saved. Please, try again.'));
        }
        $this->set(compact('segmento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Segmento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $segmento = $this->Segmentos->get($id);
        if ($this->Segmentos->delete($segmento)) {
            $this->Flash->success(__('The segmento has been deleted.'));
        } else {
            $this->Flash->error(__('The segmento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
