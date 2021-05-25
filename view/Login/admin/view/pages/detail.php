<style>
    .table th{

        text-align: center;
    }
 
</style>
<div class="col-md-12">
	 <h2>CHI TIẾT ĐƠN HÀNG</h2>
	 <h3  style="color: #3db9dc;">TỔNG GIÁ TRỊ ĐƠN HÀNG: <?php echo $OrderDetail[0]['total_price'].' đ';?></h3>
	 <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table">
                    <tr>
                        
                        <th>Người nhận</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Ghi chú</th>
                        <th>Sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    	
                    	<td rowspan="<?php echo count($OrderDetail);?>"><?php echo $OrderDetail[0]['member'];?></td>
                    	<td rowspan="<?php echo count($OrderDetail);?>"><?php echo $OrderDetail[0]['phone'];?></td>
                    	<td rowspan="<?php echo count($OrderDetail);?>"><?php echo $OrderDetail[0]['email'];?></td>
                    	<td rowspan="<?php echo count($OrderDetail);?>"><?php echo $OrderDetail[0]['address']?></td>
                    	<td rowspan="<?php echo count($OrderDetail);?>"><?php echo $OrderDetail[0]['note'];?></td>

                    	<?php
                    		
                    		foreach ($OrderDetail as $value) {
                    	?>
                    	<td><?php echo $value['name']; ?></td>
                    	<td><img style=" width: 100px;" src="../../../<?php echo $value['avatar'];?>"></td>
                    	<td><?php echo $value['quantity']; ?></td>
                    	<td><?php echo $value['price']; ?></td>
                    	<td><?php echo $value['total']; ?></td>    	
                    </tr>
                    <?php	 	
                    		 } 
                    	?>
                </tbody>
            </table>
        </div>
</div>