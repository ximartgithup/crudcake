<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Factura> $facturas
 */
?>
<div class="facturas index content">
    <?= $this->Html->link(__('New Factura'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Facturas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('clientes_id') ?></th>
                    <th><?= $this->Paginator->sort('vendedor_id') ?></th>
                    <th><?= $this->Paginator->sort('total') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($facturas as $factura): ?>
                <tr>
                    <td><?= $this->Number->format($factura->id) ?></td>
                    <td><?= h($factura->fecha) ?></td>
                    <td><?= $factura->has('cliente') ? $this->Html->link($factura->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $factura->cliente->id]) : '' ?></td>
                    <td><?= $this->Number->format($factura->vendedor_id) ?></td>
                    <td><?= $this->Number->format($factura->total) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $factura->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $factura->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $factura->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factura->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
