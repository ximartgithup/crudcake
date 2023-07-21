<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id
 * @property string $descripcion
 * @property int $cantidad
 * @property float $precio
 * @property int $categorias_id
 *
 * @property \App\Model\Entity\Categoria $categoria
 */
class Producto extends Entity
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
        'descripcion' => true,
        'cantidad' => true,
        'precio' => true,
        'categorias_id' => true,
        'categoria' => true,
    ];
}
