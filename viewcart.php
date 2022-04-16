<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
    error_reporting(2);
    require "./config/db.php" ;
    $infor = '';
    // cập nhật giỏ hàng
    if (isset($_POST['update-cart']))
    {
        foreach ($_POST['num'] AS $id => $prd)
        {
            if (($prd == 0) and (is_numeric($prd)))
            {
                unset($_SESSION['cart'][$id]);
            }
            elseif (($prd > 0) and (is_numeric($prd)))
            {
                $_SESSION['cart'][$id] = $prd;
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fashion MyLiShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Fashion MyLiShop - fashion mylishop"/>
    <meta name="description" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="keywords" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="author" content="Hôih My" />
    <meta name="author" content="Y Blir" />
    <link rel="stylesheet" href="cart.css">
    <link rel="icon" type="image/png" href="images/logohong.png">
    <!-- CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Custom -->
    <script src="js/mylishop.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="js/wow.js" type="text/javascript" charset="utf-8" async defer></script>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>
<body>
<div class="container">
    <ul class="breadcrumb" id="tc">
            <li><a href="page.php">Trang chủ</a></li>
            <li>Thông tin giỏ hàng</li>
    </ul>
    <fieldset>
        <form name="form1" action="" method="POST">
            <div class ="row">
                <div class ="col-md-12 col-sm-12 col-xs-12">
                    <div class="viewcart">
                        <div class="titless">
                            <div class ="col-md-12 col-sm-12 col-xs-12">
                                <div class="row title_left">
                                    <p> THÔNG TIN MUA HÀNG </p>
                                </div><!-- /title_left -->
                            </div><!-- /col -->
                        </div><!-- /title -->

                        <div class="content">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> Ảnh sản phẩm </th>
                                        <th> Tên sản phẩm</th>
                                        <th> Số lượng </th>
                                        <th> Giá </th>
                                        <th> Tổng giá </th>
                                        <th> Xóa </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                   
                                    $total = 0;
                                    $totalPay = 0;
                                    if (isset($_SESSION['cart'])) 
                                    {
                                        foreach ($_SESSION['cart'] AS $id => $prd) 
                                        {
                                            $sql = "SELECT * FROM product WHERE pr_id = $id";
                                            $result = mysqli_query($connect,$sql);
                                            if (!$result) {
                                                echo 'Không thể chọn!';
                                            }
                                            else
                                            {
                                                while ($row = mysqli_fetch_assoc($result))
                                                {
                                                    // Số lượng sản phẩm
                                                    $quantity = $_SESSION['cart'][$row['pr_id']];
                                                       // Tổng giá của 1 sản phẩm đó: "số lượng * giá"
                                                       $totalPriceProduct = $quantity * $row['price'];
                                                       // Tổng tiền của 1 sản phẩm: "tổng tiền + số lượng * giá"
                                                       $total = $total + $quantity * $row['price'];
                                                       // Tổng tiền người dùng phải trả: "tổng tiền sản phẩm"
                                                       $totalPay = $total;
                                                ?>
                                                    <tr>
                                                        <!-- Ảnh sản phẩm -->
                                                        <td><center>
                                                        <img src="./image/<?php echo $row['image'] ?>" style="width :150px;">

                                                        </center></td>

                                                        <!-- Tên sản phẩm -->
                                                        <td><?php echo $row['pr_name']; ?></td>

                                                        <!-- Số lượng sản phẩm -->
                                                        <td><div class ="form-group">
                                                            <input type="number" size="2" name="num[<?php echo $row['pr_id']; ?>]" value="<?php echo $_SESSION['cart'][$row['pr_id']]; ?>" min="1"/>
                                                        </div></td>

                                                        <!-- Giá của 1 sản phẩm -->
                                                        <td><?php echo number_format($row['price']); ?> <sup>đ</sup></td>
                                                        <!-- giá của sản phẩm đó  -->
                                                        <td><?php echo ($totalPriceProduct); ?> <sup>đ</sup></td>
                                                        <!-- Xóa sản phẩm -->
                                                        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')" href ="deletecart.php?pr_id=<?php echo $id; ?>">
                                                                <span class="fa fa-trash fa-lg" aria-hidden="true"></span>
                                                        </a></td>
                                                    </tr>
                                                <?php
                                                    $infor = $infor . $row['pr_name'] . ' - ' . $_SESSION['cart'][$row['pr_id']] . ' cái - giá: ' . $row['price'] . '<br/>';
                                                }
                                            }
                                        }
                                        // Lưu thông tin mua sản phẩm để gửi email cho khách hàng
                                        $_SESSION['infor'] = $infor;
                                        // Lưu tổng tiền phải thanh toán để gửi email cho khách hàng
                                        $_SESSION['total'] = $totalPay;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div><!-- /content -->

                        <div class="calculator">
                            <div class ="col-md-5 col-sm-6 col-xs-12 update-view ">
                                <button type="submit" name="update-cart"> Cập nhật giỏ hàng </button>
                                <button id ="total">
                                    <span style="font-weight: bold;"> Tổng tiền: <?php echo number_format($totalPay); ?>
                                        <sup>đ</sup>
                                    </span>
                                </button>
                            </div><!-- /col -->
                        </div><!-- /caculate -->

                        <div class ="col-md-7 col-sm-6 col-xs-12 title_right">
                            <div class ="title_right">
                                <button>
                                    <a href="page.php"> Tiếp tục mua hàng </a>
                                </button>
                            </div><!-- /title_right-->
                           
                            <button class="delete">
                                <a onclick="return confirm('Giỏ hàng sẽ trống! Bạn chắc chắn muốn hủy giỏ hàng này không?')" href ="deletecart.php?idCancel=0"> Hủy giỏ hàng </a>
                            </button>
                           
                        </div><!-- /col -->
                    </div><!-- /viewcart -->
                </div><!-- /col -->
            </div>
        </form>
    </fieldset>
</div>

</body>
</html>