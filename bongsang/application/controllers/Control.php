<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            redirect('admin');
        }
    }
    public function index()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/head');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/dasboard');
        $this->load->view('template/footer');
    }

    public function daftaradmin()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[member.email]', ['is_unique' => 'Email ini sudah terdaftar', 'required' => 'Email harus di isi']);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('sandi', 'Kata Sandi', 'required|trim|min_length[7]', ['required' => 'Kata Sandi harus di isi', 'min_length' => 'Password Terlalu Pendek!']);
        $this->form_validation->set_rules('ponsel', 'Nomor Ponsel', 'required|trim|integer');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/head');
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/header', $data);
            $this->load->view('admin/admindaftar');
            $this->load->view('template/footer');
        } else {
            $this->load->helper('date');
            $data = [
                'id_admin' => $this->input->post('jenis_kelamin') . "A" . mdate("%Y%m%d", date()),
                'nama_admin' => $this->input->post('nama', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                'nomor_ponsel' => $this->input->post('ponsel', true),
                'email' => $this->input->post('email', true),
                'password' => $this->input->post('sandi', true),
                'alamat' => $this->input->post('alamat', true),
                'gambar' => 'default.jpg',
                'role_admin' => 1,
                'admin_validasi' => 1,
            ];

            $this->db->insert('admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px; text-align: center;" role="alert">Selamat! Admin baru berhasil ditambah</div>');
            redirect('control/daftaradmin/');
        }
    }

    public function tambahproduk()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Produk', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required|trim', ['required' => 'Nominal Harga harus di isi']);
        $this->form_validation->set_rules('kategori', 'Kategori Produk', 'required|trim', ['required' => 'Pilih kategori yang sesuai']);
        $this->form_validation->set_rules('sub', 'Sub Kategori', 'required|trim');
        $this->form_validation->set_rules('stok', 'Stok Produk', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/head');
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/header', $data);
            $this->load->view('admin/tambahproduk');
            $this->load->view('template/footer');
        } else {
            $this->load->helper('date');
            $data = [
                'id_barang' => 'BB' . $this->input->post('stok', true),
                'nama_barang' => $this->input->post('nama', true),
                'kategori' => $this->input->post('kategori', true),
                'sub_pilihan' => $this->input->post('sub', true),
                'harga' => $this->input->post('harga', true),
                'stok' => $this->input->post('stok', true),
                'gambar' => 'default.jpg'
            ];

            $this->db->insert('produk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px; text-align: center;" role="alert">Selamat! Produk baru berhasil ditambah</div>');
            redirect('control/tambahproduk/');
        }
    }

    public function adminlist()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        // if ($this->session->userdata('role_admin') == 0) {
        $data['adm'] = $this->db->get_where('admin', ['role_admin' => 1])->result_array();
        $this->load->view('template/head');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/adminlist', $data);
        $this->load->view('template/footer');
        // } else {
        //     redirect('control/profile/');
        // }
    }

    public function produklist()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $isi['produk'] = $this->db->get('produk')->result_array();
        $this->load->view('template/head');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/produklist', $isi);
        $this->load->view('template/footer');
    }

    public function memberlist()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $isi['member'] = $this->db->get('member')->result_array();
        $this->load->view('template/head');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/memberlist', $isi);
        $this->load->view('template/footer');
    }

    public function profile()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/head');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/profileadmin', $data);
        $this->load->view('template/footer');
    }

    public function editadmin()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'Email harus di isi']);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('ponsel', 'Nomor Ponsel', 'required|trim|integer');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/head');
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/header', $data);
            $this->load->view('admin/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->load->helper('date');
            $data = [
                'nama_admin' => $this->input->post('nama', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                'nomor_ponsel' => $this->input->post('ponsel', true),
                'email' => $this->input->post('email', true),
                'alamat' => $this->input->post('alamat', true),
                'gambar' => 'default.jpg',
            ];

            $this->db->update('admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px; text-align: center;" role="alert">Selamat! Admin baru berhasil ditambah</div>');
            redirect('control/profile/');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px;" role="alert">Selamat! Anda telah Logout</div>');
        redirect('admin');
    }
}
