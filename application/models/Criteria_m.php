<?php

class Criteria_m extends CI_Model
{
    /**
     * Input Data Kriteria
     *
     * @param $data
     * @return mixed
     */
    public function insert($data)
    {
        return $this->db->insert('criteria', $data);
    }

    /**
     * Ambil Semua Data Kriteria
     *
     * @param array $where - Array Filter berupa Where pada SQL
     * @return mixed
     */
    public function get_all($where = array())
    {
        if ($where){
            $this->db->where($where);
        }
        return $this->db->get('criteria')->result();
    }

    /**
     * Ambil Bobot Awal tiap Kriteria dengan ID Jabatan sebagai parameter
     *
     * @param $idPosition
     * @return mixed
     */
    public function get_weight_value($idPosition)
    {
        $this->db->select('weight_value');
        $this->db->where('position_id', $idPosition);
        return $this->db->get('criteria')->result();
    }

    /**
     * Ambil Daftar Kriteria untuk Tahap Wawancara
     *
     * @return array
     */
    public function get_interview_criteria()
    {
        $criteria = $this->arrayCriteria;
        $criteria = array_slice($criteria, 0, 7);
        return $criteria;
    }

    /**
     * Ambil Daftar Kriteria untuk Tahap Uji Kemampuan
     * @return array
     */
    public function get_competency_criteria()
    {
        $criteria = $this->arrayCriteria;
        $criteria = array_slice($criteria, 7, 13);
        return $criteria;
    }

    /**
     * Jumlahkan Bobot yang akan digunakan untuk menghitung nilai Bobot Awal
     *
     * @param $positionId
     * @return mixed
     */
    public function get_total_weight($positionId)
    {
        $this->db->select('SUM(weight) as total');
        $this->db->where('position_id', $positionId);
        $result = $this->db->get('criteria')->result();
        return $result[0]->total;
    }

    /**
     * Update Bobot
     *
     * @param $updateData
     * @param $id
     * @return mixed
     */
    public function update_weight($updateData, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('criteria', $updateData);
    }

    /**
     * @param $updateData
     * @param $criteriaId
     * @param $positionID
     * @return mixed
     */
    public function update_weight_value($updateData, $criteriaId, $positionID)
    {
        $this->db->where('position_id', $positionID);
        $this->db->where('criteria_id', $criteriaId);
        return $this->db->update('criteria', $updateData);
    }

    /**
     * @return array
     */
    public function get_criteria()
    {
        return $this->arrayCriteria;
    }

    /**
     * @var array
     */
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