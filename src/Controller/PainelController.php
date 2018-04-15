<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
use Cake\I18n\Date;
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
        $planoEstudo = $planoEstudoM->find('all', ['contain' => ['Cronogramas' => ['Periodos']]])->where(['PlanoEstudo.id' => 1]);
        //Cronograma
        $cronogramaM = TableRegistry::get('Cronogramas');
        $cronograma  = $cronogramaM->find('all');
        //Hora de Estudo
        $horaEstudoM = TableRegistry::get('HoraEstudo');
        $horaEstudo = $horaEstudoM->find('all', ['contain' => ['Temas' => ['Conteudos' => 'Segmentos', 'Disciplinas',], 'Materias']])->where(['HoraEstudo.data = '=> Date::now()]);
        $horaEstudoSemana = $horaEstudoM->find('all', 
            [
                'contain' => [
                    'Temas' => [
                        'Conteudos' => 'Segmentos', 'Disciplinas',
                    ], 
                    'Materias'
                ]
            ]
        )->where(
            [
                'HoraEstudo.data >= ' => $this->semanaData(0), 
                'HoraEstudo.data <= ' => $this->semanaData(6)]
        )->order('HoraEstudo.data asc')->order('HoraEstudo.hora_inicial desc');
        //Conteudos
        //$conteudoM = TableRegistry::get('Conteudos');

        $this->set('planoEstudo',$planoEstudo);
        $this->set('cronograma', $cronograma);
        $this->set('horaEstudo',$horaEstudo);
        $this->set('horaEstudoSemana',$horaEstudoSemana);
        $this->set('semana', $this->estruturaDataSemana($horaEstudoSemana));
    }
    public function semanaData($semana){
        $dataAtual = new Date();
        return $dataAtual->addDays($semana - $dataAtual->format("w"));
    }
    public function ordenaDataSemana($dados){
        $ordenados = [];
        $repetidos = [];
        $dadoArray =  $dados;

        for ($i=0; $i < count($dadoArray); $i++) { 
            if($i == count($dadoArray) - 1){
                array_push($ordenados, $dadoArray[$i]);
                break;
            }
            $data1 = new Date($dadoArray[$i]->data);
            $data2 = new Date($dadoArray[$i + 1]->data);
            if($data1->format("w") < $data2->format("w")){
                array_push($ordenados, $dadoArray[$i]);
            }else{
                array_push($repetidos, $dadoArray[$i]);
            }
        }
        return array($ordenados, $repetidos);
    }
    
    public function estruturaDataSemana($dados){
        $semana = [];
        $aux    = $this->cakeToArray($dados);
        $dado  = $this->cakeToArray($dados);
        
        for ($i=0; $i < count($dado); $i++) { 
            if(count($aux) == 1){
                array_push($semana, $aux);
                return $semana;
            }
            $ordenados = $this->ordenaDataSemana($aux);
            array_push($semana, $ordenados[0]);
            $aux = $ordenados[1];
        }
        return $semana;
    }
    public function cakeToArray($orm){
        $arr = [];
        foreach ($orm as $value1) {
            array_push($arr, $value1);
        }
        return $arr;
    }
}
