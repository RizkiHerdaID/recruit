<?php

class Calculation_m extends CI_Model
{
    /**
     * Tambahkan Data Baru
     *
     * @param $data
     */
    public function insert($data)
    {
        $this->db->insert('calculation', $data);
    }

    /**
     * Ambil Semua Nilai dari Kandidat dengan ID Kandidat sebagai Parameter
     *
     * @param $candidateId
     * @return mixed
     */
    public function get_score($candidateId)
    {
        $this->db->select('score');
        $this->db->where('candidate_id', $candidateId);
        return $this->db->get('calculation')->result();
    }
}