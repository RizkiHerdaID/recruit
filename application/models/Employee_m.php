<?php

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
        $this->db->where('employee.deleted', '0');
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

    /**
     * Update Data Pegawai
     *
     * @param $data
     * @param $id
     * @return mixed
     */
    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('employee', $data);
    }

    /**
     * Hapus Data Pegawai dengan Mengganti Deleted menjadi 1
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        $data['deleted'] = '1';
        $this->db->where('id', $id);
        return $this->db->update('employee', $data);
    }
}