<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url('asset/'); ?>img/sidebar/tpm-group.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight">IT SYSTEM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <!-- <img src="<?= base_url('asset/vendor/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $admin_users['name']; ?></a>
            </div>
        </div>

        <!-- QUERY MENU -->
        <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `menus`.`menu_id`, `menu`
                        FROM `menus` JOIN `access_menus`
                        ON `menus`.`menu_id` = `access_menus`.`menu_id`
                        WHERE `access_menus`.`role_id` = $role_id
                        ORDER BY `access_menus`.`menu_id` ASC
                        ";
        $menu = $this->db->query($queryMenu)->result_array();

        ?>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->

                <!-- MENU LOOPING -->
                <?php foreach ($menu as $m) : ?>
                    <li class="nav-header text-uppercase"><?= $m['menu']; ?></li>

                    <!-- SUBMENU LOOPING -->
                    <?php
                    $menuId = $m['menu_id'];
                    $querySubMenu = "SELECT * FROM `sub_menus`
                                    WHERE `menu_id` = $menuId
                                    AND `is_active` = 1
                                ";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>



                    <?php foreach ($subMenu as $sm) : ?>
                        <li class="nav-item ">
                        <li class="nav-item">
                            <?php if ($sm['title'] == $title) : ?>
                                <a class="nav-link active" href="<?= base_url($sm['url']); ?>">
                                <?php else : ?>
                                    <a class="nav-link " href="<?= base_url($sm['url']); ?>">
                                    <?php endif; ?>
                                    <i class="nav-icon <?= $sm['icon']; ?>"></i>
                                    <p>
                                        <?= $sm['title']; ?>
                                    </p>
                                    </a>
                        </li>
                        </li>
                    <?php endforeach ?>

                <?php endforeach; ?>

                </li> -->

                <!-- <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                                Mailbox
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/mailbox/mailbox.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/mailbox/compose.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/mailbox/read-mail.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>