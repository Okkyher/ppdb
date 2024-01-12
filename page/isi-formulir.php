<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Isi Formulir
            <small>Data Diri</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li><a href="#">Isi Formulir</a></li>
            <li class="active">Data Siswa</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <?php if (!empty($_GET['step']) && $_GET['step'] == '2') { ?>
                <div class="box-header with-border">
                    <h3 class="box-title">Data Akademis</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="form-inpstep2" method="POST" action="">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Nilai Rapor Semester I</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="nilaism1" name="nilaism1" <?php if (!empty($_SESSION['tempstep2'][0])) {
                                                                                                        echo 'value="' . $_SESSION['tempstep2'][0] . '"';
                                                                                                    }  ?> class="form-control">
                                            </td>
                                            <td>Rata-rata</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="ratasm1" name="ratasm1" <?php if (!empty($_SESSION['tempstep2'][1])) {
                                                                                                    echo 'value="' . $_SESSION['tempstep2'][1] . '"';
                                                                                                }  ?> class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nilai Rapor Semester II</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="nilaism2" name="nilaism2" <?php if (!empty($_SESSION['tempstep2'][2])) {
                                                                                                        echo 'value="' . $_SESSION['tempstep2'][2] . '"';
                                                                                                    }  ?> class="form-control">
                                            </td>
                                            <td>Rata-rata</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="ratasm2" name="ratasm2" <?php if (!empty($_SESSION['tempstep2'][3])) {
                                                                                                    echo 'value="' . $_SESSION['tempstep2'][3] . '"';
                                                                                                }  ?> class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nilai Rapor Semester III</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="nilaism3" name="nilaism3" <?php if (!empty($_SESSION['tempstep2'][4])) {
                                                                                                        echo 'value="' . $_SESSION['tempstep2'][4] . '"';
                                                                                                    }  ?> class="form-control">
                                            </td>
                                            <td>Rata-rata</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="ratasm3" name="ratasm3" <?php if (!empty($_SESSION['tempstep2'][5])) {
                                                                                                    echo 'value="' . $_SESSION['tempstep2'][5] . '"';
                                                                                                }  ?> class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nilai Rapor Semester IV</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="nilaism4" name="nilaism4" <?php if (!empty($_SESSION['tempstep2'][6])) {
                                                                                                        echo 'value="' . $_SESSION['tempstep2'][6] . '"';
                                                                                                    }  ?> class="form-control">
                                            </td>
                                            <td>Rata-rata</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="ratasm4" name="ratasm4" <?php if (!empty($_SESSION['tempstep2'][7])) {
                                                                                                    echo 'value="' . $_SESSION['tempstep2'][7] . '"';
                                                                                                }  ?> class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nilai Rapor Semester V</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="nilaism5" name="nilaism5" <?php if (!empty($_SESSION['tempstep2'][8])) {
                                                                                                        echo 'value="' . $_SESSION['tempstep2'][8] . '"';
                                                                                                    }  ?> class="form-control">
                                            </td>
                                            <td>Rata-rata</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="ratasm5" name="ratasm5" <?php if (!empty($_SESSION['tempstep2'][9])) {
                                                                                                    echo 'value="' . $_SESSION['tempstep2'][9] . '"';
                                                                                                }  ?> class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nilai UN Bahasa Indonesia</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="unbahasa" name="unbahasa" <?php if (!empty($_SESSION['tempstep2'][10])) {
                                                                                                        echo 'value="' . $_SESSION['tempstep2'][10] . '"';
                                                                                                    }  ?> class="form-control">
                                            </td>
                                            <td>Nilai UN Bahasa Inggris</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="unbing" name="unbing" <?php if (!empty($_SESSION['tempstep2'][11])) {
                                                                                                    echo 'value="' . $_SESSION['tempstep2'][11] . '"';
                                                                                                }  ?> class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nilai UN Matematika</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="unmate" name="unmate" <?php if (!empty($_SESSION['tempstep2'][12])) {
                                                                                                    echo 'value="' . $_SESSION['tempstep2'][12] . '"';
                                                                                                }  ?> class="form-control">
                                            </td>
                                            <td>Nilai UN IPA</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="unipa" name="unipa" <?php if (!empty($_SESSION['tempstep2'][13])) {
                                                                                                echo 'value="' . $_SESSION['tempstep2'][13] . '"';
                                                                                            }  ?> class="form-control">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } else if (!empty($_GET['step']) && $_GET['step'] == '3') { ?>
                <div class="box-header with-border">
                    <h3 class="box-title">Data Orang Tua</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="form-inpstep3" method="POST" action="">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Alamat Rumah</td>
                                            <td>:</td>
                                            <td colspan="4"><input type="text" id="alamat" name="alamat" <?php if (!empty($_SESSION['tempstep3'][0])) {
                                                                                                                echo 'value="' . $_SESSION['tempstep3'][0] . '"';
                                                                                                            }  ?> class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>RT</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="rt" name="rt" <?php if (!empty($_SESSION['tempstep3'][1])) {
                                                                                            echo 'value="' . $_SESSION['tempstep3'][1] . '"';
                                                                                        }  ?> class="form-control" required>
                                            </td>
                                            <td>RW</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="rw" name="rw" <?php if (!empty($_SESSION['tempstep3'][2])) {
                                                                                            echo 'value="' . $_SESSION['tempstep3'][2] . '"';
                                                                                        }  ?> class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dusun</td>
                                            <td>:</td>
                                            <td colspan="4"><input type="text" id="dusun" name="dusun" <?php if (!empty($_SESSION['tempstep3'][3])) {
                                                                                                            echo 'value="' . $_SESSION['tempstep3'][3] . '"';
                                                                                                        }  ?> class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Kelurahan</td>
                                            <td>:</td>
                                            <td colspan="4"><input type="text" id="kelurahan" name="kelurahan" <?php if (!empty($_SESSION['tempstep3'][4])) {
                                                                                                                    echo 'value="' . $_SESSION['tempstep3'][4] . '"';
                                                                                                                }  ?> class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Kecamatan</td>
                                            <td>:</td>
                                            <td colspan="4"><input type="text" id="kecamatan" name="kecamatan" <?php if (!empty($_SESSION['tempstep3'][5])) {
                                                                                                                    echo 'value="' . $_SESSION['tempstep3'][5] . '"';
                                                                                                                }  ?> class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Kabupaten</td>
                                            <td>:</td>
                                            <td colspan="4"><input type="text" id="kabupaten" name="kabupaten" <?php if (!empty($_SESSION['tempstep3'][6])) {
                                                                                                                    echo 'value="' . $_SESSION['tempstep3'][6] . '"';
                                                                                                                }  ?> class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Ayah</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="ayah" name="ayah" <?php if (!empty($_SESSION['tempstep3'][7])) {
                                                                                                echo 'value="' . $_SESSION['tempstep3'][7] . '"';
                                                                                            }  ?> class="form-control" required>
                                            </td>
                                            <td>Pekerjaan</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="pkjayah" name="pkjayah" <?php if (!empty($_SESSION['tempstep3'][8])) {
                                                                                                    echo 'value="' . $_SESSION['tempstep3'][8] . '"';
                                                                                                }  ?> class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama Ibu</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="ibu" name="ibu" <?php if (!empty($_SESSION['tempstep3'][9])) {
                                                                                            echo 'value="' . $_SESSION['tempstep3'][9] . '"';
                                                                                        }  ?> class="form-control" required>
                                            </td>
                                            <td>Pekerjaan</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="pkjibu" name="pkjibu" <?php if (!empty($_SESSION['tempstep3'][10])) {
                                                                                                    echo 'value="' . $_SESSION['tempstep3'][10] . '"';
                                                                                                }  ?> class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Penghasilan / Bulan</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="gajidari" name="gajidari" <?php if (!empty($_SESSION['tempstep3'][11])) {
                                                                                                        echo 'value="' . $_SESSION['tempstep3'][11] . '"';
                                                                                                    }  ?> class="form-control" required>
                                            </td>
                                            <td style="text-align:center;">s.d</td>
                                            <td></td>
                                            <td>
                                                <input type="text" id="gajismpi" name="gajismpi" <?php if (!empty($_SESSION['tempstep3'][12])) {
                                                                                                        echo 'value="' . $_SESSION['tempstep3'][12] . '"';
                                                                                                    }  ?> class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>No. Telp./ Hp. (Aktif)</td>
                                            <td>:</td>
                                            <td colspan="4"><input type="text" id="telp" name="telp" <?php if (!empty($_SESSION['tempstep3'][13])) {
                                                                                                            echo 'value="' . $_SESSION['tempstep3'][13] . '"';
                                                                                                        }  ?> class="form-control" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } else if (!empty($_GET['step']) && $_GET['step'] == '4') { ?>
                <div class="box-header with-border">
                    <h3 class="box-title">Data Prestasi & Foto</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form id="form-inpstep4" action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="inpstep4" value="Selesai" required>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Apakah Anda memiliki prestasi akademik dan masuk pararel?</label>
                                    <select id="prestasi" name="prestasi" class="form-control" required>
                                        <option value="Tidak">Tidak</option>
                                        <option value="Ya">Ya</option>
                                    </select>
                                </div>
                                <div id="ShowRangking"></div>
                                <div id="ShowHafal"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pas Foto</label>
                                    <input type="file" name="image" id="imageInput" accept="image/*">
                                    <small class="help-block">*)Harap Upload File jpeg, jpg, atau png dan tidak lebih 3Mb</small>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <img id="previewImage" style="max-width: 100%;">
                                    </div>
                                    <canvas id="croppedCanvas" style="display: none;"></canvas>
                                    <input type="hidden" name="croppedImage" id="croppedImage">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php } else { ?>
                <div class="box-header with-border">
                    <h3 class="box-title">Data Siswa</h3>
                    <!-- <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="form-inpstep1" method="POST" action="">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>NISN SMP/MTS</td>
                                            <td>:</td>
                                            <td colspan="4"><input type="text" id="nisn" name="nisn" value="<?php echo $nisn; ?>" class="form-control" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Program Keahlian</td>
                                            <td>:</td>
                                            <td colspan="4">
                                                <select name="jurusan" class="form-control" required>
                                                    <option selected disabled>-Pilih Jurusan-</option>
                                                    <?php foreach ($jurusan_db as $jur) { ?>
                                                        <option value="<?php echo $jur['nama']; ?>" size="4" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][0] == $jur['nama']) {
                                                                                                                    echo 'selected';
                                                                                                                }  ?> /><?php echo $jur['nama']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama Calon Siswa</td>
                                            <td>:</td>
                                            <td colspan="4"><input type="text" id="nama" name="nama" <?php if (!empty($_SESSION['tempstep1'][1])) {
                                                                                                            echo 'value="' . $_SESSION['tempstep1'][1] . '"';
                                                                                                        } else {
                                                                                                            echo 'value="' . $nama . '"';
                                                                                                        }  ?> class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Lahir</td>
                                            <td>:</td>
                                            <td colspan="4"><input type="text" id="tempatlhr" name="tempatlhr" <?php if (!empty($_SESSION['tempstep1'][2])) {
                                                                                                                    echo 'value="' . $_SESSION['tempstep1'][2] . '"';
                                                                                                                }  ?>class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td>:</td>
                                            <td colspan="4">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <p>Tanggal :</p>
                                                        <select name="tgl" style="width:100%; border: 1px solid #ced4da;border-radius: .25rem;padding: .375rem .75rem;">
                                                            <option value="01" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '01') {
                                                                                            echo 'selected';
                                                                                        }  ?> />01</option>
                                                            <option value="02" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '02') {
                                                                                            echo 'selected';
                                                                                        }  ?> />02</option>
                                                            <option value="03" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '03') {
                                                                                            echo 'selected';
                                                                                        }  ?> />03</option>
                                                            <option value="04" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '04') {
                                                                                            echo 'selected';
                                                                                        }  ?> />04</option>
                                                            <option value="05" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '05') {
                                                                                            echo 'selected';
                                                                                        }  ?> />05</option>
                                                            <option value="06" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '06') {
                                                                                            echo 'selected';
                                                                                        }  ?> />06</option>
                                                            <option value="07" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '07') {
                                                                                            echo 'selected';
                                                                                        }  ?> />07</option>
                                                            <option value="08" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '08') {
                                                                                            echo 'selected';
                                                                                        }  ?> />08</option>
                                                            <option value="09" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '09') {
                                                                                            echo 'selected';
                                                                                        }  ?> />09</option>
                                                            <option value="10" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '10') {
                                                                                            echo 'selected';
                                                                                        }  ?> />10</option>
                                                            <option value="11" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '11') {
                                                                                            echo 'selected';
                                                                                        }  ?> />11</option>
                                                            <option value="12" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '12') {
                                                                                            echo 'selected';
                                                                                        }  ?> />12</option>
                                                            <option value="13" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '13') {
                                                                                            echo 'selected';
                                                                                        }  ?> />13</option>
                                                            <option value="14" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '14') {
                                                                                            echo 'selected';
                                                                                        }  ?> />14</option>
                                                            <option value="15" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '15') {
                                                                                            echo 'selected';
                                                                                        }  ?> />15</option>
                                                            <option value="16" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '16') {
                                                                                            echo 'selected';
                                                                                        }  ?> />16</option>
                                                            <option value="17" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '17') {
                                                                                            echo 'selected';
                                                                                        }  ?> />17</option>
                                                            <option value="18" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '18') {
                                                                                            echo 'selected';
                                                                                        }  ?> />18</option>
                                                            <option value="19" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '19') {
                                                                                            echo 'selected';
                                                                                        }  ?> />19</option>
                                                            <option value="20" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '20') {
                                                                                            echo 'selected';
                                                                                        }  ?> />20</option>
                                                            <option value="21" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '21') {
                                                                                            echo 'selected';
                                                                                        }  ?> />21</option>
                                                            <option value="22" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '22') {
                                                                                            echo 'selected';
                                                                                        }  ?> />22</option>
                                                            <option value="23" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '23') {
                                                                                            echo 'selected';
                                                                                        }  ?> />23</option>
                                                            <option value="24" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '24') {
                                                                                            echo 'selected';
                                                                                        }  ?> />24</option>
                                                            <option value="25" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '25') {
                                                                                            echo 'selected';
                                                                                        }  ?> />25</option>
                                                            <option value="26" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '26') {
                                                                                            echo 'selected';
                                                                                        }  ?> />26</option>
                                                            <option value="27" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '27') {
                                                                                            echo 'selected';
                                                                                        }  ?> />27</option>
                                                            <option value="28" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '28') {
                                                                                            echo 'selected';
                                                                                        }  ?> />28</option>
                                                            <option value="29" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '29') {
                                                                                            echo 'selected';
                                                                                        }  ?> />29</option>
                                                            <option value="30" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '30') {
                                                                                            echo 'selected';
                                                                                        }  ?> />30</option>
                                                            <option value="31" size="2" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][3] == '31') {
                                                                                            echo 'selected';
                                                                                        }  ?> />31</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>Bulan :</p>
                                                        <select name="bln" style="width:100%; border: 1px solid #ced4da;border-radius: .25rem;padding: .375rem .75rem;">
                                                            <option value="Januari" size="12" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][4] == 'Januari') {
                                                                                                    echo 'selected';
                                                                                                } ?> />Januari</option>
                                                            <option value="Februari" size="12" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][4] == 'Februari') {
                                                                                                    echo 'selected';
                                                                                                } ?> />Februari</option>
                                                            <option value="Maret" size="12" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][4] == 'Maret') {
                                                                                                echo 'selected';
                                                                                            } ?> />Maret</option>
                                                            <option value="April" size="12" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][4] == 'April') {
                                                                                                echo 'selected';
                                                                                            } ?> />April</option>
                                                            <option value="Mei" size="12" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][4] == 'Mei') {
                                                                                                echo 'selected';
                                                                                            } ?> />Mei</option>
                                                            <option value="Juni" size="12" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][4] == 'Juni') {
                                                                                                echo 'selected';
                                                                                            } ?> />Juni</option>
                                                            <option value="Juli" size="12" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][4] == 'Juli') {
                                                                                                echo 'selected';
                                                                                            } ?> />Juli</option>
                                                            <option value="Agustus" size="12" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][4] == 'Agustus') {
                                                                                                    echo 'selected';
                                                                                                } ?> />Agustus</option>
                                                            <option value="September" size="12" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][4] == 'September') {
                                                                                                    echo 'selected';
                                                                                                } ?> />September</option>
                                                            <option value="Oktober" size="12" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][4] == 'Oktober') {
                                                                                                    echo 'selected';
                                                                                                } ?> />Oktober</option>
                                                            <option value="November" size="12" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][4] == 'November') {
                                                                                                    echo 'selected';
                                                                                                } ?> />November</option>
                                                            <option value="Desember" size="12" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][4] == 'Desember') {
                                                                                                    echo 'selected';
                                                                                                } ?> />Desember</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p>Tahun :</p>
                                                        <select name="thn" style="width:100%;  border: 1px solid #ced4da;border-radius: .25rem;padding: .375rem .75rem;">
                                                            <?php $thna = date("Y");
                                                            $rng = 23;
                                                            $thnb = $thna - $rng;
                                                            for ($x = $thnb; $x <= $thna; $x++) { ?>
                                                                <option value="<?php echo $x; ?>" size="4" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][5] == $x) {
                                                                                                                echo 'selected';
                                                                                                            } ?> /><?php echo $x; ?></option>
                                                            <?php }  ?>

                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Induk Keluarga</td>
                                            <td>:</td>
                                            <td colspan="4"><input type="text" id="nik" name="nik" <?php if (!empty($_SESSION['tempstep1'][6])) {
                                                                                                        echo 'value="' . $_SESSION['tempstep1'][6] . '"';
                                                                                                    } ?> class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Kartu Keluarga</td>
                                            <td>:</td>
                                            <td colspan="4"><input type="text" id="nokk" name="nokk" <?php if (!empty($_SESSION['tempstep1'][7])) {
                                                                                                            echo 'value="' . $_SESSION['tempstep1'][7] . '"';
                                                                                                        } ?> class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Kartu Indonesia Pintar</td>
                                            <td>:</td>
                                            <td colspan="4"><input type="text" id="kip" name="kip" <?php if (!empty($_SESSION['tempstep1'][16])) {
                                                                                                        echo 'value="' . $_SESSION['tempstep1'][16] . '"';
                                                                                                    } ?> class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td>:</td>
                                            <td>
                                                <select name="gender" class="form-control">
                                                    <option value="Laki-laki" size="4" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][8] == 'Laki-laki') {
                                                                                            echo 'selected';
                                                                                        } ?> />Laki-laki</option>
                                                    <option value="Perempuan" size="4" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][8] == 'Perempuan') {
                                                                                            echo 'selected';
                                                                                        } ?> />Perempuan</option>
                                                </select>
                                            </td>
                                            <td>No. Akta Kelahiran</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="akta" name="akta" <?php if (!empty($_SESSION['tempstep1'][9])) {
                                                                                                echo 'value="' . $_SESSION['tempstep1'][9] . '"';
                                                                                            } ?> class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td>:</td>
                                            <td colspan="4"><input type="text" id="agama" name="agama" <?php if (!empty($_SESSION['tempstep1'][10])) {
                                                                                                            echo 'value="' . $_SESSION['tempstep1'][10] . '"';
                                                                                                        } ?> class="form-control" required></td>
                                        </tr>
                                        <tr>
                                            <td>Tinggi Badan</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="tinggi" name="tinggi" <?php if (!empty($_SESSION['tempstep1'][11])) {
                                                                                                    echo 'value="' . $_SESSION['tempstep1'][11] . '"';
                                                                                                } ?> class="form-control" required>
                                            </td>
                                            <td>Berat Badan</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="berat" name="berat" <?php if (!empty($_SESSION['tempstep1'][12])) {
                                                                                                echo 'value="' . $_SESSION['tempstep1'][12] . '"';
                                                                                            } ?> class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bertato</td>
                                            <td>:</td>
                                            <td>
                                                <select name="tato" class="form-control">
                                                    <option value="Tidak Ada" size="4" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][13] == 'Tidak Ada') {
                                                                                            echo 'selected';
                                                                                        } ?> />Tidak Ada</option>
                                                    <option value="Ada" size="4" <?php if (!empty($_SESSION['tempstep1']) && $_SESSION['tempstep1'][13] == 'Ada') {
                                                                                        echo 'selected';
                                                                                    }  ?> />Ada</option>
                                                </select>
                                            </td>
                                            <td>Penyakit Kronis</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" id="penyakit" name="penyakit" <?php if (!empty($_SESSION['tempstep1'][14])) {
                                                                                                        echo 'value="' . $_SESSION['tempstep1'][14] . '"';
                                                                                                    } ?> class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Asal Sekolah</td>
                                            <td>:</td>
                                            <td colspan="4"><input type="text" id="skhasal" name="skhasal" <?php if (!empty($_SESSION['tempstep1'][15])) {
                                                                                                                echo 'value="' . $_SESSION['tempstep1'][15] . '"';
                                                                                                            } ?>class="form-control" required></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            <?php } ?>
            <div class="box-footer">
                <?php if (!empty($_GET['step']) && $_GET['step'] == '2') { ?>
                    <a href="./?page=isi-formulir" class="btn btn-danger pull-left">Sebelumnya</a>
                    <button type="submit" form="form-inpstep2" id="inpstep2" name="inpstep2" value="Selanjutnya" style="float:right;" class="btn btn-primary">Selanjutnya</button>
                <?php } else if (!empty($_GET['step']) && $_GET['step'] == '3') { ?>
                    <a href="./?page=isi-formulir&step=2" class="btn btn-danger pull-left">Sebelumnya</a>
                    <button type="submit" form="form-inpstep3" id="inpstep3" name="inpstep3" value="Selanjutnya" style="float:right;" class="btn btn-primary">Selanjutnya</button>
                <?php } else if (!empty($_GET['step']) && $_GET['step'] == '4') { ?>
                    <p>Periksa Kembali Data Diri Anda Pastikan Semua telah Lengkap!</p>
                    <a href="./?page=isi-formulir&step=3" class="btn btn-danger pull-left">Sebelumnya</a>
                    <button type="button" class="btn btn-warning" id="clearButton" style="margin-left:10px;">Clear Image</button>
                    <button type="submit" form="form-inpstep4" style="float:right;" class="btn btn-primary">Simpan</button>
                <?php } else { ?>
                    <button type="submit" form="form-inpstep1" id="inpstep1" name="inpstep1" value="Selanjutnya" style="float:right;" class="btn btn-primary">Selanjutnya</button>
                <?php } ?>
            </div>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->