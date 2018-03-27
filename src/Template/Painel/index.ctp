<?php
?>
<div class="row">
    <div class="col s12 m12 l8">
        <ul id="issues-collection" class="collection">
            <li class="collection-item avatar">
                <i class="mdi-file-folder blue circle"></i>
                <span class="collection-header">Planos de Estudos</span>
                <p>Assigned to you</p>
                <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
            </li>
            <?php
                foreach ($planoEstudo as $value) {
            ?>
            <li class="collection-item">
                <div class="row">
                    <div class="col s7">
                        <p class="collections-title"><strong><?= $value->id?></strong> <?= $value->nome?></p>
                        <p class="collections-content"><?= $value->descricao?></p>
                    </div>
                    <div class="col s2">
                        <span class="task-cat pink accent-2">P1</span>
                    </div>
                    <div class="col s3">
                        <div class="progress">
                                <div class="determinate" style="width: 70%"></div>   
                        </div>                                                
                    </div>
                </div>
            </li>
            <?php }?>
        </ul>
    </div>
    <div class="col s12 m12 l4">
        <ul id="task-card" class="collection with-header">
        <li class="collection-header cyan">
            <h4 class="task-card-title">Horário de Hoje</h4>
            <p class="task-card-date"><?php echo(strftime("%B %d, %Y - %A",strtotime("2018-03-27")));?></p>
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
</div>