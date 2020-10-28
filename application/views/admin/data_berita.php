
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