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
                        <form role="form" method="POST" enctype="multipart/form-data"
                            action="{{ route('admin.product.postAdd') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Danh mục sản phẩm</label>
                                    <select name="category_id" id="" class="form-control">
                                        <option value="">Chọn danh mục . . .</option>
                                        @foreach ($categories as $index => $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Nhập tên sản phẩm . . .">
                                    @error('name')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Giá gốc</label>
                                    <input type="number" class="form-control" name="original_price"
                                        placeholder="Nhập giá gốc . . .">
                                    @error('original_price')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Giá khuyến mãi</label>
                                    <input type="number" class="form-control" name="promotional_price"
                                        placeholder="Nhập giá khuyến mãi . . .">
                                    @error('promotional_price')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Bài viết</label>
                                    <textarea class="form-control" rows="3" name="posts" placeholder="Nhập bài viết . . ."></textarea>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>File input</label>
                                    <input type="file" name="picture">
                                    @error('picture')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
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
