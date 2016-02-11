<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disciplina $disciplina
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Disciplina'), ['action' => 'edit', $disciplina->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Disciplina'), ['action' => 'delete', $disciplina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplina->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Temas'), ['controller' => 'Temas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tema'), ['controller' => 'Temas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="disciplinas view large-9 medium-8 columns content">
    <h3><?= h($disciplina->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($disciplina->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Materia') ?></th>
            <td><?= $disciplina->has('materia') ? $this->Html->link($disciplina->materia->id, ['controller' => 'Materias', 'action' => 'view', $disciplina->materia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($disciplina->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($disciplina->descricao)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Temas') ?></h4>
        <?php if (!empty($disciplina->temas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Disciplina Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($disciplina->temas as $temas): ?>
            <tr>
                <td><?= h($temas->id) ?></td>
                <td><?= h($temas->nome) ?></td>
                <td><?= h($temas->descricao) ?></td>
                <td><?= h($temas->disciplina_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Temas', 'action' => 'view', $temas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Temas', 'action' => 'edit', $temas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Temas', 'action' => 'delete', $temas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $temas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
