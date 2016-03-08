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
        if (!$this->tank_auth->is_logged_in()) {								// not logged in or not activated
            redirect('/auth/login/');
        } else {
            $profile = $this->profile_lib->getData();
            
            $this->form_validation->set_rules('firstname', 'ชื่อ', 'trim|required|xss_clean');
            $this->form_validation->set_rules('lastname', 'นามสกุล', 'trim|required|xss_clean');
            $this->form_validation->set_rules('organization_id', 'สถานศึกษา', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email', 'อีเมล์', 'trim|required|xss_clean');
            
            $this->form_validation->set_rules('firstname_en', 'firstname_en', 'trim|xss_clean');
            $this->form_validation->set_rules('lastname_en', 'lastname_en', 'trim|xss_clean');
            $this->form_validation->set_rules('student_id', 'student_id', 'trim|xss_clean');
//             $this->form_validation->set_rules('major_id', 'major_id', 'trim|xss_clean');
//             $this->form_validation->set_rules('group_id', 'group_id', 'trim|xss_clean');
            $this->form_validation->set_rules('edulevel', 'edulevel', 'trim|xss_clean');
            $this->form_validation->set_rules('religion_title', 'religion_title', 'trim|xss_clean');
            $this->form_validation->set_rules('dob', 'dob', 'trim|xss_clean');
            $this->form_validation->set_rules('age', 'age', 'trim|xss_clean');
            $this->form_validation->set_rules('congenital_disease', 'congenital_disease', 'trim|xss_clean');
            $this->form_validation->set_rules('drug_allergy', 'drug_allergy', 'trim|xss_clean');
            $this->form_validation->set_rules('blood_type', 'blood_type', 'trim|xss_clean');
            $this->form_validation->set_rules('experience_work', 'experience_work', 'trim|xss_clean');
            $this->form_validation->set_rules('experience_skill', 'experience_skill', 'trim|xss_clean');
            $this->form_validation->set_rules('experience_intesting', 'experience_intesting', 'trim|xss_clean');
            $this->form_validation->set_rules('experience_status', 'experience_status', 'trim|xss_clean');
            $this->form_validation->set_rules('experience_marry_name', 'experience_marry_name', 'trim|xss_clean');
            $this->form_validation->set_rules('experience_marry_cocupation', 'experience_marry_cocupation', 'trim|xss_clean');
            $this->form_validation->set_rules('emergency_name', 'emergency_name', 'trim|xss_clean');
            $this->form_validation->set_rules('emergency_address', 'emergency_address', 'trim|xss_clean');
            $this->form_validation->set_rules('emergency_mobile', 'emergency_mobile', 'trim|xss_clean');
            
            $this->form_validation->set_rules('hometown_no', 'hometown_no', 'trim|xss_clean');
            $this->form_validation->set_rules('hometown_moo', 'hometown_moo', 'trim|xss_clean');
            $this->form_validation->set_rules('hometown_subdistrict', 'hometown_subdistrict', 'trim|xss_clean');
            $this->form_validation->set_rules('hometown_district', 'hometown_district', 'trim|xss_clean');
            $this->form_validation->set_rules('hometown_province', 'hometown_province', 'trim|xss_clean');
            $this->form_validation->set_rules('hometown_postcode', 'hometown_postcode', 'trim|xss_clean');
            $this->form_validation->set_rules('hometown_mobile', 'hometown_mobile', 'trim|xss_clean');
            
            $this->form_validation->set_rules('current_address_no', 'current_address_no', 'trim|xss_clean');
            $this->form_validation->set_rules('current_address_moo', 'current_address_moo', 'trim|xss_clean');
            $this->form_validation->set_rules('current_address_subdistrict', 'current_address_subdistrict', 'trim|xss_clean');
            $this->form_validation->set_rules('current_address_district', 'current_address_district', 'trim|xss_clean');
            $this->form_validation->set_rules('current_address_province', 'current_address_province', 'trim|xss_clean');
            $this->form_validation->set_rules('current_address_postcode', 'current_address_postcode', 'trim|xss_clean');
            $this->form_validation->set_rules('current_address_mobile', 'current_address_mobile', 'trim|xss_clean');
            
            $this->form_validation->set_rules('advisor_id', 'advisor_id', 'trim|xss_clean');
            $this->form_validation->set_rules('trainer_id', 'trainer_id', 'trim|xss_clean');
            $this->form_validation->set_rules('company_id', 'company_id', 'trim|xss_clean');
            $this->form_validation->set_rules('internship_id', 'internship_id', 'trim|xss_clean');
        
            $data['errors'] = array();
            
            $input_data = $this->input->post();
            $input_data['user_id'] = $profile->user_id;
            if ($this->form_validation->run()) {								// validation ok
                if ($this->profile_lib->save($input_data)) {	// success
                    $data['messages'] = 'บันทึกข้อมูลเรียบร้อบ';
                    redirect('settings/profile');
                } else {														// fail
                    $errors = $this->tank_auth->get_error_message();
                    foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
                }
            }
            $data['colleges'] = $this->profile_lib->getColleges();
            $data['internship_items'] = $this->profile_lib->getInternship();
            $data['company_items'] = $this->profile_lib->getCompany();
            $data['trainer_items'] = $this->profile_lib->getTrainer();
            $data['advisor_items'] = $this->profile_lib->getAdvisor();
            
            $this->load->view('nav');
            $this->load->view('settings/profile', $data);
            $this->load->view('footer');
            
        }
        
        
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
