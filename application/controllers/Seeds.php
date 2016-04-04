<?php
class Seeds extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->input->is_cli_request())
      show_404();

    $this->load->model('TodoItem_model');
  }

  public function seed()
  {
    $this->TodoItem_model->create('My first item');
  }
}
