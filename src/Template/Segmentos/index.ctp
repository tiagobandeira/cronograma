<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Segmento[]|\Cake\Collection\CollectionInterface $segmentos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Segmento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conteudos'), ['controller' => 'Conteudos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conteudo'), ['controller' => 'Conteudos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plano Estudo'), ['controller' => 'PlanoEstudo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plano Estudo'), ['controller' => 'PlanoEstudo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="segmentos index large-9 medium-8 columns content">
    <h3><?= __('Segmentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($segmentos as $segmento): ?>
            <tr>
                <td><?= $this->Number->format($segmento->id) ?></td>
                <td><?= h($segmento->nome) ?></td>
                <td><?= h($segmento->descricao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $segmento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $segmento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $segmento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $segmento->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
