<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PitsFixture
 */
class PitsFixture extends TestFixture
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
                'caminho' => 'Lorem ipsum dolor sit amet',
                'ano' => 'Lo',
                'ativo' => 'L',
                'semestre' => 'L',
                'created' => '2022-05-02 21:12:17',
                'modified' => '2022-05-02 21:12:17',
                'archive_id' => 1,
                'employee_id' => 1,
                'data' => 'Lorem ip',
            ],
        ];
        parent::init();
    }
}
