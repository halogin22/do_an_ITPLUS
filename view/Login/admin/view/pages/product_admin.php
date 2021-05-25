<div class="row">

   
    <div class="col-lg-12">
        <h2>SẢN PHẨM</h2>
        <form class="form-inline float-left" action="" method="POST">
            <div>
                <input type="text" class="form-control" name="key"  placeholder="Search"> 
                <button class="btn btn-outline-secondary" type="submit" name="submit-search">Search</button>
            </div>
            
        </form>
        
        <div class="text-right" >
            
            <button class="btn btn-success" data-toggle="modal" data-target="#modalinsert"> Thêm</button>
        </div>
       
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table">
                    <tr>
                        <th>Stt</th>
                        <th>Tên sản phẩm</th>
                        <th>Loại sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Ghi chú</th>
                        <th>Tình trạng</th>
                        <th>Thời gian tạo</th>
                        <th>Thời gian cập nhật</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                        $count=0;
                    /*foreach ($result as $value) {*/
                        foreach($result as $key => $value){
                        $count+=1;
                        
                    ?>
                            
                        <tr>
                            <td><?php echo $count; ?></td>
                                
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['categories_id']; ?></td>
                            <td><img width="150" height="150" src="../../../<?php echo $value['avatar'];?>" alt=""></td>
                            <td><?php echo $value['price']; ?></td>
                            <td><?php echo $value['quantity']; ?></td>
                            <td><?php echo $value['description']; ?></td>
                            <td><?php echo $value['status']; ?></td>
                            <td><?php echo $value['created_at']; ?></td>
                            <td><?php echo $value['updated_at']; ?></td> 
                            <td><a href="index.php?page=update_product&id=<?php echo $value['id'];?>" ><i class="fa fa-pencil-square" ></i></a></td>
                    </tr>

                    <?php 
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <!-- modal -->

    <div class="modal fade" id="modalinsert" >
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="post" role="form">
                    <div class="modal-header">
                        <legend>Thêm thông tin sản phẩm</legend>
                    </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" class="form-control" id="id" name="id" value="">
                    </div>

                    <div class="form-group">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>

                    <div class="form-group">
                        <label for="">Loại sản phẩm</label>
                        <input type="text" class="form-control" id="categories_id" name="categories_id" value="">
                    </div>

                    
                    <div class="form-group">
                        <label for="">Mã nhà cung cấp</label>
                        <input type="text" class="form-control" id="brand_id" name="brand_id" value="">
                    </div>

                    <div class="form-group">
                        <label for="">Hình ảnh</label>
                        <input type="file" class="form-control" id="avatar" name="avatar" value="">
                    </div>

                    <div class="form-group">
                        <label for="">Gias</label>
                        <input type="text" class="form-control" id="price" name="price" value="">
                    </div>

                    <div class="form-group">
                        <label for="">Số lượng</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" value="">
                    </div>

                    <div class="form-group">
                        <label for="">Mã quản lý</label>
                        <input type="text" class="form-control" id="admin_id" name="admin_id" value="">
                    </div>

                    <div class="form-group">
                        <label for="">Ghi chú</label>
                        <input type="text" class="form-control" id="description" name="description" value="">
                    </div> 

                    <div class="form-group">
                        <label for="">Tình trạng</label>
                        <input type="text" class="form-control" id="status" name="status" value="">
                    </div>   

                    <div class="form-group">
                        <label for="">Thời gian tạo</label>
                        <input type="date" class="form-control" id="created_at" name="created_at" value="">
                    </div>

                    <div class="form-group">
                        <label for="">Thời gian cập nhật</label>
                        <input type="date" class="form-control" id="updated_at" name="updated_at" value="">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit"  name="insert_product" class="btn btn-primary">Thêm</button>
                </div>
                </form>
            </div>
    
        </div>
    </div>
</div>