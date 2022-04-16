<?php
require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Quản Lý Sản Phẩm</title>
    <style>
        img{
            height: 300px;
            width: 250px;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_GET['page_layout'])){
        switch ($_GET['page_layout']) {
            case 'danhsach':
                require_once './sanpham/danhsach.php';
                break;
            case 'them':
                require_once './sanpham/them.php';
                break;
            case 'sua':
                require_once './sanpham/sua.php';
                break;
            case 'xoa':
                require_once './sanpham/xoa.php';
                break;
            
            default:
                require_once './sanpham/danhsach.php';
                break;
        }
    }else {
        require_once './sanpham/danhsach.php';
    }
    ?>
</body>
</html>