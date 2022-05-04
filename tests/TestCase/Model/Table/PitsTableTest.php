<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PitsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PitsTable Test Case
 */
class PitsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PitsTable
     */
    protected $Pits;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Pits',
        'app.Archives',
        'app.Employees',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pits') ? [] : ['className' => PitsTable::class];
        $this->Pits = $this->getTableLocator()->get('Pits', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Pits);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PitsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PitsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
