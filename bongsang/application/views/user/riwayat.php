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
                                        <div class="col-4 mt-4">
                                            <span class="validation">
                                                <button class="btn <?php if ($data['valid'] == 2) {
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
                                                                                    echo "Dibayar";
                                                                                } else {
                                                                                    echo "Menunggu Pembayaran";
                                                                                };
                                                                            }; ?></button>
                                                <a href=" <?= base_url('user/detail/') . $data['id_transaksi']; ?>"><button class="mt-1 btn btn-info">Detail</button></a>
                                            </span>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="col-4">
            <div class="column mt-1 kotak">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <label>
                                <?= $member['nama_member'] ?>
                            </label>
                            <p>
                                Detail transaksi yang telah anda lakukan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>