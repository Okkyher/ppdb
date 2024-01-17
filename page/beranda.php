<?php if ($level == 'User') {
    if ($usr['tahap'] == 1) {
        include_once('isi-formulir.php');
    } else if ($usr['tahap'] >= 2) { ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>Biodata</h3>

                                <p>Data Diri</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-edit"></i>
                            </div>
                            <a href="./?page=biodata" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>Kartu<!--<sup style="font-size: 20px">%</sup>--></h3>
                                <p>Cetak Kartu</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-checkmark-circled"></i>
                            </div>
                            <?php if ($usr['tahap'] == 2) { ?>
                                <a href="#" onclick="alert('Data Masih Dalam Tahap Verifikasi Oleh Sekolah!');" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                            <?php } else { ?>
                                <a href="#" onclick="window.open('./surat-pengumuman.php?id=<?php echo $iduser; ?>');" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>Informasi</h3>

                                <p>Informasi</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-refresh"></i>
                            </div>
                            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>Pengumuman</h3>

                                <p>Pengumuman</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-remove-circle"></i>
                            </div>
                            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <?php if ($usr['tahap'] == 3) { ?>
                        <div class="col-md-12">
                            <div class="box box-default">
                                <div class="box-header with-border">
                                    <i class="fa fa-bullhorn"></i>

                                    <h3 class="box-title">Pengumuman</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <!-- <div class="callout callout-danger">
                <h4>I am a danger callout!</h4>

                <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul,
                  like these sweet mornings of spring which I enjoy with my whole heart.</p>
              </div>
              <div class="callout callout-info">
                <h4>I am an info callout!</h4>

                <p>Follow the steps to continue to payment.</p>
              </div>
              <div class="callout callout-warning">
                <h4>I am a warning callout!</h4>

                <p>This is a yellow callout.</p>
              </div> -->
                                    <div class="callout callout-success">
                                        <h4>Selamat Anda Lolos Verifikasi Tahap 1 PPDB MAN 01 Karanganyar!</h4>
                                        <p>Anda Bisa Mencetak Kartu Sekarang</p>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    <?php } ?>
                </div>
                <!-- /.row (main row) -->
            </section>
            <!-- /.content -->
        </div>
    <?php }
} else { ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>100</h3>

                            <p>Lulus Verifikasi</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-edit"></i>
                        </div>
                        <a href="./?page=biodata" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>250</h3>

                            <p>Total Pendaftar</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-checkmark-circled"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>16</h3>

                            <p>Tidak Lulus</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-refresh"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>80</h3>

                            <p>Jalur Prestasi</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-remove-circle"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
            </div>
            <!-- /.row (main row) -->
        </section>
        <!-- /.content -->
    </div>
<?php } ?>