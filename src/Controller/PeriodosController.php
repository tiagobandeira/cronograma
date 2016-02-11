<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Periodos Controller
 *
 * @property \App\Model\Table\PeriodosTable $Periodos
 *
 * @method \App\Model\Entity\Periodo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PeriodosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cronogramas']
        ];
        $periodos = $this->paginate($this->Periodos);

        $this->set(compact('periodos'));
    }

    /**
     * View method
     *
     * @param string|null $id Periodo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $periodo = $this->Periodos->get($id, [
            'contain' => ['Cronogramas', 'HoraEstudo']
        ]);

        $this->set('periodo', $periodo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $periodo = $this->Periodos->newEntity();
        if ($this->request->is('post')) {
            $periodo = $this->Periodos->patchEntity($periodo, $this->request->getData());
            if ($this->Periodos->save($periodo)) {
                $this->Flash->success(__('The periodo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The periodo could not be saved. Please, try again.'));
        }
        $cronogramas = $this->Periodos->Cronogramas->find('list', ['limit' => 200]);
        $this->set(compact('periodo', 'cronogramas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Periodo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $periodo = $this->Periodos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $periodo = $this->Periodos->patchEntity($periodo, $this->request->getData());
            if ($this->Periodos->save($periodo)) {
                $this->Flash->success(__('The periodo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The periodo could not be saved. Please, try again.'));
        }
        $cronogramas = $this->Periodos->Cronogramas->find('list', ['limit' => 200]);
        $this->set(compact('periodo', 'cronogramas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Periodo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $periodo = $this->Periodos->get($id);
        if ($this->Periodos->delete($periodo)) {
            $this->Flash->success(__('The periodo has been deleted.'));
        } else {
            $this->Flash->error(__('The periodo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
