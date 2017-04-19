<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <!-- Title -->
        Detail Kandidat
        <small>| PT. Mangli Djara Raya</small>
    </h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li><a href="<?=site_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=site_url('candidate')?>">Kandidat</a></li>
        <li class="active">Detail</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <!-- Title -->
            <h3 class="box-title">Detail Kandidat</h3>
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
            <form class="form-horizontal col-md-8" enctype="multipart/form-data" method="post" action="<?=site_url('candidate/update')?>">
                <input type="hidden" name="id" value="<?=$candidate[0]->id?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama" class="col-sm-4 control-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama" name="name"
                                   value="<?=$candidate[0]->name?>" placeholder="Isikan..."/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir" class="col-sm-4 control-label">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="tempat_lahir" name="born_in"
                                   value="<?=$candidate[0]->born_in?>"placeholder="Isikan..."/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir" class="col-sm-4 control-label">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="born_at" class="form-control pull-right datepicker" value="<?=date('m-d-Y', strtotime($candidate[0]->born_at))?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin" class="col-sm-4 control-label">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="0" <?=$candidate[0]->gender !== '0' ?'': 'checked'?>> Laki-laki
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="1" <?=$candidate[0]->gender !== '1' ?'': 'checked'?>> Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-sm-4 control-label">Alamat</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="address" rows="3" placeholder="Enter ..."><?=$candidate[0]->address?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telp" class="col-sm-4 control-label">No. Telp</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="telp" name="phone"
                                   value="<?=$candidate[0]->phone?>" placeholder="Isikan..."/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-4 control-label">E-mail</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email"
                                value="<?=$candidate[0]->email?>" placeholder="Isikan..."/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="riwayat_pendidikan_formal" class="col-sm-4 control-label">Riwayat Pendidikan <br> (Formal)</label>
                        <div class="col-sm-8">
                            <textarea name="formal_education" class="form-control" rows="5"><?=$candidate[0]->formal_education?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="riwayat_pendidikan_non_formal" class="col-sm-4 control-label">Riwayat Pendidikan
                            <br> (Non-Formal)</label>
                        <div class="col-sm-8">
                            <textarea name="unformal_education" class="form-control" rows="5"><?=$candidate[0]->unformal_education?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pengalaman_organisasi" class="col-sm-4 control-label">Pengalaman Organisasi</label>
                        <div class="col-sm-8">
                            <textarea name="organization_experience" class="form-control" rows="5"><?=$candidate[0]->organization_experience?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pengalaman_kerja" class="col-sm-4 control-label">Pengalaman Kerja</label>
                        <div class="col-sm-8">
                            <textarea name="work_experience" class="form-control" rows="5"><?=$candidate[0]->work_experience?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kemampuan" class="col-sm-4 control-label">Kemampuan</label>
                        <div class="col-sm-8">
                            <textarea name="skills" class="form-control" rows="5"><?=$candidate[0]->skills?></textarea>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</section>