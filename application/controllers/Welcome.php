<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->database();
        $this->load->model('TodoItem_model');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data['items'] = $this->TodoItem_model->get_pending();

        $this->load->helper('form');

        $this->load->view('todoitems_list', $data);
    }

    public function create()
    {
        $description = $this->input->post('description');
        $this->TodoItem_model->create($description);
        redirect('/', 'location', 302);
    }

    public function done()
    {
        $this->TodoItem_model->done($this->input->get('id'));
        redirect('/', 'location', 302);
    }
}
