<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conteudo $conteudo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Conteudo'), ['action' => 'edit', $conteudo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Conteudo'), ['action' => 'delete', $conteudo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conteudo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Conteudos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conteudo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Segmentos'), ['controller' => 'Segmentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Segmento'), ['controller' => 'Segmentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Temas'), ['controller' => 'Temas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tema'), ['controller' => 'Temas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="conteudos view large-9 medium-8 columns content">
    <h3><?= h($conteudo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($conteudo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nota') ?></th>
            <td><?= h($conteudo->nota) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Segmento') ?></th>
            <td><?= $conteudo->has('segmento') ? $this->Html->link($conteudo->segmento->id, ['controller' => 'Segmentos', 'action' => 'view', $conteudo->segmento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tema') ?></th>
            <td><?= $conteudo->has('tema') ? $this->Html->link($conteudo->tema->id, ['controller' => 'Temas', 'action' => 'view', $conteudo->tema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($conteudo->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Video') ?></h4>
        <?= $this->Text->autoParagraph(h($conteudo->video)); ?>
    </div>
    <div class="row">
        <h4><?= __('Livro') ?></h4>
        <?= $this->Text->autoParagraph(h($conteudo->livro)); ?>
    </div>
    <div class="row">
        <h4><?= __('Apostila') ?></h4>
        <?= $this->Text->autoParagraph(h($conteudo->apostila)); ?>
    </div>
    <div class="row">
        <h4><?= __('Wiki') ?></h4>
        <?= $this->Text->autoParagraph(h($conteudo->wiki)); ?>
    </div>
</div>
