
            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Data Donasi</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Donasi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id User</th>
                                            <th>Nama</th>
                                            <th>No Telp</th>
                                            <th>Email</th>
                                            <th>Jumlah</th>
                                            <th>Metode</th>
                                            <th>Note</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($donasi as $d) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $d["id_user"]; ?></td>
                                                <td><?= $d["nama_lengkap"]; ?></td>
                                                <td><?= $d["no_hp"]; ?></td>
                                                <td><?= $d["email"]; ?></td>
                                                <td><?= $d["jmlh_donasi"]; ?></td>
                                                <td><?= $d["metode"]; ?></td>
                                                <td><?= $d["note"]; ?></td>
                                                <td><?= $d["tgl_donasi"]; ?></td>
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