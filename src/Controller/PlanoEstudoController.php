<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PlanoEstudo Controller
 *
 * @property \App\Model\Table\PlanoEstudoTable $PlanoEstudo
 *
 * @method \App\Model\Entity\PlanoEstudo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlanoEstudoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Segmentos', 'Usuarios']
        ];
        $planoEstudo = $this->paginate($this->PlanoEstudo);

        $this->set(compact('planoEstudo'));
    }

    /**
     * View method
     *
     * @param string|null $id Plano Estudo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $planoEstudo = $this->PlanoEstudo->get($id, [
            'contain' => ['Segmentos', 'Usuarios', 'Cronogramas']
        ]);

        $this->set('planoEstudo', $planoEstudo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $planoEstudo = $this->PlanoEstudo->newEntity();
        if ($this->request->is('post')) {
            $planoEstudo = $this->PlanoEstudo->patchEntity($planoEstudo, $this->request->getData());
            if ($this->PlanoEstudo->save($planoEstudo)) {
                $this->Flash->success(__('The plano estudo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The plano estudo could not be saved. Please, try again.'));
        }
        $segmentos = $this->PlanoEstudo->Segmentos->find('list', ['limit' => 200]);
        $usuarios = $this->PlanoEstudo->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('planoEstudo', 'segmentos', 'usuarios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Plano Estudo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $planoEstudo = $this->PlanoEstudo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $planoEstudo = $this->PlanoEstudo->patchEntity($planoEstudo, $this->request->getData());
            if ($this->PlanoEstudo->save($planoEstudo)) {
                $this->Flash->success(__('The plano estudo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The plano estudo could not be saved. Please, try again.'));
        }
        $segmentos = $this->PlanoEstudo->Segmentos->find('list', ['limit' => 200]);
        $usuarios = $this->PlanoEstudo->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('planoEstudo', 'segmentos', 'usuarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Plano Estudo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $planoEstudo = $this->PlanoEstudo->get($id);
        if ($this->PlanoEstudo->delete($planoEstudo)) {
            $this->Flash->success(__('The plano estudo has been deleted.'));
        } else {
            $this->Flash->error(__('The plano estudo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
