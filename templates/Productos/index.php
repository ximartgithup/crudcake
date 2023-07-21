<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Producto> $productos
 */
?>
<div class="productos index content">
    <?= $this->Html->link(__('New Producto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Productos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('descripcion') ?></th>
                    <th><?= $this->Paginator->sort('cantidad') ?></th>
                    <th><?= $this->Paginator->sort('precio') ?></th>
                    <th><?= $this->Paginator->sort('categorias_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?= $this->Number->format($producto->id) ?></td>
                    <td><?= h($producto->descripcion) ?></td>
                    <td><?= $this->Number->format($producto->cantidad) ?></td>
                    <td><?= $this->Number->format($producto->precio) ?></td>
                    <td><?= $producto->has('categoria') ? $this->Html->link($producto->categoria->id.'-'.$producto->categoria->nombre, ['controller' => 'Categorias', 'action' => 'view', $producto->categoria->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $producto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $producto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id)]) ?>
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
