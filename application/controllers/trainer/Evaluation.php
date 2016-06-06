<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'controllers' . DIRECTORY_SEPARATOR . 'trainer' . DIRECTORY_SEPARATOR . 'BaseController.php';

class Evaluation extends BaseController
{

    public function index()
    {
        $profile = $this->profile_lib->getData();
        $trainer_id = $profile->user_id;
        
        $time_items = array();
        $activity_items = array();
        $student_items = array();
        
        // Time Items
        $sql = "SELECT * FROM time ";
        $query = $this->db->query($sql);
        $time_items = $query->result();
        
        // Activity Items
        $sql = "SELECT * FROM activity ";
        $query = $this->db->query($sql);
        $activity_items = $query->result();
        
        // Student Items
        $sql = "SELECT u.* FROM users as u
                LEFT JOIN users_student as us ON(us.user_id=u.id)
                    WHERE u.user_type='student' AND us.trainer_id={$trainer_id} ";
        $query = $this->db->query($sql);
        $student_items = $query->result();
        
        $data = array();
        $data['leftmenu'] = $this->load->view('trainer/menu', '', true);
        $data['student_items'] = $student_items;
        $data['time_items'] = $time_items;
        $data['activity_items'] = $activity_items;
        
        $this->load->view('nav');
        $this->load->view('trainer/evaluation/index', $data);
        $this->load->view('footer');
    }
}
