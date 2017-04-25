<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <!-- Title -->
        Tahap Wawancara
        <small>| PT. Mangli Djara Raya</small>
    </h1>
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li><a href="<?=site_url()?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tahap Wawancara</li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <!-- Title -->
            <h3 class="box-title">Tahap Wawancara - Daftar Calon Pegawai</h3>
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
                    <th width="20%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php if ($candidates): foreach ($candidates as $candidate): ?>
                    <tr>
                        <td>
                            <img style="max-width: 100px" class="img-responsive" src="<?= !empty($candidate->photo) ? base_url('photos/'.$candidate->photo) : base_url('images/user2-160x160.jpg') ?>" alt="Foto Kandidat">
                        </td>
                        <td><?=$candidate->name?></td>
                        <td><?=$candidate->gender == '1' ? 'Laki-laki': 'Perempuan';?></td>
                        <td><?=$candidate->phone?></td>
                        <td><?=$candidate->email?></td>
                        <td><span class="label label-<?=$candidate->status === '0' ? 'default' : ($candidate->status === '1' ? 'warning' : ($candidate->status === '3' ? 'info' : 'success')) ?>"><?=$candidate->status === '0' ? 'Siap Tahap Pertama' : ($candidate->status === '1' ? 'Siap Tahap Kedua' : ($candidate->status === '3' ? 'Sudah di Rekrut' : 'Selesai Semua Tahap')) ?></span></td>
                        <td>
                            <?php if($candidate->status === '0') { ?>
                            <a href="<?=site_url('interview/test/'.$candidate->id)?>" class="btn btn-warning"><i class="fa fa-street-view"> Wawancara</i></a>
                            <?php } else { ?>
                            <a href="<?=site_url('interview/edit/'.$candidate->id)?>" class="btn btn-info"><i class="fa fa-pencil"> Detail</i></a>
                            <?php } ?>
                        </td>
                    </tr>
                <?php endforeach; endif; ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telp</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>