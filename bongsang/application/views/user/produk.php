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
            <a href="company profil.html"><button class="btn btn-primary"> about </button></a>
            <button class="btn btn-danger"> toko </button>
            <a href="<?= base_url('user/help'); ?>"><button class="btn btn-primary"> help </button></a>
        </div>
        <div class="col-2">
            <a href="<?= base_url('user/keranjang'); ?>"> <button class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Keranjang</button> </a>
        </div>
    </div>
</nav>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-8" style="border: 2px solid gray">
            <div class="row">
                <div class="col-4">
                    <br>
                    <img src="bongsang.jpg" width="70%">
                    <br>

                </div>
                <div class="col-6">
                    <h1>Bongsang Original</h1>
                    <p>Kata kunci : <a href="">Bonggol Pisang</a><a href=""> Original </a><a href=""> Cemilan </a></p>
                    <hr>
                    <br>
                    <h3>Rp.15.000,-</h3>
                    <br>
                    <label>Stok Product</label>
                    <br>
                    <label>Jumlah </label>
                    <br>
                    <div>
                        <a href="#minus-circle"><i class="fa fa-minus-circle"></i></a>
                        <a href="#plus-circle"><i class="fa fa-plus-circle"></i></a>
                    </div>
                    <br><br>
                    <div class="col-12">
                        <button class="btn btn-warning" style="width: 100%" autofocus="center">Beli sekarang</button>
                    </div>
                    <br>
                    <div class="co-12">
                        <div class="row">
                            <div class="col-6"><button class="btn btn-warning" style="width: 100%" autofocus="center"> Tambah keranjang</button>
                            </div>
                            <div class="col-6"><button class="btn btn-warning" style="width: 100%" autofocus="center">Diskusi</button>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <br>
                    <a href="#"><i class="fa fa-heart-o"></i></a><br><br>
                    <a href="#share"><i class="fa fa-share"></i></a>
                    <br><br><br>
                    <a href="#"><i class="fa fa-eye"></i> Dilihat </a><br>
                    <a href="#truck"><i class="fa fa-truck"></i> Dikirim </a>
                    <br>
                    <a href="#tag"><i class="fa fa-tag"></i> Min. Beli 1</a><br>
                    <a href="#dropbox"><i class="fa fa-dropbox"></i> Kondisi Baru </a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-4" align="center">
            <label>Dukungan Pengiriman</label>
            <br><br>
            <a href=""><img src="jne.png" width="70$"></a>
            <br><br>
            <a href=""><img src="jnt.png" width="30%"></a>
            <br><br>
            <a href=""><img src="tiki.png" width="30%"></a>
            <br><br>
            <a href=""><img src="pos.png" width="25%"></a>
        </div>
    </div>
</div>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="row">
                <div class="col-4" style="border: 2px solid gray"><a href="#Deskripsi Product"><i class="fa fa-clipboard"></i></a>
                    <label>Deskripsi Product</label>
                </div>
                <div class="col-4" style="border: 2px solid gray"><a href="#pencil-square-o"><i class="fa fa-pencil-square-o"></i></a>
                    <label> Ulasan Product</label>
                </div>
                <div class="col-4" style="border: 2px solid gray"><a href="#"><i class="fa fa-group"></i><span class="text-muted"></span></a>
                    <label> Diskusi Product</label>
                </div>
            </div>
        </div>
        <div class="col-8" style="border: 2px solid gray" id="Deskripsi Product">
            <label>
                + Tanpa Pengawet dari Formalin dan borax<br>
                + Tanpa Pemutih<br><br>
                Informasi nilai gizi:<br>
                - Kalori<br>
                - Protein<br>
                - Karbohidrat<br>
                - Kalsium<br>
                - Fosfor<br>
                - Zat Besi<br>
                - Vitamin A<br>
                - Vitamin B<br>
                - Vitamin C<br><br>
                Komposisi : <br>
                - Bonggol Pisang<br>
                - Tepung<br>
                - Bawang Merah<br>
                - Rempah Rempah<br>
            </label>
        </div>
    </div>
</div>