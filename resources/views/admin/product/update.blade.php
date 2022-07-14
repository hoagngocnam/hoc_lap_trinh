@extends('admin.layouts.index')

@section('main-content')
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Chỉnh sửa danh mục
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" method="POST" action="{{ route('admin.category.postUpdate', ['id' => $category->id]) }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" name="name" value="{{$category->name}}">
                                    </div>
                                    <button type="submit" class="btn btn-success">Hoàn thành</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
