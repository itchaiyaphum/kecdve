<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_lib
{

    public function __construct()
    {
        $this->ci = & get_instance();
    }

    public function getData()
    {
        $profile = new stdClass();
        $profile->firstname = "Wannapong";
        $profile->lastname = "Kumjumpon";
        $profile->user_type = "student";
        $profile->thumbnail = "/storage/profiles/profile-556b099b7aff3.jpg";
        
        return $profile;
    }
}
