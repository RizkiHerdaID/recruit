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
                <?php if ($positions): foreach ($positions as $position): ?>
                <tr>
                    <td>1</td>
                    <td><?= $position->name ?></td>
                    <td>
                        <a href="<?=site_url('position/detail/'.$position->id)?>" class="btn btn-info"><i class="fa fa-info"> Detail</i></a>
                        <a href="<?=site_url('position/delete/'.$position->id)?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')"><i class="fa fa-remove"> Hapus</i></a>
                    </td>
                </tr>
                <?php endforeach; endif;?>
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
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Jabatan</h4>
                </div>
                <form class="form-horizontal" method="post" action="<?=site_url('position/store')?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="nama" class="col-sm-3 control-label">Nama Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama" name="nama"
                                       placeholder="Isikan..." required/>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($criteria as $key => $value): ?>
                    <div class="row" style="margin: 1.5em">
                        <input type="hidden" required name="criteria_id[]" value="<?=$key?>">
                        <div class="form-group col-md-8">
                            <label for="kriteria" class="control-label"><?=$value?></label>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="bobot" class="col-sm-4 control-label">Bobot</label>
                            <div class="col-sm-8">
                                <select name="bobot[]" id="bobot" class="form-control" required>
                                    <option value="">-- Pilih --</option>
                                    <?php for ($j = 1; $j <= 5; $j++): ?>
                                        <option value="<?=$j?>" <?= $j != 5 ? '' : 'selected'?>><?=$j?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Tambah Jabatan</button>
                </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</section>