<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePits extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('pits');
        $table->addColumn('caminho', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => false,
        ]);
        $table->addColumn('ano', 'string', [
            'default' => null,
            'limit' => 4,
            'null' => false,
        ]);
        $table->addColumn('ativo', 'string', [
            'default' => 'S',
            'limit' => 1,
            'null' => true,
        ]);
        $table->addColumn('semestre', 'string', [
            'default' => null,
            'limit' => 1,
            'null' => false,
        ]);
        $table->addColumn('data', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('archive_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('employee_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->create();
    }
}
