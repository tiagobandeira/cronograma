<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cronogramas Controller
 *
 * @property \App\Model\Table\CronogramasTable $Cronogramas
 *
 * @method \App\Model\Entity\Cronograma[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CronogramasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PlanoEstudo']
        ];
        $cronogramas = $this->paginate($this->Cronogramas);

        $this->set(compact('cronogramas'));
    }

    /**
     * View method
     *
     * @param string|null $id Cronograma id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cronograma = $this->Cronogramas->get($id, [
            'contain' => ['PlanoEstudo', 'Periodos']
        ]);

        $this->set('cronograma', $cronograma);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cronograma = $this->Cronogramas->newEntity();
        if ($this->request->is('post')) {
            $cronograma = $this->Cronogramas->patchEntity($cronograma, $this->request->getData());
            if ($this->Cronogramas->save($cronograma)) {
                $this->Flash->success(__('The cronograma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cronograma could not be saved. Please, try again.'));
        }
        $planoEstudo = $this->Cronogramas->PlanoEstudo->find('list', ['limit' => 200]);
        $this->set(compact('cronograma', 'planoEstudo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cronograma id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cronograma = $this->Cronogramas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cronograma = $this->Cronogramas->patchEntity($cronograma, $this->request->getData());
            if ($this->Cronogramas->save($cronograma)) {
                $this->Flash->success(__('The cronograma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cronograma could not be saved. Please, try again.'));
        }
        $planoEstudo = $this->Cronogramas->PlanoEstudo->find('list', ['limit' => 200]);
        $this->set(compact('cronograma', 'planoEstudo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cronograma id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cronograma = $this->Cronogramas->get($id);
        if ($this->Cronogramas->delete($cronograma)) {
            $this->Flash->success(__('The cronograma has been deleted.'));
        } else {
            $this->Flash->error(__('The cronograma could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
