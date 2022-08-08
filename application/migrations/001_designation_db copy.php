<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Designation_db extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field(array(
      'designation_id' => array(
              'type' => 'INT',
              'constraint' => 5,
              'unsigned' => TRUE,
              'auto_increment' => TRUE
      ),
      'designation_name' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
      ),
      'designation_status' => array(
        'type' => 'TINYINT',
        'constraint' => 3,
        'default'=>1,
      ),

      'department_created' => array(
        'type' => 'varchar',
        'constraint' => 250,
        'null' => true,
        'on update' => 'NOW()'
      ),
      'department_updated' => array(
        'type' => 'varchar',
        'constraint' => 250,
        'null' => true,
        'on update' => 'NOW()'
      ),
));
$this->dbforge->add_key('designation_id', TRUE);
$this->dbforge->create_table('designation_db');
  }

  public function down()
  {
    $this->dbforge->drop_table('designation_db');
  }
}