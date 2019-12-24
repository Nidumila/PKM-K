<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-form">
                <div class="login-logo">
                    <img src="<?= base_url('Asset/');  ?>img/LogoAne.png" alt="">
                    <?= $this->session->flashdata('message'); ?>
                </div>
                <hr>
                <form action="<?= base_url('admin'); ?>" method="post">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>" required>
                        <?= form_error('email', '<small class="text-danger pl-1">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="sandi" class="form-control" placeholder="Password" required>
                        <?= form_error('sandi', '<small class="text-danger pl-1">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <input type="text" value="<?php $cpt = GenerateCode();
                                                    echo $cpt['text']; ?>" class="form-control" required readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" name="cpt" class="form-control" placeholder="Isi Captcha Terlebih Dahulu" required>
                        <?= form_error('captcha', '<small class="text-danger pl-1">', '</small>') ?>
                        <input type="hidden" name="rescpt" value="<?= $cpt['res'];
                                                                    ?>" placeholder="Isi Captcha Terlebih Dahulu" required>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <dov class="col-8">
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Masuk</button>
                            </dov>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>