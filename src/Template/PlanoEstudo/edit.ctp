<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlanoEstudo $planoEstudo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $planoEstudo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $planoEstudo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Plano Estudo'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Segmentos'), ['controller' => 'Segmentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Segmento'), ['controller' => 'Segmentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cronogramas'), ['controller' => 'Cronogramas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cronograma'), ['controller' => 'Cronogramas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="planoEstudo form large-9 medium-8 columns content">
    <?= $this->Form->create($planoEstudo) ?>
    <fieldset>
        <legend><?= __('Edit Plano Estudo') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('descricao');
            echo $this->Form->control('segmento_id', ['options' => $segmentos, 'empty' => true]);
            echo $this->Form->control('usuario_id', ['options' => $usuarios, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
