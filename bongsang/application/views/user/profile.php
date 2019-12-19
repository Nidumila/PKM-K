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
<div class="container">
    <br><br>
    <form style="border: 2px solid gray">
        <div class="row">
            <div class="col" align="right">
                <img src="contohuser.jpg" width="50%">
            </div>
            <div class="col">
                <br>
                <br>
                <h3>Nama Lengkap User </h3>
                <br>
                <p>akun sudah terverivikasi</p>
            </div>
        </div>
    </form>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-5" style="border: 2px solid gray">
            <div class="row">
                <div class="col-2">
                    <img src="user-ikon.png" width="100%" align="center">
                </div>
                <div class="col-10" align="left">
                    <h3>Profile Saya</h3>
                    <p>Nama Lengkap</p>
                    <br>
                    <p>Jenis Kelamin</p>
                    <br>
                    <p>Tanggal Lahir</p>
                    <br>
                    <p>Alamat Email</p>
                    <br>
                    <p>Nomor Telepon</p>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-5" style="border: 2px solid gray">
            <div class="row">
                <div class="col-2">
                    <img src="home-ikon.png" width="100%" align="center">
                </div>
                <div class="col-10" align="left">
                    <h3>Alamat Saya</h3>
                    <p>Alamat Pengiriman utama</p>
                </div>
            </div>
        </div>
    </div>
</div>