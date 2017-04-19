<?php

class Interview extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('candidate_m');
        $this->load->model('position_m');
        $this->load->model('criteria_m');
        $this->load->model('calculation_m');
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

    /**
     * Menampilkan Form Tes Wawancara
     *
     * @param $candidateId
     */
    public function test($candidateId)
    {
        $data['candidate'] = $this->candidate_m->get($candidateId);
        $data['positions'] = $this->position_m->get_all();
        $data['criteria'] = $this->criteria_m->get_interview_criteria();
        $data['page'] = 'interview.detail';
        $this->load->view('layout', $data);
    }

    public function store($candidateId)
    {
        $data = $this->input->post();
        $data['status'] = 1;
        unset($data['scores']);
        $this->candidate_m->update($data, $candidateId);
        $scores = $this->input->post('scores');
        $criteriaIds = array_keys($this->criteria_m->get_interview_criteria());
        foreach ($scores as $score){
            $data = array(
                'candidate_id' => $candidateId,
                'criteria_id' => array_shift($criteriaIds),
                'score' => $score
            );
            $this->calculation_m->insert($data);
        }
        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Calon Wawancara telah di Tambahkan'));
        redirect('interview');
    }

}