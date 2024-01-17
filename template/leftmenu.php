<?php
if ($level == 'User') {
?>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="./"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <?php if ($usr['tahap'] == 1) { ?>
            <li><a href="./?page=isi-formulir"><i class="fa fa-link"></i> Isi Formulir</a></li>
        <?php } else if ($usr['tahap'] == 2) { ?>
            <li><a href="./?page=biodata"><i class="fa fa-link"></i> Biodata Pendaftar</a></li>
        <?php } ?>
        <!-- <li><a href="./?page=profile"><i class="fa fa-link"></i> Profile</a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-link"></i> <span>Laporan</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="./"><i class="fa fa-circle-o"></i> Terselesaikan</a></li>
                            <li><a href="./"><i class="fa fa-circle-o"></i> Belum Selesai</a></li>
                            <li><a href="./"><i class="fa fa-circle-o"></i> Tidak Selesai</a></li>
                        </ul>
                    </li> -->
        <li><a href="./?logout=yes"><i class="fa fa-power-off"></i> Logout</a></li>

    </ul>
<?php } else if ($level == 'Administrator') { ?>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="./"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-link"></i> <span>Data Masuk</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="./?page=data-masuk-reguler"><i class="fa fa-circle-o"></i> Reguler</a></li>
                <li><a href="./?page=data-masuk-prestasi"><i class="fa fa-circle-o"></i> Prestasi</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-link"></i> <span>Verifikasi</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="./?page=verifikasi-reguler"><i class="fa fa-circle-o"></i> Reguler</a></li>
                <li><a href="./?page=verifikasi-prestasi"><i class="fa fa-circle-o"></i> Prestasi</a></li>
            </ul>
        </li>
        <!-- <li><a href="./?page=approval"><i class="fa fa-link"></i> Approval</a></li>
        <li><a href="./?page=profile"><i class="fa fa-link"></i> Siswa Lolos</a></li> -->
        <li class="treeview">
            <a href="#">
                <i class="fa fa-link"></i> <span>Master Data</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="./?page=md-jurusan"><i class="fa fa-circle-o"></i> Jurusan</a></li>
                <li><a href="./?page=md-kelas"><i class="fa fa-circle-o"></i> Ruangan</a></li>
                <li><a href="./?page=md-jadwal-tes"><i class="fa fa-circle-o"></i> Jadwal Tes</a></li>
                <li><a href="./?page=md-gelombang-reg"><i class="fa fa-circle-o"></i> Gelombang Pendaftaran</a></li>
            </ul>
        </li>
        <li><a href="./?logout=yes"><i class="fa fa-power-off"></i> Logout</a></li>

    </ul>
<?php } ?>