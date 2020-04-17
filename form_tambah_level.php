<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Level</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
        </head>
        <body>

        <div class="container mt-5">

            <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form Tambah Level</h2>
                </div>
                <div class="card-body">
                    <form action="proses_tambah_level.php" method="POST">
                <div class="form-group">
                    <label class="label-control">Level</label> 
                    <select class="form-control" name="level">
                        <option>Administrator</option>
                        <option>Petugas</option>
                    </select>
                </div>
                <br>
               <br>
                <button class="btn btn-success" type="submit">Tambah</button>   
            </form>

        </div>
        </div>
        </div>
        </body>