<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>tambah barang</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body>

        <div class="container mt-5">

            <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form Tambah barang</h2>
                </div>
                <div class="card-body">
                    <form action="proses_tambah_barang.php" method="POST">
                <div class="form-group">
                    <label class="label-control">Nama barang</label> 
                    <input class="form-control" type="text" name="nama_barang" placeholder="Nama barang">
                </div>
                <div class="Form-group" >
                    <label class="label-control">tgl</label> 
                    <input class="form-control" type="date" name="tgl" placeholder="tgl">
                </div>
                <div class="Form-group" >
                    <label class="label-control">harga awal</label> 
                    <input class="form-control" type="number" name="harga_awal" placeholder="harga_awal">    
                </div>
                <div class="form-group" >
                    <label class="label-control">deskripsi barang</label>
                    <textarea class="form-control" name="deskripsi_barang" placeholder="deskripsi barang" cols="30" rows="10"></textarea>
                     </div>
               <br>
                <button class="btn btn-success" type="submit">Tambah</button>   
            </form>

        </div>
        </div>
        </div>
        </body>