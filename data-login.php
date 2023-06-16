<html>
    <head>
        <h1>menampilkan tabel</h1>
</head>

<body>
    <h3>data login</h3>
    <table border="1" class="table">
        <tr>
            <th>no</th>
            <th>username</th>
            <th>password</th>
           

</body>
</html>
<?php
//select table pasien dari databasenya yoo
include "koneksi.php";
$query_mysqli = mysqli_query($host, "SELECT * FROM login") or die("ERROR");
$nomor = 1;
while($data = mysqli_fetch_array($query_mysqli));
?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['password']; ?></td>
        
</tr>
?>
<?php
    if(isset($_POST['simpan'])) {
        include 'koneksi.php';
        $username= $_POST['username'];
        $password = $_POST['password'];
       
        echo($username);
        // include database connection file
        
        
        // Insert user data into table
        $db = mysqli_query($host, "INSERT INTO login_user (`username`, `password`)
        VALUES ('$username','$password')");

if($db){
    echo '<script>alert("kategori telah ditambahkanc! ")</script>';
    echo '<script>window.location="data-user.php"</script>';
} else{
    echo"gagal".mysqli_error($host);
}


}?>

