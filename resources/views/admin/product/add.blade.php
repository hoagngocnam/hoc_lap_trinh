@extends('admin.layouts.index')

@section('main-content')
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thêm sản phẩm
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('admin.product.postAdd') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Tác giả</label>
                                    <input type="text" class="form-control" name="author">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Mô tả sản phẩm</label>
                                    <textarea class="form-control" rows="3" name="description"></textarea>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>File input</label>
                                    <input type="file" name="picture">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Hoàn thành</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
