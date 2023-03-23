<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->check_login->check();

        $this->load->model('user_model');
    }



    public function index()
    {

        $user = $this->db->get_where('euser', ['email' => $this->session->userdata('email')])->row_array();


        $data = [
            'title' => 'Edit Profile',
            'isi' => 'admin/profile/edit',
            'user' => $user
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function edit()
    {
        $user = $this->db->get_where('euser', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->db->get_where('euser', ['email' => $this->session->userdata('email')])->row_array();
        $valid = $this->form_validation;
        $valid->set_rules(
            'nama',
            'Full Name',
            'required|trim',
            array(
                'required'        => '%s harus diisi!'

            )
        );

        if ($valid->run() ==  FALSE) {

            $data = array(
                'title' => 'Edit Profile',
                'user'  => $user,
                'isi' => 'admin/profile/edit'
            );

            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {

            $nama = $this->input->post('nama');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image =  time() . '-' . $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/image/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/image/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {

                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('euser');


            $this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('admin/profile');
        }
    }


    public function changePassword()
    {

        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('euser', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[4]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[4]|matches[new_password1]');

        if ($this->form_validation->run() == false) {

            $data = array(
                'title' => 'Change Password',
                'isi' => 'admin/profile/changepassword'
            );

            $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('admin/profile/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('admin/profile/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('euser');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('admin/profile/changepassword');
                }
            }
        }
    }
}
