<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Time extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index()
	{
	    $this->load->view('nav');
		$this->load->view('student/time');
		$this->load->view('footer');
	}
}
