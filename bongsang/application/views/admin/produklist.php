<!-- Left Panel -->

<!-- /#left-panel -->
<!-- Right Panel -->

<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Orders -->
        <div class="orders">
            <div class="row">
                <?php foreach ($produk as $isi) : ?>
                    <div class="col-6">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="<?= base_url('Asset/img/') . $isi['gambar'] ?>" class="card-img" alt=" ...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $isi['nama_barang'] ?></h5>
                                        <table>
                                            <tr>
                                                <td>
                                                    <p class="card-text">Rasa </p>
                                                </td>
                                                <td>:</td>
                                                <td><?= $isi['sub_pilihan'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="card-text">Kategori </p>
                                                </td>
                                                <td>:</td>
                                                <td><?= $isi['kategori'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="card-text">Harga </p>
                                                </td>
                                                <td>:</td>
                                                <td>Rp<?= $isi['harga'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="card-text"><small class="text-muted">Stok</small></p>
                                                </td>
                                                <td>:</td>
                                                <td>
                                                    <p class="card-text"><small class="text-muted"><?= $isi['stok'] ?></small></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- /.orders -->
    </div>
    <!-- .animated -->
</div>