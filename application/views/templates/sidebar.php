<!-- Query Menu -->
<?php
$role_id = $this->session->userdata('role_id');
$queryMenu = "  SELECT user_menu.id, user_menu.menu
                FROM user_menu JOIN user_access_menu
                ON user_menu.id = user_access_menu.menu_id
                WHERE user_access_menu.role_id = $role_id
                ORDER BY user_access_menu.menu_id ASC
            ";
$menu = $this->db->query($queryMenu)->result_array();

?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url('assets/'); ?>img/profile/<?= $user['image']; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= $user['username']; ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">

            <!-- loop header menu -->
            <?php foreach ($menu as $m) : ?>
                <li class="header"><?= $m['menu']; ?></li>

                <!-- Query submenu -->
                <?php
                                                                        $menuId = $m['id'];
                                                                        $querySubMenu = "   SELECT *
                                        FROM user_sub_menu JOIN user_menu
                                        ON user_sub_menu.menu_id = user_menu.id
                                        WHERE user_menu.id = $menuId
                                        AND user_sub_menu.is_active = 1
                     ";

                                                                        $subMenu = $this->db->query($querySubMenu)->result_array();
                ?>

                <?php foreach ($subMenu as $sm) : ?>
                    <!-- Optionally, you can add icons to the links -->
                    <li><a href="<?= $sm['url']; ?>"><i class="<?= $sm['icon']; ?>"></i> <span><?= $sm['title']; ?></span></a></li>
                <?php endforeach; ?>

            <?php endforeach; ?>

            <hr class="devider">
            <li><a href="<?= base_url('auth/logout'); ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>