<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 ml-5 pl-5">
            <img style="width: 400px" src="<?= base_url('Asset/img/');  ?>LogoBongsang.png" alt="Logo">
        </div>
    </div>
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
    <hr style="border-top-width: 3px">
    <div class="row justify-content-center mb-4">
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
<div class="orders bg-warning mb-3">
    <div class="container">
        <br>
        <div class="row text-center">
            <div class="col-2 mb-3">
                <div class="row bg-light kotak" style="border: darkgoldenrod">
                    <button type="button" class="list-group-item list-group-item-action active">Semua Produk</button>
                    <button type="button" class="list-group-item list-group-item-action">Makanan</button>
                    <button type="button" class="list-group-item list-group-item-action">Alat Kebersihan</button>
                    <button type="button" class="list-group-item list-group-item-action">Bahan Olah</button>
                </div>
            </div>
            <div class="col-10">
                <div class="container">
                    <div class="row">
                        <?php foreach ($produk as $isi) : ?>
                            <div class="col-3">
                                <div class="card mb-2" style="width: 14rem;">
                                    <form action="" method="get">
                                        <a href="<?= base_url('user/produk/') . $isi['id_barang']; ?>" style="text-decoration: none; color: black"><img src="<?= base_url('Asset/img/produk/') . $isi['gambar'] ?>" class="card-img" style="height: 222.5px; width: 222.5px;" alt=" ...">
                                            <div class="card-body">
                                                <h5 class="card-title"><?= $isi['nama_barang'] . " " . $isi['sub_pilihan'] ?></h5>
                                                <p class="card-text">
                                                    Rp<?= $isi['harga'] ?>
                                                </p>
                                            </div>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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