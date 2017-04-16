<?php

class Competency extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
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