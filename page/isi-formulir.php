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
            <li class="active">Data Diri</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Isi Formulir</h3>

                <!-- <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>NISN SMP/MTS</td>
                                    <td>:</td>
                                    <td colspan="4"><input type="text" id="nisn" name="nisn" value="1234567" class="form-control" readonly=""></td>
                                </tr>
                                <tr>
                                    <td>Program Keahlian</td>
                                    <td>:</td>
                                    <td colspan="4">
                                        <select name="jurusan" class="form-control" required="">
                                            <option selected="" disabled="">-Pilih Jurusan-</option>
                                            <option value="Program Keahlian Teknologi Farmasi" size="4">Program Keahlian Teknologi Farmasi</option>

                                            <option value="Program Keahlian Teknik Laboratorium Medik" size="4">Program Keahlian Teknik Laboratorium Medik</option>

                                            <option value="Program Keahlian Teknik Mekanik Industri" size="4">Program Keahlian Teknik Mekanik Industri</option>

                                            <option value="Program Keahlian Animasi" size="4">Program Keahlian Animasi</option>

                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama Calon Siswa</td>
                                    <td>:</td>
                                    <td colspan="4"><input type="text" id="nama" name="nama" class="form-control" required=""></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>:</td>
                                    <td colspan="4"><input type="text" id="tempatlhr" name="tempatlhr" class="form-control" required=""></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td colspan="4">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>Tanggal :</p>
                                                <select name="tgl" style="width:100%; border: 1px solid #ced4da;border-radius: .25rem;padding: .375rem .75rem;">
                                                    <option value="01" size="2">01</option>
                                                    <option value="02" size="2">02</option>
                                                    <option value="03" size="2">03</option>
                                                    <option value="04" size="2">04</option>
                                                    <option value="05" size="2">05</option>
                                                    <option value="06" size="2">06</option>
                                                    <option value="07" size="2">07</option>
                                                    <option value="08" size="2">08</option>
                                                    <option value="09" size="2">09</option>
                                                    <option value="10" size="2">10</option>
                                                    <option value="11" size="2">11</option>
                                                    <option value="12" size="2">12</option>
                                                    <option value="13" size="2">13</option>
                                                    <option value="14" size="2">14</option>
                                                    <option value="15" size="2">15</option>
                                                    <option value="16" size="2">16</option>
                                                    <option value="17" size="2">17</option>
                                                    <option value="18" size="2">18</option>
                                                    <option value="19" size="2">19</option>
                                                    <option value="20" size="2">20</option>
                                                    <option value="21" size="2">21</option>
                                                    <option value="22" size="2">22</option>
                                                    <option value="23" size="2">23</option>
                                                    <option value="24" size="2">24</option>
                                                    <option value="25" size="2">25</option>
                                                    <option value="26" size="2">26</option>
                                                    <option value="27" size="2">27</option>
                                                    <option value="28" size="2">28</option>
                                                    <option value="29" size="2">29</option>
                                                    <option value="30" size="2">30</option>
                                                    <option value="31" size="2">31</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Bulan :</p>
                                                <select name="bln" style="width:100%; border: 1px solid #ced4da;border-radius: .25rem;padding: .375rem .75rem;">
                                                    <option value="Januari" size="12">Januari</option>
                                                    <option value="Februari" size="12">Februari</option>
                                                    <option value="Maret" size="12">Maret</option>
                                                    <option value="April" size="12">April</option>
                                                    <option value="Mei" size="12">Mei</option>
                                                    <option value="Juni" size="12">Juni</option>
                                                    <option value="Juli" size="12">Juli</option>
                                                    <option value="Agustus" size="12">Agustus</option>
                                                    <option value="September" size="12">September</option>
                                                    <option value="Oktober" size="12">Oktober</option>
                                                    <option value="November" size="12">November</option>
                                                    <option value="Desember" size="12">Desember</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Tahun :</p>
                                                <select name="thn" style="width:100%; border: 1px solid #ced4da;border-radius: .25rem;padding: .375rem .75rem;">
                                                    <option value="2001" size="4">2001</option>
                                                    <option value="2002" size="4">2002</option>
                                                    <option value="2003" size="4">2003</option>
                                                    <option value="2004" size="4">2004</option>
                                                    <option value="2005" size="4">2005</option>
                                                    <option value="2006" size="4">2006</option>
                                                    <option value="2007" size="4">2007</option>
                                                    <option value="2008" size="4">2008</option>
                                                    <option value="2009" size="4">2009</option>
                                                    <option value="2010" size="4">2010</option>
                                                    <option value="2011" size="4">2011</option>
                                                    <option value="2012" size="4">2012</option>
                                                    <option value="2013" size="4">2013</option>
                                                    <option value="2014" size="4">2014</option>
                                                    <option value="2015" size="4">2015</option>
                                                    <option value="2016" size="4">2016</option>
                                                    <option value="2017" size="4">2017</option>
                                                    <option value="2018" size="4">2018</option>
                                                    <option value="2019" size="4">2019</option>
                                                    <option value="2020" size="4">2020</option>
                                                    <option value="2021" size="4">2021</option>
                                                    <option value="2022" size="4">2022</option>
                                                    <option value="2023" size="4">2023</option>
                                                    <option value="2024" size="4">2024</option>

                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nomor Induk Keluarga</td>
                                    <td>:</td>
                                    <td colspan="4"><input type="text" id="nik" name="nik" class="form-control" required=""></td>
                                </tr>
                                <tr>
                                    <td>Nomor Kartu Keluarga</td>
                                    <td>:</td>
                                    <td colspan="4"><input type="text" id="nokk" name="nokk" class="form-control" required=""></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>
                                        <select name="gender" class="form-control">
                                            <option value="Laki-laki" size="4">Laki-laki</option>
                                            <option value="Perempuan" size="4">Perempuan</option>
                                        </select>
                                    </td>
                                    <td>No. Akta Kelahiran</td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" id="akta" name="akta" class="form-control" required="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>:</td>
                                    <td colspan="4"><input type="text" id="agama" name="agama" class="form-control" required=""></td>
                                </tr>
                                <tr>
                                    <td>Tinggi Badan</td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" id="tinggi" name="tinggi" class="form-control" required="">
                                    </td>
                                    <td>Berat Badan</td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" id="berat" name="berat" class="form-control" required="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bertato</td>
                                    <td>:</td>
                                    <td>
                                        <select name="tato" class="form-control">
                                            <option value="Tidak Ada" size="4">Tidak Ada</option>
                                            <option value="Ada" size="4">Ada</option>
                                        </select>
                                    </td>
                                    <td>Penyakit Kronis</td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" id="penyakit" name="penyakit" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Asal Sekolah</td>
                                    <td>:</td>
                                    <td colspan="4"><input type="text" id="skhasal" name="skhasal" class="form-control" required=""></td>
                                </tr>
                                <tr>

                                    <td colspan="6">
                                        <!--<a href="2" id="inpstep1" style="float:right;" class="btn btn-primary">Selanjutnya</a>-->
                                        <button type="submit" id="inpstep1" name="inpstep1" value="Selanjutnya" style="float:right;" class="btn btn-primary">Selanjutnya</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">

            </div>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->