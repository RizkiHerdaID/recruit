<?php

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['page'] = 'dashboard';
        $this->load->view('layout', $data);
    }
}