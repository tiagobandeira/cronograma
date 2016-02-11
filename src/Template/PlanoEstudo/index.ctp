<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlanoEstudo[]|\Cake\Collection\CollectionInterface $planoEstudo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Plano Estudo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Segmentos'), ['controller' => 'Segmentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Segmento'), ['controller' => 'Segmentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cronogramas'), ['controller' => 'Cronogramas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cronograma'), ['controller' => 'Cronogramas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="planoEstudo index large-9 medium-8 columns content">
    <h3><?= __('Plano Estudo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('segmento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($planoEstudo as $planoEstudo): ?>
            <tr>
                <td><?= $this->Number->format($planoEstudo->id) ?></td>
                <td><?= h($planoEstudo->nome) ?></td>
                <td><?= h($planoEstudo->descricao) ?></td>
                <td><?= $planoEstudo->has('segmento') ? $this->Html->link($planoEstudo->segmento->id, ['controller' => 'Segmentos', 'action' => 'view', $planoEstudo->segmento->id]) : '' ?></td>
                <td><?= $planoEstudo->has('usuario') ? $this->Html->link($planoEstudo->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $planoEstudo->usuario->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $planoEstudo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $planoEstudo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $planoEstudo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $planoEstudo->id)]) ?>
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
