<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detalle $detalle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Detalle'), ['action' => 'edit', $detalle->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Detalle'), ['action' => 'delete', $detalle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detalle->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Detalles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Detalle'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="detalles view content">
            <h3><?= h($detalle->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Factura') ?></th>
                    <td><?= $detalle->has('factura') ? $this->Html->link($detalle->factura->id, ['controller' => 'Facturas', 'action' => 'view', $detalle->factura->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Producto') ?></th>
                    <td><?= $detalle->has('producto') ? $this->Html->link($detalle->producto->id, ['controller' => 'Productos', 'action' => 'view', $detalle->producto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($detalle->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $this->Number->format($detalle->precio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cantidad') ?></th>
                    <td><?= $this->Number->format($detalle->cantidad) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
