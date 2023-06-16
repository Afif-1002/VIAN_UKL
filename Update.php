<?php
include_once 'koneksi.php';
$result = mysqli_query($host,"SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Update/Edit</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
      <th>id_user</th>
            <th>email</th>
            <th>username</th>
            <th>password</th>
            <th>alamat</th>
            <th>no_telepon</th>
		<td>Action</td>
	  </tr>
			<?php
			$i=0;   
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row['id_user']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['no_telepon']; ?></td>
		<td><a href="UpdateProcess.php?id_user=<?php echo $row["id_user"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>