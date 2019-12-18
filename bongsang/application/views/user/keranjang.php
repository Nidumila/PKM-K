<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container" widht="100%" style="text-align: center;">
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="<?= base_url('Asset/img/profile/') . $member['gambar']; ?>" alt="logo" height="33px" width="33px">
                <?= $member['nama_member']; ?>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= base_url('user/profile'); ?>">Profil Saya</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('awal/logout'); ?>">Logout</a>
            </div>
        </div>
        <div class="col-2" style="text-align: left;">
            <form id="searchbox" method="get" action="/search" autocomplete="off" style="background-color: white;">
                <input name="cari" type="text" size="15" placeholder="Mau cari apa?" />
                <input id="button-submit" type="submit" value="" />
            </form>
        </div>
        <div class="col-2">

        </div>
        <div class="col-4" style="text-align: right;">
            <a href="<?= base_url('user/'); ?>"><button class="btn btn-danger"> home </button></a>
            <a href="<?= base_url('user/procom'); ?>"><button class="btn btn-primary"> about </button></a>
            <button class="btn btn-danger"> toko </button>
            <a href="<?= base_url('user/help'); ?>"><button class="btn btn-primary"> help </button></a>
        </div>
        <div class="col-2">
            <a href="<?= base_url('user/keranjang'); ?>"> <button class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Keranjang</button> </a>
        </div>
    </div>
</nav>
<br>
<div class="container" style="text-align: justify;">
    <div class="row">
        <div class="col-xl-8">
            <div class="column kotak">
                <input type="checkbox" name="pilih" value="Pilih" style="margin-left: 5px;"> Pilih Semua
                <a href="" type="reset" style="float: right; margin-right: 5px;">Hapus Semua</a>
                <form action="test_cek" method="POST">
            </div>
            <div class="column mt-1 kotak">
                <input class="mt-2" type="checkbox" name="pilih" value="Pilih" style="margin-left: 5px;"> Bongsang Original <br>
                <br>
                <div class="container pb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="pl-2" src="<?= base_url('Asset/img/'); ?>bongsang.jpg" alt="prodak" height="180px" style="">
                        </div>
                        <div class="col-6">
                            <p>Wazzup guys! ✋</p>

                            <p>Tau bonggol pisang belum? Kalau belum mimin kasih tau yah.
                            Bonggol pisang adalah bagian dari pohon pisang bagian bawah akar yang biasa dibuang oleh Petani Pisang atau Masyrakat. Dannnn ternyata kandungan dari Bonggol Pisang banyak manfaatnya lohh. Kepo kan?</p>

                            <p>Dengan varian rasa Original/gurih</p>


                            <p>Banyak manfaat yang terkandung dalam Bongsang ini, seperti: Kalori, Protein, Lemak, Karbohidrat, Kalsium, Fosfor, Zat Besi, Vitamin A, Vitamin B1, Vitamin C, Air, 😊 .</p>
                            

                            <p>Untuk peremajaan kulit, antioksidan, pelembapan kulit, serat untuk anak2 memperlancar BAB</p>
                        </div>
                        <div class="col-3">
                            <center class="mb-3">
                                <font size="5">Rp.15.000,-</font>
                            </center>
                            <center class="mb-3">
                                <a href="#minus-circle"><i class="fa fa-minus-circle"></i></a>
                                0
                                <a href="#plus-circle"><i class="fa fa-plus-circle"></i></a>
                            </center>
                            <center>
                                <a href=""><img src="<?= base_url('Asset/img/'); ?>delete-ikon.png" width="28px"></a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column mt-1 kotak">
                <input class="mt-2" type="checkbox" name="pilih" value="Pilih" style="margin-left: 5px;"> Bongsang Balado <br>
                <br>
                <div class="container pb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="pl-2" src="<?= base_url('Asset/img/'); ?>bongsang.jpg" alt="prodak" height="180px" style="">
                        </div>
                        <div class="col-6">
                            <p>Wazzup guys! ✋</p>

                            <p>Tau bonggol pisang belum? Kalau belum mimin kasih tau yah.
                            Bonggol pisang adalah bagian dari pohon pisang bagian bawah akar yang biasa dibuang oleh Petani Pisang atau Masyrakat. Dannnn ternyata kandungan dari Bonggol Pisang banyak manfaatnya lohh. Kepo kan?</p>

                            <p>Dengan varian rasa Balado</p>


                            <p>Banyak manfaat yang terkandung dalam Bongsang ini, seperti: Kalori, Protein, Lemak, Karbohidrat, Kalsium, Fosfor, Zat Besi, Vitamin A, Vitamin B1, Vitamin C, Air, 😊 .</p>
                            

                            <p>Untuk peremajaan kulit, antioksidan, pelembapan kulit, serat untuk anak2 memperlancar BAB</p> 

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
                                <a href=""><img src="<?= base_url('Asset/img/'); ?>delete-ikon.png" width="28px"></a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column mt-1 kotak">
                <input class="mt-2" type="checkbox" name="pilih" value="Pilih" style="margin-left: 5px;"> Bongsang Balado <br>
                <br>
                <div class="container pb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="pl-2" src="<?= base_url('Asset/img/'); ?>bongsang.jpg" alt="prodak" height="180px" style="">
                        </div>
                        <div class="col-6">
                            <p>Wazzup guys! ✋</p>

                            <p>Tau bonggol pisang belum? Kalau belum mimin kasih tau yah.
                            Bonggol pisang adalah bagian dari pohon pisang bagian bawah akar yang biasa dibuang oleh Petani Pisang atau Masyrakat. Dannnn ternyata kandungan dari Bonggol Pisang banyak manfaatnya lohh. Kepo kan?</p>

                            <p>Dengan varian rasa Rumput Laut</p>


                            <p>Banyak manfaat yang terkandung dalam Bongsang ini, seperti: Kalori, Protein, Lemak, Karbohidrat, Kalsium, Fosfor, Zat Besi, Vitamin A, Vitamin B1, Vitamin C, Air, 😊 .</p>
                            

                            <p>Untuk peremajaan kulit, antioksidan, pelembapan kulit, serat untuk anak2 memperlancar BAB</p> 
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
                                <a href=""><img src="<?= base_url('Asset/img/'); ?>delete-ikon.png" width="28px"></a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </form>
        <div class="col-xl-4">
            <div class="container">
                <div class="row">
                    <div class="p-3 mt-1 kotak">
                        <p> Lokasi </p>
                        <img src="<?= base_url('Asset/img/icon/'); ?>lokasi-ikon.png" width="5%">
                        Jawa Barat, Kabupaten Indramayu, Karangampel. 45283
                        <hr size="10px">
                        <table>
                            <tr>
                                <td> Metode Pengiriman </td>
                                <td> : </td>
                                <td><select name="Jurusan">
                                        <option value="">Pilih Pengiriman</option>
                                        <option value=" JNE">JNE</option>
                                        <option value="JNT">JNT </option>
                                        <option value="POS">POS</option>
                                        <option value="TIKI">TIKI</option>
                                    </select></td>
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
                                    <input type="name" name="kode voucher" placeholder="masukan Kode voucher">
                                </td>
                                <td>:</td>
                                <td>
                                    <button>Gunakan</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Total Harga</td>
                                <td>:</td>
                                <td>RP. - </td>
                            </tr>
                            <tr>
                                <td>
                                    <button>Bayar</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>