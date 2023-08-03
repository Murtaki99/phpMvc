<div class="modal fade" id="addForm" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Form add New Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/student/create" method="post">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="enter fullname" required>
                    </div>
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="number" name="nim" class="form-control" placeholder="nomor induk mahasiswa" required>
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select class="form-control" name="jurusan" required>
                            <option class="text-muted" value="">pilih jurusan</option>
                            <option class="text-primary" value="S1-Teknik Informatika">S1-Teknik Informatika</option>
                            <option class="text-primary" value="S1-Sistem Informasi">S1-Sistem Informasi</option>
                            <option class="text-primary" value="D3-Teknik Komputer">D3-Teknik Komputer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tahun Angkatan</label>
                        <input type="number" name="angkatan" class="form-control" placeholder="tahun angkatan" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="save" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>