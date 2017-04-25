<?php

class Employee extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('position_m');
        $this->load->model('employee_m');
    }

    /**
     * Menampilkan Semua Data Pegawai
     */
    function index()
    {
        $data['page'] = 'employee.index';
        $data['positions'] = $this->position_m->get_all();
        $data['employees'] = $this->employee_m->get_all();
        $this->load->view('layout', $data);
    }

    /**
     * Menyimpan Data Pegawai
     */
    public function store()
    {
        $data = $this->input->post();
        $data['born_at'] = date('Y-m-d', strtotime($data['born_at']));
        $data['salary'] = str_replace('.', '', $data['salary']);
        $data['date_started_work'] = date('Y-m-d', strtotime($data['date_started_work']));
        $data['photo'] = $this->storePhoto();
        if($this->employee_m->insert($data)) {
            $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Pegawai telah di Tambahkan'));
        } else {
            $this->session->set_flashdata('message', array('success', '<b>Terjadi Kesalahan!</b> Data Pegawai gagal di Tambahkan'));
        }
        redirect('employee');
    }

    /**
     * Menampilkan Detail Pegawai
     *
     * @param $employeeId
     */
    public function detail($employeeId)
    {
        $data['employee'] = $this->employee_m->get($employeeId);
        $data['positions'] = $this->position_m->get_all();
        $data['page'] = 'employee.detail';
        $this->load->view('layout', $data);
    }

    /**
     * Meng-Update Data Kandidat
     *
     * @param null $redirect - Digunakan apabila Update di lakukan pada menu/fitur selain Candidate
     */
    public function update($id)
    {
        $data = $this->input->post();
        $data['salary'] = str_replace('.', '', $data['salary']);
        if(!empty($_FILES['photo']['name'])){
            $data['photo'] = $this->storePhoto();
        }
        if($this->employee_m->update($data, $id)) {
            $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Pegawai telah di Update'));
        } else {
            $this->session->set_flashdata('message', array('success', '<b>Terjadi Kesalahan!<b/> Data Pegawai tidak dapat di Update'));
        }
        redirect('employee/detail/'.$id);
    }
    /**
     * Hapus Data Pegawai
     */
    public function delete($idEmployee)
    {
        $this->employee_m->delete($idEmployee);
        $this->session->set_flashdata('message', array('success', '<b>Berhasil!</b> Data Pegawai telah di Hapus'));
        redirect('employee');
    }

    /**
     * Fungsi Simpan Foto
     */
    public function storePhoto()
    {
        $config['file_name'] = date('YmdHis');
        $config['upload_path'] = './photos/';
        $config['allowed_types'] = 'jpg|jpeg|bmp';
        $config['max_size'] = 100000;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('photo')) {
            $this->session->set_flashdata('message', array('danger', $this->upload->display_errors()));
            return false;
        }else{
            $file_date = $this->upload->data();
            $link = $file_date['file_name'];
            return $link;
        }
    }

}