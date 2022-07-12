<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bluebox Free Bootstrap Admin Template</title>
    <!-- Bootstrap Styles-->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ asset('assets/css/custom-styles.css') }}" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <!-- Header  -->
        @include('admin.layouts.header')
        <!-- Kết thúc header -->
        <!-- Menu  -->
        @include('admin.layouts.menu')
        <!-- Kết thúc menu Menu  -->
        <!-- Nội dung  -->
        <div id="page-wrapper">
            <div class="header">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>

            </div>

            @yield('main-content')


        </div>

        <!-- /. PAGE WRAPPER  -->
    </div>
</body>

</html>
