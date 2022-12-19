<!-- content body -->
<div class="content-body">
    <div class="container-fluid">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Tambah Data Produk</h4>
                    <div class="basic-form">
                        <form action="<?= site_url('admin/tambah_produk') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_produk" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Harga Produk</label>
                                <div class="col-sm-10">
                                    <input type="number" name="harga_produk" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jumlah Stok</label>
                                <div class="col-sm-10">
                                    <input type="number" name="stok" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Produk</label>
                                <div class="col-sm-10">
                                    <select class="custom-select mr-sm-2" name="jenis_produk" id="">
                                        <option selected="selected">Pilih</option>
                                        <option value="Raket">Raket</option>
                                        <option value="Sepatu Pria">Sepatu Pria</option>
                                        <option value="Sepatu Wanita">Sepatu Wanita</option>
                                    </select>
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