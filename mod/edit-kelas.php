<?php
$id = $_POST['id'];
?>
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Edit Data Kelas</h4>
        </div>
        <div class="modal-body">
            <form>
                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" required="required">
                <div class="form-group">
                    <label class="control-label">Nama Kelas</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Kelas" required="required">
                </div>
                <div class="form-group">
                    <label class="control-label">Kuota</label>
                    <input type="number" class="form-control" id="kuota" name="kuota" min="1" value="1" placeholder="Kuota" required="required">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" onclick="actEditKelas();" class="btn btn-primary"> <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Save</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Close</button>
        </div>
    </div>
</div>
<script>
    var id = document.getElementById('id').value;
    $.ajax({
        url: 'include/action.php',
        method: 'POST',
        data: {
            aksi: 'view-kelas',
            id: id,
        },
        success: function(result) {
            document.getElementById('nama').value = result.nama;
            document.getElementById('kuota').value = result.kuota;
        }
    });

    async function actEditKelas() {
        try {
            const id = document.getElementById('id').value;
            const nama = document.getElementById('nama').value;
            const kuota = document.getElementById('kuota').value;

            const response = await $.ajax({
                url: 'include/action.php',
                method: 'POST',
                data: {
                    aksi: 'edit-kelas',
                    id: id,
                    nama: nama,
                    kuota: kuota
                }
            });

            var pesan = response.message;
            var suk = response.success;

            // Assuming that your server responds with a JSON object
            if (response.success == true) {
                alert(pesan);
                $('#myModal').modal('hide');
                window.location = './?page=md-kelas';
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