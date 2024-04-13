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
 - tỉnh tổng tiền thông qua vòng lặp

 7. lọc sản phẩm theo tiêu chí - số sản phẩm trên 1 trang
 - Tạo lọc theo value wire:model vào shopComponent viết hàm sử lí dữ liệu lọc và phân trang

 8. Lọc sản phẩm theo danh mục

 9. Tìm kiếm sản phẩm