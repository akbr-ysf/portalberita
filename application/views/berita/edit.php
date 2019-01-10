<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center mb-5">
        <h2>Edit berita</h2>
        <form class="col-12" action="" method="post">
            <input type="hidden" name="id" value="<?= $berita['id']; ?>">
            <input type="hidden" name="tanggal" value="<?= mdate($datestring, $time);?>">
            <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $berita['judul']; ?>">
                <small class="form-text text-danger"><?= form_error('judul'); ?></small>
            </div>
            <div class="form-group">
                <label for="isi">Isi Berita</label>
                <textarea type="text" class="form-control" id="isi" name="isi" rows="20"><?= $berita['isi']; ?></textarea>
                <small class="form-text text-danger"><?= form_error('isi'); ?></small>
            </div>
            <button type="submit" name="edit" class="btn btn-primary float-right ml-3">Edit Berita</button>
            <a href="<?= base_url(); ?>berita/index" onclick="return confirm('Yakin ingin keluar?');" class="btn btn-warning float-right">Batal</a>
        </form>
    </div>
</div>
