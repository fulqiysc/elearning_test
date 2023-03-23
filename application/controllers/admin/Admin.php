<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{


		parent::__construct();
		$this->check_login->check();
		if ($this->session->userdata('role_id') != 1) {
			$this->session->set_flashdata('sukses', 'You dont have any privilages to accsess this page!');
			redirect('admin/user');
		}

		$this->load->model('user_model');
	}
	public function index()
	{

		//ambil data user berdasarkan data login

		$this->check_login->check();
		$user = $this->db->get_where('euser', ['email' => $this->session->userdata('email')])->row_array();
		$data = array(
			'title' => 'Dashboard Page ',
			'isi' => 'admin/dashboard/admin',
			'user' => $user
		);

		$this->load->view('admin/layout/wrapper', $data);
	}
}
