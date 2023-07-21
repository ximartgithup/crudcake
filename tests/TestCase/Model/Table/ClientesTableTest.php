<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientesTable Test Case
 */
class ClientesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClientesTable
     */
    protected $Clientes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Clientes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Clientes') ? [] : ['className' => ClientesTable::class];
        $this->Clientes = $this->getTableLocator()->get('Clientes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Clientes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ClientesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
