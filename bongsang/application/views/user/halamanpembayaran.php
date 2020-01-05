<div class="container" style="text-align: justify;">
    <div class="row">
        <div class="col-xl-8">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="column kotak">
                            <p><B>ALAMAT</B></p>
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
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <div class="column kotak">
                            <p><B>DETAIL PEMBELIAN</B></p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <img class="pl-2" src="<?= base_url('Asset/img/'); ?>bongsang.jpg" alt="prodak" height="180px" style="">
                                    </div>
                                    <div class="col-2">
                                        <center class="mb-3">
                                            <font size="5">Rp.15.000,-</font>
                                            <font size="2"> Jumlah 3</font>
                                        </center>
                                    </div>
                                </div>
                            </div>
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
                                        <button type="submit" class="btn btn-warning" name="bayar" style="margin-top: 5px;">Bayar</button>
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