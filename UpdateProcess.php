<?php
include_once 'koneksi.php';
if(count($_POST)>0) {
mysqli_query($host,"UPDATE user set id_user='" . $_POST['id_user'] . "', username='" . $_POST['username'] . "', password='" . $_POST['password'] . "', no_telepon='" . $_POST['no_telepon'] ."' WHERE id_user='" . $_POST['id_user'] . "'");
$message = "Record Modified Successfully";
header("location:Update.php");
}
$result = mysqli_query($host,"SELECT * FROM user WHERE id_user='" . $_GET['id_user'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update User Data</title>
</head>
<body>
<form name="frmUsr" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="data-user.php">Transport List</a>
</div>
id_user: <br>
<input type="hidden" name="id_user" class="txtField" value="<?php echo $row['id_user']; ?>">
<input type="text" name="id_user"  value="<?php echo $row['id_user']; ?>">
<br>
username: <br>
<input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>">
<br>
password :<br>
<input type="text" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>
no_telepon:<br>
<input type="text" name="no_telepon" class="txtField" value="<?php echo $row['no_telepon']; ?>">
<input type="submit" name="submit" value="Submit" class="button">
</form>
</body>
</html>