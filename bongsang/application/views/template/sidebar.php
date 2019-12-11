<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <?php
                $role_id = $admin['role_admin'];
                $querymMenu = "SELECT `id_menu`, `nama_menu` FROM `menu` JOIN `akses_menu` ON `menu`.`id_menu` = `akses_menu`.`menu_id` WHERE `akses_menu`.`role_id`= '$role_id' ORDER BY `akses_menu`.`menu_id` ASC ";
                $menu = $this->db->query($querymMenu)->result_array();
                ?>

                <!-- Looping Menu -->
                <?php foreach ($menu as $m) : ?>

                    <li class="menu-title"><?= $m['nama_menu'] ?></li><!-- /.menu-title -->
                    
                    <?php 
                    $n=$m['id_menu'];
                    $querymSubMenu = "SELECT `title`, `url`, `icon` FROM `sub_menu` JOIN `akses_sub` ON `akses_sub`.`sub_id` = `sub_menu`.`id_sub` WHERE `akses_sub`.`role_id`= '$role_id' AND `akses_sub`.`menu_id`='$n' ORDER BY `akses_sub`.`id` ASC";
                    $menusub = $this->db->query($querymSubMenu)->result_array();
                    ?>
                    
                    <?php foreach ($menusub as $sub) : ?>
                    <li>
                        <a href="<?= base_url($sub['url'] ) ?>"><i class=" menu-icon <?= $sub['icon'] ?>"></i><?= $sub['title'] ?></a>
                    </li>
                    <?php endforeach; ?>
                <?php endforeach; ?>

                <li class="menu-title">Transaksi</li><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Data Transaksi</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Transaksi Berhasil</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Transaksi Delai</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>