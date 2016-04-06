<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    $this->load->database();
    $this->load->model('TodoItem_model');
    $data['items'] = $this->TodoItem_model->get_all();

    $this->load->helper('form');

		$this->load->view('todoitems_list', $data);
	}

  public function create() {
    $this->load->helper('url');
    $this->load->database();
    $this->load->model('TodoItem_model');
    $description = $this->input->post('description');
    $this->TodoItem_model->create($description);
    redirect('/', 'location', 302);
  }
}
