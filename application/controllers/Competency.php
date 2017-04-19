<?php

class Competency extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('candidate_m');
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

    public function edit($candidateId)
    {
        $data['page'] = 'competency.detail';
        $this->load->view('layout', $data);
    }

    public function test($candidateId)
    {
        $data['page'] = 'competency.detail';
        $this->load->view('layout', $data);
    }

}