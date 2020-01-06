<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card-body">
                        <h4 class="box-title">ID Transaksi : <?= $transaksi['id_transaksi'] ?></h4>
                        <?php
                        $alamat = $transaksi['id_member'];
                        $query = "SELECT *  FROM `member` WHERE `id_member`='$alamat'";
                        $member = $this->db->query($query)->row_array();
                        ?>
                    </div>
                    <div class="col-xl-12">
                        <form method="post" action="<?= base_url('control/traval/') . $transaksi['id_member'];  ?>" style="margin-left: 25px; margin-right: 25px; margin-bottom: 25px;">
                            <div class="form-grup">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                                    <label>Id Member</label>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                                    <label><?= $member['id_member']; ?></label>
                                                    <input type="hidden" name="id" readonly value="<?= $transaksi['id_transaksi']; ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                                    <label> Email</label>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                                    <label> <?= $member['email']; ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                                    <label> Nama Lengkap </label>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                                    <label><?= $member['nama_member']; ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                                    <label> Total Bayar </label>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                                    <label>Rp<?= $transaksi['total_bayar']; ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                                    <label>Alamat</label>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                                    <label><?= $member['alamat']; ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                                    <label> Nomor Ponsel </label>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                                    <label><?= $member['nomor_ponsel']; ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                                    <label> Status Pesanan </label>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                                    <label><?php
                                                            if ($transaksi['valid'] == 1) {
                                                                echo "Berhasil";
                                                            } elseif ($transaksi['valid'] == 2) {
                                                                echo "Gagal";
                                                            } else {
                                                                echo "Panding";
                                                            }; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="row justify-content-center">
                                                <div class="col-8">
                                                    <img src="<?= base_url('Asset/img/bukti/') . $transaksi['bukti']; ?>" class=" img-thumbnail">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12" align="center">
                                                    <input type="hidden" name="valid" value="<?php if ($transaksi['valid'] == 1) {
                                                                                                    echo 0;
                                                                                                } else {
                                                                                                    echo 1;
                                                                                                }
                                                                                                ?>" required>
                                                    <label> Tanggal : <?= $transaksi['tanggal']; ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12" align="center">
                                                    <button type="submit" class="btn <?php
                                                                                        if ($transaksi['valid'] == 1) {
                                                                                            echo "btn-danger";
                                                                                        } elseif ($transaksi['valid'] == 2) {
                                                                                            echo "btn-secondary";
                                                                                        } else {
                                                                                            echo "btn-primary";
                                                                                        }; ?>" style="margin-top: 5px;" <?php if ($transaksi['valid'] != 2) {
                                                                                                                                    echo "";
                                                                                                                                } else {
                                                                                                                                    echo 'disabled="disabled"';
                                                                                                                                }; ?>><?php if ($transaksi['valid'] == 2) {
                                                                                                                                            echo "Transaksi Gagal";
                                                                                                                                        } else {
                                                                                                                                            if ($transaksi['valid'] == 1) {
                                                                                                                                                echo "Pending";
                                                                                                                                            } else {
                                                                                                                                                echo "Berhasil";
                                                                                                                                            };
                                                                                                                                        }; ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.col-lg-12 -->
</div>