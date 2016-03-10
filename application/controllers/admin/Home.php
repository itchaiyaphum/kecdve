<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        }else{
            $profile = $this->profile_lib->getData();
            if($profile->user_type!="admin"){
                redirect('/admin_restricted_access/');
            }
        }
    }
	public function index()
	{
		echo "Hello Admin";
		
		$activity = $this->factory_lib->getTable('activity');
		$attachmentfiles = $this->factory_lib->getTable('attachmentfiles');
		$attachmentphotos = $this->factory_lib->getTable('attachmentphotos');
		$course = $this->factory_lib->getTable('course');
		$internship = $this->factory_lib->getTable('internship');
		$loginattempts = $this->factory_lib->getTable('loginattempts');
		$organization = $this->factory_lib->getTable('organization');
		$time = $this->factory_lib->getTable('time');
		$userautologin = $this->factory_lib->getTable('userautologin');
		$userprofiles = $this->factory_lib->getTable('userprofiles');
		$usersstudent = $this->factory_lib->getTable('usersstudent');
		$users = $this->factory_lib->getTable('users');
		
		echo "<pre>";
		print_r($users);
	}
}
