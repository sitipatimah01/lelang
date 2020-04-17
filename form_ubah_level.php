<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Ubah Level</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body>

        <?php 
        include "db.php";

        $id = $_GET['id'];
        $db = new Database();
        $level = $db->getById('level', ['id_level'=> $id]);

        foreach($level as $l):
       
        ?>

        <div class="container">
            <div class="card bg-secondary text-light">  
                <div class="card-header">
                    <h2>Form Ubah Level</h2>
                </div>
                <div class="card-body">
                    <form action="proses_ubah_level.php" method="POST">
                        <div class="form-group">
                            <label class="label-control">ID Level</label> 
                            <input class="form-control" type="number" name="id_level" placeholder="ID Level"  value="<?php echo $l['id_level']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label class="label-control">Level</label> 
                            <input class="form-control" name="level" value="<?php echo $l['level']; ?>">
                        </div>
                        <br>
                        <button class="btn btn-success" type="submit">Ubah</button>   
                    </form>
                </div>
            </div>
        </div>


        <?php endforeach; ?>
        </body>
        </html>