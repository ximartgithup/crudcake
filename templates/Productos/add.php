<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 * @var \Cake\Collection\CollectionInterface|string[] $categorias
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Productos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productos form content">
            <?= $this->Form->create($producto) ?>
            <fieldset>
                <legend><?= __('Add Producto') ?></legend>
                <?php
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('cantidad');
                    echo $this->Form->control('precio');
                    echo $this->Form->control('categorias_id', ['options' => $categorias]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
