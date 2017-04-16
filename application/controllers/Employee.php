<?php

class Employee extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['page'] = 'employee.index';
        $this->load->view('layout', $data);
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