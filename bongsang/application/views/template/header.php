<div id="right-panel" class="right-panel" style="background-color: orange;">
    <!-- Header-->
    <header id="header" class="header" style="height: 60px;">
        <div class="top-left">
            <div class="navbar-header" style="float: center;">
                <a class="navbar-brand" href="./"><img src="<?= base_url('Asset/img/'); ?>LogoAne.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?= base_url('Asset/img/'); ?>LogoAne" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>
                </div>
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="<?php echo base_url('Asset/img/profile/') . $admin['gambar']; ?>" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="<?= base_url('control/profile/') ?>"><i class="fa fa- user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                        <a class="nav-link" href="<?= base_url('control/logout'); ?>"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /#header -->