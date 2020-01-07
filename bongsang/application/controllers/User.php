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
        $this->load->view('template/toko_header', $data);
        $this->load->view('user/toko', $data);
        $this->load->view('template/toko_footer');
        $id = $this->input->post('id_barang');
    }

    public function keranjang()
    {
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header', $data);
        $this->load->view('user/keranjang', $data);
        $this->load->view('template/toko_footer');
    }

    public function produk($id)
    {
        $data['produk'] = $this->db->get_where('produk', ['id_barang' => $id])->row_array();
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header', $data);
        $this->load->view('user/produk', $data);
        $this->load->view('user/descripsi', $data);
        $this->load->view('template/toko_footer');
    }

    public function ulasan($id)
    {
        $data['produk'] = $this->db->get_where('produk', ['id_barang' => $id])->row_array();
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header', $data);
        $this->load->view('user/produk', $data);
        $this->load->view('user/ulasanproduk', $data);
        $this->load->view('template/toko_footer');
    }

    public function diskusi($id)
    {
        $data['produk'] = $this->db->get_where('produk', ['id_barang' => $id])->row_array();
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header', $data);
        $this->load->view('user/produk', $data);
        $this->load->view('user/diskusiproduk', $data);
        $this->load->view('template/toko_footer');
    }


    public function help()
    {
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header', $data);
        $this->load->view('user/help', $data);
        $this->load->view('template/toko_footer');
    }

    public function profile()
    {
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('template/toko_footer');
    }
    public function halamanpemesanan()
    {
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header', $data);
        $this->load->view('user/halamanpembayaran', $data);
        $this->load->view('template/toko_footer');
    }

    public function bayar($id)
    {
        $this->load->library('form_validation');
        $where = array('id_barang' => $id);
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->db->get_where('transaksi', ['id_transaksi' => $id])->row_array();
        $this->form_validation->set_rules('idtra', 'ID Transaksi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/toko_header', $data);
            $this->load->view('user/bayar', $data);
            $this->load->view('template/toko_footer');
        } else {
            $id = $this->input->post('idtra');

            //jika ada gambar yang di upload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '8192';
                $config['upload_path'] = './Asset/img/bukti/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['transaksi']['bukti'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'Asset/img/bukti/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('bukti', $new_image);
                } else {
                    $this->upload->display_errors();
                }
            }

            $this->db->where('id_transaksi', $id);
            $this->db->update('transaksi');
            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px; text-align: center;" role="alert">Selamat! Bukti pembayaran telah dikirim </div>');
            redirect('user/pesan/');
        }
    }

    public function pesan()
    {
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header', $data);
        $this->load->view('user/pesan', $data);
        $this->load->view('template/toko_footer');
    }

    public function riwayat()
    {
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header', $data);
        $this->load->view('user/riwayat', $data);
        $this->load->view('template/toko_footer');
    }

    public function detail($id)
    {
        $where = array('id_barang' => $id);
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->db->get_where('transaksi', ['id_transaksi' => $id])->row_array();
        $this->load->view('template/toko_header', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('template/toko_footer');
    }

    public function procom()
    {
        $data['member'] = $this->db->get_where('member', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/toko_header', $data);
        $this->load->view('user/profile_company', $data);
        $this->load->view('template/toko_footer');
    }
}
