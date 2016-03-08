<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('tank_auth');
        $this->lang->load('tank_auth');
    }
    
    public function index()
    {
        redirect('settings/profile');
    }

    public function profile()
    {
        if ($this->form_validation->run()) {
            
        }
        $this->load->view('nav');
        $this->load->view('settings/profile');
        $this->load->view('footer');
    }
    public function password()
    {
        if (!$this->tank_auth->is_logged_in()) {								// not logged in or not activated
			redirect('/auth/login/');
		} else {
			$this->form_validation->set_rules('old_password', 'Old Password', 'trim|required|xss_clean');
			$this->form_validation->set_rules('new_password', 'New Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
			$this->form_validation->set_rules('confirm_new_password', 'Confirm new Password', 'trim|required|xss_clean|matches[new_password]');

			$data['errors'] = array();

			if ($this->form_validation->run()) {								// validation ok
				if ($this->tank_auth->change_password(
						$this->form_validation->set_value('old_password'),
						$this->form_validation->set_value('new_password'))) {	// success
					$data['messages'] = $this->lang->line('auth_message_password_changed');
				} else {														// fail
					$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
				}
			}
			$this->load->view('nav');
			$this->load->view('settings/password', $data);
			$this->load->view('footer');
		}
    }
    
    private function _show_message($message)
    {
        $this->session->set_flashdata('message', $message);
    }
}
