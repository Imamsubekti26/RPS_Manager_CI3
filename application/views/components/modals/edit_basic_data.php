<div class="modal fade" id="modal-change-basic-info" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Edit Informasi Dasar</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form>
        <div class="modal-body">
          <div class="row mb-3">
            <div class="col-4"><label>Semester</label></div>
            <div class="col-8"><input type="number" class="form-control" value="<?= $semester?>" name="semester"></div>
          </div>
          <div class="row mb-3">
            <div class="col-4"><label>Tahun</label></div>
            <div class="col-8"><input type="number" class="form-control" value="<?= $tahun?>" name="tahun"></div>
          </div>
          <div class="row mb-3">
            <div class="col-4"><label>Jumlah SKS</label></div>
            <div class="col-4"><input type="number" class="form-control" value="<?= $sks_teori?>" name="sks_teori"></div>
            <div class="col-4"><input type="number" class="form-control" value="<?= $sks_praktek?>" name="sks_praktek"></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>