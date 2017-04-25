<?php

class Employee extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('position_m');
        $this->load->model('employee_m');
    }

    function index()
    {
        $data['page'] = 'employee.index';
        $data['positions'] = $this->position_m->get_all();
        $data['employees'] = $this->employee_m->get_all();
        $this->load->view('layout', $data);
    }

    public function store()
    {
        $data = $this->input->post();
        $data['born_at'] = date('Y-m-d', strtotime($data['born_at']));
        $data['date_started_work'] = date('Y-m-d', strtotime($data['date_started_work']));
        if($this->employee_m->insert($data)) {
            $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Pegawai telah di Tambahkan'));
        } else {
            $this->session->set_flashdata('message', array('success', '<b>Terjadi Kesalahan!</b> Data Pegawai gagal di Tambahkan'));
        }
        redirect('employee');
    }

    public function detail($employeeId)
    {
        $data['page'] = 'employee.detail';
        $this->load->view('layout', $data);
    }

    public function delete()
    {
        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Pegawai telah di Hapus'));
        redirect('employee');
    }
}