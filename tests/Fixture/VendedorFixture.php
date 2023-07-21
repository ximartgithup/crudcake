<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VendedorFixture
 */
class VendedorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'vendedor';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nombres' => 'Lorem ipsum dolor sit a',
                'apellidos' => 'Lorem ipsum dolor sit a',
                'direccion' => 'Lorem ipsum dolor sit amet',
                'telefono' => 'Lorem ipsum dolor ',
                'email' => 'Lorem ipsum dolor sit amet',
                'salario' => 1,
            ],
        ];
        parent::init();
    }
}
