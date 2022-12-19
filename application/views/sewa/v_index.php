<!-- content body -->
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class=" card-title">Data Produk</h4>
                        <a href="<?= site_url('admin/tambah_produk') ?>" class="btn btn-rounded btn-success"><span class="btn-icon-left"><i class="fa fa-plus color-success"></i> </span>Tambah Data Produk</a>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Nama Produk</th>
                                        <th>Harga Produk</th>
                                        <th>Jumlah Stok</th>
                                        <th>Jenis Produk</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($produks as $produk): ?>
                                    <tr>
                                        <td><?= $produk->nama_produk ?></td>
                                        <td><?= $produk->harga_produk ?></td>
                                        <td><?= $produk->stok ?></td>
                                        <td><?= $produk->jenis_produk ?></td>
                                        <td>
                                        <picture>
                                            <source srcset="" type="image/svg+xml">
                                                <img src="<?= site_url('assets/images/upload/').$produk->gambar; ?>" alt="..." width="70px">
                                        </picture>
                                        </td>
                                        <td>
                                            <a href="<?= site_url("admin/delete_produk?id_produk=$produk->id_produk") ?>" class="badge badge-danger" onclick="return confirm('Yakin dihapus?'); ">Hapus</a>
                                            <a href="<?= site_url("admin/edit_produk?id_produk=$produk->id_produk") ?>" class="badge badge-info">Update</a>
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
<!-- #/ container -->
</div>
<!-- #/ content body -->
<!-- row -->