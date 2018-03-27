<?php
session_start();
if (isset($_SESSION["gagal"])) {
    if ($_SESSION["gagal"] >= 3) {
        echo'<h1><center> Mohon maaf anda di blokir </center></h1>';
        exit();
    }
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>TUGAS PROWEB4</title>
        <link rel="icon" href="asset/images/favicon.ico">
        <link rel="stylesheet"href="asset/css/bootstrap.css">
        <link rel="stylesheet"href="asset/css/floating-labels.css">
        <style>
            body{ background-image: url("33.jpg");
                  background-repeat: no-repeat;
                  background-position: center;
                  background-size: 100%;}
            </style>
            <script>
                window.setTimeout(function () {
                    $(".alert").fadeTo(500, 0).slideUp(500, function () {
                        $(this).remove();
                    });

                }, 3000);


            </script>
        </head>
        <body>
            <form id="frm01" name="frm01" method="POST" action="login.php" class="form-signin">
            <div class="text-center mb-4">
                <img class="mb-4" width="72" height="72" src="asset/images/images.jpg" >
                <h1>Welcome</h1>
            </div>

            <?php
            if (isset($_SESSION["gagal"])) {
                if ($_SESSION["gagal"] < 3) {
                    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Gagal login yang ke-' . $_SESSION["gagal"] . '....!!!!
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
                }
            }
            ?>
            <div class="form-label-group">
                <input name="inEmail" class="form-control" type="email" id="inEmail" placeholder="Email Address" autofocus="yes" autocomplete="no" required="yes">
                <label for="inEmail">Email Address</label>
            </div>
            <div class="form-label-group">
                <input class="form-control" type="password" name="inPassword" id="inPassword" placeholder="Password" required="yes">
                <label for="inPassword">Password</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox">Remember me..?
                </label>
            </div>
            <button  type="submit" class=" btn btn-lg btn-success btn-block" data-toggle="modal" data-target="#ModalKu">Sign In</button>
        </form>
        <div class="modal fade" id="ModalKu" tabindex="-1" role="dialog" aria-labelledby="DialogModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel01">
                            Peringatan!
                        </h5> 
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Username dan Password diisi yang sesuai</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/popper.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>
    </body>
</html>
