<?php defined("BASEPATH") or exit("No direct script access allowed");

  class Migration_Add_todo_items extends CI_Migration {

    public function up() {
      $this->dbforge->add_field('id');
      $this->dbforge->add_field(array(
        'description' => array(
          'type' => 'TEXT',
          'null' => TRUE,
        ),
      ));
      $this->dbforge->create_table('todo_items');
    }

    public function down() {
      $this->dbforge->drop_table('todo_items');
    }

  }

