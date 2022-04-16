<?php
    $id=$_GET['id'];
    $sql="DELETE FROM product where pr_id =$id";
    $query= mysqli_query($connect, $sql);
    header('location: admin.php?page_layout=danhsach');
?>