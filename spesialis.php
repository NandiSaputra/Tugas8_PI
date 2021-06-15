<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <title>DATA SPESIALIS</title>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
 <?php
 include 'navbar.php';
 ?>

 <div class="container-fluid">
  <h1 align="center">DATA SPESIALIS</h1>
  <a href="insert_spesialis.php"> Tambah Data</a><br>
  <table class="table table-striped ">
   <thead class="table-dark">
    <tr>
     <th>No.</th>
     <th>KODE SPESIALIS</th>
     <th>SPESIALIS</th>
     <th>AKSI</th>
    </tr>
   </thead>
   <tbody>
    <?php
    $result = $model->tampil_spesialis();
    if (!empty($result)) {
     foreach ($result as $data) : ?>
      <tr>
       <td><?= $index++ ?></td>
       <td><?= $data->id_spesialis ?></td>
       <td><?= $data->spesialis ?></td>
       <td>
        <a class="btn btn-success" name="edit" id="edit" href="edit_spesialis.php?id=<?= $data->id_spesialis ?>">Edit</a>
        <a class="btn btn-danger" name="delete" id="delete" href="proces.php?id=<?= $data->id_spesialis ?>">Delete</a>
       </td>
      </tr>
     <?php endforeach;
    } else { ?>
     <tr>
      <td colspan="9">
       <center>Belum Ada Data Pada Tabel Spesialis</center>
      </td>
     </tr>
    <?php } ?>
   </tbody>
  </table>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>