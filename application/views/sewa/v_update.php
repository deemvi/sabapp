<!-- content body -->
<div class="content-body">
    <div class="container-fluid">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Edit Data Produk</h4>
                    <div class="basic-form">
                        <?php foreach($data as $produk): ?>
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_produk" class="form-control" value="<?= $produk->nama_produk ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Harga Produk</label>
                                <div class="col-sm-10">
                                    <input type="number" name="harga_produk" class="form-control" value="<?= $produk->harga_produk ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jumlah Stok</label>
                                <div class="col-sm-10">
                                    <input type="number" name="stok" class="form-control" value="<?= $produk->stok ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Produk</label>
                                <div class="col-sm-10">
                                    <select class="custom-select mr-sm-2" name="jenis_produk" id="">
                                        <option selected="<?= $produk->jenis_produk ?>"><?= $produk->jenis_produk ?></option>
                                        <option value="Raket">Raket</option>
                                        <option value="Sepatu Pria">Sepatu Pria</option>
                                        <option value="Sepatu Wanita">Sepatu Wanita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="old_pict" class="form-control" value="<?= $produk->gambar ?>">
                                    <picture>
                                            <source srcset="" type="image/svg+xml">
                                            <img src="<?= site_url('assets/images/upload/').$produk->gambar; ?>" alt="..." width="70px">
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