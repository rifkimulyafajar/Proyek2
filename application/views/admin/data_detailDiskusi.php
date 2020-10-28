
            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Data Detail Diskusi</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Diskusi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id User</th>
                                            <th>Id Topik Diskusi</th>
                                            <th>Pembahasan</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($diskusi as $dis) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $dis["id_user"]; ?></td>
                                                <td><?= $dis["id_topik"]; ?></td>
                                                <td><?= $dis["pembahasan"]; ?></td>
                                                <td><?= $dis["tanggal"]; ?></td>
                                                <td><?= $d["hasil_tgl"]; ?></td>
                                                <!-- <td>
                                                    <a href="<?= base_url(); ?>admin/edit_berita/<?= $d['id_berita']; ?>" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                    <a href="<?= base_url(); ?>admin/hapus_berita/<?= $d['id_berita']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td> -->
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