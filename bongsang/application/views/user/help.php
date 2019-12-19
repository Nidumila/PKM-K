<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container row mx-auto" width="100%" style="text-align: center;">
        <div class="col-3">
            <div class="btn-group" style="height: 40px">
                <button type="button" style="-moz-border-radius: 20px; -webkit-border-radius: 20px; border-radius: 20px;" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="img-profile rounded-circle" src="<?= base_url('Asset/img/profile/') . $member['gambar']; ?>" alt="logo" height="28px" width="28px">
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
        </div>
        <div class="col-4" style="text-align: left;">
            <form id="searchbox" method="get" action="/search" autocomplete="off" style="background-color: white;">
                <input name="cari" type="text" size="20" placeholder="Mau cari apa?" />
                <input id="button-submit" type="submit" value="" />
            </form>
        </div>
        <div class="col-3 bg-primary p-0" style="text-align: center; height:40px; -moz-border-radius: 20px; -webkit-border-radius: 20px; border-radius: 20px;">
            <a href="<?= base_url('user/'); ?>" class="btn btn-link" style="text-decoration: none; color: white; margin-top: 1px;"> home </a>
            <a href="company profil.html" class="btn btn-link" style="text-decoration: none; color: white; margin-top: 1px;"> about </a>
            <a href="#" class="btn btn-link" style="text-decoration: none; color: white; margin-top: 1px;"> toko </a>
            <a href="<?= base_url('user/help'); ?>" class="btn btn-link" style="text-decoration: none; color: white; margin-top: 1px;"> help </a>
        </div>
        <div class="col-2">
            <a href="<?= base_url('user/keranjang'); ?>" class="btn btn-primary w-100" style=" height:40px;-moz-border-radius: 20px; -webkit-border-radius: 20px; border-radius: 20px;"><i class="fa fa-shopping-cart"></i> Keranjang</a>
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