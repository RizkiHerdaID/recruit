<?php

class Result extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('candidate_m');
        $this->load->model('criteria_m');
        $this->load->model('calculation_m');
    }

    /**
     * Menampilkan Daftar Rekomendasi
     */
    function index()
    {
        $data['candidates'] = $this->score_calculation();
        $data['page'] = 'result.index';
        $this->load->view('layout', $data);
    }

    /**
     * @return mixed
     */
    public function score_calculation()
    {
        $candidates = $this->candidate_m->get_all_result();
        // Persiapan Perhitungan Vektor S
        foreach ($candidates as $keyCandidate => $candidate) {
            // Dapatkan Semua Bobot Awal sesuai Posisi
            $weight_value = $this->criteria_m->get_weight_value($candidate->position_id);
            // Dapatkan Nilai Wawancara dan Nilai Uji Kemampuan untuk Tiap Kandidat
            $scores = $this->calculation_m->get_score($candidate->id);
            // Kuadratkan Nilai terhadap Bobot Awal dan Kalikan tiap Hasilnya
            $sVector[$candidate->position_id][$candidate->id] = 1;
            foreach ($scores as $keyScore => $score) {
                $sVector[$candidate->position_id][$candidate->id] *= pow($score->score, $weight_value[$keyScore]->weight_value);
            }
            // Tambahkan Hasil Vektor S kedalam Array Kandidat sebagai sVector dan Score (Nilai)
            $candidate->sVector = $sVector[$candidate->position_id][$candidate->id];
            $candidate->score = $candidate->sVector * 20;
        }
        // Hitung Vektor V
        $sVectorSum = array();
        foreach ($sVector as $key => $value){
            $sVectorSum[$key] = array_sum($value);
        }
        // Tambahkan Hasil Vektor V kedalam Array Kandidat sebagai vVector dan Percentage (Presentase)
        foreach ($candidates as $keyCandidate => $candidate) {
            $candidate->vVector = $candidate->sVector / $sVectorSum[$candidate->position_id];
            $candidate->percentage = $candidate->vVector * 100;
        }
        return $candidates;
    }

    /**
     * @param $resultID
     */
    public function detail($resultID)
    {
        $data['page'] = 'result.detail';
        $this->load->view('layout', $data);
    }

    /**
     *
     */
    public function recruit()
    {
        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data telah di tambahkan sebagai Pegawai Baru'));
        redirect('result');
    }
}