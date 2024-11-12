<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-gray-200 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-black">Bich Diep Store</a>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-gray-700">Home</a></li>
                <li><a href="#" class="text-gray-700">Category</a></li>
                <li><a href="#" class="text-gray-700">Products</a></li>
                <li><a href="#" class="text-gray-700">About Us</a></li>
                <li><a href="#" class="text-gray-700">Contact</a></li>
            </ul>
            <div class="flex items-center space-x-4">
                <a href="#" class="text-gray-700">Cart</a>
                <a href="#" class="text-gray-700">Notifications</a>
                <a href="#" class="text-gray-700">Login</a>
            </div>
        </div>
    </nav>

    <!-- Product Details Section -->
    <section class="container mx-auto my-8 px-4 flex">
        <!-- Product Image Slider -->
        <div class="w-1/2">
            <div class="bg-gray-300 h-96 flex items-center justify-center">
                <span>Ảnh chạy slideshow</span>
            </div>
        </div>

        <!-- Product Information -->
        <div class="w-1/2 pl-8">
            <h1 class="text-2xl font-bold">Tên sản phẩm</h1>
            <div class="flex items-center">
                <span class="text-yellow-500 text-xl">★★★★★</span>
            </div>
            <p class="text-red-600 text-2xl font-bold my-4">000.000.000 VND</p>

            <!-- Color Options -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold">Màu sắc:</h3>
                <div class="flex space-x-2">
                    <span class="bg-gray-300 w-8 h-8 inline-block"></span>
                    <span class="bg-gray-400 w-8 h-8 inline-block"></span>
                    <span class="bg-gray-500 w-8 h-8 inline-block"></span>
                    <!-- Add more colors as needed -->
                </div>
            </div>

            <!-- Size Options -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold">Kích thước:</h3>
                <div class="flex space-x-2">
                    <span class="bg-gray-300 w-8 h-8 inline-block">S</span>
                    <span class="bg-gray-400 w-8 h-8 inline-block">M</span>
                    <span class="bg-gray-500 w-8 h-8 inline-block">L</span>
                    <!-- Add more sizes as needed -->
                </div>
            </div>

            <!-- Quantity Selection -->
            <div class="flex items-center mb-4">
                <h3 class="text-lg font-semibold">Số lượng:</h3>
                <button class="bg-gray-300 px-2 py-1 mx-2">-</button>
                <input type="number" value="1" class="w-12 text-center border border-gray-300" min="1">
                <button class="bg-gray-300 px-2 py-1 mx-2">+</button>
            </div>

            <!-- Action Buttons -->
            <div class="flex space-x-4 mt-4">
                <button class="bg-black text-white px-6 py-2">Mua ngay</button>
                <button class="bg-gray-500 text-white px-6 py-2">Thêm vào giỏ</button>
            </div>
        </div>
    </section>

    <!-- Product Description Tabs -->
    <section class="container mx-auto my-8 px-4">
        <div class="flex space-x-8 border-b-2">
            <a href="#" class="text-lg font-semibold py-2">Mô tả sản phẩm</a>
            <a href="#" class="text-lg font-semibold py-2">Đánh giá</a>
            <a href="#" class="text-lg font-semibold py-2">Chính sách đổi trả</a>
            <a href="#" class="text-lg font-semibold py-2">Chính sách bảo mật</a>
        </div>

        <div class="mt-4">
            <p class="text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, maxime...</p>
            <!-- More description content as needed -->
        </div>
    </section>

    <!-- Related Products Section -->
    <section class="container mx-auto my-8 px-4">
        <h2 class="text-2xl font-bold mb-4">Sản phẩm liên quan</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white p-4 shadow-md">
                <div class="bg-gray-300 h-40 flex items-center justify-center">Ảnh</div>
                <h3 class="text-lg font-semibold mt-2">Tên sản phẩm</h3>
                <p class="text-red-600 font-bold">$500</p>
            </div>
            <div class="bg-white p-4 shadow-md">
                <div class="bg-gray-300 h-40 flex items-center justify-center">Ảnh</div>
                <h3 class="text-lg font-semibold mt-2">Tên sản phẩm</h3>
                <p class="text-red-600 font-bold">$500</p>
            </div>
            <!-- Repeat for other related products -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-200 text-center py-4">
        <p>&copy; 2023 Bich Diep Store. All rights reserved.</p>
    </footer>

</body>
</html>
