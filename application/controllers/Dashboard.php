<?php

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Menampilkan Halaman Dashboard Yang berisi Deskripsi Perusahaan
     */
    function index()
    {
        $data['page'] = 'dashboard';
        $this->load->view('layout', $data);
    }
}