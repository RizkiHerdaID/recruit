<?php

class Result extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['page'] = 'result.index';
        $this->load->view('layout', $data);
    }

    function archive()
    {
        $data['page'] = 'result.archive';
        $this->load->view('layout', $data);
    }

    public function detail($resultID)
    {
        $data['page'] = 'result.detail';
        $this->load->view('layout', $data);
    }

    public function recruit()
    {
        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data telah di tambahkan sebagai Pegawai Baru'));
        redirect('result');
    }
}