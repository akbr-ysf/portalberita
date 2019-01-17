<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center mb-5">
        <div class="card mb-3">    
            <h5 class="card-header"><?= $user['email']; ?></h5>
            <div class="card-body">
                <h5 class="card-title"><?= $user['nama']; ?></h5>
                <!-- <p class="card-text"><?= substr($news['isi'], 0, 200);?>...</p>
                <a href="<?= base_url(); ?>berita/hapus/<?= $news['id']; ?>" class="btn btn-danger btn-sm float-right mr-3" onclick="return confirm('Yakin ingin menghapus berita ini?')">Hapus</a>
                <a href="<?= base_url(); ?>berita/edit/<?= $news['id']; ?>" class="btn btn-warning btn-sm float-right mr-2">Edit</a>
                <a href="<?= base_url(); ?>berita/detail/<?= $news['id']; ?>" class="btn btn-primary btn-sm float-right mr-2">Detail</a> -->
            </div>
        </div>
    </div>
</div>