<!-- Left Panel -->

<!-- /#left-panel -->
<!-- Right Panel -->

<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-cash"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">Rp
                                        <span class="count">
                                            <?php
                                            $total = "SELECT SUM(`total_bayar`) AS `total` FROM `transaksi`";
                                            $memjum = $this->db->query($total)->row_array();
                                            echo $memjum['total'];
                                            ?>
                                        </span></div>
                                    <div class="stat-heading">Pemasukan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-shopbag"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">
                                        <span class="count">
                                            <?php
                                            $total = "SELECT COUNT(`id_transaksi`) AS `total` FROM `transaksi`";
                                            $memjum = $this->db->query($total)->row_array();
                                            echo $memjum['total'];
                                            ?>
                                        </span></div>
                                    <div class="stat-heading">Transaksi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7s-box1"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">
                                        <span class="count">
                                            <?php
                                            $total = "SELECT COUNT(`id_barang`) AS `total` FROM `produk`";
                                            $memjum = $this->db->query($total)->row_array();
                                            echo $memjum['total'];
                                            ?>
                                        </span></div>
                                    <div class="stat-heading">Produk</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="pe-7s-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">
                                        <span class="count">
                                            <?php
                                            $total = "SELECT COUNT(`id_member`) AS `total` FROM `member`";
                                            $memjum = $this->db->query($total)->row_array();
                                            echo $memjum['total'];
                                            ?>
                                        </span></div>
                                    <div class="stat-heading">Member</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Widgets -->
        <div class="clearfix"><?= $this->session->flashdata('message'); ?></div>
        <!-- Orders -->
        <div class="orders">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Orders </h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th>Id</th>
                                            <th>Id Member</th>
                                            <th>Tanggal</th>
                                            <th>Nominal</th>
                                            <th>Bukti</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($transaksi as $isi) : ?>
                                            <tr>
                                                <td class="serial"><?= $nomor; ?>.</td>
                                                <td class="avatar">
                                                    <?= $isi['id_transaksi']; ?>
                                                </td>
                                                <td> <?= $isi['id_member']; ?> </td>
                                                <td> <span class="name"><?= $isi['tanggal']; ?></span> </td>
                                                <td> Rp<span class="count"><?= $isi['total_bayar']; ?></span> </td>
                                                <td><span><?= $isi['bukti']; ?></span></td>
                                                <td>
                                                    <span class="<?php
                                                                    if ($isi['valid'] == 1) {
                                                                        echo "badge badge-complete";
                                                                    } elseif ($isi['valid'] == 2) {
                                                                        echo "badge badge-complete bg-dark";
                                                                    } else {
                                                                        echo "badge badge-pending";
                                                                    }; ?>"><?php
                                                                            if ($isi['valid'] == 1) {
                                                                                echo "Berhasil";
                                                                            } elseif ($isi['valid'] == 2) {
                                                                                echo "Gagal";
                                                                            } else {
                                                                                echo "Panding";
                                                                            }; ?></span>
                                                </td>
                                                <td>
                                                    <span class="validation">
                                                        <a href="<?= base_url('control/traval/') . $isi['id_transaksi']; ?>">edit</a>
                                                        <a href="<?= base_url('control/tralet/') . $isi['id_transaksi']; ?>">Gagalkan</a>
                                                    </span>
                                                </td>
                                            </tr>
                                        <?php
                                            $nomor++;
                                        endforeach; ?>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div> <!-- /.card -->
                </div> <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /.orders -->
    </div>
    <!-- .animated -->
</div>