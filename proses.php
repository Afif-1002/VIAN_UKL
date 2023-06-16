<?php
include_once 'koneksi.php';
if(isset($_POST['simpan'])){
    if($_POST['simpan'] == "simpan"){

     $id_user = $_POST['id_user'];
     $email= $_POST['email'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     $no_telepon = $_POST['no_telepon'];
     $alamat = $_POST['alamat'];


     $query = "INSERT INTO user VALUES(null, '', '$id_user', '$email, '$username', '$password', '$no_telepon', '$alamat')";
     $db = mysqli_query($host, $query);

     if($sql){
         header("location:data-user.php");
         //echo "Data berhasil ditambahkan <a href='abs.php'>[Home]</a>";
     }else{
         echo $query;
     }
    }
}