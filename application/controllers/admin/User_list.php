<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_list extends CI_Controller
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


	//listing data user
	public function index()
	{

		$user = $this->user_model->listing();
		$data = array(
			'title' => 'Data User Administator(' . count($user) . ')',
			'user' => $user,
			'isi' => 'admin/user/list'
		);

		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


	public function tambah()
	{


		//validasi first
		$valid = $this->form_validation;

		$valid->set_rules(
			'nama',
			'Nama',
			'required|trim|is_unique[euser.nama]|min_length[4]|max_length[520]',
			array(
				'required'		=> '%s is required!',
				'is_unique'		=> '%s <strong>' . $this->input->post('nama') .
					'</strong> has been already taken.Try another one!',
				'min_length'	=> '%s too short!',
				'max_length'	=> '%s max 20 characters!'
			)
		);

		$valid->set_rules(
			'email',
			'Email',
			'required|trim|valid_email|is_unique[euser.email]|min_length[4]|max_length[520]',
			array(
				'required'		=> '%s is required!',
				'is_unique'		=> '%s <strong>' . $this->input->post('email') .
					'</strong> has been already taken.Try another one!',
				'min_length'	=> '%s min 4 characters!',
				'max_length'	=> '%s max 20 characters!'
			)
		);

		$valid->set_rules(
			'password1',
			'Password',
			'required|trim|min_length[4]|matches[password2]|max_length[20]',
			array(
				'required'		=> '%s is required!',
				'min_length'	=> '%s min 4 characters!',
				'matches'		=> '%s does not match!',
				'max_length'	=> '%s max 20 characters!'

			)
		);

		$valid->set_rules(
			'password2',
			'Password2',
			'required|trim|matches[password1]|max_length[20]',
			array(
				'required'		=> '%s is required!',
				'min_length'	=> '%s min 4 characters!',
				'max_length'	=> '%s 20 characters!'
			)
		);


		if ($valid->run() ==  FALSE) {

			$data = array(
				'title' => 'Add User Administator',
				'isi' => 'admin/user/tambah'
			);

			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {

			$data = array(
				'nama'	=> htmlspecialchars($this->input->post('nama', true)),
				'email'	=> htmlspecialchars($this->input->post('email', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password'	=> password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'akses_level'	=> htmlspecialchars($this->input->post('akses_level', true))
			);
			$this->user_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data has been saved!');
			redirect(base_url('admin/user'), 'refresh');
		}
	}


	public function edit($id_user)
	{
		$user = $this->user_model->detail($id_user);

		//validasi first
		$valid = $this->form_validation;

		$valid->set_rules(
			'nama',
			'Nama',
			'required|trim|min_length[4]|max_length[520]',
			array(
				'required'		=> '%s is required!',
				'min_length'	=> '%s too short!',
				'max_length'	=> '%s max 20 characters!'
			)
		);

		$valid->set_rules(
			'email',
			'Email',
			'required|trim|valid_email|min_length[4]|max_length[520]',
			array(
				'required'		=> '%s is required!',
				'min_length'	=> '%s min 4 characters!',
				'max_length'	=> '%s max 20 characters!'
			)
		);



		if ($valid->run() ==  FALSE) {

			$data = array(
				'title' => 'Edit User Administator: ' . $user['nama'],
				'user'	=> $user,
				'isi' => 'admin/user/edit'
			);

			$this->load->view('admin/layout/wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_user'	=> $id_user,
				'nama'	=> htmlspecialchars($this->input->post('nama', true)),
				'email'	=> htmlspecialchars($this->input->post('email', true)),
				// 'image' => 'default.png',
				// 'password'	=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id'	=> $this->input->post('role_id'),
				'is_active'	=> $this->input->post('is_active')
			);
			$this->user_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data has been updated!');
			redirect(base_url('admin/user_list'), 'refresh');
		}
	}

	public function delete($id_user)
	{

		$user = $this->user_model->detail($id_user);
		//hapus image
		$old_image = $user['image'];
		if ($old_image != 'default.png') {

			unlink(FCPATH . 'assets/image/profile/' . $old_image);
		}

		$data = array('id_user'	=> $user['id_user']);
		$this->user_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data has been deleted!');
		redirect('admin/user_list');
	}
}
