<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HoraEstudo Controller
 *
 * @property \App\Model\Table\HoraEstudoTable $HoraEstudo
 *
 * @method \App\Model\Entity\HoraEstudo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HoraEstudoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Materias', 'Periodos', 'Temas']
        ];
        $horaEstudo = $this->paginate($this->HoraEstudo);

        $this->set(compact('horaEstudo'));
    }

    /**
     * View method
     *
     * @param string|null $id Hora Estudo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $horaEstudo = $this->HoraEstudo->get($id, [
            'contain' => ['Materias', 'Periodos', 'Temas']
        ]);

        $this->set('horaEstudo', $horaEstudo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $horaEstudo = $this->HoraEstudo->newEntity();
        if ($this->request->is('post')) {
            $horaEstudo = $this->HoraEstudo->patchEntity($horaEstudo, $this->request->getData());
            if ($this->HoraEstudo->save($horaEstudo)) {
                $this->Flash->success(__('The hora estudo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hora estudo could not be saved. Please, try again.'));
        }
        $materias = $this->HoraEstudo->Materias->find('list', ['limit' => 200]);
        $periodos = $this->HoraEstudo->Periodos->find('list', ['limit' => 200]);
        $temas = $this->HoraEstudo->Temas->find('list', ['limit' => 200]);
        $this->set(compact('horaEstudo', 'materias', 'periodos', 'temas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hora Estudo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $horaEstudo = $this->HoraEstudo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $horaEstudo = $this->HoraEstudo->patchEntity($horaEstudo, $this->request->getData());
            if ($this->HoraEstudo->save($horaEstudo)) {
                $this->Flash->success(__('The hora estudo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hora estudo could not be saved. Please, try again.'));
        }
        $materias = $this->HoraEstudo->Materias->find('list', ['limit' => 200]);
        $periodos = $this->HoraEstudo->Periodos->find('list', ['limit' => 200]);
        $temas = $this->HoraEstudo->Temas->find('list', ['limit' => 200]);
        $this->set(compact('horaEstudo', 'materias', 'periodos', 'temas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hora Estudo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $horaEstudo = $this->HoraEstudo->get($id);
        if ($this->HoraEstudo->delete($horaEstudo)) {
            $this->Flash->success(__('The hora estudo has been deleted.'));
        } else {
            $this->Flash->error(__('The hora estudo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
