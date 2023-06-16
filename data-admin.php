<html>
    <head>
        <h1>menampilkan tabel</h1>
</head>

<body>
    <h3>data pasien</h3>
    <table border="1" class="table">
        <tr>
            <th>id_admin</th>
            <th>nama_admin</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>alamat</th>
</tr>

</body>
</html>
<?php
//select table pasien dari databasenya yoo
include "koneksi.php";
$query_mysqli = mysqli_query($host, "SELECT * FROM admin") or die("ERROR");
$nomor = 1;
while($data = mysqli_fetch_array($query_mysqli)){
    ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['nama_admin']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['password']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
</tr>
<?php

}?>
</table>