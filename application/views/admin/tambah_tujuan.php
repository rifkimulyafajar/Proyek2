<!-- page content -->
<div class="right_col" role="main">

    <!-- page content -->
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Data Tujuan Donasi</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Baru Tujuan Donasi</h6>
        </div>
        <div class="card-body">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/tambah_tujuan') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                </div>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <p>Format .jpg, .png Max Size : 500KB</p>
                </div>
                <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
</div>

</div>
</div>
<!-- /top tiles -->
</div>