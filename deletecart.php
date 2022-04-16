<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
    require "./config/db.php" ;

    // Hủy giỏ hàng:
    if (isset($_GET["idCancel"]))
    {
        $idCancel = $_GET["idCancel"];
        if ($idCancel == 0)
        {
            unset($_SESSION["cart"]);
            header("location:page.php");
        }
    }
    // xóa giỏ hàng 
    if(isset($_GET['pr_id'])){
        $id = $_GET['pr_id'];
    }
    unset($_SESSION["cart"][$id]);
    header('location: viewcart.php');
?>