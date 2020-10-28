
            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Data Artikel</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Artikel</h6>
                        </div>
                        <div class="card-body">
                            <a href="<?= base_url(); ?>admin/tambah_artikel" class="btn btn-success">+ Tambah Data</a><br><br>
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
                                        foreach ($artikel as $a) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $a["judul"]; ?></td>
                                                <td><img src="<?= base_url('upload/artikel/' . $a["gambar"]) ?>" style="height: 100px; width: 100px;"></td>
                                                <td><?= $a["tanggal"]; ?></td>
                                                <td><?= $a["konten"]; ?></td>
                                                <td>
                                                    <a href="<?= base_url(); ?>admin/edit_artikel/<?= $a['id_artikel']; ?>" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                    <a href="<?= base_url(); ?>admin/hapus_artikel/<?= $a['id_artikel']; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                                                    </a>
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