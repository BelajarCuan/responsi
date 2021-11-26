<!DOCTYPE html>
<html>
    <head>
    	<title>LOG IN</title>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@456&display=swap" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            body {
                font-family: 'Outfit', sans-serif;
                margin: 0;
                padding: 0;
                background-color: rgb(130, 162, 245);
                height: 100vh;
            }
            #login .container #login-row #login-column #login-box {
                margin-top: 40px;
                max-width: 600px;
                height: 440px;
                border: 20px solid rgb(31, 118, 156);
                background-color: #EAEAEA;
            }
            #login .container #login-row #login-column #login-box #login-form {
                padding: 30px;
            }
            #login .container #login-row #login-column #login-box #login-form #register-link {
                margin-top: -85px;
            }
        </style>
    </head>
    <body>
        <?php
           if (isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
              echo '<script type="text/javascript">
                window.onload = function () { alert("Login gagal username dan password salah");
                } </script>';
            }
            else if($_GET['pesan'] == "logout"){
              echo '<script type="text/javascript">
                window.onload = function () { alert("Anda telah berhasil logout");
                } </script>';
            }
            else if($_GET['pesan'] == "belum_login"){
              echo '<script type="text/javascript">
                window.onload = function () { alert("Anda harus login untuk mengakses halaman utama");
                } </script>';
            }
          }
        ?>
        <br><br>
<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="ceklogin.php" method="POST">
                            <h3 class="text-center text-info">Log In</h3>
                            <input type="hidden" name="nama_lengkap" value="<?php echo $hasil['nama_lengkap'];?>">
                            <div class="form-group">
                                <label for="username" class="text-info">Username :</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password :</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Log In">
                            </div>
                        </form>
                        <center>
                            <a style="font-size: 20px" class="nav-link" href="signup.php">Sign Up</a>
                        </center>
                    </div>
                    
                </div>
            </div>
        </div>
     </div>
</body>
</html>