<!-- content body -->
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class=" card-title">Data Penyewaan Anda</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Nama User</th>
                                        <th>ID User</th>
                                        <th>Nama Produk</th>
                                        <th>ID Produk</th>
                                        <th>Jumlah Sewa</th>
                                        <th>Alamat Tujuan</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Gambar</th>
                                        <th>Total Harga</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($sewas as $sewa): ?>
                                    <tr>
                                        <td><?= $sewa->nama_user ?></td>
                                        <td><?= $sewa->id_user ?></td>
                                        <td><?= $sewa->nama_produk ?></td>
                                        <td><?= $sewa->id_produk ?></td>
                                        <td><?= $sewa->jumlah ?></td>
                                        <td><?= $sewa->alamat_tujuan ?></td>
                                        <td><?= $sewa->tgl_pinjam ?></td>
                                        <td>
                                        <picture>
                                            <source srcset="" type="image/svg+xml">
                                                <img src="<?= site_url('assets/images/upload/').$sewa->gambar; ?>" alt="..." width="70px">
                                        </picture>
                                        </td>
                                        <td><?= $sewa->total_harga ?></td>
                                        <td>
                                            <a href="<?= site_url("user/bayar?id_sewa=$sewa->id_sewa") ?>" class="btn btn-danger" onclick="return alert('Bayar'); ">Belum Bayar</a>
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