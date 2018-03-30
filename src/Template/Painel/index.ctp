<?php
    
    foreach ($horaEstudo as $value) {
       # echo $value->tema->disciplina;
        /*
        foreach ($value->tema->disciplina as $value2) {
            echo $value2->nome . " - "; 
            # code...
        }*/
    }
?>
<div class="row">
<div class="col s12 m12 l12">
        <ul id="task-card" class="collection with-header">
        <li class="collection-header cyan">
            <h4 class="task-card-title">Horário de Hoje</h4>
            <p class="task-card-date"><?php echo(strftime("%B %d, %Y - %A",strtotime("now")));?></p>
        </li>
        <?php
            foreach ($horaEstudo as $value) {
        ?>
        <li class="collection-item dismissable">
            <input type="checkbox" id="task1" />
            <label for="task1"><?= $value->materia->nome?> <a href="temas/view/<?= $value->tema_id?>" class="secondary-content"><span class="ultra-small">Today</span></a>
            </label>
            <span class="task-cat teal"><?= $value->tema->descricao?></span>
        </li>
        <?php }?>
       
        </ul>
</div>
</div>

<div class="row">
        <?php
            foreach ($horaEstudo as $value) {
        ?>
    
    <div class="col s12 m12 l4">
        <ul id="issues-collection" class="collection">
            <li class="collection-item avatar">
                <i class="mdi-social-school blue circle"></i>
                <span class="collection-header"><?= $value->materia->nome?> / <?= $value->tema->disciplina->nome?></span>
                <p><?= $value->tema->descricao?></p>
                <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
            </li>
           <?php foreach ($value->tema->conteudos as $conteudo){ ?>
            <li class="collection-item">
                <div class="row">
                    <div class="col s7">
                        <p class="collections-title"><strong><?= $conteudo->id?> <?= $conteudo->nome?></strong> </p>
                        <p class="collections-content"><?= $conteudo->video?></p>
                    </div>
                    <div class="col s2">
                        <span class="task-cat pink accent-2"><?= $conteudo->segmento->nome?></span>
                    </div>
                    <div class="col s3">
                        <div class="progress">
                                <div class="determinate" style="width:<?= ($conteudo->segmento_id * 10) ."%"?>"></div>   
                        </div>                                                
                    </div>
                </div>
            </li>
            <?php }?>
        </ul>
    </div>
    <?php }?>
</div>

