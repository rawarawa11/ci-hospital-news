<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 */
class News extends Admin_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin', 'admin');
	}

	public function index()
	{
		$this->var['title'] = 'View All Posts';
		$this->var['query'] = $this->admin->get_all_posts();
		$this->var['module'] = 'admin/all_posts';
		$this->load->view('admin/index', $this->var);
	}

	public function create($id = 0)
	{
		$id = (int)$id;

		$this->var['title'] = $id > 0 ? 'Edit Post Entry' : 'Add New Post';
		$this->var['message'] = $this->save($id);

		$this->var['query'] = $id > 0 ? $this->admin->get_post_row_obj($id) : ($this->var['message']['type'] == 'error' ? $this->var['message']['query'] : false);

		if ($this->var['query'] && !isset($this->var['query']->created_at)) {
			$this->var['query']->created_at = 'Now';
		}

		$this->var['categories'] = $this->admin->get_all_categories();
		$this->var['action'] = site_url('news/create/' . $id);
		$this->var['module'] = 'admin/add_post';
		$this->load->view('admin/index', $this->var);
	}

	public function delete()
	{
		$id = $this->input->post('id', true);
		if ($id && $id > 0) {
			$this->admin->delete_post($id);
		}

		redirect('news');
	}

	/*
	* @return array
	* save post on create and update action if validation passed
	*/

	public function save($id = 0)
	{
		$id = (int)$id;  // Pastikan ID dalam bentuk integer

		$config['upload_path'] = './upload/thumbnail/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 2048;
		$config['max_width'] = 1920;
		$config['max_height'] = 1080;
		$this->load->library('upload', $config);

		$data = [];

		if ($this->form_validate()) {
			$news_data = [
				'post_title' => $this->input->post('post_title'),
				'post_content' => $this->input->post('post_content'),
				'post_cat_id' => $this->input->post('post_cat_id'),
				'post_slug' => url_title(strtolower($this->input->post('post_title')), '-'),
				'is_delete' => 0
			];

			// Handle upload gambar
			if ($_FILES['thumbnail']['name'] !== '') {
				if ($this->upload->do_upload('thumbnail')) {
					$upload_data = $this->upload->data();
					$news_data['thumbnail'] = $upload_data['file_name'];
				} else {
					$data['message'] = $this->upload->display_errors('<li>', '</li>');
					$data['type'] = 'error';
					$data['query'] = (object)$news_data;
					return $data;
				}
			}

			// 🚀 Proses Update / Insert
			if ($id > 0) {
				$update = $this->admin->update_post($news_data, $id);
				if ($update) {
					$data['message'] = 'Berita berhasil diubah';
					$data['type'] = 'success';
				} else {
					$data['message'] = "Berita gagal diubah";
					$data['type'] = 'error';
				}
			} else {
				$news_data['created_at'] = date('Y-m-d H:i:s');
				$insert = $this->admin->insert_new_post($news_data);
				if ($insert) {
					$data['message'] = 'Berita berhasil ditambahkan';
					$data['type'] = 'success';
				} else {
					$data['message'] = "Berita gagal ditambahkan";
					$data['type'] = 'error';
				}
			}
		} else {
			$news_data = [
				'post_title' => $this->input->post('post_title'),
				'post_content' => $this->input->post('post_content'),
				'post_cat_id' => $this->input->post('post_cat_id'),
				'created_at' => 'Now'
			];
			$data['message'] = validation_errors();
			$data['type'] = 'error';
			$data['query'] = (object)$news_data;
		}

		return $data;
	}

	/**
	 * @return bool
	 * @access public
	 * form validation for create and update
	 */
	public function form_validate()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('post_title', 'post title', 'required');
		$this->form_validation->set_rules('post_content', 'post content', 'required');
		$this->form_validation->set_rules('post_cat_id', 'post category', 'required', array('required' => 'The %s must be selected.'));
		$this->form_validation->set_error_delimiters('<li>', '</li>');
		return $this->form_validation->run();
	}
}
