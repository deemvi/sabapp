<!-- content body -->
<div class="content-body">
    <div class="container-fluid">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Booking GOR</h4>
                    <div class="basic-form">
                    <?php foreach($data as $gor): ?>
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Gor</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_gor" class="form-control" value="<?= $gor->nama_gor ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat GOR</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat" class="form-control" value="<?= $gor->alamat ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">WhatsApp</label>
                                <div class="col-sm-10">
                                    <input type="text" name="no_telp" class="form-control" value="<?= $gor->no_telp ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Lapangan GOR</label>
                                <div class="col-sm-10">
                                    <select class="custom-select mr-sm-2" name="lapangan" id="" readonly>
                                        <option selected=Selected>Pilih</option>
                                        <option value="Lapangan A">Lapangan A</option>
                                        <option value="Lapangan B">Lapangan B</option>
                                        <option value="Lapangan C">Lapangan C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Booking</label>
                                <div class="col-sm-10">
                                    <input type="date" name="tgl_booking" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jam Booking</label>
                                <div class="col-sm-10">
                                    <input type="time" name="jam_booking" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jam Selesai</label>
                                <div class="col-sm-10">
                                    <input type="time" name="jam_selesai" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <picture>
                                            <source srcset="" type="image/svg+xml">
                                            <img src="<?= site_url('assets/images/upload/').$gor->gambar; ?>" alt="..." width="70px">
                                    </picture>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="submit" name="btn_pinjam" value="Booking GOR" class="btn btn-dark">
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