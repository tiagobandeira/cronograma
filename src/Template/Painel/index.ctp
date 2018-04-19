<?php
use Cake\I18n\Time;
use Cake\I18n\Date;
?>
<div class="row">
    <div class="col col s12 m12 l12">
        <!--<h3 class="green-text">Agenda</h3>-->
        <!-- CODIGO CARDS TABS  -->
        <div class="row">
            <div class="col col s12 m12 l12">
                <div class="card">
                    <div class="card-content">
                        <?php foreach($planoEstudo as $value):?>
                        <h4><?= $value->nome?></h4>
                        <p>
                        <?php echo($value->cronogramas[0]->titulo) . "/ "?>
                        <?php echo($value->cronogramas[0]->periodos[0]->nome)?>
                        </p>
                        <?php endforeach;?>
                    </div>
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab">
                                <a  href="#tab4">Lista</a>
                            </li>
                            <li class="tab">
                                <a  href="#tab5">Hoje</a>
                            </li>
                            <li class="tab">
                                <a class="active" href="#tab6">Semana</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-content grey lighten-4 ">
                        <div id="tab4">
                            <ul class="collection">
                                <?php
                                    foreach ($horaEstudo as $value):
                                ?>
                                <li class="collection-item">
                                    <div>
                                        <?= $value->hora_inicial . " - "?>
                                        <?= $this->Html->link($value->has('tema')?$value->tema->nome:'', ['controller' => 'Conteudos','action' => 'video', $value->has('tema')?$value->tema->conteudos[0]->id:1]) ?>
                                        <a href="#!" class="secondary-content">
                                        <i class="material-icons">alarm</i>
                                        </a>
                                    </div>                                
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <div id="tab5" class="white responsive-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th><button class="btn btn-flat">Matéria</button> </th>
                                        <th><button class="btn btn-flat">Disciplina</button></th>
                                        <th><button class="btn btn-flat">Tema</button></th>
                                        <th><button class="btn btn-flat">Conteúdo</button></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($horaEstudo as $value) {
                                    ?>
                                    <tr>
                                        <td><?= $value->materia->nome?></td>
                                        <td><?= $value->has('tema')? $value->tema->disciplina->nome: ''?></td>
                                        <td><?= $value->has('tema')?$value->tema->nome: ''?></td>
                                        <td><?= $this->Html->link(__('Ver'), ['controller' => 'Temas','action' => 'conteudos', $value->has('tema') ?$value->id: 1], ['class'=>'btn']) ?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div id="tab6">
                            <table class="white responsive-table" >
                                <thead >
                                    <tr>
                                        <th><button  class="btn btn-flat">Domingo</button></th>
                                        <th><button  class="btn btn-flat">Segunda</button></th>
                                        <th><button  class="btn btn-flat">Terça</button></th>
                                        <th><button  class="btn btn-flat">Quarta</button></th>
                                        <th><button  class="btn btn-flat">Quinta</button></th>
                                        <th><button  class="btn btn-flat">Sexta</button></th>
                                        <th><button  class="btn btn-flat">Sábado</button></th>
                                    </tr>
                                </thead>
                                <tbody >
                                <?php 
                                if($semana):
                                    for($h =0; $h < count(max($semana)) - 1;$h++):?>
                                    <tr>
                                    <?php for($i = 0; $i < 7; $i++):?>
                                        <td>
                                        <?php foreach($semana[$h] as $value2):?>
                                            <?php
                                                $data = new Date($value2->data);
                                                if($data->format("w") == $i){
                                            ?>
                                            <input type="hidden" name="hora_inicial"  value="<?= $value2->hora_inicial?>">
                                            <input type="hidden" name="hora_fim"  value="<?= $value2->hora_fim?>">
                                            <input type="hidden" name="descricao"  value="<?= $value2->nota?>">
                                            <input type="hidden" name="titulo"  value="<?= $value2->titulo?>">
                                            <button id="<?= $value2->id?>" value="<?= $value2->titulo?>" data-target="modal_id" class="btn btn-flat modal-trigger">
                                               <?= $value2->materia->nome?>
                                            </button>
                                            <?php }?>
                                            <!--
                                            <button id="" value="add" data-target="modal_id" class="btn btn-flat modal-trigger">
                                                <i class="material-icons">add</i>
                                            </button>
                                            -->
                                        <?php endforeach;?>
                                        </td>
                                    <?php endfor;?>
                                    </tr>
                                    <?php endfor;
                                    endif;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- END CODIGO CARDS TABS  -->
        <!-- MODAL -->
        <div id="modal_id" class="modal">
            <form action="" id="form" novalidate="novalidate">
                    <div class="modal-content">
                            <h4 id="titulo_modal"></h4>
                            <p id="descricao_modal"></p>
                            <div class="row">
                                <div class="input-field s12 col l6">
                                        <select name="" id="">
                                                <option value="1">Matemática</option>
                                                <option value="2">Física</option>
                                        </select>
                                </div>
                                <div class="input-field s12 col l3">
                                        <span class="mdi-action-alarm prefix"></span>
                                        <input id="inicio_id" type="text" placeholder="00:00" class="time">
                                        <label for="inicio_id">Inicio</label>
                                </div>
                                <div class="input-field s12 col l3">
                                        <span class="mdi-action-alarm prefix"></span>
                                        <input id="fim_id" type="text" placeholder="00:00" class="time">
                                        <label for="fim_id">Fim</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn modal-close">Ok</a>
                        </div>
            </form>
        </div>
        <!-- END MODAL -->
    </div>
</div>
<script >
    M.AutoInit(); 
    //$('.sidenav').sidenav();
    //$('.collapsible').collapsible();
    $('.modal').modal();
    $('button').click(function(){
        var btn = $(this);
        var genero = "na";
        if(btn[0].value == "domingo" || btn[0].value == "sabado"){
            genero = "no";
        }
        console.log($('input'));
        /*
        descricao = $('#descricao').val();
        titulo    = $('#titulo').val();
        $('#descricao_modal').text(descricao);
        $('#titulo_modal').text(titulo);
        hora_i = $('input[name="hora_inicial"]').val();
        hora_f = $('#hora_fim').val();
        time1  = new Date(hora_i);
        time2  = new Date(hora_f);
        console.log(time1.toTimeString());
        $('input[fim_id]').val(time1.toTimeString());
        $('#fim_id').val(time2.toTimeString());
        */
    });

    var d1 = new Date();
    var d2 = new Date("04/18/18");
    data = (d1.toDateString());
    dia  = d1.getDate();
    time1 = d1.getTime();
    time2 = d2.getTime();
    time3 = time2 - time1;
    var d3 = new Date(time3);
    var semana = new Array("domingo", "segunda","terça","quarta","quinta","sexta","sábado");
    var mes    = new Array("janeiro", 
                                                "fevereiro",
                                                "março",
                                                "abril",
                                                "maio",
                                                "junho",
                                                "julho","agosto",
                                                "setembro",
                                                "outubro",
                                                "novembro",
                                                "dezembro");
    /*
    mes.forEach(element => {
        console.log(element);
    });*/
    function somaDia(data, dias){
        time1 = data.getTime();
        time2 = dias * 86400000;
        timeSoma = time1 + time2;
        data2 = new Date(timeSoma); 
        return data2;
    }
    function semanaData(semana){
        data = new Date();
        return somaDia(data, semana - data.getDay());
    }

    dataAtual = new Date();
    dataSomada = somaDia(dataAtual, -15);
    console.log("Hoje é " + semana[d1.getDay()] + " do mês de " + mes[d1.getMonth()]);
    console.log("De hoje até o dia 20 faltam " + d3.getDate()+ " dias.");
    console.log("Pergunta: Qual a data 15 dias depois de hoje?");
    console.log("Resposta: "
                                + semana[dataSomada.getDay()] 
                                + ", dia " + dataSomada.getDate() 
                                + " de " + mes[dataSomada.getMonth()] 
                                + " de " + dataSomada.getFullYear());
    console.log("Pergunta: Quais as datas de todos os dias desta semana?\n\tsaida: dia da semama -> data");
    console.log("Resposta:");
    for (let i = 0; i < semana.length; i++) {
        data = semanaData(i);
        console.log("\t" + semana[i] + " -> " + data.getDate() + "/" + data.getMonth() + "/" + data.getFullYear());
    }
</script>
