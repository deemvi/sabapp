<!-- content body -->
<div class="content-body">
    <div class="container-fluid">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Edit Data GOR</h4>
                    <div class="basic-form">
                        <?php foreach($data as $gor): ?>
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama GOR</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_gor" class="form-control" value="<?= $gor->nama_gor ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat Gor</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat" class="form-control" value="<?= $gor->alamat ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kontak</label>
                                <div class="col-sm-10">
                                    <input type="text" name="no_telp" class="form-control" value="<?= $gor->no_telp ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="old_pict" class="form-control" value="<?= $gor->gambar ?>">
                                    <picture>
                                            <source srcset="" type="image/svg+xml">
                                            <img src="<?= site_url('assets/images/upload/').$gor->gambar; ?>" alt="..." width="70px">
                                    </picture>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                <label class="col-sm-2 col-form-label"></label>
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="submit" name="btn_edit" value="Update Data" class="btn btn-dark">
                                </div>
                            </div>
                        </form>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- #/ content body -->
    <!-- row -->