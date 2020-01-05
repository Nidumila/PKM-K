<!-- Left Panel -->

<!-- /#left-panel -->
<!-- Right Panel -->

<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Orders -->
        <div class="orders">
            <div class="row">
                <div class="col-7">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title">Admin</h5>
                                    <?= $this->session->flashdata('message'); ?>
                                    <hr>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="card-text">Nama Lengkap </p>
                                        </div>
                                        <div class="col-1">
                                            <p class="card-text"> : </p>
                                        </div>
                                        <div class="col-7">
                                            <?= $admin['nama_admin'] ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="card-text">Jenis Kelamin</p>
                                        </div>
                                        <div class="col-1">
                                            <p class="card-text"> : </p>
                                        </div>
                                        <div class="col-7">
                                            <?php if ($admin['jenis_kelamin'] == "P") {
                                                echo "Perempuan";
                                            } else {
                                                echo "Laki-laki";
                                            }  ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="card-text">Alamat</p>
                                        </div>
                                        <div class="col-1">
                                            <p class="card-text"> : </p>
                                        </div>
                                        <div class="col-7">
                                            <?= $admin['alamat'] ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="card-text">Email</p>
                                        </div>
                                        <div class="col-1">
                                            <p class="card-text"> : </p>
                                        </div>
                                        <div class="col-7">
                                            <?= $admin['email'] ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="card-text">Nomor Ponsel</p>
                                        </div>
                                        <div class="col-1">
                                            <p class="card-text"> : </p>
                                        </div>
                                        <div class="col-7">
                                            <?= $admin['nomor_ponsel'] ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 offset-md-4 mt-3">
                                            <a href="<?= base_url('control/editadmin/') ?>"><button class="btn btn-danger"> Edit data diri </button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="card-body">
                                    <img src="<?= base_url('Asset/img/profile/') . $admin['gambar'] ?>" class="card-img" alt="profile">
                                    <h5 class="card-title" style="text-align: center;">
                                        <hr><?= $admin['nama_admin'] ?></h5>
                                    <p class="card-text" style="text-align: center;">Since <?= date('d M Y', strtotime($admin['tanggal_daftar'])); ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.orders -->
    </div>
    <!-- .animated -->
</div>