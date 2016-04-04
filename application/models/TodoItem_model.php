<?php
class TodoItem_model extends CI_Model {
  public function __construct()
  {
    $this->load->database();
  }

  public function get_all()
  {
    $query = $this->db->get('todo_items');
    return $query->result_array();
  }

  public function create($description)
  {
    $data = array(
      'description' => $description,
    );

    return $this->db->insert('todo_items', $data);
  }
}
