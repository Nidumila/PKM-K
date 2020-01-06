<div class="container">
    <div class="row">
        <div class="col-8 kotak" style="border: 2px solid gray">
            <form method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-4 pt-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 pb-5">
                                        <img src="<?= base_url('Asset/img/produk/') . $produk['gambar'] ?>" width="100%">
                                    </div>
                                    <div class="col-12" align="center">
                                        <a href="#"><i class="fa fa-heart-o"></i></a>
                                        <a href="#"><i class="fa fa-share"></i></a>
                                    </div>
                                    <div class="col-12">
                                        <a href="#"><i class="fa fa-eye"></i> Dilihat </a><br>
                                        <a href="#"><i class="fa fa-truck"></i> Dikirim </a><br>
                                        <a href="#"><i class="fa fa-tag"></i> Min. Beli 1</a><br>
                                        <a href="#"><i class="fa fa-dropbox"></i> Kondisi Baru</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <h1><?= $produk['nama_barang'] . " " . $produk['sub_pilihan']; ?></h1>
                            <p> Kata kunci : <a href="">Bonggol Pisang</a><a href=""> <?= $produk['sub_pilihan']; ?> </a><a href=""> Cemilan </a></p>
                            <hr style="border-top-width: 2px">
                            <h3>Rp<?= $produk['harga']; ?></h3>
                            <label>Stok Product</label>
                            <br>
                            <label>Jumlah <?= $produk['stok']; ?></label>
                            <div class="container">
                                <div class="row">
                                    <div class="col-1">
                                        <button class="btn btn-link kotak" style="border: none" id="kurang"><i class="fa fa-minus-circle"></i></button>
                                    </div>
                                    <div class="col-1">
                                        <input class="kotak" style="border: none" type="text" readonly min="1" value=" 1" id="hasil" name="jumlah">
                                    </div>
                                    <div class="col-1">
                                        <button class="btn btn-link kotak" style="border: none" id="tambah"><i class="fa fa-plus-circle"></i></button>
                                    </div>
                                </div>
                                <script>
                                    var no = 1;
                                    $(document).ready(function() {
                                        $('#tambah').click(function() {
                                            no++;
                                            $('#hasil').val(no);
                                        });
                                        $('#kurang').click(function() {
                                            no--;
                                            $('#hasil').val(no);
                                        });
                                    });
                                </script>
                            </div>
                            <div class="col-12 mb-4 mt-4">
                                <div class="container">
                                    <div class="row justify-content-between">
                                        <div class="col-6">
                                            <button class="btn btn-primary" style="width: 100%" autofocus="center">Beli sekarang</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-secondary" style="width: 100%" autofocus="center" name="tambah" onclick="alert('Berhasil Ditambahkan Ke Keranjang Anda')"> Tambah keranjang</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php
            error_reporting(0);
            if (isset($_POST['tambah'])) {
                $transaksi = file_get_contents('Asset/keranjang/keranjang' . $member['id_member'] . '.json');
                $list = json_decode($transaksi, true);
                if ($list == 0) {
                    $list = array(
                        array(
                            'id' => $produk['id_barang'],
                            'Jumlah' => intval($_POST['jumlah'])
                        )
                    );
                    //variable yang mempunyai format json
                    $json = json_encode($list, JSON_PRETTY_PRINT);
                    //export file json keranjang
                    file_put_contents('Asset/keranjang/keranjang' . $member['id_member'] . '.json', $json);
                } else {
                    $element = sizeof($list);
                    $list[$element]['id'] = $produk['id_barang'];
                    $list[$element]['Jumlah'] = intval($_POST['jumlah']);
                    $json = json_encode($list, JSON_PRETTY_PRINT);
                    //export file json keranjang
                    file_put_contents('Asset/keranjang/keranjang' . $member['id_member'] . '.json', $json);
                }
            }
            ?>
        </div>
        <div class="col-4" align="center">
            <label>Dukungan Pengiriman</label>
            <br><br>
            <a href=""><img src="<?= base_url('Asset/img/icon/') ?>jne.png" width="70$"></a>
            <br><br>
            <a href=""><img src="<?= base_url('Asset/img/icon/') ?>jnt.png" width="30%"></a>
            <br><br>
            <a href=""><img src="<?= base_url('Asset/img/icon/') ?>tiki.png" width="30%"></a>
            <br><br>
            <a href=""><img src="<?= base_url('Asset/img/icon/') ?>pos.png" width="25%"></a>
        </div>
    </div>
</div>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="row">
                <div class="col-4" style="border: 2px solid gray"><a href="<?= base_url('user/produk/') . $produk['id_barang']; ?>"><i class="fa fa-clipboard"> Deskripsi Product</i></a>
                </div>
                <div class="col-4" style="border: 2px solid gray"><a href="<?= base_url('user/ulasan/') . $produk['id_barang']; ?>"><i class="fa fa-pencil-square-o"> Ulasan Product</i></a>
                </div>
                <div class="col-4" style="border: 2px solid gray"><a href="<?= base_url('user/diskusi/') . $produk['id_barang']; ?>"><i class="fa fa-pencil-square-o"> Diskusi Produk</i></a>
                </div>
            </div>
        </div>