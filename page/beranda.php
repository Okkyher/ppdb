<?php if ($level == 'User') {
    if ($usr['tahap'] == 1) {
        include_once('isi-formulir.php');
    } else if ($usr['tahap'] == 2) { ?>
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
                            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
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