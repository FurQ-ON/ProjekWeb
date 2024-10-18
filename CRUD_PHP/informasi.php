<?php
include 'database.php';
$db = new Database();
$id = $_GET['id'];
$detail = $db->editData($id);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Informasi User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .card {
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      .card-body {
        padding: 20px;
      }
      .img-fluid {
        border-radius: 10px;
        object-fit: cover;
      }
    </style>
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="text-center mb-4">Detail Informasi User</h1>
      <hr>

      <?php foreach ($detail as $dataUser) { ?>
      <div class="card mb-5 mx-auto shadow" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 text-center p-2">
            <img src="uploads/<?php echo $dataUser['foto']; ?>" class="img-fluid rounded-start" alt="Foto Profil">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title text-primary"><?php echo $dataUser['nama']; ?></h5>
              <p class="card-text">
                <strong>Alamat:</strong> <?php echo $dataUser['alamat']; ?><br>
                <strong>No HP:</strong> <?php echo $dataUser['nohp']; ?><br>
                <strong>Kelas:</strong> <?php echo $dataUser['kelas']; ?><br>
                <strong>NIM:</strong> <?php echo $dataUser['nim']; ?><br>
                <strong>Jenis Kelamin:</strong> <?php echo $dataUser['jenis_kelamin']; ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

      <div class="text-center">
        <a href="index.php" class="btn btn-success">Kembali</a>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
