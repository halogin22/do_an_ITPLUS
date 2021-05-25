
<!-- Page Heading -->
<style>
    .table th{

        text-align: center;
    }
</style>
<div class="row">


    <div class="col-lg-12">
        <h2>ĐƠN HÀNG</h2>
        <form class="form-inline" action="" method="POST">
            <div>
                <input type="text" class="form-control" name="key"  placeholder="Search"> 
                <button class="btn btn-outline-secondary" type="submit" name="submit-search">Search</button>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table">
                    <tr>
                        <th>Stt</th>
                        <th>ID đơn hàng</th>
                        <th>Tên người nhận</th>
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Chi tiết</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $count=0;
                        foreach ($result as $value) {
                            $count+=1;
                    ?>

                        <tr><td><?php echo $count; ?></td>
                            <td><?php echo $value['id']; ?></td>
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['key_token']; ?></td>
                            <td><?php echo $value['created_at']; ?></td>
                            <td><a href="index.php?page=detail&id=<?php echo $value['id']; ?>">
                                <i class="fa fa-eye fa-2x"></i>
                                
                            </a>
                            </td>
                            <td><a href="index.php?page=order_admin&action=detroy&id=<?php echo $value['id'];?>"><i class="fa fa-trash-o fa-2x " ></i></a></td>
                        </tr>

                    <?php
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-lg-6">

</div>
</div>
