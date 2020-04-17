<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        <style type="text/css">
            body{
                background-image: url('latar5.jpg');
            }
        </style>
    </head>
    <body class="container mt-5">
    <br>
    <br>
        <div class="card text-dark">
            <div class="card-header">
                <h2>Form Login</h2>
            </div>
            <div class="card-body">
                <form action="proses_login.php" method="POST">
                    <div class="form-group">
                        <label class="label-control">Username</label> 
                        <input class="form-control" type="text" name="username" placeholder="Masukkan username..." required>
                    </div>
                    <div class="form-group">
                        <label class="label-control">Password</label> 
                        <input class="form-control" type="password" name="password" placeholder="Masukkan password..." required>
                        <span class="glyphicon glyphicon-eye-open"></span>
                    </div>
                    <button class="btn btn-success" type="submit">Login</button>
                </form>
            </div>
        </div>
    <br>
    <h5>Jika belum mempunyai akun klik <a href="register.php" class="btn btn-warning">Halaman Register</a> </h5>

        <script src="bootstrap-4.3.1-dist/js/jquery.min.js"></script>
        <script src="bootstrap-4.3.1-dist/js/pooper.min.js"></script>
        <script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
    </body>  
</html>
