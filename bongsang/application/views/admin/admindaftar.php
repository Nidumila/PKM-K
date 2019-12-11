<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card-body">
                        <h4 class="box-title">REGISTRASI ADMIN</h4>
                    </div>
                    <div class="col-xl-12">
                        <form method="post" action="<?= base_url('control/daftaradmin');  ?>" style="margin-left: 25px; margin-right: 25px; margin-bottom: 25px;">
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
                                        <label><input type="radio" name="jenis_kelamin" value="L">
                                            Laki-laki</label>
                                        <label><input type="radio" name="jenis_kelamin" value="P">
                                            Perempuan</label><br>
                                        <?= form_error('jenis_kelamin', '<small class="text-danger pl-1">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                        <label>Alamat</label>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap" id="alamat" style="margin-top: 5px; margin-bottom; 5px;" value="<?= set_value('alamat'); ?>">
                                        <?= form_error('alamat', '<small class="text-danger pl-1">', '</small>') ?>
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
                                        <input type="password" class="form-control" name="sandi" placeholder="Password" id="sandi1" style="margin-top: 5px; margin-bottom; 5px;" value="<?= set_value('sandi'); ?>">
                                        <?= form_error('sandi', '<small class="text-danger pl-1">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6">
                                        <button type="submit" class="btn btn-primary Daftar" name="daftar" style="margin-top: 5px;">Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.col-lg-12 -->
</div>