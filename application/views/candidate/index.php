<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <!-- Title -->
        Daftar Kandidat
        <small>| PT. Mangli Djara Raya</small>
    </h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li><a href="<?=site_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Daftar Kandidat</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <!-- Title -->
            <h3 class="box-title">Daftar Kandidat</h3>
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
                <?php if ($candidates): foreach ($candidates as $candidate): ?>
                    <tr>
                        <td>Belum Ada</td>
                        <td><?=$candidate->name?></td>
                        <td><?=$candidate->gender == '0' ? 'Laki-laki': 'Perempuan';?></td>
                        <td><?=$candidate->phone?></td>
                        <td><?=$candidate->email?></td>
                        <td><span class="label label-<?=$candidate->status === '0' ? 'default' : ($candidate->status === '1' ? 'warning' : 'success') ?>"><?=$candidate->status === '0' ? 'Siap Tahap Pertama' : ($candidate->status === '1' ? 'Siap Tahap Kedua' : 'Selesai Semua Tahap') ?></span></td>
                        <td>
                            <a href="<?=site_url('candidate/detail/'.$candidate->id)?>" class="btn btn-info"><i class="fa fa-info"> Detail</i></a>
                            <a href="<?=site_url('candidate/delete/'.$candidate->id)?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-remove"> Hapus</i></a>
                        </td>
                    </tr>
                <?php endforeach; endif; ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                    <th>Status</th>
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
                <form class="form-horizontal" method="post" action="<?=site_url('candidate/store')?>">
                <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nama" class="col-sm-4 control-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama" name="name"
                                           placeholder="Isikan..."/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir" class="col-sm-4 control-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tempat_lahir" name="born_in"
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
                                        <input type="text" name="born_at" class="form-control pull-right datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin" class="col-sm-4 control-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="0"> Laki-laki
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" value="1"> Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="col-sm-4 control-label">Alamat</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="address" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telp" class="col-sm-4 control-label">No. Telp</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="telp" name="phone"
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
                                    <textarea name="formal_education" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="riwayat_pendidikan_non_formal" class="col-sm-4 control-label">Riwayat Pendidikan
                                    <br> (Non-Formal)</label>
                                <div class="col-sm-8">
                                    <textarea name="unformal_education" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pengalaman_organisasi" class="col-sm-4 control-label">Pengalaman Organisasi</label>
                                <div class="col-sm-8">
                                    <textarea name="organization_experience" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pengalaman_kerja" class="col-sm-4 control-label">Pengalaman Kerja</label>
                                <div class="col-sm-8">
                                    <textarea name="work_experience" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kemampuan" class="col-sm-4 control-label">Kemampuan</label>
                                <div class="col-sm-8">
                                    <textarea name="skills" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="foto" class="col-sm-4 control-label">Foto</label>
                                <div class="col-sm-8">
                                    <input type="file" id="foto" name="photo">
                                    <p class="help-block">Tipe berkas yang diterima : *.jpg, *.jpeg, *.png, *.bmp</p>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Tambah Kandidat</button>
                </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</section>