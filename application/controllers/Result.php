<?php

class Result extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('candidate_m');
        $this->load->model('employee_m');
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
        if($candidates) {
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
            foreach ($sVector as $key => $value) {
                $sVectorSum[$key] = array_sum($value);
            }
            // Tambahkan Hasil Vektor V kedalam Array Kandidat sebagai vVector dan Percentage (Presentase)
            foreach ($candidates as $keyCandidate => $candidate) {
                $candidate->vVector = $candidate->sVector / $sVectorSum[$candidate->position_id];
                $candidate->percentage = $candidate->vVector * 100;
            }
        }
        return $candidates;
    }

    /**
     * @param $candidateId
     */
    public function detail($candidateId)
    {
        $data['candidate'] = $this->candidate_m->get($candidateId);
        $data['page'] = 'result.detail';
        $this->load->view('layout', $data);
    }

    /**
     * Melakukan Rekrutmen dengan Menyalin data Kandidat ke Tabel Pegawai
     */
    public function recruit($candidateId)
    {
        $candidate = $this->candidate_m->get($candidateId);
        // Update Status Kandidat Menajdi Telah Di Rekrut
        $data['status'] = '3';
        $this->candidate_m->update($data, $candidateId);
        // Hapus Data Kandidat yang tidak di perlukan saat menyalinkan ke Tabel Employee
        $candidateId = $candidate[0]->id;
        unset(
            $candidate[0]->interviewer_comment,
            $candidate[0]->examiner_comment,
            $candidate[0]->examiner_comment,
            $candidate[0]->deleted,
            $candidate[0]->interviewed_at,
            $candidate[0]->examined_at,
            $candidate[0]->status,
            $candidate[0]->position_score,
            $candidate[0]->position_percentage,
            $candidate[0]->placement_plan,
            $candidate[0]->last_education,
            $candidate[0]->id
        );
        // Salin data Kandidat sebagai Pegawai Baru
        $this->employee_m->insert($candidate[0]);
        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Kandidat telah di tambahkan sebagai Pegawai Baru'));
        redirect('employee/detail/'.$candidateId);
    }
}