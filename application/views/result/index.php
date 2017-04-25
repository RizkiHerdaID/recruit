<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <!-- Title -->
        Hasil Penilaian
        <small>| PT. Mangli Djara Raya</small>
    </h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li><a href="<?=site_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Hasil Penilaian</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <!-- Title -->
            <h3 class="box-title">Hasil Penilaian</h3>
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
        <div class="box-body">
            <table id="employee" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th width="10%">Foto</th>
                    <th width="20%">Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Rencana Jabatan</th>
                    <th>Nilai</th>
                    <th>Presentase</th>
                    <th>Rencana Penempatan</th>
                    <th width="15%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php if ($candidates): foreach ($candidates as $candidate): ?>
                <tr>
                    <td>Belum Ada</td>
                    <td><?=$candidate->name?></td>
                    <td><?=$candidate->gender == '0' ? 'Laki-laki': 'Perempuan';?></td>
                    <td><?=$candidate->position?></td>
                    <td><?=substr($candidate->score, 0, 5)?></td>
                    <td><?=substr($candidate->percentage, 0, 5)?> %</td>
                    <td><?=$candidate->placement_plan?></td>
                    <td>
                        <a href="<?=site_url('result/detail/'.$candidate->id)?>" class="btn btn-info btn-sm"><i class="fa fa-info"> Detail</i></a>
                        <a href="<?=site_url('result/recruit/'.$candidate->id)?>" class="btn btn-success btn-sm"><i class="fa fa-check"> Rekrut</i></a>
                    </td>
                </tr>
                <?php endforeach; endif;?>
                </tbody>
                <tfoot>
                <tr>
                    <th width="10%">Foto</th>
                    <th width="20%">Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Rencana Jabatan</th>
                    <th>Nilai</th>
                    <th>Presentase</th>
                    <th>Rencana Penempatan</th>
                    <th width="15%">Aksi</th>
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