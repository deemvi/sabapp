<!-- content body -->
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class=" card-title">Data GOR</h4>
                        <a href="<?= site_url('admin/tambah_gor') ?>" class="btn btn-rounded btn-success"><span class="btn-icon-left"><i class="fa fa-plus color-success"></i> </span>Tambah Data GOR</a>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Nama GOR</th>
                                        <th>Alamat GOR</th>
                                        <th>Kontak</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($gors as $gor): ?>
                                    <tr>
                                        <td><?= $gor->nama_gor ?></td>
                                        <td><?= $gor->alamat ?></td>
                                        <td><?= $gor->no_telp ?></td>
                                        <td>
                                        <picture>
                                            <source srcset="" type="image/svg+xml">
                                                <img src="<?= site_url('assets/images/upload/').$gor->gambar; ?>" alt="..." width="70px">
                                        </picture>
                                        </td>
                                        <td>
                                            <a href="<?= site_url("admin/delete_gor?id_gor=$gor->id_gor") ?>" class="badge badge-danger" onclick="return confirm('Yakin dihapus?'); ">Hapus</a>
                                            <a href="<?= site_url("admin/edit_gor?id_gor=$gor->id_gor") ?>" class="badge badge-info">Update</a>
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