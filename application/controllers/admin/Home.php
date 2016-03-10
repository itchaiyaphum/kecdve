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
		
		$activity = $this->factory_lib->getTable('Activity');
		$attachmentfiles = $this->factory_lib->getTable('AttachmentFiles');
		$attachmentphotos = $this->factory_lib->getTable('AttachmentPhotos');
		$course = $this->factory_lib->getTable('Course');
		$internship = $this->factory_lib->getTable('Internship');
		$loginattempts = $this->factory_lib->getTable('LoginAttempts');
		$organization = $this->factory_lib->getTable('Organization');
		$time = $this->factory_lib->getTable('time');
		$userautologin = $this->factory_lib->getTable('UserAutologin');
		$userprofiles = $this->factory_lib->getTable('UserProfiles');
		$usersstudent = $this->factory_lib->getTable('UsersStudent');
		$users = $this->factory_lib->getTable('Users');
		
		echo "<pre>";
		print_r($users);
	}
}
