<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="<?= base_url(); ?>assets/img/pb_logo.png" type="image/gif" class="logo">
    <!-- css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <title>Verifikasi | Portal Berita</title>
    <style>
        body {
	        background-image : url("<?= base_url(); ?>assets/img/pb_logo.png");
            background-repeat: repeat;
            background-size: 4%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
    <?php if( $this->session->flashdata('message'))
        {
            echo '
            <div class="alert alert-success" style="margin-left: 8cm;">'.$this->session->flashdata("message").'</div>
            ';
        }
    ?>
        <div class="card" style="margin-left: 9.5cm; width: 400px;">
            <h5 class="card-header text-center">Verifikasi akun anda</h5>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="verifikasi">Masukkan kode verifikasi</label>
                        <input type="text" class="form-control" id="verifikasi" name="verifikasi" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary">Verifikasi</button>
                </form>    
            </div>
        </div>    
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>