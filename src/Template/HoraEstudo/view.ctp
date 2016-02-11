<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HoraEstudo $horaEstudo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hora Estudo'), ['action' => 'edit', $horaEstudo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hora Estudo'), ['action' => 'delete', $horaEstudo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $horaEstudo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hora Estudo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hora Estudo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Periodos'), ['controller' => 'Periodos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periodo'), ['controller' => 'Periodos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Temas'), ['controller' => 'Temas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tema'), ['controller' => 'Temas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="horaEstudo view large-9 medium-8 columns content">
    <h3><?= h($horaEstudo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($horaEstudo->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nota') ?></th>
            <td><?= h($horaEstudo->nota) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Materia') ?></th>
            <td><?= $horaEstudo->has('materia') ? $this->Html->link($horaEstudo->materia->id, ['controller' => 'Materias', 'action' => 'view', $horaEstudo->materia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodo') ?></th>
            <td><?= $horaEstudo->has('periodo') ? $this->Html->link($horaEstudo->periodo->id, ['controller' => 'Periodos', 'action' => 'view', $horaEstudo->periodo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tema') ?></th>
            <td><?= $horaEstudo->has('tema') ? $this->Html->link($horaEstudo->tema->id, ['controller' => 'Temas', 'action' => 'view', $horaEstudo->tema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($horaEstudo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Semana') ?></th>
            <td><?= $this->Number->format($horaEstudo->semana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hora Inicial') ?></th>
            <td><?= h($horaEstudo->hora_inicial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hora Fim') ?></th>
            <td><?= h($horaEstudo->hora_fim) ?></td>
        </tr>
    </table>
</div>
