<html>
    <head>
        <h1>menampilkan tabel</h1>
</head>

<body>
    <h3>data pasien</h3>
    <table border="1" class="table">
        <tr>
            <th>id_user</th>
            <th>nama_pasien</th>
            <th>tgl_lahir</th>
            <th>jenis_kelamin</th>
            <th>alamat</th>
</tr>

</body>
</html>
<?php
//select table pasien dari databasenya yoo
include "koneksi.php";
$query_mysqli = mysqli_query($host, "SELECT * FROM pasien") or die("ERROR");
$nomor = 1;
while($data = mysqli_fetch_array($query_mysqli)){
    ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['id_user']; ?></td>
        <td><?php echo $data['nama_pasien']; ?></td>
        <td><?php echo $data['tgl_lahir']; ?></td>
        <td><?php echo $data['jenis_kelamin']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
</tr>
<?php

}?>
</table>