<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HoraEstudo $horaEstudo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="">
       
        <li><?= $this->Html->link(__('List Hora Estudo'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodos'), ['controller' => 'Periodos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periodo'), ['controller' => 'Periodos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Temas'), ['controller' => 'Temas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tema'), ['controller' => 'Temas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="horaEstudo form large-9 medium-8 columns content">
    <?= $this->Form->create($horaEstudo) ?>
       <h4 class="header"><?= __('Add Hora Estudo') ?></h4>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('nota');
            echo $this->Form->control('data', ['type' => 'text','class' => 'datepicker']);
            echo $this->Form->control('hora_inicial', ['type' => 'text', 'class' => 'timepicker']);
            echo $this->Form->control('hora_fim', ['type' => 'text', 'class' => 'timepicker']);
            echo $this->Form->control('semana');
            echo $this->Form->control('materia_id', ['options' => $materias, 'empty' => true]);
            echo $this->Form->control('periodo_id', ['options' => $periodos, 'empty' => true]);
            echo $this->Form->control('tema_id', ['options' => $temas, 'empty' => true]);
        ?>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn cyan waves-effect waves-light right']) ?>
   
    <?= $this->Form->end() ?>
</div>
<script>
    //Ler data
    $('.datepicker').datepicker({
        format:'yyyy-mm-d',
        monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jul', 'Ago', 'Set', 'Nov', 'Dez']
    });
    $('.timepicker').timepicker({
        twelveHour: false
    });
    $('select').formSelect();
</script>