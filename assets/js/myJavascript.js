$(document).on('click', '.del-cart  ', function(e){
    e.preventDefault();
    var id = $(this).val(); // id sản phẩm

    $.ajax({
        url         : 'assets/ajax/del-cart.php',
        type        : 'post',
        dataType    : 'html',
        data        : { id : id },

        success : function(data){
        	$("#total-price").load(' .total-price');
            $("#cart").load(' #data-cart');
            $("#carts").load(' #bag-carts');
        },

        error : function(){
            
        }
    });

});


$(document).on('change', '.update-cart', function(){
    var qty  = $(this).val();
    var id = $(this).attr('name');

    $.ajax({
        url         : 'assets/ajax/update.php',
        type        : 'post',
        dataType    : 'html',
        data        : { id : id, qty : qty },

        success : function(data){
            $("#cart").load(' #data-cart');
            $("#total-price").load(' .total-price');
        },

        error : function(){
            
        }
    });
});