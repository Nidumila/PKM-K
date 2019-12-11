    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container justify-content-end" widht="100%" style="text-align: center;">
            <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12 col-12">
                <a href="<?= base_url('Asset/');  ?>company profil.html"><button class="btn btn-warning">Home</button></a>
                <a href="<?= base_url('Asset/');  ?>Toko.html"><button class="btn btn-warning">Toko </button></a>
                <a href="<?= base_url('');  ?>"><button class="btn btn-warning">Sign In </button></a>
                <a href="<?= base_url('awal/');  ?>registration"><button class="btn btn-warning">Sign Up </button></a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 col-12">
                <div class="column" style=" -moz-border-radius: 6px; -webkit-border-radius: 6px; border-radius: 6px; padding: 3px; margin: 3px; background: white;">
                    <center><img src="<?= base_url('Asset/');  ?>img/LogoBongsang.png" alt="Bongsang" width="250px"><br>
                        <font size="5"><b>Sign Up</b></font>
                    </center><br>
                    <form method="post" action="<?= base_url('awal/registration');  ?>" style="margin-left: 25px; margin-right: 25px; margin-bottom: 25px;">
                        <div class="form-grup">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                    <label> Nama Lengkap </label>
                                </div>
                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" style="margin-top: 5px; margin-bottom:5px;" value="<?= set_value('nama'); ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-1">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row" style=" margin-bottom: 8px;">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                    <label> Jenis Kelamin</label>
                                </div>
                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                    <label><input type="radio" name="jenis_kelamin" value="L"> Laki-laki</label>
                                    <label><input type="radio" name="jenis_kelamin" value="P"> Perempuan</label><br>
                                    <?= form_error('jenis_kelamin', '<small class="text-danger pl-1">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                    <label> Nomor Ponsel </label>
                                </div>
                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                    <input type="tel" class="form-control" name="ponsel" placeholder="Nomor Ponsel" id="ponsel" style="margin-top: 5px; margin-bottom; 5px;" value="<?= set_value('ponsel'); ?>">
                                    <?= form_error('ponsel', '<small class="text-danger pl-1">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                    <label> Email</label>
                                </div>
                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                    <input type="text" class="form-control" name="email" placeholder="Email Address" id="email" style="margin-top: 5px; margin-bottom; 5px;" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-1">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                    <label> Sandi</label>
                                </div>
                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                    <input type="password" class="form-control" name="sandi1" placeholder="Password" id="sandi1" style="margin-top: 5px; margin-bottom; 5px;" value="<?= set_value('sandi1'); ?>">
                                    <?= form_error('sandi1', '<small class="text-danger pl-1">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                    <label>Ulang Sandi</label>
                                </div>
                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                    <input type="password" class="form-control" name="sandi2" placeholder="Password" id="sandi2" style="margin-top: 5px; margin-bottom; 5px;">
                                    <?= form_error('sandi2', '<small class="text-danger pl-1">', '</small>') ?>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6">
                                    <button type="submit" class="btn btn-primary Daftar" name="daftar" style="margin-top: 5px;">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>