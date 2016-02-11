<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlanoEstudo $planoEstudo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Plano Estudo'), ['action' => 'edit', $planoEstudo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Plano Estudo'), ['action' => 'delete', $planoEstudo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $planoEstudo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Plano Estudo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plano Estudo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Segmentos'), ['controller' => 'Segmentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Segmento'), ['controller' => 'Segmentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cronogramas'), ['controller' => 'Cronogramas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cronograma'), ['controller' => 'Cronogramas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="planoEstudo view large-9 medium-8 columns content">
    <h3><?= h($planoEstudo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($planoEstudo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($planoEstudo->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Segmento') ?></th>
            <td><?= $planoEstudo->has('segmento') ? $this->Html->link($planoEstudo->segmento->id, ['controller' => 'Segmentos', 'action' => 'view', $planoEstudo->segmento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $planoEstudo->has('usuario') ? $this->Html->link($planoEstudo->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $planoEstudo->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($planoEstudo->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cronogramas') ?></h4>
        <?php if (!empty($planoEstudo->cronogramas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Data Inicial') ?></th>
                <th scope="col"><?= __('Data Final') ?></th>
                <th scope="col"><?= __('Plano Estudo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($planoEstudo->cronogramas as $cronogramas): ?>
            <tr>
                <td><?= h($cronogramas->id) ?></td>
                <td><?= h($cronogramas->titulo) ?></td>
                <td><?= h($cronogramas->descricao) ?></td>
                <td><?= h($cronogramas->data_inicial) ?></td>
                <td><?= h($cronogramas->data_final) ?></td>
                <td><?= h($cronogramas->plano_estudo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cronogramas', 'action' => 'view', $cronogramas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cronogramas', 'action' => 'edit', $cronogramas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cronogramas', 'action' => 'delete', $cronogramas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cronogramas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
