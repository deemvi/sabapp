<!-- content body -->
<div class="content-body">
    <div class="container-fluid">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Data GOR</h4>
                    <div class="basic-form">
                        <form action="<?= site_url('admin/tambah_gor') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama GOR</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_gor" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat Gor</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kontak</label>
                                <div class="col-sm-10">
                                    <input type="text" name="no_telp" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="submit" name="btn_tambah" value="Tambah Data" class="btn btn-dark">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- #/ content body -->
    <!-- row -->