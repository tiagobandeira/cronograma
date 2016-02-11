<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plano Estudo'), ['controller' => 'PlanoEstudo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plano Estudo'), ['controller' => 'PlanoEstudo', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($usuario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($usuario->senha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Plano Estudo') ?></h4>
        <?php if (!empty($usuario->plano_estudo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Segmento Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->plano_estudo as $planoEstudo): ?>
            <tr>
                <td><?= h($planoEstudo->id) ?></td>
                <td><?= h($planoEstudo->nome) ?></td>
                <td><?= h($planoEstudo->descricao) ?></td>
                <td><?= h($planoEstudo->segmento_id) ?></td>
                <td><?= h($planoEstudo->usuario_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PlanoEstudo', 'action' => 'view', $planoEstudo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PlanoEstudo', 'action' => 'edit', $planoEstudo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PlanoEstudo', 'action' => 'delete', $planoEstudo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $planoEstudo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
