<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();
        
        $redirect = $this->input->get_post('redirect','');
        
        if($this->auth_lib->isLogin()){
            redirect(base64_decode($redirect));
        }
    }
    public function index()
    {
        redirect('auth/login');
    }
	public function login()
	{
	    if($this->auth_lib->login()){
	        redirect('profile');
	    }
		$this->load->view('nav');
		$this->load->view('auth/login');
		$this->load->view('footer');
	}
	
}
