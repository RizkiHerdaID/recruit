<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <!-- Title -->
        Uji Kemampuan
        <small>| PT. Mangli Djara Raya</small>
    </h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li><a href="<?=site_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=site_url('competency')?>">Uji Kemampuan</a></li>
        <li class="active">Penilaian</li>
    </ol>
</section>
<section class="content">
    <div class="box nav-tabs-custom">
        <div class="box-header with-border">
            <!-- Title -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#profile" data-toggle="tab">Profil Calon</a></li>
                <li><a href="#evaluation" data-toggle="tab">Penilaian</a></li>
            </ul>
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
        <div class="box-body tab-content">
            <div class="row active tab-pane" id="profile">
                <form class="form-horizontal col-md-8" enctype="multipart/form-data" id="profileForm" method="post">
                    <input type="hidden" name="id" value="">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                                <img class="img-responsive img-circle" src="<?= base_url() ?>images/user2-160x160.jpg" alt="Foto Kandidat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-4 control-label">Nama Lengkap</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="nama" name="nama"
                                       disabled/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-4 control-label">Tempat Lahir</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                       disabled/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-4 control-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="tgl_lahir" class="form-control pull-right datepicker" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-4 control-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jenis_kelamin" checked disabled> Laki-laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jenis_kelamin" disabled> Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-4 control-label">Alamat</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="alamat" rows="3"  disabled></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telp" class="col-sm-4 control-label">No. Telp</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="telp" name="telp"
                                       disabled/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-4 control-label">E-mail</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email"
                                       disabled/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="riwayat_pendidikan_formal" class="col-sm-4 control-label">Riwayat Pendidikan <br> (Formal)</label>
                            <div class="col-sm-8">
                                <textarea name="riwayat_pendidikan_formal" class="form-control" rows="5" disabled></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="riwayat_pendidikan_non_formal" class="col-sm-4 control-label">Riwayat Pendidikan
                                <br> (Non-Formal)</label>
                            <div class="col-sm-8">
                                <textarea name="riwayat_pendidikan_non_formal" class="form-control" rows="5" disabled></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pengalaman_organisasi" class="col-sm-4 control-label">Pengalaman Organisasi</label>
                            <div class="col-sm-8">
                                <textarea name="pengalaman_organisasi" class="form-control" rows="5" disabled></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pengalaman_kerja" class="col-sm-4 control-label">Pengalaman Kerja</label>
                            <div class="col-sm-8">
                                <textarea name="pengalaman_kerja" class="form-control" rows="5" disabled></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kemampuan" class="col-sm-4 control-label">Kemampuan</label>
                            <div class="col-sm-8">
                                <textarea name="kemampuan" class="form-control" rows="5" disabled></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" id="edit">Edit</button>
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="evaluation">
                <form class="form-horizontal col-md-8" enctype="multipart/form-data" method="post">
                    <div  id="evaluationForm">
                        <div class="form-group">
                            <label for="pendidikan_terakhir" class="col-sm-4 control-label">Pendidikan Terakhir</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="pendidikan_terakhir">
                                    <option value="">-- Pilih Salah Satu --</option>
                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                    <option value="TK">TK</option>
                                    <option value="SD">SD</option>
                                    <option value="SLTP">SLTP</option>
                                    <option value="SLTA">SLTA</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rencana_penempatan" class="col-sm-4 control-label">Rencana Penempatan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="rencana_penempatan" name="rencana_penempatan" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rencana_jabatan" class="col-sm-4 control-label">Rencana Jabatan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="rencana_jabatan" name="rencana_jabatan" />
                            </div>
                        </div>
                        <?php for ($i = 6; $i <= 10; $i++) :?>
                        <div class="form-group">
                            <label for="nilai" class="col-sm-4 control-label">Kriteria <?=$i?></label>
                            <div class="col-sm-8">
                                <select class="form-control" name="nilai[]">
                                    <option value="1">1 Tidak Cocok</option>
                                    <option value="2">2 Kurang Cocok</option>
                                    <option value="3">3 Cukup Cocok</option>
                                    <option value="4">4 Cocok</option>
                                    <option value="5">5 Sangat Cocok</option>
                                </select>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <div class="form-group">
                        <label for="komentar" class="col-sm-4 control-label">Komentar Pewawancara</label>
                        <div class="col-sm-8">
                            <textarea name="komentar" class="form-control" rows="5" disabled></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="komentar" class="col-sm-4 control-label">Komentar Penguji</label>
                        <div class="col-sm-8">
                            <textarea name="komentar" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-success" onclick="return confirm('Anda Yakin ingin menyimpan perubahan?')">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
            </div>
    </div>
</section>

<script>
    var btnEdit  = document.getElementById('edit');
    var form = document.getElementById('profileForm');
    btnEdit.addEventListener('click', function(){
        for(var i=0; i < form.length; i++) {
            form.elements[i].disabled = false;
        }
    });
</script>