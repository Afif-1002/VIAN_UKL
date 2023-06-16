<?php
$host = mysqli_connect("localhost","root","");
if($host){
    echo"berhaselll.<br/>";
}else{
    echo".<br/>";
}
$db = mysqli_select_db($host, "haidoc");
if($db){
    echo"berhasel.";
}else{
    echo ".";
}
?>