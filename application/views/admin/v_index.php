<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>Selamat Datang Admin, <span><?= $this->session->nama; ?></span></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Banyak Alat <span class="pull-right"><i class="ion-android-list f-s-30 text-primary"></i></span></h4>
                        <h6 class="m-t-20 f-s-14"><strong><?= $produk; ?></strong> Produk Terdaftar</h6>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bg-primary wow animated progress-animated w-50pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Banyak GOR <span class="pull-right"><i class="ion-android-list f-s-30 text-success"></i></span></h4>
                        <h6 class="m-t-20 f-s-14"><strong><?= $gor; ?></strong> GOR Terdaftar</h6>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bg-success wow animated progress-animated w-30pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Total User <span class="pull-right"><i class="ion-android-people f-s-30 text-primary"></i></span></h4>
                        <h6 class="m-t-20 f-s-14"><strong><?= $user; ?></strong> User Terdaftar</h6>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bg-primary wow animated progress-animated w-30pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Total Transaksi <span class="pull-right"><i class="ion-android-list f-s-30 text-success"></i></span></h4>
                        <h6 class="m-t-20 f-s-14"><strong><?= $sewa; ?></strong> Total Penyewaan</h6>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bg-success wow animated progress-animated w-30pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="card">
                    <div class="card-body">
                        <h4 class=" card-title">Total Pendapatan Transaksi</h4>
                        <div class="f-s-30 f-w-300 text-success">200.000 <span class="f-s-16 text-uppercase">Rp</span>
                        </div>
                        <a href="#" class="btn btn-outline-dark btn-flat m-t-5 m-b-30 f-s-14">View Details</a>
                        <canvas id="sales-graph-top"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center"><i class="icon ion-ios-paper-outline f-s-75 text-success"></i>
                            <h4 class="m-b-2">Artikel Lainnya</h4>
                            <a href="<?= site_url('admin/artikel') ?>" class="btn btn-sm btn-success btn-block m-t-15">Browse Article</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>