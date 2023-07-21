<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vendedor $vendedor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vendedor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vendedor->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Vendedor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vendedor form content">
            <?= $this->Form->create($vendedor) ?>
            <fieldset>
                <legend><?= __('Edit Vendedor') ?></legend>
                <?php
                    echo $this->Form->control('nombres');
                    echo $this->Form->control('apellidos');
                    echo $this->Form->control('direccion');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('email');
                    echo $this->Form->control('salario');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
