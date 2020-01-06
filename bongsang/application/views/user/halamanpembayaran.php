<div class="container" style="text-align: justify;">
    <div class="row">
        <div class="col-xl-8">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="column kotak">
                            <p><B>ALAMAT</B></p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?= base_url('Asset/img/icon/'); ?>lokasi-ikon.png" width="35px">
                                    </div>
                                    <div class="col-10">
                                        <p>Jawa Barat, Kabupaten Indramayu, Karangampel. 45283</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="column kotak">
                            <p><B>DETAIL PEMBELIAN</B></p>
                            <?php
                            error_reporting(0);
                            $transaksi = file_get_contents('Asset/keranjang/keranjang' . $member['id_member'] . '.json');
                            $list = json_decode($transaksi, true);
                            $json = json_encode($list, JSON_PRETTY_PRINT);
                            //export file json transaksi
                            file_put_contents('Asset/keranjang/keranjang' . $member['id_member'] . '.json', $json);
                            $i = 1;
                            $jumlah = 0;
                            foreach ($list as $data) {
                                $id = $data['id'];
                                $query = $this->db->query("SELECT * FROM `produk` WHERE `id_barang`='$id'")->row_array();
                                $total = $data['Jumlah'] * $query['harga'] + $total;

                            ?>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <img class="pl-2" src="<?= base_url('Asset/img/') . $query['gambar']; ?>" alt="prodak" height="180px" style="">
                                        </div>
                                        <div class="col-2">
                                            <center class="mb-3">
                                                <font size="5"> <?= $query['nama_barang'] . $query['sub_pilihan']; ?></font>
                                                <font size="5"> Harga : Rp<?= $query['harga']; ?></font>
                                                <font size="2"> Jumlah : <?= $data['Jumlah']; ?></font>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                $jumlah = $jumlah + $total;
                                $i++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="container">
                <div class="row">
                    <div class="p-3 mt-1 kotak">
                        <p> Lokasi </p>
                        <div class="container">
                            <div class="row">
                                <div class="col-2">
                                    <img src="<?= base_url('Asset/img/icon/'); ?>lokasi-ikon.png" width="35px">
                                </div>
                                <div class="col-10">
                                    <p>Jawa Barat, Kabupaten Indramayu, Karangampel. 45283</p>
                                </div>
                            </div>
                        </div>
                        <hr size="10px">
                        <form method="post">
                            <?php
                            $tanggal = date("Y-m-d");
                            $sos = $this->db->query("SELECT max(id_transaksi) AS id FROM transaksi")->row_array();
                            $kode = $sos['id'];
                            $iso = substr($kode, 11, 3);
                            $tambah = (int) $iso + 1;
                            $date = date("Ymd");
                            if (strlen($tambah) == 1) {
                                $format = "TRA" . $date . "00" . $tambah;
                            } else if (strlen($tambah) == 2) {
                                $format = "TRA" . $date . "0" . $tambah;
                            } else if (strlen($tambah) == 3) {
                                $format = "TRA" . $date . $tambah;
                            }
                            ?>
                            <table>
                                <tr>
                                    <td> Metode Pengiriman </td>
                                    <td> : </td>
                                    <td>
                                        <select class="custom-select" id="kategori" name="kategori" onchange="tampilkan()">
                                            <option value="">Pilih Pengiriman</option>
                                            <option value="JNE">JNE</option>
                                            <option value="JNT">JNT </option>
                                            <option value="POS">POS</option>
                                            <option value="TIKI">TIKI</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ringkasan Pemesanan</td>
                                </tr>
                                <tr>
                                    <td>Subtotal</td>
                                    <td> : </td>
                                    <td> Rp<?= $total; ?> </td>
                                </tr>
                                <tr>
                                    <td>Biaya Pengiriman</td>
                                    <td> : </td>
                                    <td> Rp. - </td>
                                </tr>
                                <br>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="voucher" id="voucher" placeholder="Kode voucher" style="margin-top: 5px; margin-bottom:5px;">
                                    </td>
                                    <td>:</td>
                                    <td>
                                        <button type="submit" class="btn btn-secondary" name="gunakan" style="margin-top: 5px;">Tambah</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Total Harga</td>
                                    <td>:</td>
                                    <td>Rp<?= $total + $pengiriman; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <div class="container">
                                            <button type="submit" class="btn btn-warning" name="bayar" style="margin-top: 5px;">Bayar</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <?php
                        if (isset($_POST['bayar'])) {
                            $idm = $member['id_member'];
                            $hasil = $this->db->query("INSERT INTO transaksi(`id_transaksi`, `tanggal`, `id_member`, `total_bayar`) VALUES ('$format', '$tanggal','$idm', $total)");
                            $transaksi = file_get_contents('Asset/keranjang/keranjang' . $member['id_member'] . '.json');
                            $list = json_decode($transaksi, true);
                            $json = json_encode($list, JSON_PRETTY_PRINT);
                            //export file json transaksi
                            file_put_contents('Asset/keranjang/keranjang' . $member['id_member'] . '.json', $json);
                            foreach ($list as $data) {
                                $id_produk = $data['id'];
                                $query = $this->db->query("SELECT * FROM `produk` WHERE `id_barang`='$id_produk'")->row_array();
                                $jumlah = $data['Jumlah'];
                                $harga = $query['harga'];
                                $total = $data['Jumlah'] * $query['harga'];
                                $hasil = $this->db->query("INSERT INTO transaksi_detail VALUES ('$format', '$id_produk', $harga, $jumlah, $total)");
                            }

                            // Mendapatkan file json
                            $keranjang = file_get_contents('Asset/keranjang/keranjang' . $member['id_member'] . '.json');

                            // Mendecode keranjang.json
                            $data = json_decode($keranjang, true);

                            // Membaca data array menggunakan foreach
                            foreach ($data as $key => $d) {
                                // Hapus data yang sudah
                                $id_produk = $d['id'];
                                $query = $this->db->query("SELECT * FROM `produk` WHERE `id_barang`='$id_produk'")->row_array();
                                if ($d['id'] === $id_produk) {
                                    // Menghapus data array sesuai dengan index
                                    // Menggantinya dengan elemen baru
                                    array_splice($data, $key, 999);
                                }
                            }

                            // Mengencode data menjadi json
                            $json = json_encode($data, JSON_PRETTY_PRINT);

                            // Menyimpan data ke dalam keranjang.json
                            $keranjang = file_put_contents('Asset/keranjang/keranjang' . $member['id_member'] . '.json', $json);
                            $this->session->set_flashdata('message', '<div class="alert alert-success" style="margin-top: 10px; margin-left: 25px; margin-right: 25px;" role="alert">Selamat! Pesanan Telah Dibuat</div>');
                            redirect('user/bayar/' . $format);
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>