<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Vendedor> $vendedor
 */
?>
<div class="vendedor index content">
    <?= $this->Html->link(__('New Vendedor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vendedor') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombres') ?></th>
                    <th><?= $this->Paginator->sort('apellidos') ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th><?= $this->Paginator->sort('telefono') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('salario') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vendedor as $vendedor): ?>
                <tr>
                    <td><?= $this->Number->format($vendedor->id) ?></td>
                    <td><?= h($vendedor->nombres) ?></td>
                    <td><?= h($vendedor->apellidos) ?></td>
                    <td><?= h($vendedor->direccion) ?></td>
                    <td><?= h($vendedor->telefono) ?></td>
                    <td><?= h($vendedor->email) ?></td>
                    <td><?= $this->Number->format($vendedor->salario) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $vendedor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vendedor->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vendedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendedor->id)]) ?>
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
