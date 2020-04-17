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
        $barang = $db->getById('barang', ['id_barang'=> $id]);

        foreach($barang as $b):
       
        ?>

        <div class="container">
        <div class="card bg-secondary text-light">  
                <div class="card-header">
                    <h2>Form Ubah Barang</h2>
                </div>
                <div class="card-body">
                    <form action="proses_ubah_barang.php" method="POST">
                    <div class="form-group">
                    <label class="label-control">id_barang</label> 
                    <input class="form-control" type="number" name="id_barang" placeholder="ID Barang"  value="<?php echo $b['id_barang']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="label-control">Nama Barang</label> 
                    <input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang"  value="<?php echo $b['nama_barang']; ?>">
                </div>
                <div class="Form-group" >
                    <label class="label-control">Tgl</label> 
                    <input class="form-control" type="date" name="tgl" placeholder="tgl"  value="<?php echo $b['tgl']; ?>">
                </div>
                <div class="Form-group" >
                    <label class="label-control">Harga Awal</label> 
                    <input class="form-control" type="number" name="harga_awal" placeholder="Harga Awal"  value="<?php echo $b['harga_awal']; ?>">
                </div>
                <div class="form-group" >
                    <label class="label-control">Deskripsi barang</label>
                    <textarea class="form-control" type="text" name="deskripsi_barang" placeholder="deskripsi" cols="30" rows="10" ><?php echo $b['deskripsi_barang']; ?></textarea>
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