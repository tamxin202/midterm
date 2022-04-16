<?php 
require_once "C:/xampp/htdocs/Tamxin/Giohang_Gui Mail don hang _sinh vien/model/connect.php";
?>
<html>  
<head lang="en"> 
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Admin Login</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  }
  
</style>  
  
<body>  
  
<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Sign In</h3>  
                </div>  
                <div class="panel-body">  
                <form role="form" action="./user/login-back.php" method="post" name="form-login" accept-charset="utf-8"> 
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Tên đăng nhập của bạn" name="username" type="text" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Mật khẩu của bạn" name="password" type="password" value="">  
                            </div>  
                            <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Đăng Nhập" >  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
</body>  
  
