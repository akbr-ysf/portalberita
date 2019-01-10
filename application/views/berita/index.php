<div class="container h-100">
    <div class="row">
        <div class="col">
            <p style="font-size: 70px; margin-left: 2.7cm;">Daftar Berita</p>
        </div>
        <div class="col" style="margin-right: 2.7cm; margin-top: 1.19cm;">
            <form action="" method="post" class="float-right">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Berita.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="row h-100 justify-content-center align-items-center mb-5">
        <?php if( $this->session->flashdata('flash') ) :?>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Berita berhasil <strong><?= $this->session->flashdata('flash');?></strong>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <?php if( empty($berita)) : ?>
            <div class="alert alert-danger" role="alert">
                Tidak ada berita yang dapat ditemukan!
            </div>
        <?php endif; ?>

        <?php foreach($berita as $news) : ?>
            <div class="card mb-3">    
                <h5 class="card-header"><?= $news['judul']; ?></h5>
                <div class="card-body">
                    <h5 class="card-title"><?= $news['tanggal']; ?></h5>
                    <p class="card-text"><?= substr($news['isi'], 0, 200);?>...</p>
                    <a href="<?= base_url(); ?>berita/detail/<?= $news['id']; ?>" class="btn btn-primary btn-sm mr-2">Detail</a>
                    <a href="<?= base_url(); ?>berita/edit/<?= $news['id']; ?>" class="btn btn-warning btn-sm mr-2">Edit</a>
                    <a href="<?= base_url(); ?>berita/hapus/<?= $news['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus berita ini?')">Hapus</a>
                </div>
            </div>
        <?php endforeach; ?>

    </div> 
    <div class="row">
        <div class="col" style="margin-right: 2.7cm;">
            <a href="<?= base_url(); ?>berita/tambah" class="btn btn-primary float-right">Tambah Berita</a>
        </div>
    </div>
    <br><br><br>
</div>
