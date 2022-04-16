<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "sanpham";
$connect =mysqli_connect($host,$user,$password,$database);
mysqli_set_charset($connect, 'UTF8');
if ($connect==true){
    echo("");
}
else{
    echo("false");
}
?>
