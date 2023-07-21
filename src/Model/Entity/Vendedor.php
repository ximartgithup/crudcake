<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vendedor Entity
 *
 * @property int $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $direccion
 * @property string $telefono
 * @property string $email
 * @property float $salario
 *
 * @property \App\Model\Entity\Factura[] $facturas
 */
class Vendedor extends Entity
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
        'nombres' => true,
        'apellidos' => true,
        'direccion' => true,
        'telefono' => true,
        'email' => true,
        'salario' => true,
        'facturas' => true,
    ];
}
