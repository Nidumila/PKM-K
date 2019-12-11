<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
        $this->form_validation->set_rules('sandi', 'Kata Sandi', 'trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/login_header');
            $this->load->view('admin/adminlogin');
            $this->load->view('template/login_footer');
        } else {
            $data = [
                $email = $this->input->post('email'),
                $sandi = $this->input->post('sandi'),
            ];

            $email = $this->input->post('email');
            $sandi = $this->input->post('sandi');

            $admin = $this->db->get_where('admin', ['email' => $email])->row_array();

            if ($admin != null) {
                if ($admin['admin_validasi'] == 1) {
                    if ($this->db->get_where('admin', ['password' => $sandi])->row_array()) {
                        $data = [
                            'email' => $admin['email']
                        ];
                        $this->session->set_userdata($data);
                        if ($admin['role_admin'] == 0) {
                            redirect('control');
                        } else {
                            redirect('control/profile/');
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" style="margin-top: 10px; margin-left: 25px; margin-right: 25px;" role="alert">Maaf. Kata sandi anda salah</div>');
                        redirect('admin');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" style="margin-top: 10px; margin-left: 25px; margin-right: 25px;" role="alert">Maaf. Email ini belum diverifikasi</div>');
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" style="margin-top: 10px; margin-left: 25px; margin-right: 25px;" role="alert">Maaf. Email ini belum terdaftar</div>');
                redirect('admin');
            }
        }
    }
}
