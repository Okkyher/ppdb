<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Tambah Gelombang Pendaftaran</h4>
        </div>
        <div class="modal-body">
            <form class="row">
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
            <button type="button" onclick="actAddGelombang();" class="btn btn-primary"> <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Save</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Close</button>
        </div>
    </div>
</div>