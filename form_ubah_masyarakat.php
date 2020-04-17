<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Ubah Lokal</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body>

        <?php 
        include "db.php";

        $id = $_GET['id'];
        $db = new Database();
        $masyarakat = $db->getById('masyarakat', ['id_user'=> $id]);

        foreach($masyarakat as $m):
       
        ?>

        <div class="container">
        <div class="card bg-secondary text-light">  
                <div class="card-header">
                    <h2>Form Ubah Masyarakat</h2>
                </div>
                <div class="card-body">
                    <form action="proses_ubah_masyarakat.php" method="POST">
                    <div class="form-group">
                    <label class="label-control">ID User</label> 
                    <input class="form-control" type="number" name="id_user" placeholder="ID User"  value="<?php echo $m['id_user']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label-control">Nama Lengkap</label> 
                    <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama Lengkap"  value="<?php echo $m['nama_lengkap']; ?>">
                </div>
                <div class="Form-group" >
                    <label class="label-control">Username</label> 
                    <input class="form-control" type="text" name="username" placeholder="username"  value="<?php echo $m['username']; ?>">
                </div>
                <div class="Form-group" >
                    <label class="label-control">Password</label> 
                    <input class="form-control" type="text" name="password" placeholder="password"  value="<?php echo $m['password']; ?>">
                </div>
                <div class="form-group" >
                    <label class="label-control">Telp</label>
                    <input class="form-control" type="number" name="telp" placeholder="telp"  value="<?php echo $m['telp']; ?>">
                </div>
               <br>
                <button class="btn btn-success" type="submit">Ubah</button>   
            </form>

        </div>
        </div>
        </div>
        </div>

        <?php endforeach; ?>
        </body>
        </html>