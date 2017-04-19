<?php

class Interview extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('candidate_m');
    }

    function index()
    {
        $data['candidates'] = $this->candidate_m->get_all_to_interview();
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
        $data['candidate'] = $this->candidate_m->get($candidateId);
        $data['page'] = 'interview.detail';
        $this->load->view('layout', $data);
    }

}