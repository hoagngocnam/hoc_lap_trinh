<div class="title_box">Categories</div>
<ul class="left_menu">
    @foreach ($categoryList as $index => $category)
        <li class="odd"><a href="#">{{$category->name}}</a></li>
    @endforeach
</ul>
