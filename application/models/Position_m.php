<?php

class Position_m extends CI_Model
{
    public function get_all()
    {
        $this->db->where('deleted', '0');
        return $this->db->get('position')->result();
    }

    public function get($idPosition)
    {
        $this->db->where('id', $idPosition);
        $this->db->where('deleted', '0');
        return $this->db->get('position')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('position', $data);
    }

    public function last_id()
    {
        $this->db->select('id');
        $this->db->limit(1);
        $this->db->order_by('id', 'Desc');
        if($position = $this->db->get('position')->result()){
            return $position[0]->id;
        } else {
            return FALSE;
        }
    }

}