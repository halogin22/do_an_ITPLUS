<div class="row">

   
    <div class="col-lg-12">
        <h2>SẢN PHẨM</h2>
        <form class="form-inline float-left" action="" method="POST">
            <div>
                <input type="text" class="form-control" name="key"  placeholder="Search"> 
                <button class="btn btn-outline-secondary" type="submit" name="submit-search">Search</button>
            </div>
            
        </form>
        
        <div class="text-right">
            <a href="index.php?page=product_admin&action=insert" name="insert" class="btn btn-success">
                Thêm
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table">
                    <tr>
                        <th>Stt</th>
                        <th>Tên Nhà cung cấp</th>
                        <th>Hình ảnh</th>
                        <th>Ghi chú</th>
                        <th>Thời gian tạo</th>
                        <th>Thời gian cập nhật</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $count=+1;
                        foreach($result as $key => $value){
                    
                    ?>
                        <tr>
                            <td><?php echo $count ?></td>
                            <td><?php echo $value['name']?></td>
                            <td><img width="150" height="150" src="../../../<?php echo $value['avatar'];?>" alt=""></td>
                            <td><?php echo $value['description']?></td>
                            <td><?php echo $value['created_at']?></td>
                            <td><?php echo $value['updated_at']?></td>
                        </tr>


                    <?php
                        }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>