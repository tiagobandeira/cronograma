<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Segmento $segmento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Segmentos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Conteudos'), ['controller' => 'Conteudos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conteudo'), ['controller' => 'Conteudos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plano Estudo'), ['controller' => 'PlanoEstudo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plano Estudo'), ['controller' => 'PlanoEstudo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="segmentos form large-9 medium-8 columns content">
    <?= $this->Form->create($segmento) ?>
    <fieldset>
        <legend><?= __('Add Segmento') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
