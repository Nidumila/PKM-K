<div class="container">
    <br><br>
    <form style="border: 2px solid gray">
        <div class="row">
            <div class="col" align="right">
                <img class="img-thumbnail" src="<?= base_url('Asset/img/profile/') . $member['gambar'] ?>" width="50%">
            </div>
            <div class="col">
                <br>
                <br>
                <h3> <?= $member['nama_member'] ?> </h3>
                <br>
                <p>
                    <?php
                    if ($member['member_validasi'] == 1) {
                        echo "Akun Sudah Terverivikasi";
                    } else {
                        echo "Akun Belum Tervalidasi";
                    }
                    ?></p>
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
                    <img src="<?= base_url('Asset/img/icon/') ?>user-ikon.png" width="100%" align="center">
                </div>
                <div class="col-10" align="left">
                    <h3>Profile Saya</h3>
                    <p>Nama Lengkap</p>
                    <label><?= $member['nama_member']; ?></label>
                    <br>
                    <p>Jenis Kelamin</p>
                    <label><?= $member['jenis_kelamin']; ?></label>
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
                    <img src="<?= base_url('Asset/img/icon/') ?>home-ikon.png" width="100%" align="center">
                </div>
                <div class="col-10" align="left">
                    <h3>Alamat Saya</h3>
                    <p>Alamat Pengiriman utama</p>
                </div>
            </div>
        </div>
    </div>
</div>