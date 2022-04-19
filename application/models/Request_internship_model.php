<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request_internship_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function data_print()
    {
        $data = new stdClass();
        $user_id = $this->session->user_id;
        $std = $this->db->query(
            "SELECT 
                `users_student`.*,
                `college`.`name` AS college_name, 
                `department`.`name` AS dpm_name,
                `edulevel`.`name` as edulevel
            FROM `users_student`
            LEFT JOIN `college` ON `college`.`id`=`users_student`.`college_id`
            LEFT JOIN `department` ON `department`.`id`=`users_student`.`department_id`
            LEFT JOIN `edulevel` ON .`edulevel`.`id`=`users_student`.`edulevel`
            WHERE `users_student`.`user_id` = ?",
            array($user_id)
        );
        $data->student = $std->row();

        $internship = $this->db->query(
            "SELECT * FROM `internship` WHERE `id`=?",
            array($data->student->internship_id)
        );
        $data->internship = $internship->row();

        $company = $this->db->query(
            "SELECT * FROM `company` WHERE `id`=?",
            array($data->student->company_id)
        );
        $data->company = $company->row();
        
        return $data;
    }
}
