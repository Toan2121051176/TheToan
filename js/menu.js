$(document).ready(function() {
    $('.add-to-cart-btn').click(function(e) {
        e.preventDefault();
        var productID = $(this).data('product-id');

        $.ajax({
            type: 'POST',
            url: 'product.php', // Đường dẫn đến trang xử lý thêm vào giỏ hàng
            data: { product_id: productID },
            success: function(response) {
                // Xử lý phản hồi từ máy chủ nếu cần
                console.log(response);
            }
        });
    });
});
$(document).ready(function() {
    $('.add-to-cart-btn').click(function(e) {
        e.preventDefault();
        var productID = $(this).data('product-id');

        $.ajax({
            type: 'POST',
            url: 'product.php', // Đường dẫn đến trang xử lý thêm vào giỏ hàng
            data: { product_id: productID },
            success: function(response) {
                // Hiển thị thông báo khi thêm vào giỏ hàng thành công
                if (response === 'success') {
                    alert('Sản phẩm đã được thêm vào giỏ hàng.');
                } else {
                    alert('Sản phẩm đã được thêm vào giỏ hàng');
                }
            }
        });
    });
});