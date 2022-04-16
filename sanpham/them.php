<?php
    $sql_brand = "SELECT * FROM brand";
    $query_brand = mysqli_query($connect, $sql_brand);
    if (isset($_POST["sbm"])){
        $prd_name =$_POST["pr_name"];

        $image =$_FILES["image"]["name"];
        $image_tmp =$_FILES["image"]["tmp_name"];
        $price =$_POST["price"];
        $quantity =$_POST["quantity"];
        $description =$_POST["description"];
        $brand_id =$_POST["brand_id"];
        
        move_uploaded_file($image_tmp,'image/'.$image );
        $sql ="INSERT INTO product(pr_name, `image`, price, quantity,`description`,brand_id)
        VALUES('$prd_name','$image', $price, $quantity,'$description', $brand_id )";
        $query = mysqli_query($connect, $sql);
        header('location: admin.php?page_layout=danhsach');//chuyển trang
    }   
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name ="pr_name" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Ảnhsản phẩm</label><br>
                    <input type="file" name ="image">
                </div>
                 <br>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name ="price" class="form-control">
                </div>
                <br>
                 <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" name ="quantity" class="form-control">
                </div>
                 <br>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name ="description" class="form-control">
                </div>
                 <br>
               <div class="form-group">
                 <label for="">Danh mục</label>
                 <select class="form-control" name="brand_id" >
                   <?php
                   while ($row_brand =  mysqli_fetch_assoc($query_brand)){ ?>

                       <option value="<?php echo $row_brand['brand_id'];?>"><?php echo $row_brand['brand_name'];?></option>
                   <?php } ?>
                  
                 </select>
               </div>
                <button type="submit" name="sbm" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>
</div>