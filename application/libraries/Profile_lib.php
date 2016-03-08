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
        $profile->user_id = NULL;
        $profile->firstname = NULL;
        $profile->lastname = NULL;
        $profile->user_type = NULL;
        $profile->email = NULL;
        $profile->thumbnail = NULL;
        $profile->organization_id = NULL;
        
        $this->ci->db->where('id', $this->ci->tank_auth->get_user_id());
        $query = $this->ci->db->get('users');
        if ($query->num_rows()){
            $row = $query->row();
        
            $profile->user_id = $row->id;
            $profile->firstname = $row->firstname;
            $profile->lastname = $row->lastname;
            $profile->user_type = $row->user_type;
            $profile->email = $row->email;
            $profile->thumbnail = $row->thumbnail;
            $profile->organization_id = $row->organization_id;
        }
        
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

    public function save($data)
    {
        $data['modified'] = date('Y-m-d H:i:s');
        $this->ci->db->where('id', $data['id']);
        if ($this->ci->db->update('users', $data)) {
            return true;
        }
        return NULL;
    }
}
