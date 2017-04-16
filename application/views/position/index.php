<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <!-- Title -->
        Jabatan
        <small>| PT. Mangli Djara Raya</small>
    </h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li><a href="<?=site_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Jabatan</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <!-- Title -->
            <h3 class="box-title">Daftar Jabatan</h3>
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
                    <th width="5%">Nomor</th>
                    <th>Jabatan</th>
                    <th width="20%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Project Manager</td>
                    <td>
                        <a href="<?=site_url('position/detail/1')?>" class="btn btn-info"><i class="fa fa-info"> Detail</i></a>
                        <a href="<?=site_url('position/delete/1')?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-remove"> Hapus</i></a>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>Nomor</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="add">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Jabatan</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="post">
                        <div class="box-body" id="daftarKriteria">
                            <div class="row">
                                <div class="form-group col-md-8">
                                    <label for="nama" class="col-sm-3 control-label">Nama Jabatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama" name="nama"
                                               placeholder="Isikan..."/>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="row1">
                                <div class="form-group col-md-4">
                                    <label for="kriteria" class="col-sm-4 control-label">Kriteria</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="kriteria" name="kriteria[]"
                                               placeholder="Isikan..."/>
                                    </div>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="bobot" class="col-sm-4 control-label">Bobot</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="bobot" name="bobot[]"
                                               placeholder="Isikan..."/>
                                    </div>
                                </div>
                                <div class='form-group col-md-4'>
                                    <label for='tahap' class='col-sm-4 control-label'>Tahap</label>
                                    <div class='col-sm-8'>
                                        <select name='tahap[]' id='tahap' class='form-control'>
                                            <option value='0'>Wawancara</option>
                                            <option value='1'>Uji Kemampuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2">
                                <button class="btn btn-primary" type="button" onclick="addRow()"><i class="fa fa-plus"> Tambah Kriteria</i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Tambah Jabatan</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</section>

<?php $this->load->view('position/scripts') ?>