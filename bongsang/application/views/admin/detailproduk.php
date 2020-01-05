<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Orders -->
        <div class="orders">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title"> ID : <?= $produk['id_barang']; ?></h4>
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-10">
                                                    <img src="<?= base_url('Asset/img/produk/') . $produk['gambar']; ?>" alt="">
                                                </div>
                                            </div>
                                            <hr style="border-color: #607d8b">
                                            <div class="row">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <p class="card-text">Nama Produk </p>
                                                        </td>
                                                        <td>
                                                            <p class="card-text">:</p>
                                                        </td>
                                                        <td>
                                                            <p class="card-text"><?= $produk['nama_barang'] ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p class="card-text">Rasa </p>
                                                        </td>
                                                        <td>
                                                            <p class="card-text">:</p>
                                                        </td>
                                                        <td>
                                                            <p class="card-text"><?= $produk['sub_pilihan'] ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p class="card-text">Kategori </p>
                                                        </td>
                                                        <td>
                                                            <p class="card-text">:</p>
                                                        </td>
                                                        <td>
                                                            <p class="card-text"><?= $produk['kategori'] ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p class="card-text">Harga </p>
                                                        </td>
                                                        <td>
                                                            <p class="card-text">:</p>
                                                        </td>
                                                        <td>
                                                            <p class="card-text">Rp<?= $produk['harga'] ?></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p class="card-text">Stok</p>
                                                        </td>
                                                        <td>
                                                            <p class="card-text">:</p>
                                                        </td>
                                                        <td>
                                                            <p class="card-text"><?= $produk['stok'] ?></p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="row justify-content-center mt-3">
                                                <a href="<?= base_url('control/edit/') . $produk['id_barang']; ?>" class="mr-2"><button class="btn btn-secondary"> Edit Produk </button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-7" style="border: #607d8b solid 1px;-moz-border-radius: 6px; -webkit-border-radius: 6px; border-radius: 6px;">
                                        <p class="card-text"><b> Deskripsi Produk: </b></p>
                                        <div>
                                            <?= $produk['deskripsi']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.card -->
                </div> <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /.orders -->
    </div>
    <!-- .animated -->
</div>