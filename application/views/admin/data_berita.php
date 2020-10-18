<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="" class="site_title"><i class="fa fa-paw"></i> <span>Admin Sex Education</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a href="<?= base_url(); ?>admin/index"> <i class="fa fa-home"></i>Dashboard</a></li>
                                <li><a><i class="fa fa-edit"></i> Konten <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= base_url(); ?>admin/data_artikel">Artikel</a></li>
                                        <li><a href="<?= base_url(); ?>admin/data_berita">Berita</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url(); ?>admin/data_kalender"><i class="fa fa-table"></i> Kalender Kesuburan </a></li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Forum Diskusi <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= base_url(); ?>admin/data_topik">Topik Diskusi</a></li>
                                        <li><a href="<?= base_url(); ?>admin/data_detailDiskusi">Detail diskusi</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url(); ?>admin/data_Donasi"><i class="fa fa-clone"></i>Donasi</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <!-- <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a> -->
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <!-- <a href="" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false"> -->
                                Halo, <?= $this->session->userdata('user'); ?>
                                <!-- </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown"> -->
                                <!-- <a class="dropdown-item" href="<?= base_url(); ?>admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a> -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                    Log out
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Log Out</h5>

                                            </div>
                                            <div class="modal-body">
                                                Yakin Mau Log out ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                                <button type="button" class="btn btn-danger"><a href="<?= base_url(); ?>admin/logout">Log out</a></button>
                                            </div>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Data Berita</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Berita</h6>
                        </div>
                        <div class="card-body">
                            <a href="<?= base_url(); ?>admin/tambah_berita" class="btn btn-success">+ Tambah Data</a><br><br>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Gambar</th>
                                            <th>Tanggal</th>
                                            <th>Konten</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($berita as $b) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $b["judul"]; ?></td>
                                                <td><img src="<?= base_url('upload/berita/' . $b["foto"]) ?>" style="height: 100px; width: 100px;"></td>
                                                <td><?= $b["tanggal"]; ?></td>
                                                <td><?= $b["konten"]; ?></td>
                                                <td>
                                                    <a href="<?= base_url(); ?>admin/edit_berita/<?= $b['id_berita']; ?>" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                    <a href="<?= base_url(); ?>admin/hapus_berita/<?= $b['id_berita']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /top tiles -->
    </div>