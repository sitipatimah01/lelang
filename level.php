<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8">
        <title>Level</title>
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
    <center><h1>Halaman Level</h1></center>
        <?php 
        include "db.php";
        $db = new Database();

        $data = $db->getAll('level');
       
        ?>
     
        <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID level</th>
                    <th scope="col">Level</th> 
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data as $d): ?>
                    <tr>
                        <th scope="row"><?php echo $d['id_level'];?></th>
                        <td><?php echo $d['level'];?></td>
                        <td>
                            <a href="form_ubah_level.php?id=<?php echo $d['id_level']; ?>" class="btn btn-primary">Edit</a>

                            <a href="proses_hapus_level.php?id=<?php echo $d['id_level']; ?>"
                            class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>

<?php endforeach; ?>
  </tbody>
</table>
        </div>
      <center><a href="form_tambah_level.php" class="btn btn-info">Tambah!</a></center>

</body>
</html>