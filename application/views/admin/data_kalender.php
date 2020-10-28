
            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Data Kalender Kesuburan</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Kalender Kesuburan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id User</th>
                                            <th>Tanggal Menstruasi</th>
                                            <th>Siklus Pendek</th>
                                            <th>Siklus Panjang</th>
                                            <th>Hasil Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($kalender as $k) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $k["id_user"]; ?></td>
                                                <td><?= $k["tgl_mens"]; ?></td>
                                                <td><?= $k["siklus_pendek"]; ?></td>
                                                <td><?= $k["siklus_panjang"]; ?></td>
                                                <td><?= $k["hasil_tgl"]; ?></td>
                                                <td>
                                                    <a href="<?= base_url(); ?>admin/hapus_kalender/<?= $k['id_kalender']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
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