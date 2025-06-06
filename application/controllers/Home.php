<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->helper('text');
    }

    public function index()
	{
    $data['title'] = "RS Bhayangkara";
    $data['articles'] = $this->M_admin->get_all_posts();

    if (empty($data['articles'])) {
        $data['articles'] = [];
        $data['hero_news'] = null; 
    } else {
        $data['hero_news'] = $data['articles'][0];
    }

    $this->load->view('public/news_view', $data);
	}



    public function detail($id = null)
    {
        if (!$id) {
            show_404();
        }

        $data['post'] = $this->M_admin->get_post_row_obj($id);

        if (!$data['post']) {
            show_404();
        }

        $data['title'] = $data['post']->post_title;
        $this->load->view('public/news_detail_view', $data);
    }

    public function profil()
    {
        $data['title'] = 'Profil';
        $this->load->view('public/profil_view', $data);
    }

    public function pelayanan()
    {
        $data['title'] = "Pelayanan";
        $this->load->view('public/pelayanan_view', $data);
    }
    
    public function jadwal()
    {
        $data['title'] = 'Jadwal Dokter';
        $data['jadwal'] = $this->M_admin->get_all_jadwal_dokter();
        $this->load->view('public/jadwal_dokter_view', $data);
    }

    public function igd()
    {
        $data['title'] = 'Layanan IGD';
        $this->load->view('public/igd_view', $data);
    }

    public function apotek()
    {
        $data['title'] = 'Layanan Apotek';
        $this->load->view('public/apotek_view', $data);
    }

    public function berita()
    {
        $data['title'] = "Berita";
        $data['articles'] = $this->M_admin->get_all_posts();

        if (empty($data['articles'])) {
            $data['articles'] = [];
            $data['hero_news'] = null; 
        } else {
            $data['hero_news'] = $data['articles'][0];
        }

        $this->load->view('public/berita_view', $data);
    }

    public function kontak()
    {
        $data['title'] = 'Kontak';
        $this->load->view('public/kontak_view', $data);
    }

    // public function kategori($slug)
    // {
    //     $data['title'] = "Kategori";
    //     $data['kategori'] = ucwords(str_replace('-', ' ', $slug));
    //     $data['berita'] = $this->M_admin->get_berita_by_kategori($slug);

    //     $this->load->view('public/berita_kategori_view', $data);
    // }


}
