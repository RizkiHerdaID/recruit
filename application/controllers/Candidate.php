<?php

class Candidate extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['page'] = 'candidate.index';
        $this->load->view('layout', $data);
    }

    public function detail($candidateId)
    {
        $data['page'] = 'candidate.detail';
        $this->load->view('layout', $data);
    }

    public function delete()
    {
        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Calon Kandidat telah di Hapus'));
        redirect('candidate');
    }
}