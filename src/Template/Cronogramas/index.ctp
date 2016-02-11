<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cronograma[]|\Cake\Collection\CollectionInterface $cronogramas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cronograma'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plano Estudo'), ['controller' => 'PlanoEstudo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plano Estudo'), ['controller' => 'PlanoEstudo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodos'), ['controller' => 'Periodos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periodo'), ['controller' => 'Periodos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cronogramas index large-9 medium-8 columns content">
    <h3><?= __('Cronogramas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_inicial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_final') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plano_estudo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cronogramas as $cronograma): ?>
            <tr>
                <td><?= $this->Number->format($cronograma->id) ?></td>
                <td><?= h($cronograma->titulo) ?></td>
                <td><?= h($cronograma->descricao) ?></td>
                <td><?= h($cronograma->data_inicial) ?></td>
                <td><?= h($cronograma->data_final) ?></td>
                <td><?= $cronograma->has('plano_estudo') ? $this->Html->link($cronograma->plano_estudo->id, ['controller' => 'PlanoEstudo', 'action' => 'view', $cronograma->plano_estudo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cronograma->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cronograma->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cronograma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cronograma->id)]) ?>
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
