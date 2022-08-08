<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Leave_db extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field(array(
      'leave_id' => array(
              'type' => 'INT',
              'constraint' => 5,
              'unsigned' => TRUE,
              'auto_increment' => TRUE
      ),
      'reason' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
      ),
      'starting_date' => array(
              'type' => 'DATE',
              'null' => TRUE,
      ),
      'ending_date' => array(
              'type' => 'DATE',
              'null' => TRUE,
      ),
));
$this->dbforge->add_key('leave_id', TRUE);
$this->dbforge->create_table('leave_db');
  }

  public function down()
  {
    $this->dbforge->drop_table('leave_db');
  }
}