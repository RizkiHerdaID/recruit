<?php

class Calculation_m extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('calculation', $data);
    }

    public function get_score($candidateId)
    {
        $this->db->select('score');
        $this->db->where('candidate_id', $candidateId);
        return $this->db->get('calculation')->result();
    }
}