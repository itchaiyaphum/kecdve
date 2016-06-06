<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'controllers' . DIRECTORY_SEPARATOR . 'advisor' . DIRECTORY_SEPARATOR . 'BaseController.php';

class Evaluation extends BaseController
{

    public function index()
    {
        $profile = $this->profile_lib->getData();
        $advisor_id = $profile->user_id;
        
        $student_items = array();
        
        $sql = "SELECT u.* FROM users as u 
                LEFT JOIN users_student as us ON(us.user_id=u.id)
                    WHERE u.user_type='student' AND us.advisor_id={$advisor_id}";
        $query = $this->db->query($sql);
        $student_items = $query->result();
        
        $data = array();
        $data['leftmenu'] = $this->load->view('advisor/menu', '', true);
        $data['student_items'] = $student_items;
        
        $this->load->view('nav');
        $this->load->view('advisor/evaluation/index', $data);
        $this->load->view('footer');
    }
}
