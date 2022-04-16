<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
    //require_once "./model/connect.php";
    require_once "C:/xampp/htdocs/BTVN/model/connect.php";

    if (isset($_POST['submit']))
    {
        if (isset($_POST['fullname'])) {
            $fullname = $_POST['fullname'];
        }

        if (isset($_POST['username'])) {
            $username = $_POST['username'];
        }

        if (isset($_POST['password'])) {
            $password = $_POST['password'];
        }

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }

        if (isset($_POST['address'])) {
            $address = $_POST['address'];
        }

        if (isset($_POST['phone'])) {
            $phone = $_POST['phone'];
        }

        $sql = "INSERT INTO users (fullname, username, password, email, phone, address, role)
                VALUES ('$fullname', '$username', md5('$password'), '$email', $phone, '$address', 1)";
        $res = mysqli_query($conn,$sql);
        if ($res) 
        {
            echo "<script type=\"text/javascript\">alert(\"Bạn đã đăng ký thành công!\");</script>";
		    echo "<script type=\"text/javascript\">alert(\"Vui lòng đăng nhập để mua hàng!\");</script>";
            header("location:http://localhost:8080/BTVN/Login.php");
            exit();
        }
        else 
        {
            header("location:login.php?rf=fail");
            exit();
        }
    }
?>