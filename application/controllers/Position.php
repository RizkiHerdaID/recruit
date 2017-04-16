<?php

class Position extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('position_m');
        $this->load->model('criteria_m');
    }

    function index()
    {
        $data['page'] = 'position.index';
        $data['positions'] = $this->position_m->get_all();
        $data['criteria'] = $this->criteria_m->get_criteria();
        $this->load->view('layout', $data);
    }

    /**
     *
     */
    public function store()
    {
        // Tambahkan Data Baru ke Tabel Posisi
        $data = $this->input->post();
        $position = array('name' => $data['nama']);
        $this->position_m->insert($position);
        unset($data['nama']);
        // Tambahkan Setiap Kriteria Yang Di Inginkan
        $positionId = $this->position_m->last_id();
        foreach ($data['bobot'] as $key => $value) {
            $insertCriteria = array(
                'position_id' => $positionId,
                'criteria_id' => $data['criteria_id'][$key],
                'weight' => $data['bobot'][$key],
                'stage' => $data['tahap'][$key],
            );
            $this->criteria_m->insert($insertCriteria);
        }
        $this->calculate_weight_value();

        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Jabatan telah di Simpan'));
        redirect('position');
    }

    public function update($positionId)
    {
        $data = $this->input->post();
        // Update Bobot & Tahap Setiap Kriteria
        foreach ($data['bobot'] as $key => $value) {
            $updateCriteria = array(
                'weight' => $data['bobot'][$key],
                'stage' => $data['tahap'][$key],
            );
            $this->criteria_m->update_weight_and_stage($updateCriteria, $data['id'][$key]);
        }
        $this->calculate_weight_value($positionId);
        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Jabatan telah di Update'));
        redirect('position');
    }

    public function detail($positionID)
    {
        $data['page'] = 'position.detail';
        $data['position'] = $this->position_m->get($positionID);
        $data['criteria'] = $this->criteria_m->get_all(array('position_id' => $positionID));
        $data['criteriaName'] = $this->criteria_m->get_criteria();
        $this->load->view('layout', $data);
    }

    public function delete()
    {
        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Jabatan telah di Hapus'));
        redirect('position');
    }

    /**
     * @param null $positionID - Jika Diisi Maka Di Anggap Update Data Bobot Awal pada ID Posisi
     */
    public function calculate_weight_value($positionID = NULL)
    {
        // Memulai untuk Update Bobot Awal
        if(!$positionID){ // Jika ID Posisi tidak di dapatkan Maka Akan dianggap Insert Data Baru
            $positionID = $this->position_m->last_id();
        }
        $criteria = $this->criteria_m->get_all(array('position_id' => $positionID));
        // Dapatkan Total Bobot
        $total_bobot = $this->criteria_m->get_total_weight($positionID);
        // Mulai Update Bobot Awal
        foreach ($criteria as $list) {
            $bobot_awal = $list->weight / $total_bobot;
            $this->criteria_m->update_weight_value(array('weight_value' => $bobot_awal), $list->criteria_id, $positionID);
        }
    }
}