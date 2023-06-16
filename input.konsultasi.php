<header class="header"><center><h1>Halaman konsultasi</h1></center></header>

<form action="input.konsultasi.php" method="post">
<!-- <div class="mb-3 row">
        <label for="id_user" class="col-sm-2 col-form-label">id_user</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id_user" name="id_user">
        </div>
    </div> -->
<body class="body"><div class="mb-3 row">
        <label for=" nama_pasien" class="col-sm-2 col-form-label">nama_pasien</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id=" nama_pasien" name=" nama_pasien">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="tanggal" class="col-sm-2 col-form-label">tanggal</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="tanggal" name="tanggal">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="konsultasi" class="col-sm-2 col-form-label">konsultasi</label>
        <div class="col-sm-10">
            <input type="konsultasi"name="konsultasi" class="form-control" name="konsultasi">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-11">
            <button type="submit" name="simpan" class="btn btn-primary">Kirim konsultasi</button>
        </div>
    </div>
    <div class="mb-3 row">
 <center> <button> 
  <a href="data-konsultasi2.php">
        lihat konsultasi </a>
        <a href="halaman.login.php"> Halaman login</a>
       </button><center>
</div> </body>
<?php 
    if(isset($_POST['simpan'])) {
        include 'koneksi.php';
    
        $nama_pasien = $_POST['nama_pasien'];
        $tanggal = $_POST['tanggal'];
        $konsultasi= $_POST['konsultasi'];
       

        // include database connection file
        
        
        // Insert user data into table
        $db = mysqli_query($host, "INSERT INTO konsultasi ( `nama_pasien`, `tanggal`, `konsultasi`)
        VALUES ('$nama_pasien','$tanggal','$konsultasi')");

if($db){
    echo '<script>alert("kategori telah ditambahkanc! ")</script>';
    echo '<script>window.location="data-konsultasi2.php"</script>';
} else{
    echo"gagal".mysqli_error($host);
}

}
        
          ?>
          <style>
    

    .mb-3.row {
      width: 400px;
      margin: 10 auto;
      background: url('Lake-sunset.png') no-repeat ;
      padding: 25px;
      border: 2px solid black;
      border-radius: 5px;
    }
    
    .col-sm-10 h2 {
      text-align: center;
      margin-bottom: 20px;
      position: center;
    }
    
    .col-sm-2.col.form-label label{
      position: center;
      margin-bottom: 20px;
    }
    
    .col-sm-2.col.form-label input JUDULE {
      width: 100%;
      padding: 10px 0;
      font-size: 20px;
      border: none;
      border-bottom: 1px solid #ccc;
      outline: none;
      background: transparent;
      position:center;
    }
    
    .col-sm-2.col-form-label TULISAN JUDUL KOLOM {
      position: CENTER;
      top: 0;
      left: 0;
      padding: 10px 0;
      font-size: 20px;
      color: #888;
      pointer-events: none;
      transition: 2s;
    }
    
    .form-control input:focus ~ label,
    .form-control input:valid ~ label {
      top: -20px;
      font-size: 12px;
      color: #333;
    }
    
    .btn.btn-primary{
      width: 100%;
      padding: 15px 10 ;
      font-size: 16px;
      background: #4caf50;
      color: #ffffff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .header{
        position: center;
        margin: 10 auto;
        top: 0;
        left:0;
        width: 70%;
        padding:10px 100px;
        font-family: 'Philosopher', sans-serif;
        background: #4caf50;
        
        
        
    
    }
    .mb-3.roy {
    
    }
    body{
      background: url('pills-pharmacy-wallpaper-preview.jpg') ;
    }