<?php

class Criteria_m extends CI_Model
{
    public function insert($data)
    {
        return $this->db->insert('criteria', $data);
    }

    public function get_all($where = array())
    {
        if ($where){
            $this->db->where($where);
        }
        return $this->db->get('criteria')->result();
    }

    public function get_total_weight($positionId)
    {
        $this->db->select('SUM(weight) as total');
        $this->db->where('position_id', $positionId);
        $result = $this->db->get('criteria')->result();
        return $result[0]->total;
    }

    public function update_weight_and_stage($updateData, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('criteria', $updateData);
    }

    public function update_weight_value($updateData, $criteriaId, $positionID)
    {
        $this->db->where('position_id', $positionID);
        $this->db->where('criteria_id', $criteriaId);
        return $this->db->update('criteria', $updateData);
    }

    public function get_criteria()
    {
        return $this->arrayCriteria;
    }

    private $arrayCriteria = array(
        'CRI001' => 'Latar Belakang',
        'CRI002' => 'Pengalaman Kerja',
        'CRI003' => 'Pengalaman Teknis',
        'CRI004' => 'Minat Kerja',
        'CRI005' => 'Kesigapan Mental',
        'CRI006' => 'Penampilan',
        'CRI007' => 'Umur',
        'CRI008' => 'Penguasaan Secara Teoritis	',
        'CRI009' => 'Menguasai Secara Teknis',
        'CRI010' => 'Kemampuan Menangani Masalah Teknis',
        'CRI011' => 'Kecepatan',
        'CRI012' => 'Daya Tangkap',
        'CRI013' => 'Riwayat Kesehatan',
    );
}