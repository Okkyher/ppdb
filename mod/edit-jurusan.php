<?php
$idjur = $_POST['id'];
?>
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Edit Data Jurusan</h4>
        </div>
        <div class="modal-body">
            <form>
                <input type="hidden" id="idjur" name="idjur" value="<?php echo $idjur; ?>" required="required">
                <div class="form-group">
                    <label class="control-label">Nama Jurusan</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Jurusan" required="required">
                </div>
                <div class="form-group">
                    <label class="control-label">Kode Jurusan</label>
                    <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode Jurusan" required="required">
                </div>
                <div class="form-group">
                    <label class="control-label">Kuota</label>
                    <input type="number" class="form-control" id="tampung" name="tampung" min="1" value="1" placeholder="Kuota" required="required">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" onclick="actEditJurusan();" class="btn btn-primary"> <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Save</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Close</button>
        </div>
    </div>
</div>
<script>
    var idjur = document.getElementById('idjur').value;
    $.ajax({
        url: 'include/action.php',
        method: 'POST',
        data: {
            aksi: 'view-jurusan',
            id: idjur,
        },
        success: function(result) {
            document.getElementById('nama').value = result.nama;
            document.getElementById('kode').value = result.kode;
            document.getElementById('tampung').value = result.tampung;
        }
    });

    async function actEditJurusan() {
        try {
            const id = document.getElementById('idjur').value;
            const nama = document.getElementById('nama').value;
            const kode = document.getElementById('kode').value;
            const tampung = document.getElementById('tampung').value;

            const response = await $.ajax({
                url: 'include/action.php',
                method: 'POST',
                data: {
                    aksi: 'edit-jurusan',
                    id: id,
                    nama: nama,
                    kode: kode,
                    tampung: tampung
                }
            });

            var pesan = response.message;
            var suk = response.success;

            // Assuming that your server responds with a JSON object
            if (response.success == true) {
                alert(pesan);
                $('#myModal').modal('hide');
                window.location = './?page=md-jurusan';
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