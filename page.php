<?php require "./config/db.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    </script>
    <!--  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
   
   </script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        .products {
            display: grid;
            grid-template-columns: repeat(4, 20%);
            gap: 1rem 2rem;
            justify-content: center;
        }
        .dn{
            margin-left: 10px;
        }
        .gh{
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
    <section class="header">     
        <nav class="navbar navbar-expand-sm ">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dịch vụ</a>
        </li>
        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Sản phẩm
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Thời trang nam</a>
            <a class="dropdown-item" href="#">Thời trang nữ</a>
           
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Liên hệ</a>
        </li>
        <li>
        <form class="form-inline" action="/action_page.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-secondary" type="button">Search</button>
        </form>
        </li>
        <li class="gh"><a href="viewcart.php">
        <button class="btn btn-outline-primary" type="button">Cart</button>
        </a></li>
        <li>
        <div class="row dn">
                        <button type="button" class="btn " id="icons" data-toggle="modal" data-target=".bg-example-modal-lg">
                            <i class="fas fa-user-circle"></i> Đăng nhập 
                        </button>

                        <div class="modal fade bg-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-5 col-lg-5 block-image">
                                                <img src="https://image.shutterstock.com/image-vector/contact-icon-vector-triangulation-art-260nw-1741357919.jpg" alt="" class="img-responsive">
                                            </div>
                                            <div class="col-md-6 col-lg-6 block-contact">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <form action="">
                                                    <h2 style="color: rgb(90, 74, 5);">TRANG TÀI KHOẢN CỦA SHOP
                                                    </h2>
                                                    <!-- <div class="form-group">
                                                        <input type="text" class="form-control" id="login" name="username"placeholder="Tên đăng nhập hoặc email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" id="matkhau" name="pass" placeholder="Mật khẩu">
                                                    </div> -->
                                                    <p class="lost">
                                                        <a href="#" style="color: black"> <a class="text-center" href="Login.php" id="a1">Đăng nhập</a></a>
                                                    </p>
                                                    <!-- <button type="button" class="btn btn-primary btn-block" onclick="Login() ">Đăng nhập</button> -->
                                                    <br>
                                                    <p class="lost">
                                                        <a href="#" style="color: black"> <a class="text-center" href="./user/register.php" id="a1">Đăng kí tài khoản mới</a></a>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </li>
        </ul>
        </nav>
        </section>
        <section class="new-products">
            <h1 class="text-center">All Products</h1>
            <div class="products">
                <?php
                $sql = "SELECT *FROM product
                ";
                $result = mysqli_query ($connect,$sql);
                while ($kq = mysqli_fetch_assoc($result)) { ?>
                    <div class="card" style="width: 18rem;">
                    <img src="<?php echo "./image/".$kq['image']?>" class="card-img-top p-3" style="height:15rem; width:auto">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $kq["pr_name"] ?></h5>
                            <p class="card-text text-danger"><?php echo $kq["price"] ?> VND</p>
                        </div>
                        <div class="product-info">
                            <a href="addcart.php?pr_id=<?php echo $kq['pr_id'];?>">
                                <button type="button" class="btn btn-outline-info" name="add-to-cart"> 
                                    <label style="color:red;">&hearts;</label>Mua hàng
                                    <label style="color:red;">&hearts;</label>
                                </button>
                            </a>
                           
                            <a href="detail.php?pr_id=<?php echo $kq['pr_id'];?>">
                                <button type="button" class="btn btn-outline-info">
                                    <label style="color:red;">&hearts;</label>Chi tiết
                                    <label style="color:red;">&hearts;</label>
                                </button>
                            </a>
                            </a>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        </section>

        <section class="men-products mt-5">
            <h1 class="text-center">Flower</h1>
            <div class="products">
                <?php
                $sql = "SELECT * FROM product WHERE  brand_id = 1 ";
                $result = mysqli_query ($connect,$sql);
                while ($kq = mysqli_fetch_assoc($result)) { ?>
                    <div class="card" style="width: 18rem;">
                    <img src="<?php echo "./image/".$kq['image']?>" class="card-img-top" style="height:15rem; width:auto">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $kq["pr_name"] ?></h5>
                            <p class="card-text text-danger"><?php echo $kq["price"] ?> VND</p>
                        </div>
                        <div class="product-info">
                            <a href="addcart.php?pr_id=<?php echo $kq['pr_id'];?>">
                                <button type="button" class="btn btn-outline-info" name="add-to-cart">
                                    <label style="color:red;">&hearts;</label>Mua hàng
                                    <label style="color:red;">&hearts;</label>
                                </button>
                            </a>
                           
                            <a href="detail.php?pr_id=<?php echo $kq['pr_id'];?>">
                                <button type="button" class="btn btn-outline-info">
                                    <label style="color:red;">&hearts;</label>Chi tiết
                                    <label style="color:red;">&hearts;</label>
                                </button>
                            </a>
                            </a>
                        </div>
                    </div>
                <?php }

                ?>
            </div>
        </section>
        <section class="women-products mt-5">
            <h1 class="text-center">Dress</h1>
            <div class="products">
                <?php
                 $sql = "SELECT * FROM product WHERE  brand_id = 2";
                $result = mysqli_query ($connect,$sql);
                while ($kq = mysqli_fetch_assoc($result)) { ?>
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo "./image/".$kq['image']?>" class="card-img-top" style="height:15rem; width:auto">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $kq["pr_name"] ?></h5>
                            <p class="card-text text-danger"><?php echo $kq["price"] ?> VND</p>
                        </div>
                        <div class="product-info">
                            <a href="addcart.php?pr_id=<?php echo $kq['pr_id'];?>">
                                <button type="button" class="btn btn-outline-info" name="add-to-cart">
                                    <label style="color:red;">&hearts;</label>Mua hàng
                                    <label style="color:red;">&hearts;</label>
                                </button>
                            </a>
                          
                            <a href="detail.php?pr_id=<?php echo $kq['pr_id'];?>">
                                <button type="button" class="btn btn-outline-info">
                                    <label style="color:red;">&hearts;</label>Chi tiết
                                    <label style="color:red;">&hearts;</label>
                                </button>
                            </a>
                            </a>
                        </div>
                    </div>
                <?php }

                ?>
            </div>
        </section>
    </div>
</body>
</html>