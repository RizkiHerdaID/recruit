<?php

class Interview extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['page'] = 'interview.index';
        $this->load->view('layout', $data);
    }

    public function edit($candidateId)
    {
        $data['page'] = 'interview.detail';
        $this->load->view('layout', $data);
    }

    public function test($candidateId)
    {
        $data['page'] = 'interview.detail';
        $this->load->view('layout', $data);
    }

}