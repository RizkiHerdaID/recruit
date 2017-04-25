<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <!-- Title -->
        Pegawai
        <small>| PT. Mangli Djara Raya</small>
    </h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li><a href="<?=site_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pegawai</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <!-- Title -->
            <h3 class="box-title">Daftar Pegawai</h3>
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
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                    <th width="20%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?=$employee->name?></td>
                    <td><?=$employee->position?></td>
                    <td><?=$employee->gender === '0' ? 'Laki-laki' : 'Perempuan'?></td>
                    <td><?=$employee->phone?></td>
                    <td><?=$employee->email?></td>
                    <td>
                        <a href="<?=site_url('employee/detail/'.$employee->id)?>" class="btn btn-info"><i class="fa fa-info"> Detail</i></a>
                        <a href="<?=site_url('employee/delete/'.$employee->id)?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-remove"> Hapus</i></a>
                    </td>
                </tr>
                <?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
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
                    <h4 class="modal-title">Tambah Pegawai</h4>
                </div>
                <form class="form-horizontal" method="post" action="<?=site_url('employee/store')?>">
                    <div class="modal-body">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nama" class="col-sm-4 control-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="tex" class="form-control" id="nama" name="name"
                                           placeholder="Isikan..."/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jabatan" class="col-sm-4 control-label">Jabatan</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="position_id">
                                        <option value="">--Pilih Salah Satu--</option>
                                        <?php foreach ($positions as $position): ?>
                                            <option value="<?= $position->id ?>"><?=$position->name?></option>
                                        <?php endforeach;?>
                                    </select>
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
                                <label for="email" class="col-sm-4 control-label">E-mail</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="Isikan..."/>
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
                                <label for="tgl_masuk" class="col-sm-4 control-label">Tanggal Masuk</label>
                                <div class="col-sm-8">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="date_started_work" class="form-control pull-right datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gaji" class="col-sm-4 control-label">Gaji</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control currency" id="gaji" name="salary"
                                           placeholder="Isikan..."/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Tambah Pegawai</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</section>