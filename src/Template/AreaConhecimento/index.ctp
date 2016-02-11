<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreaConhecimento[]|\Cake\Collection\CollectionInterface $areaConhecimento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Area Conhecimento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="areaConhecimento index large-9 medium-8 columns content">
    <h3><?= __('Area Conhecimento') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('extensao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($areaConhecimento as $areaConhecimento): ?>
            <tr>
                <td><?= $this->Number->format($areaConhecimento->id) ?></td>
                <td><?= h($areaConhecimento->nome) ?></td>
                <td><?= h($areaConhecimento->extensao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $areaConhecimento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $areaConhecimento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $areaConhecimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areaConhecimento->id)]) ?>
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
