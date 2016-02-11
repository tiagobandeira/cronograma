<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periodo[]|\Cake\Collection\CollectionInterface $periodos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Periodo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cronogramas'), ['controller' => 'Cronogramas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cronograma'), ['controller' => 'Cronogramas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="periodos index large-9 medium-8 columns content">
    <h3><?= __('Periodos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_inicial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_final') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cronograma_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($periodos as $periodo): ?>
            <tr>
                <td><?= $this->Number->format($periodo->id) ?></td>
                <td><?= h($periodo->nome) ?></td>
                <td><?= h($periodo->data_inicial) ?></td>
                <td><?= h($periodo->data_final) ?></td>
                <td><?= $periodo->has('cronograma') ? $this->Html->link($periodo->cronograma->id, ['controller' => 'Cronogramas', 'action' => 'view', $periodo->cronograma->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $periodo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $periodo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $periodo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $periodo->id)]) ?>
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
