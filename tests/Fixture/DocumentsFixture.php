<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DocumentsFixture
 */
class DocumentsFixture extends TestFixture
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
                'ativo' => 'L',
                'created' => '2022-05-02 21:44:44',
                'modified' => '2022-05-02 21:44:44',
                'archive_id' => 1,
                'minister_id' => 1,
            ],
        ];
        parent::init();
    }
}
