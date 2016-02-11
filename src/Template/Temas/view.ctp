<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tema $tema
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tema'), ['action' => 'edit', $tema->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tema'), ['action' => 'delete', $tema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tema->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Temas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tema'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Conteudos'), ['controller' => 'Conteudos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conteudo'), ['controller' => 'Conteudos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hora Estudo'), ['controller' => 'HoraEstudo', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="temas view large-9 medium-8 columns content">
    <h3><?= h($tema->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($tema->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disciplina') ?></th>
            <td><?= $tema->has('disciplina') ? $this->Html->link($tema->disciplina->id, ['controller' => 'Disciplinas', 'action' => 'view', $tema->disciplina->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tema->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($tema->descricao)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Conteudos') ?></h4>
        <?php if (!empty($tema->conteudos)): ?>
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
            <?php foreach ($tema->conteudos as $conteudos): ?>
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
        <h4><?= __('Related Hora Estudo') ?></h4>
        <?php if (!empty($tema->hora_estudo)): ?>
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
            <?php foreach ($tema->hora_estudo as $horaEstudo): ?>
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
