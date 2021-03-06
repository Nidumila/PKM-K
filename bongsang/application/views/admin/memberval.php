<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card-body">
                        <h4 class="box-title">ID Admin : <?= $member['id_member'] ?></h4>
                    </div>
                    <div class="col-xl-12">
                        <form method="post" action="<?= base_url('control/memval/') . $member['id_member'];  ?>" style="margin-left: 25px; margin-right: 25px; margin-bottom: 25px;">
                            <div class="form-grup">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                                    <label> Email</label>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                                    <input type="text" name="email" readonly class="form-control-plaintext" value="<?= $member['email']; ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                                    <label> Nama Lengkap </label>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                                    <label><?= $member['nama_member']; ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                                    <label> Jenis Kelamin</label>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                                    <label> <?php if ($member['jenis_kelamin'] == 'L') {
                                                                echo "Laki-laki";
                                                            } else {
                                                                echo "Perempuan";
                                                            }; ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                                    <label>Alamat</label>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                                    <label><?= $member['alamat']; ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                                    <label> Nomor Ponsel </label>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                                    <label><?= $member['nomor_ponsel']; ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-8">
                                                    <label> Member Validasi </label>
                                                </div>
                                                <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-4">:</div>
                                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12">
                                                    <label><?php
                                                            if ($member['member_validasi'] == 1) {
                                                                echo "Tervalidasi";
                                                            } else {
                                                                echo "Tidak Divalidasi";
                                                            }; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="row justify-content-center">
                                                <div class="col-8">
                                                    <img src="<?= base_url('Asset/img/profile/') . $member['gambar']; ?>" class=" img-thumbnail">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12" align="center">
                                                    <input type="hidden" name="valid" value="<?php if ($member['member_validasi'] == 1) {
                                                                                                    echo 0;
                                                                                                } else {
                                                                                                    echo 1;
                                                                                                }
                                                                                                ?>" required>
                                                    <label> Since : <?= $member['tanggal_daftar']; ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12" align="center">
                                                    <button type="submit" class="btn btn-primary" style="margin-top: 5px;"><?php if ($member['member_validasi'] == 1) {
                                                                                                                                echo "Unvalid";
                                                                                                                            } else {
                                                                                                                                echo "Validasi";
                                                                                                                            }; ?></button>
                                                </div>
                                            </div>
                                        </div>
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