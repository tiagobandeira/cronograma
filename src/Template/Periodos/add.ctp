<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periodo $periodo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Periodos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cronogramas'), ['controller' => 'Cronogramas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cronograma'), ['controller' => 'Cronogramas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="periodos form large-9 medium-8 columns content">
    <?= $this->Form->create($periodo) ?>
    <fieldset>
        <legend><?= __('Add Periodo') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('data_inicial', ['empty' => true]);
            echo $this->Form->control('data_final', ['empty' => true]);
            echo $this->Form->control('cronograma_id', ['options' => $cronogramas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
