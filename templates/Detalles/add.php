<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detalle $detalle
 * @var \Cake\Collection\CollectionInterface|string[] $facturas
 * @var \Cake\Collection\CollectionInterface|string[] $productos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Detalles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="detalles form content">
            <?= $this->Form->create($detalle) ?>
            <fieldset>
                <legend><?= __('Add Detalle') ?></legend>
                <?php
                    echo $this->Form->control('facturas_id', ['options' => $facturas]);
                    echo $this->Form->control('productos_id', ['options' => $productos]);
                    echo $this->Form->control('precio');
                    echo $this->Form->control('cantidad');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
