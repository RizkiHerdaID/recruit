<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <!-- Title -->
        Tahap Uji Kemampuan
        <small>| PT. Mangli Djara Raya</small>
    </h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li><a href="<?=site_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tahap Uji Kemampuan</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <!-- Title -->
            <h3 class="box-title">Tahap Uji Kemampuan - Daftar Calon Pegawai</h3>
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
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Nilai</th>
                    <th width="20%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Belum Ada</td>
                    <td>Rizki Herdatullah</td>
                    <td>Laki-Laki</td>
                    <td>-</td>
                    <td>rizkiherda@gmail.com</td>
                    <td><span class="label label-warning">Tahap 1 - Dilanjutkan</span></td>
                    <td>23</td>
                    <td>
                        <a href="<?=site_url('competency/test/1')?>" class="btn btn-warning"><i class="fa fa-street-view"> Uji Kemampuan</i></a>
                    </td>
                </tr>
                <tr>
                    <td>Belum Ada</td>
                    <td>Ardyan Sukma Bryantara</td>
                    <td>Laki-Laki</td>
                    <td>-</td>
                    <td>bryantara@gmail.com</td>
                    <td><span class="label label-success">Tahap 2 - Dilanjutkan</span></td>
                    <td>27</td>
                    <td>
                        <a href="<?=site_url('competency/edit/1')?>" class="btn btn-info"><i class="fa fa-street-view"> Ganti</i></a>
                    </td>
                </tr>
                <tr>
                    <td>Belum Ada</td>
                    <td>Diah Ayunda</td>
                    <td>Perempuan</td>
                    <td>-</td>
                    <td>diah@ayunda1234.com</td>
                    <td><span class="label label-danger">Tahap 1 - Ditolak</span></td>
                    <td>12</td>
                    <td>
                        <button href="<?=site_url('competency/detail/1')?>" class="btn btn-muted" disabled><i class="fa fa-street-view"> Uji Kemampuan</i></button>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Nilai</th>
                    <th>Aksi</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>