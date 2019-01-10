<div class="container h-100">
    <div>
        <p class="judul"><?= $berita['judul']; ?></p>
        <p class="text-muted font-weight-bold">Diterbitkan <?= $berita['tanggal']; ?></p>
        <p class="text-body"><?= $berita['isi']; ?></p>
        <a href="<?= base_url(); ?>berita" class="btn btn-primary float-right mb-5">Kembali</a>     
    </div>
</div>