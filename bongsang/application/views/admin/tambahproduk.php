<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card-body">
                        <h4 class="box-title">TAMBAH BARANG</h4>
                    </div>
                    <div class="col-xl-12">
                        <form method="post" id="produk" name="produk" action="<?= base_url('control/tambahproduk/');  ?>" style="margin-left: 25px; margin-right: 25px; margin-bottom: 25px;">
                            <div class="form-grup">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                        <label> Nama Produk </label>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Produk" style="margin-top: 5px; margin-bottom:5px;" value="<?= set_value('nama'); ?>">
                                        <?= form_error('nama', '<small class="text-danger pl-1">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                        <label>Kategori</label>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                        <div class="input-group mb-3">
                                            <select class="custom-select" id="kategori" name="kategori" onchange="tampilkan()">
                                                <option selected>Pilih Kategori</option>
                                                <option value="Makanan">Makanan</option>
                                                <option value="Alat Kebersihan">Alat Kebersihan</option>
                                                <option value="Bahan Olah">Bahan Olah</option>
                                            </select>
                                            <?= form_error('kategori', '<small class="text-danger pl-1">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                        <label> Sub Kategori</label>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                        <div class="input-group mb-3">
                                            <select class="custom-select" id="sub" name="sub"></select>
                                        </div>
                                        <?= form_error('sub', '<small class="text-danger pl-1">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                        <label> Harga Produk </label>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                        <input type="text" class="form-control" name="harga" placeholder="Harga Produk" id="harga" style="margin-top: 5px; margin-bottom; 5px;" value="<?= set_value('harga'); ?>">
                                        <?= form_error('harga', '<small class="text-danger pl-1">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                        <label> Stok Produk </label>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                        <input type="text" class="form-control" name="stok" placeholder="Stok Produk" id="stok" style="margin-top: 5px; margin-bottom; 5px;" value="<?= set_value('harga'); ?>">
                                        <?= form_error('stok', '<small class="text-danger pl-1">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label> Deskripsi Produk </label>
                                    </div>
                                    <div class="col">
                                        <textarea name="desk" id="myEditor"></textarea>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-primary Daftar" name="daftar" style="margin-top: 5px;">Tambah</button>
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