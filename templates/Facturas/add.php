<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factura $factura
 * @var \Cake\Collection\CollectionInterface|string[] $clientes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Facturas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="facturas form content">
            <?= $this->Form->create($factura) ?>
            <fieldset>
                <legend><?= __('Add Factura') ?></legend>
                <?php
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('clientes_id', ['options' => $clientes]);
                    echo $this->Form->control('vendedor_id');
                    echo $this->Form->control('total');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
