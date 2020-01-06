<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="column mt-1 kotak">
                <div class="container pb-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-8">
                                        <label class="mt-3">Pesanan <?= $transaksi['id_transaksi']; ?> ></label><br> <span>Dipesan pada tanggal <?= $transaksi['tanggal']; ?></span>
                                    </div>
                                    <div class="col-4">
                                        <span class="validation">
                                            <button class="mt-4 btn <?php if ($transaksi['valid'] == 2) {
                                                                        echo 'btn-secondary" disabled="disabled';
                                                                    } else {
                                                                        if ($transaksi['valid'] == 1) {
                                                                            echo 'btn-primary" disabled="disabled';
                                                                        } else {
                                                                            echo 'btn-warning" disabled="disabled';
                                                                        };
                                                                    }; ?>"><?php if ($transaksi['valid'] == 2) {
                                                                                echo "Transaksi Gagal";
                                                                            } else {
                                                                                if ($transaksi['valid'] == 1) {
                                                                                    echo "Dibayar";
                                                                                } else {
                                                                                    echo "Menunggu Pembayaran";
                                                                                };
                                                                            }; ?></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $id = $transaksi['id_transaksi'];
                        $querys = $this->db->query("SELECT * FROM `transaksi_detail` WHERE `id_transaksi`='$id'")->result_array();
                        foreach ($querys as $list) {
                            $idp = $list['produk'];
                            $queryx = $this->db->query("SELECT * FROM `produk` WHERE `id_barang`='$idp'")->row_array();
                        ?>
                            <div class="col-12">
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="<?= base_url('asset/img/produk/') . $queryx['gambar']; ?>" alt="produk" height="130px">
                                        </div>
                                        <div class="col-8">
                                            <p><?= $queryx['nama_barang'] . " " . $queryx['sub_pilihan']; ?></p>
                                            <p>Rp<?= $queryx['harga']; ?></p>
                                            <p>x <?= $list['jumlah']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="column mt-1 kotak">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <label>
                                Rekening Pembayaran :
                            </label>
                            <p>
                                No. Rekening 0442848800<br>
                                an Hera Wijaya
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column mt-1 kotak">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="<?= base_url('user/bayar/') . $transaksi['id_transaksi'];  ?>" enctype="multipart/form-data" style="margin-left: 25px; margin-right: 25px; margin-bottom: 25px;">
                                <div class="form-grup">
                                    <div class="row">
                                        <label> Pilih Bukti Pembayaran</label>
                                        <input type="hidden" name="idtra" value="<?= $transaksi['id_transaksi']; ?>">
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <img id="prev_foto" src="" class="img-responsive img-thumbnail">
                                        </div>
                                        <div class="col-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label for="image" class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6">
                                            <button type="submit" class="btn btn-primary Daftar" name="daftar" style="margin-top: 5px;">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>