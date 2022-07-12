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
                                        <th>Tên danh mục</th>
                                        <th>
                                            <a class="btn btn-success" href="{{ route('admin.category.getAdd') }}">Thêm</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $index => $item)
                                        @php
                                            $param = [
                                                'id' => $item->id,
                                            ];
                                        @endphp
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <a class="btn btn-info" href="{{ route('admin.category.getDetail', $param) }}">Chi tiết</a>
                                                <a class="btn btn-primary"
                                                    href="{{ route('admin.category.getUpdate', $param) }}">Chỉnh sửa</a>
                                                <a class="btn btn-danger" href="{{ route('admin.category.getDelete', $param) }}">Xóa</a>
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
