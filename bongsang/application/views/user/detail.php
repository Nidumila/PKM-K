<div class="container">
    <div class="row">
        <div class="col-8">
            <?php
            $id = $member['id_member'];
            $query = $this->db->query("SELECT * FROM `transaksi` WHERE `id_member`='$id'")->result_array();
            foreach ($query as $data) {
            ?>
                <div class="column mt-1 kotak">
                    <div class="container pb-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-8">
                                            <label class="mt-3">Pesanan <?= $data['id_transaksi']; ?> ></label><br> <span>Dipesan pada tanggal <?= $data['tanggal']; ?></span>
                                        </div>
                                        <div class="col-4">
                                            <span class="validation">
                                                <button class="mt-4 btn <?php if ($data['valid'] == 2) {
                                                                            echo 'btn-secondary" disabled="disabled';
                                                                        } else {
                                                                            if ($data['valid'] == 1) {
                                                                                echo 'btn-primary" disabled="disabled';
                                                                            } else {
                                                                                echo 'btn-warning" disabled="disabled';
                                                                            };
                                                                        }; ?>"><?php if ($data['valid'] == 2) {
                                                                                echo "Transaksi Gagal";
                                                                            } else {
                                                                                if ($data['valid'] == 1) {
                                                                                    echo "Telah Dibayar";
                                                                                } else {
                                                                                    echo "Menunggu Pembayaran";
                                                                                };
                                                                            }; ?></button>
                                            </span>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $id = $data['id_transaksi'];
                            $querys = $this->db->query("SELECT * FROM `transaksi_detail` WHERE `id_transaksi`='$id'")->result_array();
                            foreach ($querys as $list) {
                                $idp = $list['produk'];
                                $queryx = $this->db->query("SELECT * FROM `produk` WHERE `id_barang`='$idp'")->row_array();
                            ?>
                                <div class="col-12">
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
                                        <hr>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>