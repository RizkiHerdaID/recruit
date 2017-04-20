<?php

class Competency extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('candidate_m');
        $this->load->model('position_m');
        $this->load->model('criteria_m');
        $this->load->model('calculation_m');
    }

    /**
     * Menampilkan Daftar Kandidat Yang Siap untuk Uji Kemampuan
     */
    function index()
    {
        $data['candidates'] = $this->candidate_m->get_all_to_test();
        $data['page'] = 'competency.index';
        $this->load->view('layout', $data);
    }

    /**
     * Menampilkan Form untuk Uji Kemampuan
     *
     * @param $candidateId
     */
    public function test($candidateId)
    {
        $data['candidate'] = $this->candidate_m->get($candidateId);
        $data['positions'] = $this->position_m->get_all();
        $data['criteria'] = $this->criteria_m->get_competency_criteria();
        $data['page'] = 'competency.detail';
        $this->load->view('layout', $data);
    }

    /**
     * Menyimpan Hasil Penilaian Tahap Uji Kemampuan
     *
     * @param $candidateId
     */
    public function store($candidateId)
    {
        $data = $this->input->post();
        // Ubah Status Kandidat Menjadi Selesai Semua Tahap
        $data['status'] = 2;
        unset($data['scores']);
        $this->candidate_m->update($data, $candidateId);
        // Dapatkan Input Nilai dalam bentuk Array
        $scores = $this->input->post('scores');
        // Ambil Daftar Kriteria beserta ID
        $criteriaIds = array_keys($this->criteria_m->get_competency_criteria());
        // Input Nilai berdasarkan ID Kandidat dan ID Kriteria
        foreach ($scores as $score){
            $data = array(
                'candidate_id' => $candidateId,
                'criteria_id' => array_shift($criteriaIds),
                'score' => $score
            );
            $this->calculation_m->insert($data);
        }
        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Calon Wawancara telah di Tambahkan'));
        redirect('competency');
    }
}