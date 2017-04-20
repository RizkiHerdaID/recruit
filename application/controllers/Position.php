<?php

class Position extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('position_m');
        $this->load->model('criteria_m');
    }

    /**
     * Menampilkan Daftar Jabatan
     * Terdapat Modal untuk Menerima Input Data Jabatan Baru
     */
    function index()
    {
        $data['page'] = 'position.index';
        // Dapatkan Daftar Jabatan
        $data['positions'] = $this->position_m->get_all();
        // Dapatkan Daftar Kriteria untuk Input Data Jabatan Baru
        $data['criteria'] = $this->criteria_m->get_criteria();
        $this->load->view('layout', $data);
    }

    /**
     *  Simpan Data Jabatan Baru
     */
    public function store()
    {
        // Tambahkan Data Baru ke Tabel Posisi
        $data = $this->input->post();
        $position = array('name' => $data['nama']);
        if(!$this->position_m->insert($position)) {
            $this->session->set_flashdata('message', array('danger', '<b>Gagal!</b> Mohon Cek Nama Jabatan Anda'));
        }
        unset($data['nama']); // Hapus field nama dari array data
        // Tambahkan Setiap Bobot Kriteria dan Tahap Kriteria ke Table Kriteria
        $positionId = $this->position_m->last_id();
        foreach ($data['bobot'] as $key => $value) {
            $insertCriteria = array(
                'position_id' => $positionId,
                'criteria_id' => $data['criteria_id'][$key],
                'weight' => $data['bobot'][$key],
            );
            if(!$this->criteria_m->insert($insertCriteria)){
                $this->session->set_flashdata('message', array('danger', '<b>Gagal!</b> Kesalahan Saat Menambahkan Bobot Kriteria'));
                $this->position_m->destroy_last_id();
                redirect('position');
            }
        }
        // Hitung Bobot Awal untuk Setiap Kriteria
        $this->calculate_weight_value();
        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Jabatan telah di Simpan'));
        redirect('position');
    }

    /**
     * Menampilkan Detail Jabatan
     *
     * @param $positionID
     */
    public function detail($positionID)
    {
        $data['page'] = 'position.detail';
        $data['position'] = $this->position_m->get($positionID);
        $data['criteria'] = $this->criteria_m->get_all(array('position_id' => $positionID));
        $data['criteriaName'] = $this->criteria_m->get_criteria();
        $this->load->view('layout', $data);
    }

    /**
     * Update Data Jabatan
     *
     * @param $positionId - ID Jabatan yang akan di Update
     */
    public function update($positionId)
    {
        $data = $this->input->post();
        // Update Bobot Kriteria
        foreach ($data['bobot'] as $key => $value) { // Diulang sebanyak 13 kali sesuai banyaknya kriteria. $key 0..12
            $updateCriteria = array(
                'weight' => $data['bobot'][$key],
            );
            // Update Bobot Kriteria
            $this->criteria_m->update_weight($updateCriteria, $data['id'][$key]); // id = ID Jabatan & Bobot untuk Kriteria ke $key
        }
        // Update Nilai Bobot Awal
        $this->calculate_weight_value($positionId);
        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Jabatan telah di Update'));
        redirect('position');
    }

    /**
     * Menghapus dengan cara mengganti kolom deleted menjadi '1' pada tabel Position
     *
     * @param $idPosition - ID Jabatan yang akan di hapus
     */
    public function delete($idPosition)
    {
        $this->position_m->delete($idPosition);
        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Jabatan telah di Hapus'));
        redirect('position');
    }

    /**
     * @param null $positionID - Jika Diisi Maka Di Anggap Update Data Bobot Awal untuk posisiton_id = $positionID
     */
    public function calculate_weight_value($positionID = NULL)
    {
        // Memulai untuk Update Bobot Awal
        if(!$positionID){ // Jika ID Posisi NULL Maka Akan dianggap Insert Data Baru
            $positionID = $this->position_m->last_id();
        }
        $criteria = $this->criteria_m->get_all(array('position_id' => $positionID));
        // Dapatkan Total Bobot
        $total_bobot = $this->criteria_m->get_total_weight($positionID);
        // Mulai Update Bobot Awal
        foreach ($criteria as $list) {
            $bobot_awal = $list->weight / $total_bobot; // Perhitungan Bobot awal
            $this->criteria_m->update_weight_value(array('weight_value' => $bobot_awal), $list->criteria_id, $positionID);
        }
    }
}