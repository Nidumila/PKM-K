<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control extends CI_Controller
{
    //Control Untuk Admin
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
        $data['transaksi'] = $this->db->get('transaksi')->result_array();
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
            $id = $this->db->query('SELECT max(id_admin) AS id FROM admin')->row_array();
            $kode = $id['id'];
            $iso = substr($kode, 10, 3);
            $tambah = (int) $iso + 1;
            $date = date("Ymd");
            $jk = $this->input->post('jenis_kelamin');
            if (strlen($tambah) == 1) {
                $format = "A" . $jk . $date . "00" . $tambah;
            } else if (strlen($tambah) == 2) {
                $format = "A" . $jk . $date . "0" . $tambah;
            } else if (strlen($tambah) == 3) {
                $format = "A" . $jk . $date . $tambah;
            }
            $data = [
                'id_admin' => $format,
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

    public function edvalid($id)
    {
        $where = array('id_admin' => $id);
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['adm'] = $this->db->get_where('admin', ['id_admin' => $id])->row_array();
        $this->form_validation->set_rules('email', 'Email', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/head');
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/header', $data);
            $this->load->view('admin/edvalid', $data);
            $this->load->view('template/footer');
        } else {
            $email = $this->input->post('email');
            $valid = $this->input->post('valid');

            $this->db->set('admin_validasi', $valid);
            $this->db->where('email', $email);
            $this->db->update('admin');
            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px; text-align: center;" role="alert">Selamat! Validasi Berhasil Dirubah </div>');
            redirect('control/adminlist/');
        }
    }

    public function adminlist()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['adm'] = $this->db->get_where('admin', ['role_admin' => 1])->result_array();
        $this->load->view('template/head');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/adminlist', $data);
        $this->load->view('template/footer');
    }


    public function editadmin()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/head');
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/header', $data);
            $this->load->view('admin/edit', $data);
            $this->load->view('template/footer');
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $jk = $this->input->post('jenis_kelamin');
            $alamat = $this->input->post('alamat');
            $hp = $this->input->post('ponsel');

            // jika ada jk yang dirubah
            if ($jk != null) {
                $this->db->set('jenis_kelamin', $jk);
            }

            // jika ada alamat yang dirubah
            if ($alamat != null) {
                $this->db->set('alamat', $alamat);
            }

            // jika ada nomor ponsel yang dirubah
            if ($hp != null) {
                $this->db->set('nomor_ponsel', $hp);
            }
            //jika ada gambar yang di upload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '8192';
                $config['upload_path'] = './Asset/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['admin']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'Asset/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    $this->upload->display_errors();
                }
            }

            $this->db->set('nama_admin', $nama);
            $this->db->where('email', $email);
            $this->db->update('admin');
            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px; text-align: center;" role="alert">Selamat! Profile Berhasil Dirubah </div>');
            redirect('control/profile/');
        }
    }

    public function hapus($id)
    {
        $where = array('id_admin' => $id);
        $this->db->delete('admin', $where);
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px; text-align: center;" role="alert">Selamat! Admin Berhasil Dihapus </div>');
        redirect('control/adminlist');
    }

    public function memval($id)
    {
        $where = array('id_member' => $id);
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['member'] = $this->db->get_where('member', ['id_member' => $id])->row_array();
        $this->form_validation->set_rules('email', 'Email', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/head');
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/header', $data);
            $this->load->view('admin/memberval', $data);
            $this->load->view('template/footer');
        } else {
            $email = $this->input->post('email');
            $valid = $this->input->post('valid');

            $this->db->set('member_validasi', $valid);
            $this->db->where('email', $email);
            $this->db->update('member');
            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px; text-align: center;" role="alert">Selamat! Validasi Member Berhasil Dirubah </div>');
            redirect('control/memberlist/');
        }
    }

    //Control untuk member
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

    public function memlet($id)
    {
        $where = array('id_member' => $id);
        $this->db->delete('member', $where);
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px; text-align: center;" role="alert">Selamat! Member Berhasil Dihapus </div>');
        redirect('control/memberlist');
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

    //Control untuk produk
    public function tambahproduk()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Produk', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required|trim', ['required' => 'Nominal Harga harus di isi']);
        $this->form_validation->set_rules('kategori', 'Kategori Produk', 'required|trim', ['required' => 'Pilih kategori yang sesuai']);
        $this->form_validation->set_rules('sub', 'Sub Kategori', 'required|trim');
        $this->form_validation->set_rules('stok', 'Stok Produk', 'required|trim');
        $this->form_validation->set_rules('desk', 'Deskripsi', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/head');
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/header', $data);
            $this->load->view('admin/tambahproduk');
            $this->load->view('template/footer');
        } else {
            $id = $this->db->query('SELECT max(id_barang) AS id FROM produk')->row_array();
            $kode = $id['id'];
            $iso = substr($kode, 3, 4);
            $tambah = (int) $iso + 1;
            if (strlen($tambah) == 1) {
                $format = "PRD" . "000" . $tambah;
            } else if (strlen($tambah) == 2) {
                $format = "PRD" . "00" . $tambah;
            } else if (strlen($tambah) == 3) {
                $format = "PRD" . "0" . $tambah;
            } else if (strlen($tambah) == 4) {
                $format = "PRD" .  $tambah;
            }

            //jika ada gambar yang di upload
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '8192';
                $config['upload_path'] = './Asset/img/produk/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }

            $data = [
                'id_barang' => $format,
                'nama_barang' => $this->input->post('nama', true),
                'kategori' => $this->input->post('kategori', true),
                'sub_pilihan' => $this->input->post('sub', true),
                'harga' => $this->input->post('harga', true),
                'stok' => $this->input->post('stok', true),
                'gambar' => $new_image,
                'deskripsi' => $this->input->post('desk', true)
            ];

            $this->db->insert('produk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px; text-align: center;" role="alert">Selamat! Produk baru berhasil ditambah</div>');
            redirect('control/tambahproduk/');
        }
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

    public function detail($id)
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get_where('produk', ['id_barang' => $id])->row_array();
        $this->load->view('template/head');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/detailproduk', $data);
        $this->load->view('template/footer');
    }

    public function edit($id)
    {
        $where = array('id_barang' => $id);
        //$this->db->delete('produk', $where);
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get_where('produk', ['id_barang' => $id])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/head');
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/header', $data);
            $this->load->view('admin/editproduk', $data);
            $this->load->view('template/footer');
        } else {
            $nama = $this->input->post('nama');
            $idprod = $this->input->post('id');
            $deskripsi = $this->input->post('deskripsi');
            $kategori = $this->input->post('kategori');
            $sub = $this->input->post('sub');
            $harga = $this->input->post('harga');
            $stok = $this->input->post('stok');

            // jika ada kategori yang dirubah
            if ($kategori != null) {
                $this->db->set('kategori', $kategori);
            }

            // jika ada sub pilihan yang dirubah
            if ($sub != null) {
                $this->db->set('sub_pilihan', $sub);
            }

            // jika ada harga yang dirubah
            if ($harga != null) {
                $this->db->set('harga', $harga);
            }

            // jika ada stok yang dirubah
            if ($stok != null) {
                $this->db->set('stok', $stok);
            }

            // jika ada deskripsi yang dirubah
            if ($deskripsi != null) {
                $this->db->set('deskripsi', $deskripsi);
            }


            //jika ada gambar yang di upload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '8192';
                $config['upload_path'] = './Asset/img/produk/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['produk']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'Asset/img/produk/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    $this->upload->display_errors();
                }
            }

            $this->db->set('nama_barang', $nama);
            $this->db->where('id_barang', $idprod);
            $this->db->update('produk');
            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px; text-align: center;" role="alert">Selamat! Detail Produk Berhasil Dirubah </div>');
            redirect('control/detail/' . $idprod);
        }
    }

    public function delete($id)
    {
        $where = array('id_barang' => $id);
        $this->db->delete('produk', $where);
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px; text-align: center;" role="alert">Selamat! Produk Berhasil Dihapus </div>');
        redirect('control/produklist');
    }

    // Control untuk transaksi
    public function traval($id)
    {
        $where = array('id_admin' => $id);
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->db->get_where('transaksi', ['id_transaksi' => $id])->row_array();
        $this->form_validation->set_rules('id', 'Id Pesanan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/head');
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/header', $data);
            $this->load->view('admin/traval', $data);
            $this->load->view('template/footer');
        } else {
            $email = $this->input->post('id');
            $valid = $this->input->post('valid');

            $this->db->set('valid', $valid);
            $this->db->where('id_transaksi', $email);
            $this->db->update('transaksi');
            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px; text-align: center;" role="alert">Selamat! Transaksi Berhasil Dirubah </div>');
            redirect('control/');
        }
    }

    public function tralet($id)
    {
        $valid = 2;
        $this->db->set('valid', $valid);
        $this->db->where('id_transaksi', $id);
        $this->db->update('transaksi');
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px; text-align: center;" role="alert">Selamat! Transaksi Berhasil Digagalkan </div>');
        redirect('control/');
    }

    public function berhasil()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->db->get_where('transaksi', ['valid' => 1])->result_array();
        $this->load->view('template/head');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/trasil');
        $this->load->view('template/footer');
    }

    public function tradet($id)
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['detail'] = $this->db->get_where('transaksi', ['id_transaksi' => $id])->row_array();
        $data['transaksi'] = $this->db->get_where('transaksi_detail', ['id_transaksi' => $id])->result_array();
        $this->load->view('template/head');
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('admin/tratail', $data);
        $this->load->view('template/footer');
    }

    //keluar
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px;" role="alert">Selamat! Anda telah Logout</div>');
        redirect('admin');
    }
}
