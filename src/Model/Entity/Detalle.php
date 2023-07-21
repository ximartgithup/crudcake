<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detalle Entity
 *
 * @property int $id
 * @property int $facturas_id
 * @property int $productos_id
 * @property float $precio
 * @property int $cantidad
 *
 * @property \App\Model\Entity\Factura $factura
 * @property \App\Model\Entity\Producto $producto
 */
class Detalle extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'facturas_id' => true,
        'productos_id' => true,
        'precio' => true,
        'cantidad' => true,
        'factura' => true,
        'producto' => true,
    ];
}
