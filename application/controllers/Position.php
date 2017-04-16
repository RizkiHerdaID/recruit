<?php

class Position extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['page'] = 'position.index';
        $this->load->view('layout', $data);
    }

    public function detail($positionID)
    {
        $data['page'] = 'position.detail';
        $this->load->view('layout', $data);
    }

    public function delete()
    {
        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Jabatan telah di Hapus'));
        redirect('position');
    }
}