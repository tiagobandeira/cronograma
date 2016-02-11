<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conteudo $conteudo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Conteudos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Segmentos'), ['controller' => 'Segmentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Segmento'), ['controller' => 'Segmentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Temas'), ['controller' => 'Temas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tema'), ['controller' => 'Temas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="conteudos form large-9 medium-8 columns content">
    <?= $this->Form->create($conteudo) ?>
    <fieldset>
        <legend><?= __('Add Conteudo') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('nota');
            echo $this->Form->control('video');
            echo $this->Form->control('livro');
            echo $this->Form->control('apostila');
            echo $this->Form->control('wiki');
            echo $this->Form->control('segmento_id', ['options' => $segmentos, 'empty' => true]);
            echo $this->Form->control('tema_id', ['options' => $temas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
