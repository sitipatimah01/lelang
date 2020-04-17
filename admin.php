<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
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
           
            <a href="logout.php" <span class="btn btn-success mr-3 text-light">Logout</a>
        </div>
        </nav>
        <div class="wrap">
            <div class="side">
                <div class="sidebar text-light">
                    <br>
                    <center><h4> LELANG </h4></center>
                    <ul>
                   <li> <a href = "barang.php" class="text-light">BARANG</a> </li> 
                    <br>
                   <li> <a href = "masyarakat.php" class="text-light">MASYARAKAT</a></li>
                    <br>
                   <li> <a href = "petugas.php" class="text-light">PETUGAS</a></li> 
                    <br>
                   <li> <a href = "level.php" class="text-light">LEVEL</a></li>
                    <br>
                   <li> <a href = "history_lelang.php" class="text-light">HISTORY LELANG</a> </li> 
                    <br>
                   <li> <a href = "lelang.php" class="text-light">LELANG</a></li>
                    <br>
                    <li> <a href = "contoh2.php" class="text-light">TRANSAKSI LELANG</a></li>
                    <br>
                    
                  
            </ul>        
            </div>
                <center>
				<h1>Halaman Admin</h1>
                    <h2><i> Blessing Auction</i></h2>
                    <img src="logo.jpg" width="150">
					
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<br/>
	<br/>
 
                    </center>
                </div>
            </div>
            <div class="footer">
                <center><p><i>Copyright Blessingauction.id 2020</i></p></center>
        </div>
        </div>
 


	</body>
</html>