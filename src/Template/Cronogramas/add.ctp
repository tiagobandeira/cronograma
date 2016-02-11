<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cronograma $cronograma
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cronogramas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Plano Estudo'), ['controller' => 'PlanoEstudo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plano Estudo'), ['controller' => 'PlanoEstudo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodos'), ['controller' => 'Periodos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periodo'), ['controller' => 'Periodos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cronogramas form large-9 medium-8 columns content">
    <?= $this->Form->create($cronograma) ?>
    <fieldset>
        <legend><?= __('Add Cronograma') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('descricao');
            echo $this->Form->control('data_inicial', ['empty' => true]);
            echo $this->Form->control('data_final', ['empty' => true]);
            echo $this->Form->control('plano_estudo_id', ['options' => $planoEstudo, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
