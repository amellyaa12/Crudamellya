<?php
$proses=$_GET['proses'];
include "../koneksi.php";

if($proses=='insert'){
   $nama=$_POST['nama'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $level=$_POST['level'];

   mysqli_query($koneksi,"INSERT INTO pengguna SET nama='$nama',
   username='$username',password='$password',level='$level'");
}else if($proses=='update'){
   $nama=$_POST['nama'];
   $username=$_POST['username'];
   $level=$_POST['level'];
   $id=$_POST['id'];

   mysqli_query($koneksi,"UPDATE pengguna SET nama='$nama',
   username='$username',level='$level'WHERE id='$id'");
}else if($proses=='hapus'){
  $id=$_GET['id'];
  mysqli_query($koneksi,"DELETE FROM pengguna WHERE id='$id'");
}
header("location:../index.php?halaman=pengguna");