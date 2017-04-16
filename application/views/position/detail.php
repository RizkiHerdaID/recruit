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
            <form class="form-horizontal col-md-12">
                <div class="box-body">
                    <form class="form-horizontal" method="post">
                        <div class="box-body" id="daftarKriteria">
                            <div class="row">
                                <div class="form-group col-md-7">
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
                                <div class="form-group col-md-4">
                                    <label for="tahap" class="col-sm-4 control-label">Tahap</label>
                                    <div class="col-sm-8">
                                        <select name="tahap[]" id="tahap" class="form-control">
                                            <option value="0">Wawancara</option>
                                            <option value="1">Uji Kemampuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='form-group col-md-2'>
                                    <button class='btn btn-danger' type='button' onclick='removeRow(1)'><i class='fa fa-minus'></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-2">
                                <button class="btn btn-primary" type="button" onclick="addRow()"><i class="fa fa-plus"> Tambah Kriteria</i></button>
                            </div>
                        </div>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </form>
        </div>
    </div>
</section>

<?php $this->load->view('position/scripts') ?>