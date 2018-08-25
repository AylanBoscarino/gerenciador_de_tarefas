<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa $tarefa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $tarefa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tarefa->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de Tarefas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tarefas form large-9 medium-8 columns content">
    <?= $this->Form->create($tarefa) ?>
    <fieldset>
        <legend><?= __('Edit Tarefa') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('descricao');
            echo $this->Form->control('prioridade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
