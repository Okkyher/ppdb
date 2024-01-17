<?php
$id = $_POST['id'];
?>
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Edit Jadwal Test</h4>
        </div>
        <div class="modal-body">
            <form class="row">
                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" required="required">

                <div class="form-group col-md-4">
                    <label class="control-label">Pilih Ruangan</label>
                    <select id="id_ruangan" name="id_ruangan" class="form-control" required>
                        <?php foreach ($kelas_db as $kel) { ?>
                            <option value="<?php echo $kel['id']; ?>"><?php echo $kel['nama']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Sesi</label>
                    <input type="number" class="form-control" id="sesi" name="sesi" min="1" value="1" placeholder="Sesi" required="required">
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label">Tanggal</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="tanggal" name="tanggal">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">Jam</label>
                    <input type="text" class="form-control" id="jam" name="jam" placeholder="10.00 - 12.00" required="required">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" onclick="acteditJadwal();" class="btn btn-primary"> <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Save</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Close</button>
        </div>
    </div>
</div>
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
    $(function() {
        var id = document.getElementById('id').value;
        var selectField = document.getElementById('id_ruangan');

        $.ajax({
            url: 'include/action.php',
            method: 'POST',
            data: {
                aksi: 'view-jadwal',
                id: id,
            },
            success: function(result) {
                var selectedValue = result.id_ruangan;
                $(selectField).val(selectedValue);
                document.getElementById('sesi').value = result.sesi;
                document.getElementById('tanggal').value = result.tanggal;
                document.getElementById('jam').value = result.jam;
            }
        });

        //Date picker
        $('#tanggal').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });

    });
    async function acteditJadwal() {
        try {
            const id = document.getElementById('id').value;
            const id_ruangan = document.getElementById('id_ruangan').value;
            const sesi = document.getElementById('sesi').value;
            const tanggal = document.getElementById('tanggal').value;
            const jam = document.getElementById('jam').value;

            const response = await $.ajax({
                url: 'include/action.php',
                method: 'POST',
                data: {
                    aksi: 'edit-jadwal',
                    id: id,
                    id_ruangan: id_ruangan,
                    sesi: sesi,
                    tanggal: tanggal,
                    jam: jam
                }
            });

            var pesan = response.message;
            var suk = response.success;

            // Assuming that your server responds with a JSON object
            if (response.success == true) {
                alert(pesan);
                $('#myModal').modal('hide');
                window.location = './?page=md-jadwal-tes';
            } else {
                alert(pesan);
                $('#myModal').modal('hide');
            }
        } catch (error) {
            console.error('An error occurred during the login request:', error);
            alert('An error occurred. Please try again later.');
        }
    }
</script>