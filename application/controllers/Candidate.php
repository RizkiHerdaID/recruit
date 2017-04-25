<?php

class Candidate extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('candidate_m');
    }

    /**
     *  Menampilkan Daftar Kandidat
     */
    function index()
    {
        $data['candidates'] = $this->candidate_m->get_all();
        $data['page'] = 'candidate.index';
        $this->load->view('layout', $data);
    }

    /**
     *  Menyimpan Data Baru Kandidat
     */
    public function store()
    {
        $data = $this->input->post();
        $data['born_at'] = date('Y-m-d', strtotime($data['born_at']));
        if($this->candidate_m->insert($data)) {
            $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Calon Kandidat telah di Tambahkan'));
        } else {
            $this->session->set_flashdata('message', array('danger', '<b>Terjadi Kesalahan!</b> Data Calon Kandidat tidak dapat di Tambahkan'));
        }
        redirect('candidate');
    }

    /**
     * Meng-Update Data Kandidat
     *
     * @param null $redirect - Digunakan apabila Update di lakukan pada menu/fitur selain Candidate
     */
    public function update($redirect = NULL)
    {
        $id = $this->input->post('id');
        $data = $this->input->post();
        if($this->candidate_m->update($data, $id)) {
            $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Calon Kandidat telah di Update'));
        } else {
            $this->session->set_flashdata('message', array('success', '<b>Terjadi Kesalahan!<b/> Data Calon Kandidat tidak dapat di Update'));
        }
        if(!$redirect){
            redirect('candidate/detail/'.$id);
        } else {
            redirect($redirect.'/test/'.$id);
        }
    }

    /**
     * Menampilkan Detail Kandidat
     * @param $candidateId
     */
    public function detail($candidateId)
    {
        $data['candidate'] = $this->candidate_m->get($candidateId);
        $data['page'] = 'candidate.detail';
        $this->load->view('layout', $data);
    }

    public function delete()
    {
        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Calon Kandidat telah di Hapus'));
        redirect('candidate');
    }
}