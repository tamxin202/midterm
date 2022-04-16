<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <style>
        *{margin: 0;padding: 13px;box-sizing:border-box;}
        .container{display: flex;}
        #price{
        color: red;
        font-size: large;
    }
    .btn{
        background: white;
        font-size: 10px;
        color: orange;
    }
    </style>
</head>
<body>
    <?php
    require_once( "./config/db.php");
    if(isset($_GET['pr_id'])){
        $id = $_GET['pr_id'];
    }
    $sql = "SELECT * FROM product WHERE pr_id= ". $id ;
    $result = mysqli_query( $connect, $sql);
    if ($result)
      {
          while ($row = mysqli_fetch_assoc($result))
          {?>
              <div class="container cart-add">
        
                  <div class="pr-left">
                      <img src="./image/<?php echo $row['image'] ?>">
                  </div>
                  <div class="pr-right">
                      <h1><?php echo $row['pr_name'] ?></h1>
                      <p id ="price">Giá: <?php echo $row['price'] ?><small>đ</small></p></p>
                      <p>Mô tả:  <?php echo $row['description']?></p>
                      <a href="addcart.php?pr_id=<?php echo $row['pr_id'];?>">
                      <button type="button" class="btn">Buy now</button>
                      </a>
                      <p>Giao hàng toàn quốc <br> Thanh toán khi nhận hàng <br>Đổi hàng trong 15 ngày</p>
                  </div>
              </div>
                <?php
            }
        }
    else{echo 'loi';} 
    ?>
</body>
</html>