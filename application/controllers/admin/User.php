<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function index()
	{

		//ambil data user berdasarkan data login

		$this->check_login->check();
		$user = $this->db->get_where('euser', ['email' => $this->session->userdata('email')])->row_array();
		$data = array(
			'title' => 'Dashboard Page ',
			'isi' => 'admin/dashboard/user',
			'user' => $user
		);

		$this->load->view('admin/layout/wrapper', $data);
	}
}
