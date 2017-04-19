<?php

class Candidate_m extends CI_Model
{
    public function insert($data)
    {
        return $this->db->insert('candidate', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('candidate', $data);
    }

    public function get_all()
    {
        return $this->db->get('candidate')->result();
    }

    public function get($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('candidate')->result();
    }

    public function get_all_to_interview()
    {
        $this->db->where('status', 0);
        return $this->db->get('candidate')->result();
    }

    public function get_all_to_test()
    {
        $this->db->where('status', 1);
        return $this->db->get('candidate')->result();
    }

}