<div class="container" style="text-align: justify;">
    <div class="row">
        <div class="col-xl-8">
            <div class="column kotak">
                <input type="checkbox" name="pilih" value="Pilih" style="margin-left: 5px;"> Pilih Semua
                <a href="" type="reset" style="float: right; margin-right: 5px;">Hapus Semua</a>
            </div>
            <?php
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
                $total = $data['Jumlah'] * $query['harga'];

            ?>
                <div class="column mt-1 kotak">
                    <input class="mt-2" type="checkbox" name="pilih" value="Pilih" style="margin-left: 5px;"> <?= $query['nama_barang'] . " " . $query['sub_pilihan']; ?> <br>
                    <br>
                    <div class="container pb-3">
                        <div class="row">
                            <div class="col-4">
                                <img class="pl-2" src="<?= base_url('Asset/img/') . $query['gambar']; ?>" alt="prodak" width="100%" style="">
                            </div>
                            <div class="col-5">
                                <?= $query['deskripsi']; ?>
                            </div>
                            <div class="col-3">
                                <center class="mb-3">
                                    <font size="5">Rp<?= $query['harga']; ?>,-</font>
                                </center>
                                <center class="mb-3">
                                    <div class="container kotak" style="border: none">
                                        <div class="row justify-content-center">
                                            <div class="col-2 kotak" style="border: none">
                                                <button class="btn btn-link kotak" style="border: none" id="kurang<?= $i; ?>"><i class="fa fa-minus-circle"></i></button>
                                            </div>
                                            <div class="col-2 kotak" style="border: none">
                                                <input class="kotak" style="border: none; background: transparent" type="text" readonly min="1" value="1" id="hasil<?= $i; ?>" name="jumlah">
                                            </div>
                                            <div class="col-2 kotak" style="border: none">
                                                <button class="btn btn-link kotak" style="border: none" id="tambah<?= $i; ?>"><i class="fa fa-plus-circle"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </center>
                                <script>
                                    var no = 1;
                                    $(document).ready(function() {
                                        $('#tambah<?= $i; ?>').click(function() {
                                            no++;
                                            $('#hasil<?= $i; ?>').val(no);
                                        });
                                        $('#kurang<?= $i; ?>').click(function() {
                                            no--;
                                            $('#hasil<?= $i; ?>').val(no);
                                        });
                                    });
                                </script>
                                <center>
                                    <a href=""><img src="<?= base_url('Asset/img/icon/'); ?>delete-ikon.png" width="28px"></a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                $jumlah = $jumlah + $total;
                $i++;
            }
            ?>
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
                        <table>
                            <tr>
                                <td> Metode Pengiriman </td>
                                <td> : </td>
                                <td>
                                    <select class="custom-select" id="kategori" name="kategori" onchange="tampilkan()">
                                        <option value="">Pilih Pengiriman</option>
                                        <option value=" JNE">JNE</option>
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
                                <td> RP. - </td>
                            </tr>
                            <tr>
                                <td>Biaya Pengiriman</td>
                                <td> : </td>
                                <td> RP. - </td>
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
                                <td>RP. - </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center">
                                    <div class="container">
                                        <?php
                                        if (isset($_GET['pesan'])) {
                                            if ($_GET['pesan'] == "salah") {
                                                echo "<p>Captcha tidak sesuai.</p>";
                                            }
                                        }
                                        ?>

                                        <!-- <p>Isi Captcha Dengan Benar</p>     
                                    <form action="captcha.php" method="post">
                                        <table align="center">                      
                                            <tr>
                                                <td>Captcha</td>                
                                                <td><img src="<?= base_url('user/capcha/') ?>" alt="gambar" /> </td>
                                            </tr>
                                            <td>Isikan captcha </td>
                                            <td><input name="nilaiCaptcha" value=""/></td>
                                        </table>
                                    </form> -->
                                        <a href="<?= base_url('user/halamanpembayaran') ?>"><button type="submit" class="btn btn-warning" name="bayar" style="margin-top: 5px;">Lanjut Membayar</button></a>

                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>