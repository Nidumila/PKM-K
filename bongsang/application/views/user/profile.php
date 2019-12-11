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