<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request_internship extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Request_internship_model', 'request_internship');
    }

    public function index()
    {
        $this->load->view('nav');
        $this->load->view('student/request_internship');
        $this->load->view('footer');
    }

    public function print_doc()
    {
        $data = array();
        $data['data'] = $this->request_internship->data_print();
        $this->load->library('Sawasdee');
        $this->load->view('student/request_internship_print', $data);
    }
}
