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
                $this->saveFiles($data);
                return array(
                    'user_id' => $data['user_id']
                );
            }
        }else{
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');
            if ($this->ci->db->insert('activity', $data)) {
                $user_id = $this->ci->db->insert_id();
                $this->saveFiles($data);
                return array(
                    'user_id' => $user_id
                );
            }
        }
        return NULL;
    }
    
    private function saveFiles($data){
        $config = array();
        $config['upload_path'] = './storage/files/';
        $config['allowed_types'] = 'zip|rar|pdf|jpg|png|xls|xlsx|doc|docx';
        $config['file_name'] = md5(microtime());
        $config['max_size']	= '10240';
        
        $this->ci->load->library('upload', $config);
        
        $profile = $this->ci->profile_lib->getData();
        
        if($this->ci->upload->do_upload('file1')){
            $file1_data = $this->ci->upload->data();
            $this->ci->db->insert('attachment_files', array(
                'file_name' => $file1_data['file_name'],
                'file_ext' => $file1_data['file_ext'],
                'orig_name' => $file1_data['client_name'],
                'internship_id' => $profile->internship_id,
                'user_id' => $data['user_id'],
                'week' => $data['week'],
                'day' => $data['day'],
            ));
        }
        /*
        $config['file_name'] = md5(microtime());
        $this->ci->upload->initialize($config);
        if($this->ci->upload->do_upload('file2')){
            $file2_data = $this->ci->upload->data();
            $this->ci->db->insert('attachment_files', array(
                'file_name' => $file2_data['file_name'],
                'file_ext' => $file2_data['file_ext'],
                'orig_name' => $file2_data['client_name'],
                'internship_id' => $profile->internship_id,
                'user_id' => $data['user_id'],
                'week' => $data['week'],
                'day' => $data['day'],
            ));
        }
        $config['file_name'] = md5(microtime());
        $this->ci->upload->initialize($config);
        if($this->ci->upload->do_upload('file3')){
            $file3_data = $this->ci->upload->data();
            $this->ci->db->insert('attachment_files', array(
                'file_name' => $file3_data['file_name'],
                'file_ext' => $file3_data['file_ext'],
                'orig_name' => $file3_data['client_name'],
                'internship_id' => $profile->internship_id,
                'user_id' => $data['user_id'],
                'week' => $data['week'],
                'day' => $data['day'],
            ));
        }
        */
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
    
    public function getFileItems($user_id = 0, $internship_id = 0)
    {
        $this->ci->db->where('user_id', $user_id);
        $this->ci->db->where('internship_id', $internship_id);
        $query = $this->ci->db->get('attachment_files');
        if ($query->num_rows())
            return $query->result();
        return NULL;
    }
    
    public function removeFile($id = 0)
    {
        $this->ci->db->where('id', $id);
        if ($this->ci->db->delete('attachment_files'))
            return true;
        return false;
    }
}
