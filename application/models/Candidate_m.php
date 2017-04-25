<?php

class Candidate_m extends CI_Model
{
    /**
     * Menambahkan Data Kandidat Baru
     *
     * @param $data
     * @return mixed
     */
    public function insert($data)
    {
        return $this->db->insert('candidate', $data);
    }

    /**
     * Update Data Kandidat Baru
     *
     * @param $data
     * @param $id
     * @return mixed
     */
    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update('candidate', $data);
    }

    /**
     * Mengambil Semua Data Kandidat yang Tidak di Hapus
     *
     * @return mixed
     */
    public function get_all()
    {
        $this->db->where('deleted', '0');
        return $this->db->get('candidate')->result();
    }

    /**
      * Mengambil Data Kandidat dengan ID sebagai Parameter dan Tidak di Hapus
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        $this->db->where('id', $id);
        $this->db->where('deleted', '0');
        return $this->db->get('candidate')->result();
    }

    /**
     * Ambil Data Kandidat yang siap Tahap Wawancara
     *
     * @return mixed
     */
    public function get_all_to_interview()
    {
        $this->db->where('status', 0);
        $this->db->or_where('status', -1);
        $this->db->where('deleted', '0');
        return $this->db->get('candidate')->result();
    }

    /**
     * Ambil Data Kandidat yang siap Tahap Uji Kemampuan
     *
     * @return mixed
     */
    public function get_all_to_test()
    {
        $this->db->where('status', 1);
        $this->db->where('deleted', '0');
        return $this->db->get('candidate')->result();
    }

    /**
     * Ambil Hasil Rekomendasi Kandidat yang Selasi Semua Tahap
     *
     * @return mixed
     */
    public function get_all_result()
    {
        $this->db->select('candidate.id, candidate.name, candidate.gender, candidate.photo, position_id, position.name as position, position_score, position_percentage, placement_plan');
        $this->db->join('position', 'position.id = candidate.position_id');
        $this->db->where('status', 2);
        $this->db->where('candidate.deleted', '0');
        $this->db->order_by('position.id', 2);
        return $this->db->get('candidate')->result();
    }

    /**
     * Hapus Kandidat dengan mengubah data kolom deleted menjadi 1
     *
     * @param $idCandidate
     * @return mixed
     */
    public function delete($idCandidate)
    {
        $this->db->where('id', $idCandidate);
        return $this->db->update('candidate', array('deleted' => '1'));
    }

}