<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>form lokal</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body>

        <div class="container mt-5">

            <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form Tambah Masyarakat</h2>
                </div>
                <div class="card-body">
                    <form action="proses_tambah_masyarakat.php" method="POST">
                <div class="form-group">
                    <label class="label-control">Nama Lengkap</label> 
                    <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap">
                </div>
                <div class="Form-group" >
                    <label class="label-control">Username</label> 
                    <input class="form-control" type="text" name="username" placeholder="Username">
                </div>
                <div class="Form-group" >
                    <label class="label-control">Password</label> 
                    <input class="form-control" type="password" name="password" placeholder="Password">    
                </div>
                <div class="form-group" >
                    <label class="label-control">Telp</label>
                    <input class="form-control" type="number" name="telp" placeholder="Telp">
                     </div>
               <br>
                <button class="btn btn-success" type="submit">Tambah</button>   
            </form>

        </div>
        </div>
        </div>
        </body>