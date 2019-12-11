<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-form">
                <div class="login-logo">
                    <img src="<?= base_url('Asset/');  ?>img/LogoAne.png" alt="">
                    <?= $this->session->flashdata('message'); ?>
                </div>
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
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>