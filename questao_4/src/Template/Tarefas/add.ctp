<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa $tarefa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('Lista de Tarefas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tarefas form large-9 medium-8 columns content">
    <?= $this->Form->create($tarefa) ?>
    <fieldset>
        <legend><?= __('Criar Tarefa') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('descricao');
            echo $this->Form->control('prioridade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
