<!DOCTYPE html>

<html lang="vi-VN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tivi giá rẻ, Smart Tivi, LED 4K, OLED, QLED trả góp 0% ở Điện máy XANH</title>

    <link rel="stylesheet" href="{{ asset('assets/users/css/style.css') }}">
</head>

<body class="dmx-site">
    <!-- Banner -->
    @include('users.layouts.banner')
    <!-- End Banner -->
    <!-- Header -->
    @include('users.layouts.header')
    <!-- End Header -->
    <!-- Top Banner -->
    @include('users.components.top_banner')
    <!-- End top Banner -->
    <!-- Danh sách sản phẩm -->
    @yield('main-content')
    <!-- Danh sách sản phẩm -->

    <!-- Footer -->
    @include('users.layouts.footer')
    <!-- End footer -->
</body>

</html>
