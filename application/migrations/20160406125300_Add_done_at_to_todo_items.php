<?php defined("BASEPATH") or exit("No direct script access allowed");

  class Migration_Add_done_at_to_todo_items extends CI_Migration {

    public function up() {
      $this->dbforge->add_column('todo_items', array(
        'done_at' => array('type' => 'DATETIME', 'null' => TRUE)
      ));
    }

    public function down() {
      $this->dbforge->drop_column('todo_items', 'done_at');
    }
  }

