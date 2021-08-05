<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model("dashboard_model");
    }

    public function index()
    {
        $data = $this->dashboard_model->get(array('title'=>'test2'));
        $this->load->view('dashboard/editor', $data);
    }

    public function save()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', '제목', 'required');
        $this->form_validation->set_rules('content', '내용', 'required');

        echo $this->input->post('content');

        if ($this->form_validation->run() === false) {
            echo "validation false";
        } else {
            $this->dashboard_model->save();
        }
    }
}
