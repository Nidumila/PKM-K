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
                <div class="col-12">
                    <?= $this->session->flashdata('message'); ?>
                </div>
                <?php foreach ($produk as $isi) : ?>
                    <div class="col-6">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="<?= base_url('Asset/img/produk/') . $isi['gambar'] ?>" class="card-img" alt=" ...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $isi['id_barang'] . " " . $isi['nama_barang'] . " " . $isi['sub_pilihan'] ?></h5>
                                        <div class="container">
                                            <div class="row">
                                                <table>
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
                                            <div class="row">
                                                <a href="<?= base_url('control/detail/') . $isi['id_barang']; ?>" class="mr-2"><button class="btn btn-info"> Detail </button></a>
                                                <a href="<?= base_url('control/delete/') . $isi['id_barang']; ?>"><button class="btn btn-danger"> Hapus </button></a>
                                            </div>
                                        </div>
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