<?php $id = $_POST['id']; ?>
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Edit Gelombang Pendaftaran</h4>
        </div>
        <div class="modal-body">
            <form class="row">
                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" required="required">
                <div class="form-group col-md-12">
                    <label class="control-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required="required">
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">Dari</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="dari">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">Sampai</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="sampai">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" onclick="actEditGelombang();" class="btn btn-primary"> <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Save</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Close</button>
        </div>
    </div>
</div>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
    $(function() {
        //Date picker
        $('#dari').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
        //Date picker
        $('#sampai').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });

    var id = document.getElementById('id').value;
    $.ajax({
        url: 'include/action.php',
        method: 'POST',
        data: {
            aksi: 'view-gelombang',
            id: id,
        },
        success: function(result) {
            document.getElementById('nama').value = result.nama;
            document.getElementById('dari').value = result.dari;
            document.getElementById('sampai').value = result.sampai;
        }
    });

    async function actEditGelombang() {
        try {
            const id = document.getElementById('id').value;
            const nama = document.getElementById('nama').value;
            const dari = document.getElementById('dari').value;
            const sampai = document.getElementById('sampai').value;

            const response = await $.ajax({
                url: 'include/action.php',
                method: 'POST',
                data: {
                    aksi: 'edit-gelombang',
                    id: id,
                    nama: nama,
                    dari: dari,
                    sampai: sampai
                }
            });

            var pesan = response.message;
            var suk = response.success;

            // Assuming that your server responds with a JSON object
            if (response.success == true) {
                alert(pesan);
                $('#myModal').modal('hide');
                window.location = './?page=md-gelombang-reg';
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