<?php

class TodoItem_model_test extends TestCase
{
  public function test_new_items_are_pending()
  {
    $this->assertEquals(0, count($this->CI->TodoItem_model->get_pending()));
    $this->CI->TodoItem_model->create('Something to do');
    $this->assertEquals(1, count($this->CI->TodoItem_model->get_pending()));
  }

  public function test_done_items_are_not_pending()
  {
    $this->assertEquals(0, count($this->CI->TodoItem_model->get_pending()));
    $id = $this->CI->TodoItem_model->create('Something to do');
    $this->CI->TodoItem_model->done($id);
    $this->assertEquals(0, count($this->CI->TodoItem_model->get_pending()));
  }
}
