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
        $lelang = $db->getById('lelang', ['id_lelang'=> $id]);

        foreach($lelang as $l):
       
        ?>

        <div class="container mt-5">

            <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form Ubah Lelang</h2>
                </div>
                <div class="card-body">
                    <form action="proses_ubah_lelang.php" method="POST">
                    <div class="Form-group" >
                    <label class="label-control">ID Lelang</label> 
                    <input class="form-control" type="number" name="id_lelang" placeholder="Id lelang" value="<?php echo $l['id_lelang'];?>"" readonly>    
                </div>
                    <div class="Form-group" >
                    <label class="label-control">ID Petugas</label> 
                    <select class="form-control" type="number" name="id_petugas" placeholder="ID Petugas">
                    <?php
                     $db = new Database();
                     $petugas = $db->getAll('petugas');
                     foreach ($petugas as $p):

                     ?>

                     <option value="<?php echo $p['id_petugas']; ?>"class="form-control"><?php echo $p['nama_petugas'];?></option>
                     <?php endforeach; ?>
                     </select>
                </div>
                <div class="form-group" >
                    <label class="label-control">ID Barang</label> 
                    <select name="id_barang" class="form-control">
                              <?php
                                 
                                  $db = new Database();
                                  $barang = $db->getAll('barang');
                                  foreach ($barang as $b):

                              ?>

                              <option value="<?php echo $b['id_barang']; ?>"class="form-control"><?php echo $b['nama_barang'];?></option>
                              <?php endforeach; ?>
                    </select>         
               </div>
                
                <div class="Form-group" >
                    <label class="label-control">Tanggal Lelang</label> 
                    <input class="form-control" type="date" name="tgl_lelang" placeholder="Tanggal Lelang" value="<?php echo $l['tgl_lelang'];?>">    
                </div>
                <div class="Form-group" >
                    <label class="label-control">Harga Akhir</label> 
                    <input class="form-control" type="number" name="harga_akhir" placeholder="Harga Akhir" value="<?php echo $l['harga_akhir'];?>">    
                </div>
                <div class="Form-group" >
                    <label class="label-control">Status</label> 
                    <input type="text" class="form-control" name="status" placeholder="Status" value="<?php echo $l['status'];?>">
                </div>
               <br>
                <button class="btn btn-success" type="submit">Ubah</button>   
            </form>

        </div>
        </div>
        </div>
        <?php endforeach; ?>
        </body>