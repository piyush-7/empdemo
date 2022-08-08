<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Department_db extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field(array(
      'department_id' => array(
              'type' => 'INT',
              'constraint' => 5,
              'unsigned' => TRUE,
              'auto_increment' => TRUE
      ),
      'department_name' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
      ),
      'department_status' => array(
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
$this->dbforge->add_key('department_id', TRUE);
$this->dbforge->create_table('department_db');
  }

  public function down()
  {
    $this->dbforge->drop_table('department_db');
  }
}