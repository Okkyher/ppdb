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
            <li class="active">Gelombang Pendaftaran</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Gelombang Pendaftaran</h3>
                        <div class="pull-right">
                            <button type="button" class="btn btn-success btn-xs" onclick="popModal(1,'add-gelombang-reg');"><i class="fa fa-plus"></i> Gelombang Pendaftaran</button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-condensed table-bordered dataTable table-client">
                                <thead>
                                    <tr>
                                        <th class="center-align">No.</th>
                                        <th>Nama</th>
                                        <th>Dari</th>
                                        <th>Sampai</th>
                                        <th class="center-align">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($wave_reg_db as $wvr) { ?>
                                        <tr>
                                            <td class="center-align"><?php echo $no; ?>.</td>
                                            <td><?php echo $wvr['nama']; ?></td>
                                            <td><?php echo indoDate($wvr['dari']); ?></td>
                                            <td><?php echo indoDate($wvr['sampai']); ?></td>
                                            <td class="center-align">
                                                <div class="btn-group btn-group-xs act" role="group" aria-label="...">
                                                    <button type="button" class="btn btn-primary btn-xs" onclick="popModal(<?php echo $wvr['id']; ?>,'edit-gelombang-reg');"><i class="glyphicon glyphicon-edit"></i></button>
                                                    <button type="button" class="btn btn-danger btn-xs" onclick="DelData(<?php echo $wvr['id']; ?>, 'id','gelombang_reg');"><i class="glyphicon glyphicon-trash"></i></button>

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