<?php
    session_start();
    $id = $_GET['pr_id'];
    $prd = NULL;
    
    if (isset($_SESSION['cart'][$id]))
    {
        $prd = $_SESSION['cart'][$id] + 1;
    }
    else
    {
        $prd = 1;
    }

    $_SESSION['cart'][$id] = $prd;
    $sl = $_SESSION['cart'];
 
    header('location:page.php');
?>

