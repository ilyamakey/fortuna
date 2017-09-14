<?php

use Phinx\Migration\AbstractMigration;

class CreateMachinesTable extends AbstractMigration
{

    public function change()
    {
        $table = $this->table('machines');
        $table
            ->addColumn('coiling way', 'string')
            ->addColumn('spring type', 'string')
            ->addColumn('model', 'string')
            ->addColumn('wire 800 min', 'float')
            ->addColumn('wire 800 max', 'integer')
            ->addColumn('wire 1300 min', 'float')
            ->addColumn('wire 1300 max', 'integer')
            ->addColumn('wire 1900 min', 'float')
            ->addColumn('wire 1900 max', 'integer')
            ->addColumn('spring od min', 'integer')
            ->addColumn('spring od max', 'integer')
            ->addColumn('productivity', 'integer')
            ->addColumn('trimming machine', 'string')
            ->addColumn('looping machine', 'string')
            ->addColumn('power reel', 'string')
            ->addColumn('mode', 'string')
            ->addColumn('description', 'text')
            ->create();
    }
}
