<html>

<header class="header">
<h1>Data User</h1>
 <nav class=navigation> <h2>
 <a href="input.php">Login</a>
  <a href="input.konsultasi.php"> Konsultasi</a> 
  <a href="data-user.php"> Data User</a></h2>
  </nav>  
</header>
 
<body>
<div class=p1> <center> <h2>Konsultasi penyakit pasien</h2> </center> </div>
    <table border="1" class="table">
        <tr>
            <th>no</th>
            <th>id_user</th>
            <th>nama_pasien</th>
            <th>tanggal</th>
            <th>konsultasi</th>
            <th>Aksi</th>
</tr>

</body>
</html>
<?php
//select table pasien dari databasenya yoo
include "koneksi.php";
$query_mysqli = mysqli_query($host, "SELECT * FROM konsultasi") or die("ERROR");
$nomor = 1;
while($data = mysqli_fetch_array($query_mysqli)){
    ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['id_user']; ?></td>
        <td><?php echo $data['nama_pasien']; ?></td>
        <td><?php echo $data['tanggal']; ?></td>
        <td><?php echo $data['konsultasi']; ?></td>
        <td><button type="button" class="baten" style="btn-btn primary" value="Hapus"><a href="delete.konsultasi.php?Hapus=<?php echo $data['id_user']; ?>" onclick="return confirm('Apakah anda ingin menghapus data ini?');";><p2 class=p2H>Hapus</p2></td>
        
</tr>
<?php

}?>
<style>
    table {
      
    position:absolute;
      width: 100%;
      border-spacing: 10px;
      text-align: center;
      border-radius:10px;
      background-size: cover;
        backdrop-filter: blur(20px);
        margin-left:7px;
    margin-right:auto;
    }

td {
      background:#C9DBB2 ;
      padding: 10px;
      text-align: left;
      border-top: 3.5px solid #ddd;
      font-size:18px;
      border-radius: 10px;
     
      
    }
    th {border: 1px solid black;
      padding: 10px;
      text-align: center;
     border-radius: 10px;
      background:url('Lake-sunset.png') no-repeat ;
      color: white; }


    header{
    position: relative;
    margin: 10 auto;
    top: 0;
    width: 100%;
    font-family: 'Philosopher', sans-serif;
    display:flex;
    padding: 20px 20px;
    border-radius:5px;
    background:#FDCEDF;
    
   
 
    

           
    
    }
    body{
      background: url('pills-pharmacy-wallpaper-preview.jpg') ; 
    }
    .p1 {  
      color:white;
    position: center;
    margin: 10 auto;
    top: 0;
    padding:8px;
    width: 35%;
    border-radius:18px;
      background-size: cover;
        backdrop-filter: blur(90px);
  
    }
    .navigation a {
    position: relative;
    font-size: 1.1em;
    color: black;
    text-decoration: none;
    font-weight: 500;
    margin-left:45px;
 }
 .navigation a::after{
    content :'';
    position:absolute;
    left: 0;
    bottom:  -6px;
    width:100%;
    height:3px;
    background: black;
    border-radius: 5px;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform .5s;
 }

.navigation a:hover:after {
    transform-origin: left;
    transform: scaleX(1);
 }
  .baten{
    width: 100%;
    height: 25px;
    background: transparent;
    border: none;
    outline:none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    font-weight: 500;
}
.baten:hover{
   background-color: ;
   transform-origin: center;
   transform: scaleX(2);
    transition: transform .7s; 
}

.baten:hover:after{

  transform-origin: left;
    transform: scaleX(0);

}
  </style>
  
  </style>
      

