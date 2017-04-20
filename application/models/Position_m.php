<?php

class Position_m extends CI_Model
{
    /**
     * Dapatkan Semua Jabatan yang berstatus 'Tidak di Hapus'
     *
     * @return mixed
     */
    public function get_all()
    {
        $this->db->where('deleted', '0');
        return $this->db->get('position')->result();
    }

    /**
     * Ambil Data Jabatan dengan ID Jabatan sebagai Paramenter
     *
     * @param $idPosition
     * @return mixed
     */
    public function get($idPosition)
    {
        $this->db->where('id', $idPosition);
        $this->db->where('deleted', '0');
        return $this->db->get('position')->result();
    }

    /**
     * Tambahkan Data Jabatan Baru
     *
     * @param $data
     * @return mixed
     */
    public function insert($data)
    {
        return $this->db->insert('position', $data);
    }

    /**
     * Dapatkan Nilai ID Terakhir
     *
     * @return bool
     */
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

    /**
     * Hapus Data Jabatan dengan menjadikan Kolom Deleted menjadi '1'
     *
     * @param $idPositon
     */
    public function delete($idPositon)
    {
        $this->db->where('id', $idPositon);
        $this->db->update('position', array('deleted' => '1'));
    }

    /**
     * Menghapus data Jabatan terakhir apabila terjadi kesalahan -
     * saat proses input bobot kriteria
     */
    public function destroy_last_id()
    {
        $this->db->where('id', $this->last_id());
        $this->db->delete('position');
    }

}