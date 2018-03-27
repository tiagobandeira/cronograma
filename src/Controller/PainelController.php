<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
/**
 * Painel Controller
 *
 *
 * @method \App\Model\Entity\Painel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PainelController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function display(){

    }
    public function index()
    {
        //Plano de Estudos
        $planoEstudoM = TableRegistry::get('PlanoEstudo');
        $planoEstudo = $planoEstudoM->find('all');
        //Hora de Estudo
        $horaEstudoM = TableRegistry::get('HoraEstudo');
        $horaEstudo = $horaEstudoM->find('all', ['contain' => ['Temas', 'Materias']])->where(['Day(HoraEstudo.data) = '=> Time::now()->day]);
        $this->set('planoEstudo',$planoEstudo);
        $this->set('horaEstudo',$horaEstudo);
    }
}
