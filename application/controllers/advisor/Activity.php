<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'controllers' . DIRECTORY_SEPARATOR . 'advisor' . DIRECTORY_SEPARATOR . 'BaseController.php';

class Activity extends BaseController
{

    public function index()
    {
        $data = array();
        $data['leftmenu'] = $this->load->view('advisor/menu', '', true);
        
        $this->load->view('nav');
        $this->load->view('advisor/activity/index', $data);
        $this->load->view('footer');
    }
}
