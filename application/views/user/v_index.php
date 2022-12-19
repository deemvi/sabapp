<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>Selamat Datang, <span><?= $this->session->nama; ?></span></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Banyak Alat <span class="pull-right"><i class="ion-android-download f-s-30 text-primary"></i></span></h4>
                        <h6 class="m-t-20 f-s-14"><strong><?= $produk; ?></strong> Bisa Di Pinjam</h6>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bg-primary wow animated progress-animated w-20pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Banyak GOR <span class="pull-right"><i class="ion-android-list f-s-30 text-success"></i></span></h4>
                        <h6 class="m-t-20 f-s-14"><strong><?= $gor; ?></strong> GOR Bisa di Booking</h6>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bg-success wow animated progress-animated w-30pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Total User <span class="pull-right"><i class="ion-android-people f-s-30 text-danger"></i></span></h4>
                        <h6 class="m-t-20 f-s-14"><strong><?= $user; ?></strong> User Terdaftar</h6>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bg-danger wow animated progress-animated w-40pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
                    <div class="card-body">
                        <h4 class=" card-title">Daftar GOR Tersedia</h4>
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
                                            <a href="<?= site_url("user/booking?id_gor=$gor->id_gor") ?>" class="btn btn-primary">Booking</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class=" card-title">Data Produk Tersedia</h4>
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
                                            <a href="<?= site_url("user/sewa?id_produk=$produk->id_produk") ?>" class="btn btn-primary">Sewa Alat</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </div>