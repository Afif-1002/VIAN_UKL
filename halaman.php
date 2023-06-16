<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
    <title>Halaman Login</title>
    <style>
    </style>
</head>
<body>
<header class="header">
<h1>Data User</h1>
 <nav class=navigation12> <h2>
 <a href="input.php">Login</a>
  <a href="input.konsultasi.php"> Konsultasi</a> 
  <a href="data-konsultasi2.php"> Data Konsultasi</a>
  <a href="data-user.php"> Data user</a>
  <body>
  <div class="container">
    <h2>Login Form</h2>
    <form>
      <div class="form-group12">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <input type="submit" value="Login">
    </form>
  </div>
</body>

</h2>
  </nav>  
</header>
    </div>
</body>
</html>
<style>
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
      background:url('Lake-sunset.png'); 
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
    .navigation12 a {
    position: relative;
    font-size: 1.1em;
    color: black;
    text-decoration: none;
    font-weight: 500;
    margin-left:45px;
 }
 .navigation12 a::after{
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

.navigation12 a:hover:after {
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
.container {
  max-width: 300px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.form-group12 {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

  </style>
      

