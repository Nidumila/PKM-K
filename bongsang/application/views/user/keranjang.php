<div class="container" style="text-align: justify;">
    <div class="row">
        <div class="col-xl-8">
            <div class="column kotak">
                <input type="checkbox" name="pilih" value="Pilih" style="margin-left: 5px;"> Pilih Semua
                <a href="" type="reset" style="float: right; margin-right: 5px;">Hapus Semua</a>
            </div>
            <div class="column mt-1 kotak">
                <input class="mt-2" type="checkbox" name="pilih" value="Pilih" style="margin-left: 5px;"> Nama Barang <br>
                <br>
                <div class="container pb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="pl-2" src="<?= base_url('Asset/img/'); ?>bongsang.jpg" alt="prodak" height="180px" style="">
                        </div>
                        <div class="col-6">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div>
                        <div class="col-3">
                            <center class="mb-3">
                                <font size="5">Rp.15.000,-</font>
                            </center>
                            <center class="mb-3">
                                <a href="#minus-circle"><i class="fa fa-minus-circle"></i></a>
                                2
                                <a href="#plus-circle"><i class="fa fa-plus-circle"></i></a>
                            </center>
                            <center>
                                <a href=""><img src="<?= base_url('Asset/img/icon/'); ?>delete-ikon.png" width="28px"></a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column mt-1 kotak">
                <input class="mt-2" type="checkbox" name="pilih" value="Pilih" style="margin-left: 5px;"> Nama Barang <br>
                <br>
                <div class="container pb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="pl-2" src="<?= base_url('Asset/img/'); ?>bongsang.jpg" alt="prodak" height="180px" style="">
                        </div>
                        <div class="col-6">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                        </div>
                        <div class="col-3">
                            <center class="mb-3">
                                <font size="5">Rp.15.000,-</font>
                            </center>
                            <center class="mb-3">
                                <a href="#minus-circle"><i class="fa fa-minus-circle"></i></a>
                                2
                                <a href="#plus-circle"><i class="fa fa-plus-circle"></i></a>
                            </center>
                            <center>
                                <a href=""><img src="<?= base_url('Asset/img/icon/'); ?>delete-ikon.png" width="28px"></a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="container">
                <div class="row">
                    <div class="p-3 mt-1 kotak">
                        <p> Lokasi </p>
                        <div class="container">
                            <div class="row">
                                <div class="col-2">
                                    <img src="<?= base_url('Asset/img/icon/'); ?>lokasi-ikon.png" width="35px">
                                </div>
                                <div class="col-10">
                                    <p>Jawa Barat, Kabupaten Indramayu, Karangampel. 45283</p>
                                </div>
                            </div>
                        </div>
                        <hr size="10px">
                        <table>
                            <tr>
                                <td> Metode Pengiriman </td>
                                <td> : </td>
                                <td>
                                    <select class="custom-select" id="kategori" name="kategori" onchange="tampilkan()">
                                        <option value="">Pilih Pengiriman</option>
                                        <option value="JNE">JNE</option>
                                        <option value="JNT">JNT </option>
                                        <option value="POS">POS</option>
                                        <option value="TIKI">TIKI</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Ringkasan Pemesanan</td>
                            </tr>
                            <tr>
                                <td>Subtotal</td>
                                <td> : </td>
                                <td> RP. - </td>
                            </tr>
                            <tr>
                                <td>Biaya Pengiriman</td>
                                <td> : </td>
                                <td> RP. - </td>
                            </tr>
                            <br>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="voucher" id="voucher" placeholder="Kode voucher" style="margin-top: 5px; margin-bottom:5px;">
                                </td>
                                <td>:</td>
                                <td>
                                    <button type="submit" class="btn btn-secondary" name="gunakan" style="margin-top: 5px;">Tambah</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Harga</td>
                                <td>:</td>
                                <td>RP. - </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center">
                                    <div class="container">
                                        <button type="submit" class="btn btn-warning" name="bayar" style="margin-top: 5px;">Lanjut Membayar</button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>