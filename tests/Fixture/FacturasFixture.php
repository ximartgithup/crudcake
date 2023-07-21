<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FacturasFixture
 */
class FacturasFixture extends TestFixture
{
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
                'fecha' => '2023-04-18',
                'clientes_id' => 1,
                'vendedor_id' => 1,
                'total' => 1,
            ],
        ];
        parent::init();
    }
}
