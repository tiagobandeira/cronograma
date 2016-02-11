<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreaConhecimento $areaConhecimento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Area Conhecimento'), ['action' => 'edit', $areaConhecimento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Area Conhecimento'), ['action' => 'delete', $areaConhecimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areaConhecimento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Area Conhecimento'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area Conhecimento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="areaConhecimento view large-9 medium-8 columns content">
    <h3><?= h($areaConhecimento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($areaConhecimento->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extensao') ?></th>
            <td><?= h($areaConhecimento->extensao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($areaConhecimento->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Materias') ?></h4>
        <?php if (!empty($areaConhecimento->materias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Area Conhecimento Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($areaConhecimento->materias as $materias): ?>
            <tr>
                <td><?= h($materias->id) ?></td>
                <td><?= h($materias->nome) ?></td>
                <td><?= h($materias->area_conhecimento_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Materias', 'action' => 'view', $materias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Materias', 'action' => 'edit', $materias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Materias', 'action' => 'delete', $materias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
