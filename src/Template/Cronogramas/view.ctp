<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cronograma $cronograma
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cronograma'), ['action' => 'edit', $cronograma->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cronograma'), ['action' => 'delete', $cronograma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cronograma->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cronogramas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cronograma'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plano Estudo'), ['controller' => 'PlanoEstudo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plano Estudo'), ['controller' => 'PlanoEstudo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Periodos'), ['controller' => 'Periodos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periodo'), ['controller' => 'Periodos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cronogramas view large-9 medium-8 columns content">
    <h3><?= h($cronograma->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($cronograma->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($cronograma->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plano Estudo') ?></th>
            <td><?= $cronograma->has('plano_estudo') ? $this->Html->link($cronograma->plano_estudo->id, ['controller' => 'PlanoEstudo', 'action' => 'view', $cronograma->plano_estudo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cronograma->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Inicial') ?></th>
            <td><?= h($cronograma->data_inicial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Final') ?></th>
            <td><?= h($cronograma->data_final) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Periodos') ?></h4>
        <?php if (!empty($cronograma->periodos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Data Inicial') ?></th>
                <th scope="col"><?= __('Data Final') ?></th>
                <th scope="col"><?= __('Cronograma Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cronograma->periodos as $periodos): ?>
            <tr>
                <td><?= h($periodos->id) ?></td>
                <td><?= h($periodos->nome) ?></td>
                <td><?= h($periodos->data_inicial) ?></td>
                <td><?= h($periodos->data_final) ?></td>
                <td><?= h($periodos->cronograma_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Periodos', 'action' => 'view', $periodos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Periodos', 'action' => 'edit', $periodos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Periodos', 'action' => 'delete', $periodos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $periodos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
