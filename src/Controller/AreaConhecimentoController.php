<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AreaConhecimento Controller
 *
 * @property \App\Model\Table\AreaConhecimentoTable $AreaConhecimento
 *
 * @method \App\Model\Entity\AreaConhecimento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AreaConhecimentoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $areaConhecimento = $this->paginate($this->AreaConhecimento);

        $this->set(compact('areaConhecimento'));
    }

    /**
     * View method
     *
     * @param string|null $id Area Conhecimento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $areaConhecimento = $this->AreaConhecimento->get($id, [
            'contain' => ['Materias']
        ]);

        $this->set('areaConhecimento', $areaConhecimento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $areaConhecimento = $this->AreaConhecimento->newEntity();
        if ($this->request->is('post')) {
            $areaConhecimento = $this->AreaConhecimento->patchEntity($areaConhecimento, $this->request->getData());
            if ($this->AreaConhecimento->save($areaConhecimento)) {
                $this->Flash->success(__('The area conhecimento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The area conhecimento could not be saved. Please, try again.'));
        }
        $this->set(compact('areaConhecimento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Area Conhecimento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $areaConhecimento = $this->AreaConhecimento->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $areaConhecimento = $this->AreaConhecimento->patchEntity($areaConhecimento, $this->request->getData());
            if ($this->AreaConhecimento->save($areaConhecimento)) {
                $this->Flash->success(__('The area conhecimento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The area conhecimento could not be saved. Please, try again.'));
        }
        $this->set(compact('areaConhecimento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Area Conhecimento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $areaConhecimento = $this->AreaConhecimento->get($id);
        if ($this->AreaConhecimento->delete($areaConhecimento)) {
            $this->Flash->success(__('The area conhecimento has been deleted.'));
        } else {
            $this->Flash->error(__('The area conhecimento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
