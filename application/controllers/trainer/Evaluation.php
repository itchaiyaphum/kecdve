<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'controllers' . DIRECTORY_SEPARATOR . 'trainer' . DIRECTORY_SEPARATOR . 'BaseController.php';

class Evaluation extends BaseController
{

    public function index()
    {
        $student_items = array();
        
        $sql = "SELECT u.* FROM users as u
                    WHERE u.user_type='student' ";
        $query = $this->db->query($sql);
        $student_items = $query->result();
        
        $data = array();
        $data['leftmenu'] = $this->load->view('trainer/menu', '', true);
        $data['student_items'] = $student_items;
        
        $this->load->view('nav');
        $this->load->view('trainer/evaluation/index', $data);
        $this->load->view('footer');
    }
}
