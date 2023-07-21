<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetallesFixture
 */
class DetallesFixture extends TestFixture
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
                'facturas_id' => 1,
                'productos_id' => 1,
                'precio' => 1,
                'cantidad' => 1,
            ],
        ];
        parent::init();
    }
}
