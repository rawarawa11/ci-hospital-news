<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }

    public function index()
	{
    $data['title'] = "Berita Terbaru";
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
}
