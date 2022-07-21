<nav class="navbar-default navbar-side" role="navigation">
    <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a class="active-menu" href=""><i class="fa fa-dashboard"></i> Tài khoản</a>
            </li>
            <li>
                <a href="{{ route('admin.category.getList') }}"><i class="fa fa-desktop"></i> Danh mục</a>
            </li>
            <li>
                <a href="{{ route('admin.product.getList') }}"><i class="fa fa-bar-chart-o"></i> Sản phẩm</a>
            </li>
            <li>
                <a href="empty.html"><i class="fa fa-fw fa-file"></i> Đăng xuất</a>
            </li>
        </ul>

    </div>

</nav>
