<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="orders">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Id Transaksi : <?= $detail['id_transaksi']; ?></h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th>Produk</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($transaksi as $isi) : ?>
                                            <tr>
                                                <td class="serial"><?= $nomor; ?>.</td>
                                                <td class="avatar">
                                                    <?= $isi['produk']; ?>
                                                </td>
                                                <td> Rp<span class="count"><?= $isi['harga']; ?></span> </td>
                                                <td> <span class="count"><?= $isi['jumlah']; ?></span> </td>
                                                <td> Rp<span class="count"><?= $isi['total']; ?></span> </td>
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