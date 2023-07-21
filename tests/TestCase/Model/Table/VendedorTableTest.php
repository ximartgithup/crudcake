<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VendedorTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VendedorTable Test Case
 */
class VendedorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VendedorTable
     */
    protected $Vendedor;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Vendedor',
        'app.Facturas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Vendedor') ? [] : ['className' => VendedorTable::class];
        $this->Vendedor = $this->getTableLocator()->get('Vendedor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Vendedor);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VendedorTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
