<!DOCTYPE html>
<html>
    <head>
    	<title>SIGN UP</title>
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
            margin-top: 50px;
            max-width: 600px;
            height: 600px;
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
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="inputpetugas.php" method="post">
                            <h3 class="text-center text-info"><b>SIGN UP</b></h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Nama Lengkap:</label><br>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">No Telepon:</label><br>
                                <input type="text" name="no_tlp" id="no_tlp" class="form-control" placeholder="Masukkan No Telepon">
                            </div>
                            <div class="form-group">
                                <center>
                                    <input type="submit" name="submit" class="btn btn-info btn-md" value="Sign Up">
                                </center>
                            </div>
                        </form>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</body>
</html>