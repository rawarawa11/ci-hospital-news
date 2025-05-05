<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }

    // Tampilkan semua jadwal dokter
    public function index()
    {
        $data['title'] = 'Semua Jadwal Dokter';
        $data['jadwal'] = $this->M_admin->get_all_jadwal_dokter();
        $this->load->view('admin/jadwal_dokter', $data);
    }

    // Proses tambah data dari form
    public function tambah_jadwal()
    {
        $data = [
            'nama_dokter' => $this->input->post('nama_dokter', true),
            'spesialis' => $this->input->post('spesialis', true),
            'hari' => $this->input->post('hari', true),
            'jam' => $this->input->post('jam', true),
        ];

        $this->M_admin->insert_jadwal_dokter($data);
        redirect('jadwal');
    }

    // Hapus jadwal dokter
    public function hapus_jadwal($id)
    {
        $this->M_admin->delete_jadwal_dokter($id);
        redirect('jadwal');
    }
}
