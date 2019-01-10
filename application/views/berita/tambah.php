<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center mb-5">
        <form class="col-12" action="" method="post">
            <input type="hidden" name="tanggal" value="<?= mdate($datestring, $time);?>">
            <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input type="text" class="form-control" id="judul" name="judul">
            </div>
            <div class="form-group">
                <label for="isi">Isi Berita</label>
                <textarea type="text" class="form-control" id="isi" name="isi" rows="20"></textarea>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right ml-3">Terbitkan Berita</button>
            <a href="<?= base_url(); ?>berita/index" onclick="return confirm('Yakin ingin keluar?');" class="btn btn-warning float-right">Batal</a>
        </form>
    </div>
</div>
