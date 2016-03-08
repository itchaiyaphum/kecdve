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
        $profile->firstname = $this->ci->tank_auth->get_firstname();
        $profile->lastname = $this->ci->tank_auth->get_lastname();
        $profile->user_type = $this->ci->tank_auth->get_usertype();
        $profile->email = $this->ci->tank_auth->get_email();
        $profile->thumbnail = $this->ci->tank_auth->get_thumbnail();
        $profile->organization_id = $this->ci->tank_auth->get_organization_id();
        
        return $profile;
    }

    public function getColleges()
    {
        $this->ci->db->where('alias', 'college');
        $this->ci->db->where('published', 1);
        $query = $this->ci->db->get('organization');
        if ($query->num_rows())
            return $query->result();
        return NULL;
    }
}
