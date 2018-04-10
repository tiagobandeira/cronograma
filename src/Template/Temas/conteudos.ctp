<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tema $tema
 */
?>

<h4 class="grey-text">
    <?= $tema->has('disciplina') ? $this->Html->link($tema->disciplina->nome, ['controller' => 'Disciplinas', 'action' => 'view', $tema->disciplina->id]). ' / ' : '' ?>
    <?= h($tema->nome) . " / " .  h($tema->descricao);?>
</h4>
<ul class="collapsible">
    <li>
        <div class="collapsible-header ">
            <h6>
                <span class="mdi-hardware-keyboard-arrow-down"></span> Ações
            </h6>
        </div>
        <div class="collapsible-body">
            <ul>
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
        </div>
    </li>
</ul>
<ul class="collection">
    <?php foreach ($tema->conteudos as $conteudos): ?>
    <li class="collection-item avatar">
        <i class="mdi-av-play-arrow circle red"></i>
        <span class="title"><?= $conteudos->nome?></span>
        <p><?= $conteudos->nota?></p>
        <p class="secondary-content" >
        <?= $this->Html->link(__('Aula'), ['controller' => 'Conteudos', 'action' => 'video', $conteudos->id], ['class' => 'btn']) ?>
        </p>
    </li>
    <?php endforeach; ?>
</ul>
<div class="temas view large-9 medium-8 columns content">
    
    <div class="related card-panel">
        <h5><?= __('Conteudos') ?></h5>
        <?php if (!empty($tema->conteudos)): ?>
        <table class="responsive-table">
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
</div>