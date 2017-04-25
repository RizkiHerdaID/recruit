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
            <form class="form-horizontal col-md-8" method="post" action="<?=site_url('employee/update/'.$employee[0]->id)?>" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-4">
                            <img style="max-width: 200px" class="img-responsive" src="<?= !empty($employee[0]->photo) ? base_url('photos/'.$employee[0]->photo) : base_url('images/user2-160x160.jpg') ?>" alt="Foto Pegawai">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="col-sm-4 control-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama" name="name"
                                   value="<?=$employee[0]->name?>" placeholder="Isikan..."/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jabatan" class="col-sm-4 control-label">Jabatan</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="position_id">
                                <option value="">-- Pilih Salah Satu --</option>
                                <?php foreach ($positions as $position): ?>
                                    <option value="<?=$position->id?>" <?=$position->id !== $employee[0]->position_id ? '' : 'selected'?>><?=$position->name?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir" class="col-sm-4 control-label">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="tempat_lahir" name="born_in"
                                   value="<?=$employee[0]->born_in?>" placeholder="Isikan..."/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir" class="col-sm-4 control-label">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="born_at" class="form-control pull-right datepicker" value="<?=date('m-d-Y', strtotime($employee[0]->born_at))?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin" class="col-sm-4 control-label">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="0" <?=$employee[0]->gender !== '0' ?'': 'checked'?>> Laki-laki
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="1" <?=$employee[0]->gender !== '1' ?'': 'checked'?>> Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-sm-4 control-label">Alamat</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="address" rows="3" placeholder="Enter ..."><?=$employee[0]->address?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telp" class="col-sm-4 control-label">No. Telp</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" id="telp" name="phone"
                                   value="<?=$employee[0]->phone?>" placeholder="Isikan..."/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-4 control-label">E-mail</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email"
                                   value="<?=$employee[0]->email?>" placeholder="Isikan..."/>
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
                                   value="<?=number_format($employee[0]->salary, 0, ',', '.')?>" placeholder="Isikan..."/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="riwayat_pendidikan_formal" class="col-sm-4 control-label">Riwayat Pendidikan <br> (Formal)</label>
                    <div class="col-sm-8">
                        <textarea name="formal_education" class="form-control" rows="5"><?=$employee[0]->formal_education?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="riwayat_pendidikan_non_formal" class="col-sm-4 control-label">Riwayat Pendidikan
                        <br> (Non-Formal)</label>
                    <div class="col-sm-8">
                        <textarea name="unformal_education" class="form-control" rows="5"><?=$employee[0]->unformal_education?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pengalaman_organisasi" class="col-sm-4 control-label">Pengalaman Organisasi</label>
                    <div class="col-sm-8">
                        <textarea name="organization_experience" class="form-control" rows="5"><?=$employee[0]->organization_experience?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pengalaman_kerja" class="col-sm-4 control-label">Pengalaman Kerja</label>
                    <div class="col-sm-8">
                        <textarea name="work_experience" class="form-control" rows="5"><?=$employee[0]->work_experience?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kemampuan" class="col-sm-4 control-label">Kemampuan</label>
                    <div class="col-sm-8">
                        <textarea name="skills" class="form-control" rows="5"><?=$employee[0]->skills?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="foto" class="col-sm-4 control-label">Foto</label>
                    <div class="col-sm-8">
                        <input type="file" id="foto" name="photo">
                        <p class="help-block">Tipe berkas yang diterima : *.jpg, *.jpeg, *.png, *.bmp</p>
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