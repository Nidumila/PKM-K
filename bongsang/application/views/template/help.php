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
    <div class="col" style="text-align: center;">
        <img src="produk1.jpg" width="100%" height="30%">
        <p> Hai Pelanggan Ada Yang bisa diBantu??? </p>
    </div>
    <hr size="10px"><br>
</div>
<div class="container">
    <div class="col-12">
        <p> Pertanyaan yang mungkin anda maksud : </p>
        <br>
        <div class="row">
            <div class="col-6">
                <p>- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                <p>- tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                <p>- veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
            </div>
            <div class="col-6">
                <p>- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                <p>- tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                <p>- veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
            </div>
        </div>
    </div>
</div>
<hr size="10px">
<div class="container">
    <p>Topik</p>
    <div class="row">
        <div class="col-3">
            <img src="akun.png" width="70%" height="70%">

        </div>
        <div class="col-3">
            <img src="icon.png" width="70%" height="70%">

        </div>
        <div class="col-3">
            <img src="logo pembayaran.png" width="70%" height="70%">

        </div>
        <div class="col-3">
            <img src="pengiriman.jpg" width="70%" height="70%">
        </div>

    </div>
</div>