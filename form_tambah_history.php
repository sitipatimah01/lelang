<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Tambah History Lelang</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body>

        <div class="container mt-5">

            <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form Tambah History</h2>
                </div>
                <div class="card-body">
                    <form action="proses_tambah_history.php" method="POST">
                <div class="form-group" >
                    <label class="label-control">ID User</label> 
                    <select name="id_user" class="form-control">
                              <?php
                                  include 'db.php';
                                  $db = new Database();
                                  $masyarakat = $db->getAll('masyarakat');
                                  foreach ($masyarakat as $m):

                              ?>

                              <option value="<?php echo $m['id_user']; ?>"class="form-control"><?php echo $m['nama_lengkap'];?></option>
                              <?php endforeach; ?>
                    </select>         
               </div>
                <div class="Form-group" >
                    <label class="label-control">ID Lelang</label> 
                    <select class="form-control" type="number" name="id_lelang" placeholder="Id lelang">
                    <?php
                     $db = new Database();
                     $lelang = $db->getAll('lelang');
                     foreach ($lelang as $l):

                     ?>

                     <option value="<?php echo $l['id_lelang']; ?>"class="form-control"><?php echo $l['id_lelang'];?></option>
                     <?php endforeach; ?>
                     </select>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Penawaran Harga</label> 
                    <input class="form-control" type="number" name="penawaran_harga" placeholder="penawaran harga">    
                </div>
               <br>
                <button class="btn btn-success" type="submit">Tambah</button>   
            </form>

        </div>
        </div>
        </div>
        </body>