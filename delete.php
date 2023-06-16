<?php 
    include 'koneksi.php';

if(isset($_GET['Hapus'])){
    $id_user = $_GET['Hapus'];
    $query = "DELETE FROM user WHERE id_user = '$id_user';";
    $db = mysqli_query($host, $query);

    if($db){
        header("location:data-user.php");
    }else{
        echo $query;
    }
}

?>