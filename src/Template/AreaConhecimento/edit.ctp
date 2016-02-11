<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreaConhecimento $areaConhecimento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $areaConhecimento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $areaConhecimento->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Area Conhecimento'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="areaConhecimento form large-9 medium-8 columns content">
    <?= $this->Form->create($areaConhecimento) ?>
    <fieldset>
        <legend><?= __('Edit Area Conhecimento') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('extensao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
