<?php

class TestCase extends CIPHPUnitTestCase
{
  public function setUp() {
    $this->resetInstance();
    $this->CI->load->database();
    $this->CI->db->query('DELETE FROM todo_items');
    $this->CI->load->model('TodoItem_model');
  }
}
