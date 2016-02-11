<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HoraEstudo $horaEstudo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $horaEstudo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $horaEstudo->id)]
            )
        ?></li>
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
    <fieldset>
        <legend><?= __('Edit Hora Estudo') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('nota');
            echo $this->Form->control('hora_inicial', ['empty' => true]);
            echo $this->Form->control('hora_fim', ['empty' => true]);
            echo $this->Form->control('semana');
            echo $this->Form->control('materia_id', ['options' => $materias, 'empty' => true]);
            echo $this->Form->control('periodo_id', ['options' => $periodos, 'empty' => true]);
            echo $this->Form->control('tema_id', ['options' => $temas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
