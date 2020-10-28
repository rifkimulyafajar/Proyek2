
            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Data Topik Diskusi</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Topik Diskusi</h6>
                        </div>
                        <div class="card-body">
                            <a href="<?= base_url(); ?>admin/tambah_topik" class="btn btn-success">+ Tambah Data</a><br><br>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Topik</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($topik as $t) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $t["topik"]; ?></td>
                                                <td><?= $t["tanggal"]; ?></td>
                                                <td>
                                                    <a href="<?= base_url(); ?>admin/edit_topik/<?= $t['id_topik']; ?>" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                    <a href="<?= base_url(); ?>admin/hapus_topik/<?= $t['id_topik']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
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