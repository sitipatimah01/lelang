<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Ubah Barang</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body>

        <?php 
        include "db.php";

        $id = $_GET['id'];
        $db = new Database();
        $barang = $db->getById('contoh', ['id_transaksi'=> $id]);

        foreach($barang as $b):
       
        ?>

        <div class="container">
        <div class="card bg-secondary text-light">  
                <div class="card-header">
                    <h2>Form Transaksi</h2>
                </div>
                <div class="card-body">
                    <form action="proses_transaksi.php" method="POST">
               
                <div class="form-group">
                    <label class="label-control">Nama Lengkap</label> 
                    <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama lengkap"  value="<?php echo $b['nama_lengkap']; ?>">
                </div>
                <div class="form-group">
                    <label class="label-control">Nama Barang</label> 
                    <input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang"  value="<?php echo $b['nama_barang']; ?>">
                </div>
                <div class="Form-group" >
                    <label class="label-control">Harga Awal</label> 
                    <input class="form-control" type="number" name="harga_awal" placeholder="Harga Awal"  value="<?php echo $b['harga_awal']; ?>">
                </div>
                <div class="form-group">
                    <label class="label-control">harga Tawar</label> 
                    <input class="form-control" type="number" name="harga_tawar" placeholder="harga tawar"  value="<?php echo $b['harga_tawar']; ?>">
                </div>
               <br>
                <button class="btn btn-success" type="submit">Lelang</button>   
            </form>
            </div>
        </div>
        </div>
        </div>
        </div>

        <?php endforeach; ?>
        </body>
        </html>