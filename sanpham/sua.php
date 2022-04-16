<?php
    $id =$_GET['id'];
        $sql_brand = "SELECT *FROM brand";
        $query_brand = mysqli_query($connect, $sql_brand);
        $sql_up="SELECT *FROM product where pr_id= $id";
        $query_up =mysqli_query($connect, $sql_up);
        $row_up = mysqli_fetch_assoc($query_up);//1 mảng kq của query_up
        
        if (isset($_POST["sbm"])){
            $prd_name =$_POST["pr_name"];
            
            if ($_FILES["image"]["name"]=="") {
                $image = $row_up['image'];
            }else {
                $image = $row_up['image'];
            }
        
            $price =$_POST["price"];
            $quantity =$_POST["quantity"];
            $description =$_POST["description"];
            $brand_id =$_POST["brand_id"];

            $sql ="UPDATE product 
            SET 
            pr_name= '$prd_name', `image` ='$image',price='$price', quantity='$quantity',`description`='$description',
            brand_id='$brand_id'
            where pr_id='$id'";
            $query = mysqli_query($connect, $sql);
            header('location: admin.php?page_layout=danhsach');
        }   
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name ="pr_name" class="form-control" required value="<?php  echo $row_up['pr_name'];?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label><br>
                    <input type="file" name ="image" required value="<?php  echo $row_up['image'];?>">
                </div>
                 <br>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name ="price" class="form-control" required value="<?php  echo $row_up['price'];?>">
                </div>
                <br>
                 <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" name ="quantity" class="form-control" required value="<?php  echo $row_up['quantity'];?>">
                </div>
                 <br>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name ="description" class="form-control" required value="<?php  echo $row_up['description'];?>">
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
                <button type="submit" name="sbm" class="btn btn-primary">Sửa</button>
            </form>
        </div>
    </div>
</div>