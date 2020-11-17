<?php include_once '../sistem/koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Registrasi</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fonts.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
  
  </head>
  <body class="bg-light">
    <div class="container-fluid mt-5">
       <div class="row mt-2">
            <div class="col-sm-12 col-md-8 col-lg-4 mx-auto login-logo text-center mb-3">
                <img src="../assets/img/loginlogo.png" alt="Logo" class="w-75">
            </div>
        </div>    
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>

    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-4 mx-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="outter-form-login">
                            <div class="logo-login">
                                <em class="glyphicon glyphicon-user"></em>
                            </div>
                                <form action="sistem/act_register.php" method="post">
                                <h3 class="text-center title-login">Registrasi</h3>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nickname" placeholder="Nama">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" name="repassword" placeholder="Re-Password">
                                    </div>

                                   
                                    <input type="submit" class="btn btn-primary btn-block shadow" value="REGISTER" />
                                    
                                    <div class="text-center forget">
                                        <p>   </p>
                                        <p>   </p>
                                        <p>   </p>
                                        <p>Back To <a href="./login.php">Login</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>    
                </div>        
        </div>    
   
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>