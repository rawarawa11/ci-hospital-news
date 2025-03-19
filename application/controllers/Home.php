<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
	}

	public function index()
	{
		$data['posts'] = $this->M_admin->get_all_posts();
		$this->load->view('public/news_view', $data);
	}

	public function detail($id)
	{
		$data['post'] = $this->M_admin->get_post_row_obj($id);
		$this->load->view('public/news_detail_view', $data);
	}
}
