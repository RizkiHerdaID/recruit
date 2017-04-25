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

    /**
     * Mengambil Semua Data Pegawai
     *
     * @return mixed
     */
    public function get_all()
    {
        $this->db->select('employee.*, position.name as position');
        $this->db->join('position', 'position.id = employee.position_id');
        return $this->db->get('employee')->result();
    }

    /**
     * Mengambil Data Pegawai dengan ID sebagai Parameter dan Tidak di Hapus
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        $this->db->where('id', $id);
        $this->db->where('deleted', '0');
        return $this->db->get('employee')->result();
    }
}