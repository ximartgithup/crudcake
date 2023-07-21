<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factura $factura
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Factura'), ['action' => 'edit', $factura->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Factura'), ['action' => 'delete', $factura->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factura->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Facturas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Factura'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="facturas view content">
            <h3><?= h($factura->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= $factura->has('cliente') ? $this->Html->link($factura->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $factura->cliente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($factura->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vendedor Id') ?></th>
                    <td><?= $this->Number->format($factura->vendedor_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($factura->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($factura->fecha) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
