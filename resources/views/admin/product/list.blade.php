@extends('admin.layouts.index')

@section('main-content')
    <div id="page-inner">

        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <!--   Kitchen Sink -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Kitchen Sink
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Số thứ tự</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Tác giả</th>
                                        <th>Lượt xem</th>
                                        <th>
                                            <a class="btn btn-success" href="{{ route('admin.product.getAdd') }}">Thêm</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productList as $index => $product)
                                        @php
                                            $param = [
                                                'id' => $product->id,
                                            ];
                                        @endphp
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>
                                                <img src="{{ asset($product->picture) }}" alt="" style="height: 100px">
                                            </td>
                                            <td>{{ $product->author }}</td>
                                            <td>{{ $product->view }}</td>
                                            <td>
                                                <a class="btn btn-info" href="{{ route('admin.product.getDetail', $param) }}">Chi tiết</a>
                                                <a class="btn btn-primary"
                                                    href="{{ route('admin.category.getUpdate', $param) }}">Chỉnh sửa</a>
                                                <a class="btn btn-danger" href="{{ route('admin.product.getDelete', $param) }}">Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End  Kitchen Sink -->
            </div>
        </div>
    </div>
@endsection
