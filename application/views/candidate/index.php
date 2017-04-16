<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <!-- Title -->
        Calon Pegawai
        <small>| PT. Mangli Djara Raya</small>
    </h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li><a href="<?=site_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Calon Pegawai</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <!-- Title -->
            <h3 class="box-title">Daftar Calon Pegawai</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="" data-toggle="modal" data-target="#add"
                        title="Add">
                    <i class="fa fa-plus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-chevron-up"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- Body -->
        <div class="box-body">
            <table id="employee" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th width="20%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Belum Ada</td>
                    <td>Rizki Herdatullah</td>
                    <td>Laki-Laki</td>
                    <td>-</td>
                    <td>rizkiherda@gmail.com</td>
                    <td><span class="label label-success">Tahap 2 - Dilanjutkan</span></td>
                    <td>
                        <a href="<?=site_url('candidate/detail/1')?>" class="btn btn-info"><i class="fa fa-info"> Detail</i></a>
                        <a href="<?=site_url('candidate/delete/1')?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-remove"> Hapus</i></a>
                    </td>
                </tr>
                <tr>
                    <td>Belum Ada</td>
                    <td>Diah Ayunda</td>
                    <td>Perempuan</td>
                    <td>-</td>
                    <td>diah@ayunda1234.com</td>
                    <td><span class="label label-danger">Tahap 1 - Ditolak</span></td>
                    <td>
                        <a href="<?=site_url('candidate/detail/1')?>" class="btn btn-info"><i class="fa fa-info"> Detail</i></a>
                        <a href="<?=site_url('candidate/delete/1')?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-remove"> Hapus</i></a>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="add">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Kandidat</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nama" class="col-sm-4 control-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="nama" name="nama"
                                           placeholder="Isikan..."/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir" class="col-sm-4 control-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                           placeholder="Isikan..."/>
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
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Tambah Pegawai</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</section>