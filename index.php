<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FanShop - Quạt Máy Chất Lượng</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* styles.css */
        .login-dropdown {
            transition: opacity 0.2s ease-in-out, transform 0.2s ease-in-out;
            opacity: 0;
            transform: translate(-50%, 5px); /* Dịch xuống một chút khi ẩn */
            pointer-events: none; /* Ngăn chặn tương tác khi ẩn */
        }

        .login-icon:hover + .login-dropdown,
        .login-dropdown:hover {
            display: block !important; /* Hiển thị khi hover vào icon hoặc dropdown */
            opacity: 1;
            transform: translate(-50%, 0); /* Di chuyển lên vị trí ban đầu */
            pointer-events: auto; /* Cho phép tương tác khi hiển thị */
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <header class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="index.php" class="text-3xl font-extrabold text-red-theme">FanShop</a>
            <div class="flex items-center space-x-6">
                <form action="search.php" method="GET" class="relative">
                    <input type="text" name="query" placeholder="Tìm kiếm quạt..." class="search-box pl-10 pr-4 w-96 py-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-theme" required>
                    <button type="submit" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <nav class="hidden md:flex space-x-8">
                    <a href="index.php" class="text-gray-700 hover:text-red-theme font-medium">Trang chủ</a>
                    <a href="products.php" class="text-gray-700 hover:text-red-theme font-medium">Sản phẩm</a>
                    <a href="about.php" class="text-gray-700 hover:text-red-theme font-medium">Giới thiệu</a>
                    <a href="contact.php" class="text-gray-700 hover:text-red-theme font-medium">Liên hệ</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <a href="login.php" class="text-gray-700 hover:text-red-theme login-icon">
                            <i class="fas fa-user text-lg"></i>
                        </a>
                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 bg-white shadow-md rounded-md p-4 mt-2 w-48 z-10 hidden login-dropdown">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Đăng nhập</h3>
                            <form action="#" method="POST">
                                <div class="mb-2">
                                    <label for="username" class="block text-gray-700 text-sm font-bold mb-1">Tên đăng nhập:</label>
                                    <input type="text" id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                </div>
                                <div class="mb-2">
                                    <label for="password" class="block text-gray-700 text-sm font-bold mb-1">Mật khẩu:</label>
                                    <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                </div>
                                <button type="submit" class="bg-red-theme text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline hover:bg-red-theme-dark w-full">Đăng nhập</button>
                                <div class="mt-2 text-center">
                                    <a href="#" class="text-sm text-blue-500 hover:underline">Quên mật khẩu?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <a href="cart.php" class="text-gray-700 hover:text-red-theme">
                        <i class="fas fa-shopping-cart text-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="banner">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-4">FanShop - Làm Mát Cuộc Sống</h1>
            <p class="text-lg md:text-xl text-black mb-8 bg-blue-200 font-bold py-4 px-8 margin-center text-center">Khám phá quạt máy hiện đại, mạnh mẽ, tiết kiệm năng lượng.</p>
            <a href="products.php" class="bg-red-theme text-white px-8 py-3 rounded-full font-semibold text-lg hover:bg-red-theme-dark">Khám Phá Ngay</a>
        </div>
    </section>

    <section class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-10">Sản Phẩm Nổi Bật</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php
            // Mô phỏng dữ liệu sản phẩm
            $products = [
                ["name" => "Quạt Đứng Panasonic F-409K", "price" => "1,500,000", "image" => "https://via.placeholder.com/300x300?text=Quat1"],
                ["name" => "Quạt Treo Tường Senko TC162", "price" => "800,000", "image" => "https://via.placeholder.com/300x300?text=Quat2"],
                ["name" => "Quạt Hơi Nước Daikin FT-500", "price" => "3,200,000", "image" => "https://via.placeholder.com/300x300?text=Quat3"],
                ["name" => "Quạt Bàn Xiaomi Mijia", "price" => "600,000", "image" => "https://via.placeholder.com/300x300?text=Quat4"],
            ];

            foreach ($products as $product) {
                echo '
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden">
                        <img src="' . $product['image'] . '" alt="' . $product['name'] . '" class="w-full h-56 object-cover">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-800">' . $product['name'] . '</h3>
                            <p class="text-red-theme font-bold mt-1">' . $product['price'] . ' VNĐ</p>
                            <a href="product.php?name=' . urlencode($product['name']) . '" class="block mt-3 bg-red-theme text-white text-center py-2 rounded-lg hover:bg-red-theme-dark">Xem chi tiết</a>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">FanShop</h3>
                    <p>Chuyên cung cấp quạt máy chất lượng cao, thiết kế hiện đại, giá cả hợp lý.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Liên Kết Nhanh</h3>
                    <ul class="space-y-2">
                        <li><a href="products.php" class="hover:text-gray-200">Sản phẩm</a></li>
                        <li><a href="about.php" class="hover:text-gray-200">Giới thiệu</a></li>
                        <li><a href="contact.php" class="hover:text-gray-200">Liên hệ</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Liên Hệ</h3>
                    <p>Email: support@fanshop.vn</p>
                    <p>Hotline: 0123 456 789</p>
                    <p>Địa chỉ: 123 Đường Gió, Quận Lốc Xoáy, TP. HCM</p>
                </div>
            </div>
            <div class="mt-8 text-center">
                <p class="text-sm">Ngày cập nhật: <?php echo date('d/m/Y'); ?></p>
                <p class="text-sm mt-2">Bản quyền thuộc về FanShop © 2025. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>