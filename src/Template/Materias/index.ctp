<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materia[]|\Cake\Collection\CollectionInterface $materias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Materia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Area Conhecimento'), ['controller' => 'AreaConhecimento', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Area Conhecimento'), ['controller' => 'AreaConhecimento', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materias index large-9 medium-8 columns content">
    <h3><?= __('Materias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('area_conhecimento_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materias as $materia): ?>
            <tr>
                <td><?= $this->Number->format($materia->id) ?></td>
                <td><?= h($materia->nome) ?></td>
                <td><?= $materia->has('area_conhecimento') ? $this->Html->link($materia->area_conhecimento->id, ['controller' => 'AreaConhecimento', 'action' => 'view', $materia->area_conhecimento->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $materia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $materia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materia->id)]) ?>
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
