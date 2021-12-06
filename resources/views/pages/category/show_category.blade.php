@extends('layout')
@section( 'content')

<div class="features_items">
    <!--features_items-->

    @foreach($category_name as $key => $name)
    <h2 class="title text-center">{{$name->category_name}}</h2>
    @endforeach
    <div class="row">
        <div class="col-md-4">
            <label for="amount">Sắp xếp theo</label>
            <form>
                @csrf
                <select name="sort" id="sort" class="form-control">
                    <option value="{{ Request::url() }}?sort_by=none">--Lọc theo--</option>
                    <option value="{{ Request::url() }}?sort_by=tang_dan">--Giá tăng dần--</option>
                    <option value="{{ Request::url() }}?sort_by=giam_dan">--Giá giảm dần--</option>
                    <option value="{{ Request::url() }}?sort_by=kytu_az">--Lọc theo tên A đến Z--</option>
                    <option value="{{ Request::url() }}?sort_by=kytu_za">--Lọc theo tên X đến A--</option>
                </select>

            </form>
        </div>
    </div>

    @foreach($category_by_id as $key => $product)
    <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">

    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div >
                <div class="productinfo text-center">
                    <img src="{{URL::to('public/upload/product/'.$product->product_images)}}" style="width: 200px; height:150px;" alt="" />
                    <h2>{{ number_format($product->product_price).' '.'VND'}}</h2>
                    <p>{{ $product->product_name }}</p>
                    <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i
                            class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                </div>

            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                </ul>
            </div>
        </div>
    </div>
</a>
    @endforeach
</div>
<div class="fb-comments" data-href="http://shopbro.com/danh-muc-san-pham/11" data-width="" data-numposts="20"></div>



<!--features_items-->


@endsection
