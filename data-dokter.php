<html>
    <head>
        <h1>menampilkan tabel</h1>
</head>

<body>
    <h3>data dokter</h3>
    <table border="1" class="table">
        <tr>
            <th>id_dokter</th>
            <th>nama_dokter</th>
            <th>spesialis</th>
            <th>alamat</th>
</tr>

</body>
</html>
<?php
//select table pasien dari databasenya yoo
include "koneksi.php";
$query_mysqli = mysqli_query($host, "SELECT * FROM dokter") or die("ERROR");
$nomor = 1;
while($data = mysqli_fetch_array($query_mysqli)){
    ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['nama_dokter']; ?></td>
        <td><?php echo $data['spesialis']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
</tr>
<?php
}?>
</table>