<div id="right-panel" class="right-panel" style="background-color: orange;">
    <!-- Header-->
    <header id="header" class="header" style="height: 60px;">
        <div class="top-left" align="right">
            <div class="navbar-header">
                <a href="<?= base_url('control/'); ?>" class="mr-5"><img src="<?= base_url('Asset/img/'); ?>LogoBongsang.png" alt="Logo" height="59px"></a>
                <a id="menuToggle" class="menutoggle mr-5 ml-4"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fas fa-times"></i></button>
                        </form>
                    </div>
                </div>
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="<?= base_url('Asset/img/profile/') . $admin['gambar']; ?>" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="<?= base_url('control/profile/') ?>"><i class="fas fa-user"></i> My Profile</a>

                        <!-- <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a> -->

                        <a class="nav-link" href="<?= base_url('control/logout'); ?>"><i class="fas fa-power-off"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- /#header -->