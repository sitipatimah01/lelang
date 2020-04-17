<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Halaman Register</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
            <style type="text/css">
                body{
                    background-image: url('latar5.jpg');
                }
            </style>
        </head>
        <br>
        <body class="container bg-info">
        <br>
        <br>
        <br>
            <div class="card  text-dark">
                <div class="card-header">
                    <h2>Form Register</h2>
                </div>
                <div class="card-body">
                    <form action="proses_register.php" method="POST">
                        <div class="form-group">
                            <label class="label-control">Nama</label> 
                            <input class="form-control" type="text" name="nama" placeholder="Masukkan nama anda..." required>
                        </div>
                        <div class="form-group">
                            <label class="label-control">Username</label> 
                            <input class="form-control" type="text" name="username" placeholder="Masukkan Username..." required>
                        </div>
                        <div class="form-group">
                            <label class="label-control">Password</label> 
                            <input class="form-control" type="password" name="password" placeholder="Masukkan password..." required>
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </div>
                        <div class="form-group">
                            <label class="label-control">Email</label>
                            <input class="form-control" type="text" name="email" placeholder="Masukkan email..." required>
                        </div>
                        <div class="form-group">
                        <label class="label-control">Level</label>
                        <select class="form-control" name="level">
                        <option>Administrator</option>
                        <option>Petugas</option>
                        </select>
                        
                        </div>
                        <center><button class="btn btn-success" type="submit">Register</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>
    </body>  
</html>