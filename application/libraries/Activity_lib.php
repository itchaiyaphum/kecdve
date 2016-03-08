<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Activity_lib
{

    public $ci = null;

    public function __construct()
    {
        $this->ci = & get_instance();
    }

    public function save($data)
    {
        $this->ci->db->where('user_id', $data['user_id']);
        $this->ci->db->where('day', $data['day']);
        $this->ci->db->where('week', $data['week']);
        $query = $this->ci->db->get('activity');
        if ($query->num_rows()){
            $data['updated_at'] = date('Y-m-d H:i:s');
            $this->ci->db->where('user_id', $data['user_id']);
            $this->ci->db->where('day', $data['day']);
            $this->ci->db->where('week', $data['week']);
            if ($this->ci->db->update('activity', $data)) {
                return array(
                    'user_id' => $data['user_id']
                );
            }
        }else{
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');
            if ($this->ci->db->insert('activity', $data)) {
                $user_id = $this->ci->db->insert_id();
                return array(
                    'user_id' => $user_id
                );
            }
        }
        return NULL;
    }

    public function getItem($user_id = 0, $day = 0, $week = 0)
    {
        $this->ci->db->where('user_id', $user_id);
        $this->ci->db->where('day', $day);
        $this->ci->db->where('week', $week);
        $query = $this->ci->db->get('activity');
        if ($query->num_rows())
            return $query->row();
        return NULL;
    }

    public function getItems($user_id = 0)
    {
        $this->ci->db->where('user_id', $user_id);
        $query = $this->ci->db->get('activity');
        if ($query->num_rows())
            return $query->result();
        return NULL;
    }
}
