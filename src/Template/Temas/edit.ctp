<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tema $tema
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tema->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tema->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Temas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conteudos'), ['controller' => 'Conteudos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conteudo'), ['controller' => 'Conteudos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="temas form large-9 medium-8 columns content">
    <?= $this->Form->create($tema) ?>
    <fieldset>
        <legend><?= __('Edit Tema') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('descricao');
            echo $this->Form->control('disciplina_id', ['options' => $disciplinas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
