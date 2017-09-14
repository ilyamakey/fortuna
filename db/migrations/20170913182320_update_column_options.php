<?php

use Phinx\Migration\AbstractMigration;

class UpdateColumnOptions extends AbstractMigration
{

    public function up()
    {

      $table = $this->table('machines');
      $table
            ->changeColumn('trimming_machine', 'string', array('null' => true))
            ->changeColumn('looping_machine', 'string', array('null' => true))
            ->changeColumn('power_reel', 'string', array('null' => true))
            ->save();

    }

    public function down()
    {

      $table = $this->table('machines');
      $table
            ->changeColumn('trimming_machine', 'string')
            ->changeColumn('looping_machine', 'string')
            ->changeColumn('power_reel', 'string')
            ->save();

    }
}
