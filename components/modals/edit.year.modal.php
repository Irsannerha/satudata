<!-- Modal Edit -->
<div class="modal fade" id="editModal<?php echo $id_tahun; ?>" tabindex="-1" role="dialog"
    aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data Tahun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="action/tahun/add.php" method="POST">
                    <div class="form-group">
                        <label for="nama_opd<?php echo $id_tahun; ?>">ID Tahun</label>
                        <input type="text" class="form-control" id="nama_opd<?php echo $id_tahun; ?>"
                            value="<?php echo $id_tahun; ?>">
                    </div>
                    <div class="form-group">
                        <label for="tahun<?php echo $tahun; ?>">Tahun</label>
                        <input type="text" class="form-control" id="tahun<?php echo $tahun; ?>"
                            value="<?php echo $tahun; ?>">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" name="edit-tahun" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
