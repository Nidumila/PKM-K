<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container justify-content-end" widht="100%" style="text-align: center;">
        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 col-xs-12">
            <a href="<?= base_url('Asset/');  ?>company profil.html"><button class="btn btn-warning">Home</button></a>
            <a href="<?= base_url('Asset/');  ?>Toko.html"><button class="btn btn-warning">Toko </button></a>
            <a href="<?= base_url('');  ?>"><button class="btn btn-warning">Sign In </button></a>
            <a href="<?= base_url('awal/');  ?>registration"><button class="btn btn-warning">Sign Up </button></a>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row  justify-content-end">
        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 col-xs-12" style="margin-top: 30px; ">
            <div class="column" style=" -moz-border-radius: 6px; -webkit-border-radius: 6px; border-radius: 6px; padding: 3px; margin: 3px; background: white;">
                <center><img src="<?= base_url('Asset/img/');  ?>LogoBongsang.png" alt="Keranjang Ane" width="300px" style="margin: 25px;"><br>
                    <font size="5" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;"><b>Sign In</b></font>
                </center>
                <?= $this->session->flashdata('message'); ?>
                <form action="<?= base_url('awal'); ?>" method="post" style="margin-left: 25px; margin-right: 25px; margin-bottom: 25px;">
                    <div class="form-grup">
                        <label> Email : </label>
                        <input type="text" class="form-control" id="email" placeholder="Isi Email Anda" name="email" value="<?= set_value('email'); ?>" required>
                        <?= form_error('email', '<small class="text-danger pl-1">', '</small>') ?>
                        <small id="email" class="from-text text-muted">Mohon masukkan email anda</small>
                    </div>
                    <div class="form-grup">
                        <label> Password : </label>
                        <input type="password" class="form-control" id="sandi" placeholder="Password" name="sandi" required>
                        <small id="sandi" class="from-text text-muted">Mohon masukkan password anda</small>
                    </div>
                    <button type="submit" class="btn btn-primary" class="close" onclick="validasi()" data-dismiss="alert">Kirim</button>
                    <br>
                    <small id="signin" class="from-text text-muted">Belum punya akun? <a href="<?= base_url('awal/registration');  ?>">Daftar</a></small>
                </form>
            </div>
        </div>
    </div>
</div>