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

    public function get_all_result()
    {
        $this->db->select('candidate.id, candidate.name, candidate.gender, position_id, position.name as position, position_score, position_percentage, placement_plan');
        $this->db->join('position', 'position.id = candidate.position_id');
        $this->db->where('status', 2);
        $this->db->order_by('position.id', 2);
        return $this->db->get('candidate')->result();
    }

}