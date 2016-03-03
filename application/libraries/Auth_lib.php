<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_lib{
    public $ci = null;
    public function __construct(){
        $this->ci =& get_instance();
    }
	public function isLogin(){
	    return false;
	}
	public function login(){
	    $email = $this->ci->input->post('email');
	    $password = $this->ci->input->post('password');
	    if($email=="student@demo.com" && $password=='123456'){
	        return true;
	    }
	    return false;
	}
}
