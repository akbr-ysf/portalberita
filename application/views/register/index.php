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
    <title>Register | Portal Berita</title>
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
            <h5 class="card-header text-center">Register</h5>
            <div class="card-body">
                
                <form action="<?= base_url(); ?>register/validation" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" autocomplete="off">
                        <small class="form-text text-danger"><?= form_error('email'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Username</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <small class="form-text text-danger"><?= form_error('password'); ?></small>
                    </div>
                    <button type="submit" name="register" class="btn btn-primary">Register</button>
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