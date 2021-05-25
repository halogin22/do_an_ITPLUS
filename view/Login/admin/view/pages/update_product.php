<div class="container">
    
    <form action="" method="post" role="form">
        <legend>Sửa thông tin sản phẩm</legend>
        <?php 
            foreach ($result as $key => $value){
        ?>
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $value['id'] ?>">
        </div>

        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $value['name'] ?>">
        </div>

        <div class="form-group">
            <label for="">Loại sản phẩm</label>
            <input type="text" class="form-control" id="categories_id" name="categories_id" value="<?php echo $value['categories_id']; ?>">
        </div>

        <div class="form-group">
            <label for="">Hình ảnh</label>
            <input type="text" class="form-control" id="avatar" name="avatar" value="<?php echo $value['avatar'];?>">
        </div>

        <div class="form-group">
            <label for="">Gias</label>
            <input type="text" class="form-control" id="price" name="price" value="<?php echo $value['price']; ?>">
        </div>

        <div class="form-group">
            <label for="">Số lượng</label>
            <input type="text" class="form-control" id="quantity" name="quantity" value="<?php echo $value['quantity']; ?>">
        </div>

        <div class="form-group">
            <label for="">Ghi chú</label>
            <input type="text" class="form-control" id="description" name="description" value="<?php echo $value['description'] ?>">
        </div> 

        <div class="form-group">
            <label for="">Tình trạng</label>
            <input type="text" class="form-control" id="status" name="status" value="<?php echo $value['status'] ?>">
        </div>   

        <div class="form-group">
            <label for="">Thời gian tạo</label>
            <input type="text" class="form-control" id="created_at" name="created_at" value="<?php echo $value['created_at'] ?>">
        </div>

        <div class="form-group">
            <label for="">Thời gian cập nhật</label>
            <input type="text" class="form-control" id="updated_at" name="updated_at" value="<?php echo $value['updated_at'] ?>">
        </div>
        <?php } ?>
        <button type="submit"  name="update_product" class="btn btn-primary">Update</button>
    </form>
    
</div>