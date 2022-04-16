<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "thaydinh";
$conn =mysqli_connect($host,$user,$password,$database);
mysqli_set_charset($conn, 'UTF8');
if ($conn==true){
    echo("");
}
else{
    echo("false");
}
?>
