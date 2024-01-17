<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Masuk
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li><a href="#">Data Masuk</a></li>
            <li class="active">Pendaftar Reguler</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Calon Siswa Reguler</h3>
                        <div class="pull-right">
                            <!-- <button type="button" class="btn btn-success btn-xs" onclick="popModal(1,'add-gelombang-reg');"><i class="fa fa-plus"></i> Gelombang Pendaftaran</button> -->
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-condensed table-bordered dataTable table-client">
                                <thead>
                                    <tr>
                                        <th class="center-align">No.</th>
                                        <th>Nama</th>
                                        <th>Asal Sekolah</th>
                                        <th>NISN</th>
                                        <th>Kejuruan</th>
                                        <th class="center-align">Status</th>
                                        <th class="center-align">Penerimaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($reg_ver_db as $reg) { ?>
                                        <tr>
                                            <td class="center-align"><?php echo $no; ?>.</td>
                                            <td><?php echo $reg['nama']; ?></td>
                                            <td><?php echo $reg['asal_sekolah']; ?></td>
                                            <td><?php echo $reg['nisn']; ?></td>
                                            <td><?php echo $reg['jurusan']; ?></td>
                                            <td class="center-align">
                                                <label class="label label-success"><?php echo $reg['valid']; ?></label>
                                            </td>
                                            <td class="center-align">
                                                <label class="label label-primary">Belum Diterima</label>
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