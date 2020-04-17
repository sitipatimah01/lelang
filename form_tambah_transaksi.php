<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>halaman index</title>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <a class="navbar-brand" href="dashboard.php">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Index <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="galeri.php">Galeri<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about.php">About<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <br>
        <center>
        <img src="l.jpg" width="100">
        </center>
        <br>
        <center><h4><i> Blessing Auction</i></h4></center>
        <br>
    <div class="container mt-5">
    <form action="proses_tambah_transaksi.php" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                 <label>Nama Pelelang</label>
                 <input type="text" class="form-control" name="nama_pelelang" placeholder="Nama Pelelang">
             </div> 
             <div class="form-group col-md-6">
                 <label>Nama Barang</label>
                 <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
             </div>   
             <div class="form-group col-md-6">
                 <label>Harga Tawar</label>
                 <input type="number" class="form-control" name="harga_tawar" placeholder="Harga Tawar">
             </div>  
             <div class="form-group col-md-6">
                 <label>Jumlah Barang</label>
                 <input type="number" class="form-control" name="jumlah_barang"placeholder="Jumlah Barang">
             </div>    
            </div>  
          <center>  <a href="halaman_transaksi.php" class="btn btn-success">Tawar Barang</a> </center>
         </form> 
     </div>        
