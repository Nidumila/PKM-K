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
        $data['produk'] = $this->db->get('produk')->result_array();
        $this->load->view('template/toko_header');
        $this->load->view('user/toko', $data);
        $this->load->view('template/toko_footer');
        $id = $this->input->post('id_barang');
        // $pilih = $this->db->get_where('produk', ['id_barang' => $id])->row_array();
        // if ($member != null) {
        //     $data = [
        //         'id_barang' => $member['id_barang']
        //     ];
        //     $this->session->set_produkdata($data);
        //     redirect('user/produk');
        // }
        // $this->session->set_produkdata($pilih);
        // redirect('user/produk');
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
        // if (!$this->session->produkdata('id_barang')) {
        //     redirect('user/');
        // }
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        // $data['produk'] = $this->db->get_where('produk', ['id_barang' => $this->session->produkdata('id_barang')])->row_array();
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
        $this->load->view('user/help', $data);
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
