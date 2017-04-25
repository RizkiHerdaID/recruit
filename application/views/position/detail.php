<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <!-- Title -->
        Detail Jabatan
        <small>| PT. Mangli Djara Raya</small>
    </h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li><a href="<?=site_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=site_url('position')?>">Jabatan</a></li>
        <li class="active">Detail</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <!-- Title -->
            <h3 class="box-title">Detail Jabatan dan Kriteria Yang Dibutuhkan</h3>
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
            <div class="box-body">
                <form class="form-horizontal" method="post" action="<?=site_url('position/update/'.$position[0]->id)?>">
                    <div class="box-body" id="daftarKriteria">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="nama" class="col-sm-3 control-label">Nama Jabatan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama" name="nama"
                                           value="<?=$position[0]->name?>" placeholder="Isikan..."/>
                                </div>
                            </div>
                        </div>
                        <?php $i = 0; foreach ($criteria as $key => $value): ?>
                        <div class="row" style="margin-left: 1em">
                            <input type="hidden" required name="id[]" value="<?=$value->id?>">
                            <div class="form-group col-md-4">
                                <label for="kriteria" class="control-label"><?=$criteriaName[$value->criteria_id]?></label>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="bobot" class="col-sm-4 control-label">Bobot</label>
                                <div class="col-sm-8">
                                    <select name="bobot[]" id="bobot" class="form-control">
                                        <option value="">-- Pilih --</option>
                                        <?php for ($j = 1; $j <= 5; $j++): ?>
                                            <option value="<?=$j?>" <?=$value->weight != $j ? '' : 'selected' ?>><?=$j?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <a href="<?=site_url('position')?>" class="btn btn-default" data-dismiss="modal">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>