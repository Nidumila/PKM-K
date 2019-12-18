<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('awal');
        }
    }
    public function index()
    {
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header');
        $this->load->view('user/toko', $data);
        $this->load->view('template/toko_footer');
    }

    public function keranjang()
    {
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header');
        $this->load->view('user/keranjang', $data);
        $this->load->view('template/toko_footer');
    }

    public function produk()
    {
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header');
        $this->load->view('user/produk', $data);
        $this->load->view('user/descripsi', $data);
        $this->load->view('template/toko_footer');
    }

    public function ulasan()
    {
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header');
        $this->load->view('user/produk', $data);
        $this->load->view('user/ulasanproduk', $data);
        $this->load->view('template/toko_footer');
    }

    public function diskusi()
    {
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header');
        $this->load->view('user/produk', $data);
        $this->load->view('user/diskusiproduk', $data);
        $this->load->view('template/toko_footer');
    }


    public function help()
    {
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header');
        $this->load->view('template/help', $data);
        $this->load->view('template/toko_footer');
    }

    public function profile()
    {
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header');
        $this->load->view('user/profile', $data);
        $this->load->view('template/toko_footer');
    }

    public function procom()
    {
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header');
        $this->load->view('user/profile_company', $data);
        $this->load->view('template/toko_footer');
    }
}
