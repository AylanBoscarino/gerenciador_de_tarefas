<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa[]|\Cake\Collection\CollectionInterface $tarefas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Cadastrar Tarefa'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tarefas index large-9 medium-8 columns content">
    <h3><?= __('Lista de tarefas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridade') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tarefas as $tarefa): ?>
            <tr>
                <td><?= $this->Number->format($tarefa->id) ?></td>
                <td><?= h($tarefa->titulo) ?></td>
                <td><?= $this->Number->format($tarefa->prioridade) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $tarefa->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $tarefa->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Deseja mesmo excluir a tarefa de id {0}?', $tarefa->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, exibindo {{current}} registro(s) de {{count}}')]) ?></p>
    </div>
</div>
