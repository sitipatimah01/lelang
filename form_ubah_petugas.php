<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Ubah Petugas</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body>
        <?php 
        include "db.php";

        $id = $_GET['id'];
        $db = new Database();
        $petugas = $db->getById('petugas', ['id_petugas'=> $id]);

        foreach($petugas as $p):
       
        ?>


        <div class="container mt-5">

            <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form Ubah Petugas</h2>
                </div>
                <div class="card-body">
                    <form action="proses_ubah_petugas.php" method="POST">
                    <div class="Form-group" >
                    <label class="label-control">id petugas</label> 
                    <input class="form-control" type="number" name="id_petugas" placeholder="id_petugas" value="<?php echo $p['id_petugas']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label-control">id level</label> 
                    <select name="id_level" class="form-control">
                              <?php
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
                    <input class="form-control" type="text" name="nama_petugas" placeholder="Nama Petugas" value="<?php echo $p['nama_petugas']; ?>">
                </div>
                <div class="Form-group" >
                    <label class="label-control">Username</label> 
                    <input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo $p['username']; ?>">    
                </div>
                <div class="form-group" >
                    <label class="label-control">Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password" value="<?php echo $p['password']; ?>">
                     </div>
               <br>
                <button class="btn btn-success" type="submit">Ubah</button>   
            </form>

        </div>
        </div>
        </div>
                              <?php endforeach; ?>
        </body>