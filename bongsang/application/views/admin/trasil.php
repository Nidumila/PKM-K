<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="orders">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Transaksi Berhasil </h4>
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
                                            <th>Detail Pesanan</th>
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
                                                <td>
                                                    <span class="validation">
                                                        <a href="<?= base_url('control/tradet/') . $isi['id_transaksi']; ?>">Lihat Detail</a>
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
</div>