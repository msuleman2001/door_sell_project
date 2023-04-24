<div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4">

    <div class="sidebar-block">
        <div class="title-block">Categories</div>

        <div class="block-content">
            @foreach($categories as $category)


                <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapse-icons collapsed" data-toggle="collapse" data-target="#{{$category->category_id}}">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                    <a class="cateItem" href="#">{{$category->category_name}}</a>
                    <div class="subCategory collapse" id="{{$category->category_id}}" aria-expanded="true" role="status">
                        <div class="cateTitle">
                            @foreach ($category->products as $product)
                                <a class="cateItem" href="#" title="{{ $product->product_title }}">{{ $product->product_title }}</a><br>

                            @endforeach
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>
