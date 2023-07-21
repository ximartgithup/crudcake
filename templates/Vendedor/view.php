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
            <?= $this->Html->link(__('Edit Vendedor'), ['action' => 'edit', $vendedor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Vendedor'), ['action' => 'delete', $vendedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendedor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vendedor'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Vendedor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vendedor view content">
            <h3><?= h($vendedor->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombres') ?></th>
                    <td><?= h($vendedor->nombres) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellidos') ?></th>
                    <td><?= h($vendedor->apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($vendedor->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefono') ?></th>
                    <td><?= h($vendedor->telefono) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($vendedor->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vendedor->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salario') ?></th>
                    <td><?= $this->Number->format($vendedor->salario) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Facturas') ?></h4>
                <?php if (!empty($vendedor->facturas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Clientes Id') ?></th>
                            <th><?= __('Vendedor Id') ?></th>
                            <th><?= __('Total') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($vendedor->facturas as $facturas) : ?>
                        <tr>
                            <td><?= h($facturas->id) ?></td>
                            <td><?= h($facturas->fecha) ?></td>
                            <td><?= h($facturas->clientes_id) ?></td>
                            <td><?= h($facturas->vendedor_id) ?></td>
                            <td><?= h($facturas->total) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Facturas', 'action' => 'view', $facturas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Facturas', 'action' => 'edit', $facturas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Facturas', 'action' => 'delete', $facturas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $facturas->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
