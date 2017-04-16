<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <!-- Title -->
        Detail Pegawai
        <small>| PT. Mangli Djara Raya</small>
    </h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li><a href="<?=site_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=site_url('employee')?>">Pegawai</a></li>
        <li class="active">Detail</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <!-- Title -->
            <h3 class="box-title">Detail Pegawai</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-chevron-up"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- Body -->
        <div class="box-body row">
            <form class="form-horizontal col-md-8" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama" class="col-sm-4 control-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="nama" name="nama"
                                   placeholder="Isikan..."/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jabatan" class="col-sm-4 control-label">Jabatan</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="jabatan">
                                <option>Direktur</option>
                                <option>Manajer</option>
                                <option>Spesialis</option>
                                <option>Analis</option>
                                <option>Operator</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir" class="col-sm-4 control-label">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="tgl_lahir" class="form-control pull-right datepicker">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin" class="col-sm-4 control-label">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="jenis_kelamin"> Laki-laki
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="jenis_kelamin"> Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-sm-4 control-label">Alamat</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="alamat" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telp" class="col-sm-4 control-label">No. Telp</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="telp" name="telp"
                                   placeholder="Isikan..."/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-4 control-label">E-mail</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="Isikan..."/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgl_masuk" class="col-sm-4 control-label">Tanggal Masuk</label>
                        <div class="col-sm-8">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="tgl_masuk" class="form-control pull-right datepicker">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gaji" class="col-sm-4 control-label">Gaji</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control currency" id="gaji" name="gaji"
                                   placeholder="Isikan..."/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="riwayat_pendidikan_formal" class="col-sm-4 control-label">Riwayat Pendidikan <br> (Formal)</label>
                    <div class="col-sm-8">
                        <textarea name="riwayat_pendidikan_formal" class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="riwayat_pendidikan_non_formal" class="col-sm-4 control-label">Riwayat Pendidikan
                        <br> (Non-Formal)</label>
                    <div class="col-sm-8">
                        <textarea name="riwayat_pendidikan_non_formal" class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pengalaman_organisasi" class="col-sm-4 control-label">Pengalaman Organisasi</label>
                    <div class="col-sm-8">
                        <textarea name="pengalaman_organisasi" class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pengalaman_kerja" class="col-sm-4 control-label">Pengalaman Kerja</label>
                    <div class="col-sm-8">
                        <textarea name="pengalaman_kerja" class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kemampuan" class="col-sm-4 control-label">Kemampuan</label>
                    <div class="col-sm-8">
                        <textarea name="kemampuan" class="form-control" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="foto" class="col-sm-4 control-label">Foto</label>
                    <div class="col-sm-8">
                        <input type="file" id="foto" name="foto">
                        <p class="help-block">Tipe berkas yang diterima : *.jpg, *.jpeg, *.png, *.bmp</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</section>