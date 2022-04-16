<?php
    $sql ="SELECT * FROM product inner join brand on product.brand_id =brand.brand_id";
    $query = mysqli_query($connect,$sql );
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
          <h2 style="text-align: center;">Trang admin </h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class ="thead">
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Danh mục</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;// in số thứ tự
                        while ($row = mysqli_fetch_assoc($query)){?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['pr_name'];?></td>
                                <td>
                                    <img style ="width=120" src="image/<?php echo $row['image'];?>" alt="">
                                    
                                </td>
                                <td><?php echo $row['price'];?></td>
                                <td><?php echo $row['quantity'];?></td>
                                <td><?php echo $row['description'];?></td>
                                <td><?php echo $row['brand_name'];?></td>
                                <td>
                                    <a href="admin.php?page_layout=sua&id=<?php echo $row['pr_id'];?>">Sửa</a>
                                </td>
                                <td>
                                    <a onclick ="return Del('<?php echo $row['pr_name']; ?>')"href="admin.php?page_layout=xoa&id=<?php echo $row['pr_id'];?>">Xóa</a>
                                </td> 
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
            <a class = "btn btn-primary" href="admin.php?page_layout=them">Thêm mới</a>
        </div>
    </div>
</div>
<script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa sản phẩm :" + name +"?");
    }
</script>