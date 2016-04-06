<?php
class TodoItem_model extends CI_Model {
  public function __construct()
  {
    $this->load->database();
  }

  public function get_pending()
  {
    $this->db->where('done_at IS NULL', null, false);
    $query = $this->db->get('todo_items');
    return $query->result_array();
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

    $this->db->insert('todo_items', $data);

    return $this->db->insert_id();
  }

  public function done($id) {
    $this->db->where('id', $id);
    $this->db->set('done_at', 'NOW()', FALSE);
    $this->db->update('todo_items');
  }
}
