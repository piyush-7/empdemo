<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Employee_db extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (department_id) REFERENCES table(id)');

    $this->dbforge->add_field(array(
      'employee_id' => array(
              'type' => 'INT',
              'constraint' => 5,
              'unsigned' => TRUE,
              'auto_increment' => TRUE
      ),
      'employee_name' => array(
              'type' => 'VARCHAR',
              'constraint' => '50',
      ),
      'employee_email' => array(
              'type' => 'VARCHAR',
              'constraint' => '50',
      ),
      'employee_mobile' => array(
        'type' => 'VARCHAR',
        'constraint' => '20',
),
      'employee_add' =>array(
        'type' => 'TEXT',
        'constraint' => '100',
),
      'employee_gender' =>array(
        'type' => 'VARCHAR',
        'constraint' => '50',
),
));
        $this->dbforge->add_key('employee_id', TRUE);
        $this->dbforge->create_table('employee_db');
  }

  public function down()
  {
    $this->dbforge->drop_table('employee_db');
  }
}