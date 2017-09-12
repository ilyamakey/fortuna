<?php

use Phinx\Migration\AbstractMigration;

class UpdateTable extends AbstractMigration
{

    public function change()
    {
      $table = $this->table('machines');
      $table
          ->renameColumn('coiling way', 'coiling_way')
          ->renameColumn('spring type', 'spring_type')
          ->renameColumn('wire 800 min', 'wire_800_min')
          ->renameColumn('wire 800 max', 'wire_800_max')
          ->renameColumn('wire 1300 min', 'wire_1300_min')
          ->renameColumn('wire 1300 max', 'wire_1300_max')
          ->renameColumn('wire 1900 min', 'wire_1900_min')
          ->renameColumn('wire 1900 max', 'wire_1900_max')
          ->renameColumn('spring od min', 'spring_od_min')
          ->renameColumn('spring od max', 'spring_od_max')
          ->renameColumn('trimming machine', 'trimming_machine')
          ->renameColumn('looping machine', 'looping_machine')
          ->renameColumn('power reel', 'power_reel')
          ->update();

    }
}
