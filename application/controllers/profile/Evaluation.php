<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Evaluation extends CI_Controller
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
        
        $this->executeRedirection();
    }
    
    private function executeRedirection(){
        $profile = $this->profile_lib->getData();
        if($profile->user_type=="advisor"){
            redirect('/advisor/');
        }else if($profile->user_type=="trainer"){
            redirect('/trainer/');
        }else if($profile->user_type=="staff"){
            redirect('/staff/');
        }
    }

    public function index()
    {
        if (! $this->tank_auth->is_logged_in()) { // not logged in or not activated
            redirect('/auth/login/');
        } else {
            if($this->profile_lib->checkNotChooseInternship()){
                $this->load->view('nav');
                $this->load->view('student/changeprofile');
                $this->load->view('footer');
            } else {
                $this->load->view('nav');
                $this->load->view('student/evaluation');
                $this->load->view('footer');
            }
        }
    }
}
