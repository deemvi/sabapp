<!-- content body -->
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class=" card-title">Data Pembookingan Anda</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Id GOR</th>
                                        <th>Nama GOR</th>
                                        <th>Alamat</th>
                                        <th>WhatsApp</th>
                                        <th>Tanggal Booking</th>
                                        <th>Jam Booking</th>
                                        <th>Jam Selesai</th>
                                        <th>Gambar</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($bookings as $booking): ?>
                                    <tr>
                                        <td><?= $booking->id_gor ?></td>
                                        <td><?= $booking->nama_gor ?></td>
                                        <td><?= $booking->alamat ?></td>
                                        <td><?= $booking->no_telp ?></td>
                                        <td><?= $booking->tgl_booking ?></td>
                                        <td><?= $booking->jam_booking ?></td>
                                        <td><?= $booking->jam_selesai ?></td>
                                        <td>
                                        <picture>
                                            <source srcset="" type="image/svg+xml">
                                                <img src="<?= site_url('assets/images/upload/').$booking->gambar; ?>" alt="..." width="70px">
                                        </picture>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-success" onclick="return alert('Sudah Dihubungi'); ">Dihubungi</a>
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