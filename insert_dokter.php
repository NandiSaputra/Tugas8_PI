<?php
include 'model.php';
$model = new Model();

?>
<html>

<head>
 <title>TAMBAH DATA DOKTER</title>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
 rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<Body>
 <?php
 include 'navbar.php';
 ?>

 <div class="container-fluid">
  <h1>TAMBAH DATA DOKTER</h1>
  <a href="dokter.php">Kembali</a>
  <br><br>
  <form action="proces.php" method="post">
   <div class="col-3">
    <div class="mb-3">
     <label class="form=label">ID DOKTER</label>
     <input type="text" name="id_dokter" class="form-control">
    </div>
    <div class="mb-3">
     <label class="form=label">NAMA</label>
     <input type="text" name="nama" class="form-control">
    </div>
    <div class="mb-3">
     <label class="form=label">ALAMAT</label>
     <input type="text" name="alamat" class="form-control">
    </div>
    <div class="mb-3">
     <label class="form-label">KODE SPESIALIS</label>
     <select name="id_spesialis" class="form-select">
      <?php
      $result = $model->tampil_spesialis();
      if (!empty($result)) {
       foreach ($result as $data) : ?>
        <option value="<?= $data->id_spesialis ?>"><?= $data->id_spesialis ?> - <?= $data->spesialis ?></option>
      <?php endforeach;
      } ?>
     </select>
    </div>

    <button type="submit" name="submit_dokter" class="btn btn-success">SUBMIT</button>
    <button type="reset" class="btn btn-danger">CANCEL</button>
   </div>
  </form>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</Body>

</html>