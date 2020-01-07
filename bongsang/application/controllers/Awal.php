<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Awal extends CI_Controller
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
            $this->load->view('template/awal_header');
            $this->load->view('awal/login');
            $this->load->view('template/awal_footer');
        } else {
            $data = [
                $email = $this->input->post('email'),
                $sandi = $this->input->post('sandi'),
            ];

            $email = $this->input->post('email');
            $sandi = $this->input->post('sandi');

            $member = $this->db->get_where('member', ['email' => $email])->row_array();

            if ($member != null) {
                if ($member['member_validasi'] == 1) {
                    if ($this->db->get_where('member', ['password' => $sandi])->row_array()) {
                        $data = [
                            'email' => $member['email']
                        ];
                        $this->session->set_userdata($data);
                        redirect('user');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" style="margin-top: 10px; margin-left: 25px; margin-right: 25px;" role="alert">Maaf. Kata sandi anda salah</div>');
                        redirect('awal');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" style="margin-top: 10px; margin-left: 25px; margin-right: 25px;" role="alert">Maaf. Email ini belum diverifikasi</div>');
                    redirect('awal');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" style="margin-top: 10px; margin-left: 25px; margin-right: 25px;" role="alert">Maaf. Email ini belum terdaftar</div>');
                redirect('awal');
            }
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[member.email]', ['is_unique' => 'Email ini sudah terdaftar', 'required' => 'Email Sandi harus di isi']);
        $this->form_validation->set_rules('sandi1', 'Kata Sandi', 'required|trim|min_length[7]', ['required' => 'Kata Sandi harus di isi', 'min_length' => 'Password Terlalu Pendek!']);
        $this->form_validation->set_rules('sandi2', 'Ulang  Sandi', 'required|trim|matches[sandi1]', ['required' => 'Kata Sandi harus di isi ulang', 'matches' => 'Kata Sandi tidak sama!']);
        $this->form_validation->set_rules('ponsel', 'Nomor Ponsel', 'required|trim|integer');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/regis_header');
            $this->load->view('awal/registration');
            $this->load->view('template/awal_footer');
        } else {
            $this->load->helper('date');
            $id = $this->db->query('SELECT max(id_member) AS id FROM member')->row_array();
            $kode = $id['id'];
            $iso = substr($kode, 10, 3);
            $tambah = (int) $iso + 1;
            $date = date("Ymd");
            $jk = $this->input->post('jenis_kelamin');
            if (strlen($tambah) == 1) {
                $format = "CO" . $date . "00" . $tambah;
            } else if (strlen($tambah) == 2) {
                $format = "CO" . $date . "0" . $tambah;
            } else if (strlen($tambah) == 3) {
                $format = "CO" . $date . $tambah;
            }
            $data = [
                'id_member' => $format,
                'nama_member' => $this->input->post('nama', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'email' => $this->input->post('email', true),
                'password' => $this->input->post('sandi1'),
                'tanggal_daftar' => mdate("%Y%m%d", date()),
                'gambar' => 'default.jpg',
                'nomor_ponsel' => $this->input->post('ponsel', true),
                'member_validasi' => 1,
            ];

            $this->db->insert('member', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px;" role="alert">Selamat! Anda berhasil mendaftar</div>');
            redirect('awal');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px;" role="alert">Selamat! Anda telah Logout</div>');
        redirect('awal');
    }
}
