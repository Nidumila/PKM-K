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
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Daftar Admin </h4>
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Telepon</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($adm as $isi) : ?>
                                            <tr>
                                                <td class="serial"><?= $nomor ?>.</td>
                                                <td> <span class="id"><?= $isi['id_admin']; ?></span></td>
                                                <td> <span class="name"><?= $isi['nama_admin']; ?></span></td>
                                                <td> <span class="tel"><?= $isi['nomor_ponsel']; ?></span></td>
                                                <td> <span class="email"><?= $isi['email']; ?></span></td>
                                                <td> <span class="address"><?= $isi['alamat']; ?></span></td>
                                                <td> <span class="val"><?php
                                                                        if ($isi['admin_validasi'] == 1) {
                                                                            echo "Tervalidasi";
                                                                        } else {
                                                                            echo "Tidak Divalidasi";
                                                                        }; ?></span></td>
                                                <td>
                                                    <span class="validation">
                                                        <a href="<?= base_url('control/edvalid/') . $isi['id_admin']; ?>">edit</a>
                                                        <a href="<?= base_url('control/hapus/') . $isi['id_admin']; ?>">delete</a>
                                                    </span>
                                                </td>
                                            <tr>
                                            <?php
                                            $nomor++;
                                        endforeach; ?>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div> <!-- /.card -->
                </div> <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /.orders -->
    </div>
    <!-- .animated -->
</div>