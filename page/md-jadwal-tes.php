<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Master Data
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li><a href="#">Master Data</a></li>
            <li class="active">Jadwal Tes</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Jadwal Tes</h3>
                        <div class="pull-right">
                            <button type="button" class="btn btn-success btn-xs" onclick="popModal(1,'add-jadwal');"><i class="fa fa-plus"></i> Jadwal Tes</button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-condensed table-bordered dataTable table-client">
                                <thead>
                                    <tr>
                                        <th class="center-align">No.</th>
                                        <th class="center-align">Sesi</th>
                                        <th>Jam</th>
                                        <th>Tanggal</th>
                                        <th>Ruangan</th>
                                        <th>Kuota</th>
                                        <th class="center-align">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($jadwaltes_db as $jwl) { ?>
                                        <tr>
                                            <td class="center-align"><?php echo $no; ?>.</td>
                                            <td class="center-align"><?php echo getRomawi($jwl['sesi']); ?></td>
                                            <td><?php echo $jwl['jam']; ?></td>
                                            <td><?php echo indoDate($jwl['tanggal']); ?></td>
                                            <td><?php echo $jwl['nama']; ?></td>
                                            <td><?php echo $jwl['kuota']; ?></td>
                                            <td class="center-align">
                                                <div class="btn-group btn-group-xs act" role="group" aria-label="...">
                                                    <button type="button" class="btn btn-primary btn-xs" onclick="popModal(<?php echo $jwl['id']; ?>,'edit-jadwal');"><i class="glyphicon glyphicon-edit"></i></button>
                                                    <button type="button" class="btn btn-danger btn-xs" onclick="DelData(<?php echo $jwl['id']; ?>, 'id','jadwal_tes');"><i class="glyphicon glyphicon-trash"></i></button>

                                                </div>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="box-footer">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->