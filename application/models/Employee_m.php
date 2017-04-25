<?php

/**
 * Created by PhpStorm.
 * User: Rizki Herdatullah
 * Date: 4/22/2017
 * Time: 1:19
 */
class Employee_m extends CI_Model
{
    public function insert($data)
    {
        return $this->db->insert('employee', $data);
    }

    public function get_all()
    {
        $this->db->select('employee.*, position.name as position');
        $this->db->join('position', 'position.id = employee.position_id');
        return $this->db->get('employee')->result();
    }
}