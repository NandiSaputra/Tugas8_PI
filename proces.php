<?php
include 'model.php';

//dokter
if (isset($_POST['submit_dokter'])) {
  $id_dokter = $_POST['id_dokter'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $id_spesialis = $_POST['id_spesialis'];

  $model = new Model();
  $model->insert_dokter($id_dokter, $nama, $alamat, $id_spesialis);
  header('location:dokter.php');
}
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $model = new Model();
  $model->delete_dokter($id);
  header('location:dokter.php');
}
if (isset($_POST['submit_edit_dokter'])) {
  $id_dokter = $_POST['id_dokter'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $id_spesialis = $_POST['id_spesialis'];

  $model = new Model();
  $model->update_dokter($id_dokter, $nama, $alamat, $id_spesialis);
  header('location:dokter.php');
}
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $model = new Model();
  $model->delete_dokter($id);
  header('location:dokter.php');
}
//Spesialis
  if (isset($_POST['submit_spesialis'])) {
   $id_spesialis = $_POST['id_spesialis'];
   $spesialis = $_POST['spesialis'];

   $model = new Model();
   $model->insert_spesialis($id_spesialis, $spesialis);
   header('location:spesialis.php');
  }
if (isset($_POST['submit_edit'])) {
 $id_spesialis = $_POST['id_spesialis'];
 $spesialis = $_POST['spesialis'];

 $model = new Model();
 $model->update_spesialis($id_spesialis, $spesialis);
 header('location:spesialis.php');
}
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $model = new Model();
  $model->delete_spesialis($id);
  header('location:spesialis.php');
}
