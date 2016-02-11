<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materia $materia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Materia'), ['action' => 'edit', $materia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Materia'), ['action' => 'delete', $materia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Area Conhecimento'), ['controller' => 'AreaConhecimento', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area Conhecimento'), ['controller' => 'AreaConhecimento', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materias view large-9 medium-8 columns content">
    <h3><?= h($materia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($materia->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Area Conhecimento') ?></th>
            <td><?= $materia->has('area_conhecimento') ? $this->Html->link($materia->area_conhecimento->id, ['controller' => 'AreaConhecimento', 'action' => 'view', $materia->area_conhecimento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($materia->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Disciplinas') ?></h4>
        <?php if (!empty($materia->disciplinas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Materia Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($materia->disciplinas as $disciplinas): ?>
            <tr>
                <td><?= h($disciplinas->id) ?></td>
                <td><?= h($disciplinas->nome) ?></td>
                <td><?= h($disciplinas->descricao) ?></td>
                <td><?= h($disciplinas->materia_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Disciplinas', 'action' => 'view', $disciplinas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Disciplinas', 'action' => 'edit', $disciplinas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Disciplinas', 'action' => 'delete', $disciplinas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplinas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Hora Estudo') ?></h4>
        <?php if (!empty($materia->hora_estudo)): ?>
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
            <?php foreach ($materia->hora_estudo as $horaEstudo): ?>
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
