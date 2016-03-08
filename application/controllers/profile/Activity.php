<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Activity extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper(array(
            'form',
            'url'
        ));
        $this->load->library('form_validation');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
    }

    public function index()
    {
        $profile = $this->profile_lib->getData();
        
        $data = array();
        $data['items'] = $this->activity_lib->getItems($profile->user_id);
        
        $this->load->view('nav');
        $this->load->view('student/activity', $data);
        $this->load->view('footer');
    }

    public function form()
    {
        if (! $this->tank_auth->is_logged_in()) { // not logged in or not activated
            redirect('/auth/login/');
        } else {
            $profile = $this->profile_lib->getData();
            $day = $this->input->get_post('day', 1);
            $week = $this->input->get_post('week', 1);
            
            $this->form_validation->set_rules('activity', 'กิจกรรม/งานที่ปฏิบัติ', 'trim|required|xss_clean');
            $this->form_validation->set_rules('problem', 'ปัญหาและอุปสรรค', 'trim|required|xss_clean');
            $this->form_validation->set_rules('advantage', 'ประโยชน์ที่ได้รับ', 'trim|required|xss_clean');
            
            $data['errors'] = array();
            if ($this->form_validation->run()) { // validation ok
                if ($this->activity_lib->save(array(
                    'user_id' => $profile->user_id,
                    'day' => $day,
                    'week' => $week,
                    'activity' => $this->form_validation->set_value('activity'),
                    'problem' => $this->form_validation->set_value('problem'),
                    'advantage' => $this->form_validation->set_value('advantage')
                ))) { // success
                    $data['messages'] = 'บันทึกข้อมูลเรียบร้อย';
                    redirect('profile/activity/');
                } else { // fail
                    $errors = $this->tank_auth->get_error_message();
                    foreach ($errors as $k => $v)
                        $data['errors'][$k] = $this->lang->line($v);
                }
            }
            
            $data = array();
            $data['item'] = $this->activity_lib->getItem($profile->user_id, $day, $week);
            $data['day'] = $day;
            $data['week'] = $week;
            
            $this->load->view('nav');
            $this->load->view('student/activity_form', $data);
            $this->load->view('footer');
        }
    }
}
