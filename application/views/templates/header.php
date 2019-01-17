<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="icon" href="<?= base_url(); ?>assets/img/pb_logo.png" type="image/gif" class="logo">

        <!-- css -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
        <title><?=$judul;?></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
            <div class="container">
                <img src="<?= base_url(); ?>assets/img/pb_logo.png" style="width: 30px; height: 27px;">
                <a class="navbar-brand">Portal Berita</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="<?= base_url(); ?>home">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>berita">Berita</a>
                        <a class="nav-item nav-link" href="<?= base_url(); ?>profil">Profil</a>
                    </div>
                </div>
                <?php echo $this->session->userdata("email"); ?>
                <a class="btn btn-danger float-right ml-3" href="<?= base_url(); ?>login/logout">Logout</a>
            </div>
        </nav>
        