<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HoraEstudo[]|\Cake\Collection\CollectionInterface $horaEstudo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hora Estudo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodos'), ['controller' => 'Periodos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periodo'), ['controller' => 'Periodos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Temas'), ['controller' => 'Temas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tema'), ['controller' => 'Temas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="horaEstudo index large-9 medium-8 columns content">
    <h3><?= __('Hora Estudo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nota') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hora_inicial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hora_fim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('semana') ?></th>
                <th scope="col"><?= $this->Paginator->sort('materia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tema_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($horaEstudo as $horaEstudo): ?>
            <tr>
                <td><?= $this->Number->format($horaEstudo->id) ?></td>
                <td><?= h($horaEstudo->titulo) ?></td>
                <td><?= h($horaEstudo->nota) ?></td>
                <td><?= h($horaEstudo->hora_inicial) ?></td>
                <td><?= h($horaEstudo->hora_fim) ?></td>
                <td><?= $this->Number->format($horaEstudo->semana) ?></td>
                <td><?= $horaEstudo->has('materia') ? $this->Html->link($horaEstudo->materia->id, ['controller' => 'Materias', 'action' => 'view', $horaEstudo->materia->id]) : '' ?></td>
                <td><?= $horaEstudo->has('periodo') ? $this->Html->link($horaEstudo->periodo->id, ['controller' => 'Periodos', 'action' => 'view', $horaEstudo->periodo->id]) : '' ?></td>
                <td><?= $horaEstudo->has('tema') ? $this->Html->link($horaEstudo->tema->id, ['controller' => 'Temas', 'action' => 'view', $horaEstudo->tema->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $horaEstudo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $horaEstudo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $horaEstudo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $horaEstudo->id)]) ?>
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
