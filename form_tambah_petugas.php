<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Tambah Petugas</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body>

        <div class="container mt-5">

            <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form Tambah Petugas</h2>
                </div>
                <div class="card-body">
                    <form action="proses_tambah_petugas.php" method="POST">
                <div class="form-group">
                    <label class="label-control">id level</label> 
                    <select name="id_level" class="form-control">
                              <?php
                                  include 'db.php';
                                  $db = new Database();
                              $level = $db->getAll('level');
                              foreach ($level as $l):

                              ?>

                              <option value="<?php echo $l['id_level']; ?>"class="form-control"><?php echo $l['level'];?></option>
                              <?php endforeach; ?>
                    </select>         
               </div>
                <div class="Form-group" >
                    <label class="label-control">Nama Petugas</label> 
                    <input class="form-control" type="text" name="nama_petugas" placeholder="Nama Petugas">
                </div>
                <div class="Form-group" >
                    <label class="label-control">Username</label> 
                    <input class="form-control" type="text" name="username" placeholder="Username">    
                </div>
                <div class="form-group" >
                    <label class="label-control">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                     </div>
               <br>
                <button class="btn btn-success" type="submit">Tambah</button>   
            </form>

        </div>
        </div>
        </div>
        </body>