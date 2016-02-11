<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periodo $periodo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Periodo'), ['action' => 'edit', $periodo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Periodo'), ['action' => 'delete', $periodo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $periodo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Periodos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periodo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cronogramas'), ['controller' => 'Cronogramas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cronograma'), ['controller' => 'Cronogramas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="periodos view large-9 medium-8 columns content">
    <h3><?= h($periodo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($periodo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cronograma') ?></th>
            <td><?= $periodo->has('cronograma') ? $this->Html->link($periodo->cronograma->id, ['controller' => 'Cronogramas', 'action' => 'view', $periodo->cronograma->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($periodo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Inicial') ?></th>
            <td><?= h($periodo->data_inicial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Final') ?></th>
            <td><?= h($periodo->data_final) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Hora Estudo') ?></h4>
        <?php if (!empty($periodo->hora_estudo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Nota') ?></th>
                <th scope="col"><?= __('Hora Inicial') ?></th>
                <th scope="col"><?= __('Hora Fim') ?></th>
                <th scope="col"><?= __('Semana') ?></th>
                <th scope="col"><?= __('Materia Id') ?></th>
                <th scope="col"><?= __('Periodo Id') ?></th>
                <th scope="col"><?= __('Tema Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($periodo->hora_estudo as $horaEstudo): ?>
            <tr>
                <td><?= h($horaEstudo->id) ?></td>
                <td><?= h($horaEstudo->titulo) ?></td>
                <td><?= h($horaEstudo->nota) ?></td>
                <td><?= h($horaEstudo->hora_inicial) ?></td>
                <td><?= h($horaEstudo->hora_fim) ?></td>
                <td><?= h($horaEstudo->semana) ?></td>
                <td><?= h($horaEstudo->materia_id) ?></td>
                <td><?= h($horaEstudo->periodo_id) ?></td>
                <td><?= h($horaEstudo->tema_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HoraEstudo', 'action' => 'view', $horaEstudo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HoraEstudo', 'action' => 'edit', $horaEstudo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HoraEstudo', 'action' => 'delete', $horaEstudo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $horaEstudo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
