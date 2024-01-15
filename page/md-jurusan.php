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
            <li class="active">Jurusan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Jurusan</h3>
                        <div class="pull-right">
                            <button type="button" class="btn btn-success btn-xs" onclick="popModal(1,'add-jurusan');"><i class="fa fa-plus"></i> Jurusan</button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-condensed table-bordered dataTable table-client">
                                <thead>
                                    <tr>
                                        <th class="center-align">No.</th>
                                        <th>Nama Jurusan</th>
                                        <th>Kode Jurusan</th>
                                        <th>Kuota</th>
                                        <th class="center-align">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($jurusan_db as $jur) { ?>
                                        <tr>
                                            <td class="center-align"><?php echo $no; ?>.</td>
                                            <td><?php echo $jur['nama']; ?></td>
                                            <td><?php echo $jur['kode']; ?></td>
                                            <td><?php echo number_format($jur['tampung']); ?></td>
                                            <td class="center-align">
                                                <div class="btn-group btn-group-xs act" role="group" aria-label="...">
                                                    <button type="button" class="btn btn-primary btn-xs" onclick="popModal(<?php echo $jur['id']; ?>,'edit-jurusan');"><i class="glyphicon glyphicon-edit"></i></button>
                                                    <button type="button" class="btn btn-danger btn-xs" onclick="DelData(<?php echo $jur['id']; ?>, 'id','jurusan');"><i class="glyphicon glyphicon-trash"></i></button>

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