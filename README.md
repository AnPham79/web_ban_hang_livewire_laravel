<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

1. Cài đặt Livewire: Sử dụng Composer để cài đặt Livewire bằng cách chạy lệnh sau:
 - composer require livewire/livewire

2. Sử dụng Livewire trong ứng dụng của bạn: Bây giờ bạn có thể bắt đầu sử dụng Livewire trong các 
thành phần của ứng dụng Laravel của mình. Ví dụ, bạn có thể tạo một thành phần Livewire bằng cách 
chạy lệnh Artisan:
 - php artisan make:livewire tên_thành_phần

3. Admin and User Authentication
 - cài JetStream composer require laravel/Jetstream
 - Jetstream cho live wire : php artisan jetstream:install livewire
 - sau nó sẽ tự động tạo cho mình các file như login register
 - vào header sử lí logic nếu đăng nhập admin và user
 - tạo 2 live wire user và admin
 - tạo authAdmin băng php artisan make:middleware AuthAdmin
 - vào vendor -> laravel -> fortify -> src -> actions -> AttempToAuthenecations
 - vào phần layouts.guest -> đổi thông tin header footer
 - qua bên login resgister thêm vào đầu tụi nó  <x-guest-layout> </x-guest-layout> 

 4. Making Shop Page Products Dynamic
 - show sản phẩm 
 - tạo 2 file 2 migration cho danh mục và sản phẩm + tạo 2 file factory để tạo dữ liệu mẫu.

 5. Create Product Details Page
 - xem chi tiết sản phẩm bằng cái slug
 - tạo livewire DetailComponent

 6. Shopping Cart
 -  tải gói hỗ trợ giỏ hàng composer require hardevine/shoppingcart
 -  đăng ký ServiceProvider cho gói phụ thuộc "Shopping Cart" (giỏ hàng) trong Laravel, được phát triển bởi    Gloudemans.
 - vào config-> app đăng kí ở provider Gloudemans\Shoppingcart\ShoppingcartServiceProvider::class,
 - aliases 'cart' => \Gloudemans\Shoppingcart\Facades\Cart::class,
 - chạy lệnh trên terminal để bắt đầu đăng kí 
 - php artisan vendor:publish --provider="Gloudeman\ShoppingcardServiceProvider" --tag="config"
 - trong đó 
 + --provider="Gloudeman\ShoppingcardServiceProvider": Xác định ServiceProvider của gói bạn muốn xuất bản tài nguyên từ đó. Trong trường hợp này, đó là ServiceProvider của gói "Shopping Cart" (giỏ hàng) từ Gloudemans.
 + --tag="config": Xác định loại tài nguyên bạn muốn xuất bản. Trong trường hợp này, đó là các tài nguyên cấu hình của gói "Shopping Cart".
 - tạo hàm sử lí thêm vào giỏ hàng
 - tạo hàm sử lí tăng giảm số lượng
 - tạo hàm sử lí xóa sản phẩm trong giỏ hàng.
 - tạo hàm sử lí xóa tất cả sản phẩm trong giỏ hàng.
 - tỉnh tổng tiền thông qua vòng lặp.

 7. lọc sản phẩm theo tiêu chí - số sản phẩm trên 1 trang.
 - Tạo lọc theo value wire:model vào shopComponent viết hàm sử lí dữ liệu lọc và phân trang.

 8. Lọc sản phẩm theo danh mục.

 9. Tìm kiếm sản phẩm.

 10. Tìm kiếm sản phẩm theo danh mục.

 11. Đăng nhập Admin - CRUD cho categories.

 12. CRUD cho Sản phẩm.

 13. Admin Making Home Page Slider Dynamic.

 14. Hiện sản phẩm mới mua ở mục sản phẩm mới.

 15. Hiện sản phẩm ở danh mục.

 16. Hiện sản phẩm giảm giá.

 17. set thời gian sale ( bootrap datetime picker và moment.js).

 18. thêm lọc giá bằng  (no ui slider cdn ).

 19. Thêm validate cho categories.

 20. Thêm validate cho products.

 21. Tạo tên ảnh sản phẩm, danh mục, banner bằng thư viện carbon:now + extension để kiểm tra tồn tại của tên ảnh.

 22. thêm danh sách yêu thích ( wish list ).

 23. Tự động load khi thêm vào danh sách wish list ( emitto ).

 24. remove sản phẩm trong wish list.

 25. Xem sản phẩm trong wish list.

 26. Move Product From Wishlist to Cart and Make Quantity Working on Details.

 27. add wish list to cart.

 28. Add SaveForLater Option on Cart Page.

 29. Áp Coupon vào đơn hàng.

 30. Thanh toán.

 31. Hóa đơn.

 32. Chi tiết hóa đơn.

 33. Địa chỉ giao hàng.

 34. Page Cảm ơn.

 35. Quản lí hóa đơn admin.

 36. Xem chi tiết hóa đơn.

 37. Quản lí hóa đơn của user.

 38. Hủy đơn (user).

 39. Cập nhật trạng thái đơn ( admin ).

 40. Thây đổi mật khẩu.

 41. Liên hệ.



