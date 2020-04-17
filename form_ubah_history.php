<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Ubah History Lelang</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body>
        <?php 
        include "db.php";

        $id = $_GET['id'];
        $db = new Database();
        $history_lelang = $db->getById('history_lelang', ['id_history_lelang'=> $id]);

        foreach($history_lelang as $h):
       
        ?>

        <div class="container mt-5">

            <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form Ubah History</h2>
                </div>
                <div class="card-body">
                    <form action="proses_ubah_history.php" method="POST">
                    <div class="Form-group" >
                    <label class="label-control">ID History Lelang</label> 
                    <input class="form-control" type="number" name="id_history_lelang" placeholder="ID History Lelang"  value="<?php echo $h['id_history_lelang']; ?>" readonly>    
                </div>
                <div class="form-group" >
                    <label class="label-control">ID User</label> 
                    <select name="id_user" class="form-control">
                              <?php
                                  $db = new Database();
                                  $masyarakat = $db->getAll('masyarakat');
                                  foreach ($masyarakat as $m):

                              ?>

                              <option value="<?php echo $m['id_user']; ?>"class="form-control"><?php echo $m['nama_lengkap'];?></option>
                              <?php endforeach; ?>
                    </select>         
               </div>
                <div class="Form-group" >
                    <label class="label-control">Id lelang</label> 
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
                    <input class="form-control" type="number" name="penawaran_harga" placeholder="penawaran harga"  value="<?php echo $h['penawaran_harga']; ?>">    
                </div>
               <br>
                <button class="btn btn-success" type="submit">Ubah</button>   
            </form>

        </div>
        </div>
        </div>
        <?php endforeach; ?>
        </body>