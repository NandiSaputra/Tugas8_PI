<?php
    include 'connection.php';

    class Model extends Connection{

        public function __construct(){
            $this->conn = $this->get_connection();
        }
    // Dokter
    public function insert_dokter($id_dokter, $nama, $alamat, $id_spesialis)
    {
        $sql = "INSERT INTO tbl_dokter (id_dokter,nama,alamat,id_spesialis ) VALUES ('$id_dokter','$nama','$alamat','$id_spesialis')";
        $this->conn->query($sql);
    }
    public function tampil_dokter()
    {

        $sql = "SELECT * FROM tbl_dokter";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit_dokter($id)
    {
        $sql = "SELECT * FROM tbl_dokter WHERE id_dokter = '$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update_dokter($id_dokter, $nama, $alamat, $id_spesialis)
    {
        $sql = "UPDATE tbl_dokter set nama = '$nama', alamat = '$alamat', id_spesialis = '$id_spesialis' WHERE id_dokter = '$id_dokter'";
        $this->conn->query($sql);
    }
    public function delete_dokter($id)
    {

        $sql = "DELETE FROM tbl_dokter WHERE id_dokter='$id'";
        $this->conn->query($sql);
    }
       //spesialis
        public function insert_spesialis($id_spesialis,$spesialis){
            $sql = "INSERT INTO tbl_spesialis (id_spesialis, spesialis) VALUES ('$id_spesialis', '$spesialis')";
            $this->conn->query($sql);
        }
        public function tampil_spesialis(){

            $sql = "SELECT * FROM tbl_spesialis";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris[] = $obj;
            }
            if (!empty($baris)) {
                return $baris;
            }   
        }
 public function edit_spesialis($id)
 {
  $sql = "SELECT * FROM tbl_spesialis WHERE id_spesialis = '$id'";
  $bind = $this->conn->query($sql);
  while ($obj = $bind->fetch_object()) {
   $baris = $obj;
  }
  return $baris;
 }
 public function update_spesialis($id_spesialis, $spesialis)
 {
  $sql = "UPDATE tbl_spesialis set spesialis = '$spesialis' WHERE id_spesialis = '$id_spesialis'";
  $this->conn->query($sql);
 }
    public function delete_spesialis($id)
    {

        $sql = "DELETE FROM tbl_spesialis WHERE id_spesialis='$id'";
        $this->conn->query($sql); 

    }
   
}