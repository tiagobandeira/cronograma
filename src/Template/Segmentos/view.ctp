<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Segmento $segmento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Segmento'), ['action' => 'edit', $segmento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Segmento'), ['action' => 'delete', $segmento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $segmento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Segmentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Segmento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Conteudos'), ['controller' => 'Conteudos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conteudo'), ['controller' => 'Conteudos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plano Estudo'), ['controller' => 'PlanoEstudo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plano Estudo'), ['controller' => 'PlanoEstudo', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="segmentos view large-9 medium-8 columns content">
    <h3><?= h($segmento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($segmento->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($segmento->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($segmento->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Conteudos') ?></h4>
        <?php if (!empty($segmento->conteudos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Nota') ?></th>
                <th scope="col"><?= __('Video') ?></th>
                <th scope="col"><?= __('Livro') ?></th>
                <th scope="col"><?= __('Apostila') ?></th>
                <th scope="col"><?= __('Wiki') ?></th>
                <th scope="col"><?= __('Segmento Id') ?></th>
                <th scope="col"><?= __('Tema Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($segmento->conteudos as $conteudos): ?>
            <tr>
                <td><?= h($conteudos->id) ?></td>
                <td><?= h($conteudos->nome) ?></td>
                <td><?= h($conteudos->nota) ?></td>
                <td><?= h($conteudos->video) ?></td>
                <td><?= h($conteudos->livro) ?></td>
                <td><?= h($conteudos->apostila) ?></td>
                <td><?= h($conteudos->wiki) ?></td>
                <td><?= h($conteudos->segmento_id) ?></td>
                <td><?= h($conteudos->tema_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Conteudos', 'action' => 'view', $conteudos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Conteudos', 'action' => 'edit', $conteudos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Conteudos', 'action' => 'delete', $conteudos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conteudos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Plano Estudo') ?></h4>
        <?php if (!empty($segmento->plano_estudo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Segmento Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($segmento->plano_estudo as $planoEstudo): ?>
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
