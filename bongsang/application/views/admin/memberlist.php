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
                            <h4 class="box-title">Daftar Member </h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Bergabung</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($member as $isi) : ?>
                                            <tr>
                                                <td class="serial"><?= $nomor ?>.</td>
                                                <td> <span class="id"><?= $isi['id_member']; ?></span></td>
                                                <td> <span class="name"><?= $isi['nama_member']; ?></span></td>
                                                <td> <span class="email"><?= $isi['email']; ?></span></td>
                                                <td> <span class="date"><?= $isi['tanggal_daftar']; ?></span></td>
                                                <td> <span class="validation <?php
                                                                                if ($isi['member_validasi'] == 1) {
                                                                                    echo "badge badge-complete";
                                                                                } else {
                                                                                    echo "badge badge-pending";
                                                                                }; ?>"><?php
                                                                                        if ($isi['member_validasi'] == 1) {
                                                                                            echo "Tervalidasi";
                                                                                        } else {
                                                                                            echo "Tidak Divalidasi";
                                                                                        }; ?></span></td>
                                                <td>
                                                    <span class="validation">
                                                        <a href="<?= base_url('control/memval/') . $isi['id_member']; ?>">edit</a>
                                                        <a href="<?= base_url('control/memlet/') . $isi['id_member']; ?>">delete</a>
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