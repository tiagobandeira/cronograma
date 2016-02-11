<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materia $materia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $materia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $materia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Materias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Area Conhecimento'), ['controller' => 'AreaConhecimento', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Area Conhecimento'), ['controller' => 'AreaConhecimento', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materias form large-9 medium-8 columns content">
    <?= $this->Form->create($materia) ?>
    <fieldset>
        <legend><?= __('Edit Materia') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('area_conhecimento_id', ['options' => $areaConhecimento, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
