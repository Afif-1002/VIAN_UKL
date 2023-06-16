<!DOCTYPE html>
<html>
<head>
  <title>Centered Object</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="body2">
   
<div class=p1> <center> <h2>WELCOME</h2> </center> </div>
<div class=wrapper> 
  <div class="container">
    <div class="centered-object">
      <h2>Login HaiDoc</h2>
      <form>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <input  type="submit" name="simpan" value="Login" > <a href="input.konsultasi.php">SINI
      </form>
    </div>
  </div>
</div>
<?php 
    if(isset($_POST['simpan'])) {
        include 'koneksi.php';
        $username = $data['username'];
        $password = $data['password'];
       
        echo($username);
        // include database connection file
        
        
        // Insert user data into table
        $db = mysqli_query($host, "INSERT INTO login_user (`username`, `password`)
        VALUES ('$username','$password')");

if($db){
    echo '<script>alert("kategori telah ditambahkanc! ")</script>';
    echo '<script>window.location="data-login.php"</script>';
} else{
    echo"gagal".mysqli_error($host);
}

}
        
          ?>
</body>
</html>
<style>
    .container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
 
 

  
  
}

.centered-object {
  text-align: center;
 
  

}

.form-group {

  margin:28px;
  font-size:25px;
}

label {
  display: block;
  margin-bottom: absolute;
 padding:20px;
  
}

input[type="text"],
input[type="password"] {
  width: 350px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 15px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 1.1em;
    color:white;
}
input[type="submit"]:hover{
    background:white;
    color:#162938;
    transform-origin: center;
    transform: scaleX(2);
    transition: transform .5s;
}
.input[type="submit"]:hover:after {
    transform-origin: left;
    transform: scaleX(0.5);
}
.wrapper {
    position:absolute;
    width: 400px;
   
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0, 0, 0, .5);
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    top:26%;
    left:38%;

}
.p1 {  
      color:black;
    position: absolute;
    margin: 10 auto;
    top: 0;
    padding:18px;
    width: 35%;
    border-radius:18px;
    background:url('Lake-sunset.png'); 
    top:12%;
    left:32%;
    font-family:'Philosopher',sans-serif;

    }
    .body2{
        background: url('pills-pharmacy-wallpaper-preview.jpg') ;
        
    }
   
    

</style>
