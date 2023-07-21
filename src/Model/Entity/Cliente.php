<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $direccion
 * @property string $telefono
 * @property string $email
 */
class Cliente extends Entity
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
    ];
    //---- definiiendo un campo virtual FullName
    protected function _getFullName()
    {
        return $this->id . ' - ' . $this->apellidos.' '.$this->nombres;
    }

}
