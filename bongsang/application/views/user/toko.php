<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container" widht="100%" style="text-align: center;">
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="<?= base_url('Asset/img/profile/') . $member['gambar']; ?>" alt="logo" height="33px" width="33px">
                <?= $member['nama_member']; ?>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Profil Saya</a>
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
    <div class="row justify-content-center">
        <div class="col-5">
            <br>
            <img class="w-100" src="<?= base_url('Asset/img/');  ?>LogoAne.png" alt="Logo">
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3">
            <img class="w-100" src="<?= base_url('Asset/img/');  ?>DSCF2834.jpg" alt="Logo">
        </div>
        <div class="col-3">
            <img class="w-100" src="<?= base_url('Asset/img/');  ?>bg2.jpg" alt="Logo">
        </div>
        <div class="col-3">
            <img class="w-100" src="<?= base_url('Asset/img/');  ?>produk.jpg" alt="Logo">
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div id="slide" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slide" data-slide-to="0" class="active"></li>
                    <li data-target="#slide" data-slide-to="1"></li>
                    <li data-target="#slide" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url('Asset/img/');  ?>bg2.jpg" class="d-block w-100" alt="avlsa">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="<?= base_url('user/produk'); ?>"><img src="<?= base_url('Asset/img/');  ?>produk.jpg" class="d-block w-100" alt="as"></a>
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('Asset/img/');  ?>produk1.jpg" class="d-block w-100" alt="asf">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h4><b>Newsletter</b></h4>
        </div>
        <div class="col-8">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <div class="col-4 form-grup">
            <h5>Mau tau info terbaru?</h5>
            <input type="text" name="email" class="form-control" id="" placeholder="Alamat Email"><button class="btn btn-primary" style="margin-top: 5px;">Subsribe</button>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-12" style="text-align: center">
            <h4><b>Tentang Keranjang Ane</b></h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
</div>