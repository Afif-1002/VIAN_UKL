
<header class="header"><center><h1>Halaman Register User</h1></center></header>

<form action="input.php" method="post">
<!-- <div class="mb-3 row">
        <label for="id_user" class="col-sm-2 col-form-label">id_user</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="id_user" name="id_user">
        </div>
    </div> -->
<body class="body"><div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password"name="password" class="form-control" name="password">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="no_telepon" class="col-sm-2 col-form-label">No_telepon</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="no_telepon" name="no_telepon">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-11">
            <button type="submit" name="simpan" class="btn btn-primary">Buat Akun</button>
        </div>
    </div>
    <div class="mb-3 row">
 <center> <button> <a href="data-user.php">
        Kembali ke halaman admin </a> </button><center>
</div>
</body>
    
    <?php 
    if(isset($_POST['simpan'])) {
        include 'koneksi.php';
        $id_user= $_POST['id_user'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password= $_POST['password'];
        $alamat= $_POST['alamat'];
        $no_telepon= $_POST['no_telepon'];
        echo($id_user);
        // include database connection file
        
        
        // Insert user data into table
        $db = mysqli_query($host, "INSERT INTO user (`id_user`, `email`, `username`, `password`, `alamat`, `no_telepon`)
        VALUES ('$id_user','$email','$username','$password','$alamat','$no_telepon')");

if($db){
    echo '<script>alert("kategori telah ditambahkanc! ")</script>';
    echo '<script>window.location="data-user.php"</script>';
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
    

