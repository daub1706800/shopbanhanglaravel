@extends('layout')
@section( 'content')
@foreach($product_details as $key => $value)


<div class="product-details"><!--product-details-->
    <div class="col-sm-5">

        {{--  <ul id="imageGallery"  style="width: 8058px; height: 338px; padding-bottom: 0%; transform: translate3d(-3792px, 0px, 0px);"><li data-thumb="{{ asset('public/frontend/images/dt.jpg') }}" data-src="{{ asset('public/frontend/images/dt.jpg') }}" class="clone left" style="width: 474px; margin-right: 0px;">
            <img src="{{ asset('public/frontend/images/dt.jpg') }}">
            </li>
        <li data-thumb="{{ asset('public/frontend/images/dt.jpg') }}" data-src="{{ asset('public/frontend/images/dt.jpg') }}" class="lslide" style="width: 474px; margin-right: 0px;">
            <img src="{{ asset('public/frontend/images/dt.jpg') }}">
            </li>
            <li data-thumb="{{ asset('public/frontend/images/dt.jpg') }}" data-src="{{ asset('public/frontend/images/dt.jpg') }}" class="lslide" style="width: 474px; margin-right: 0px;">
                <img src="{{ asset('public/frontend/images/dt.jpg') }}">
                </li>
                <li data-thumb="{{ asset('public/frontend/images/dt.jpg') }}" data-src="{{ asset('public/frontend/images/dt.jpg') }}" class="lslide" style="width: 474px; margin-right: 0px;">
                    <img src="{{ asset('public/frontend/images/dt.jpg') }}">
                    </li>
       </ul>  --}}
         {{--  <ul id="imageGallery"  style="width: 8058px; height: 338px; padding-bottom: 0% <li data-thumb="{{ asset('public/frontend/images/dt.jpg') }}" data-src=""{{ asset('public/frontend/images/dt.jpg') }}"style="width: 474px; margin-right: 0px;">
            <img  width="100%" src="{{ asset('public/frontend/images/dt.jpg') }}" />
          </li>>
            <li data-thumb="{{ asset('public/frontend/images/dt.jpg') }}" data-src=""{{ asset('public/frontend/images/dt.jpg') }}"">
              <img  width="100%" src="{{ asset('public/frontend/images/dt.jpg') }}" />
            </li>
            <li data-thumb="{{ asset('public/frontend/images/dt.jpg') }}" data-src=""{{ asset('public/frontend/images/dt.jpg') }}"">
                <img  width="100%" src="{{ asset('public/frontend/images/dt.jpg') }}" />
            </li>
            <li data-thumb="{{ asset('public/frontend/images/dt.jpg') }}" data-src=""{{ asset('public/frontend/images/dt.jpg') }}"">
                <img  width="100%" src="{{ asset('public/frontend/images/dt.jpg') }}" />
            </li>
          </ul>  --}}
         <div class="view-product">
            <img src="{{URL::to('/public/upload/product/'.$value->product_images)}}" alt="" />;
        </div>
      <div id="similar-product" class="carousel slide" data-ride="carousel">

              <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                      <a href=""><img  width="25%" src="{{URL::to('/public/upload/product/'.$value->product_images)}}"></a>
                      <a href=""><img  width="25%"src="{{URL::to('/public/upload/product/'.$value->product_images)}}"></a>
                      <a href=""><img width="25%"src="{{URL::to('/public/upload/product/'.$value->product_images)}}"></a>
                    </div>
                </div>

              <!-- Controls -->
              <a class="left item-control" href="#similar-product" data-slide="prev">
                <i class="fa fa-angle-left"></i>
              </a>
              <a class="right item-control" href="#similar-product" data-slide="next">
                <i class="fa fa-angle-right"></i>
              </a>
        </div>

    </div>
    <div class="col-sm-7">
        <div class="product-information"><!--/product-information-->
            <img src="images/product-details/new.jpg" class="newarrival" alt="" />
            <h2>{{$value->product_name}}</h2>
            <p>Mã ID: {{$value->product_id}}</p>
            <img src="images/product-details/rating.png" alt="" />
           <form action="{{ URL::to('/save-cart')}}" method="POST">
            @csrf
				{{ csrf_field() }}
            <span>
                <span>{{number_format($value->product_price,0,',','.').'VNĐ'}}</span>
                <label>Số lượng:</label>
                <input name="qty" type="number" min="1" value="1" max="{{$value->product_quantity}}"/>
                <input name="productid_hidden" type="hidden"  value="{{$value->product_id}}" />
                <input type="hidden"  value="{{$value->product_quantity}}" />
                <button type="submit" class="btn btn-fefault cart">
                    <i class="fa fa-shopping-cart"></i>
                  Thêm giỏ hàng
                </button>
            </span>
        </form>
        <p><b>Số lượng còn lại:</b><h4>{{$value->product_quantity}}</h4></p>

            <p><b>Điều kiện:</b>Mới 100%</p>
            <p><b>Thương hiệu:</b> {{$value->brand_name}}</p>
            <p><b>Danh mục:</b> {{$value->category_name}}</p>
            <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
        </div><!--/product-information-->
    </div>
</div>



<!--recommended_items-->

<h2 class="title text-center">Sản phẩm liên quan</h2>

<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="item active">
    @foreach($relate as $key => $lienquan)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                     <div class="single-products">
                        <div class="productinfo text-center product-related">
                            <img src="{{URL::to('public/upload/product/'.$lienquan->product_images)}}" alt="" />
                            <h2>{{number_format($lienquan->product_price,0,',','.').' '.'VNĐ'}}</h2>
                            <p>{{$lienquan->product_name}}</p>

                        </div>

                    </div>
                </div>
            </div>
    @endforeach

        </div>

    </div>

</div>


<!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#details" data-toggle="tab">Mô tả sản phẩm</a></li>
            <li><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>
            <li ><a href="#reviews" data-toggle="tab">Đánh giá </a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="details" >
            <p>{!!$value->product_desc!!}</p>
        <div class="tab-pane fade" id="companyprofile" >
            <p>{!!$value->product_content!!}</p>
        </div>
        <div class="tab-pane fade " id="reviews" >
            <div class="col-sm-12">
                 {{--  <ul>

                    <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                    <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                </ul>  --}}

                <p><b>Nhận xét về sản phẩm</b></p>
                <ul class="list-inline " title="Average Raiting">
                     @for($count=1;$count<=5;$count++)
                         @php
                         if($count<=$raiting){
                             $color='color:#ffcc00;';
                         }
                         else {
                             $color='color:#ccc;';
                         }
                         @endphp
                         <li title="đánh giá sao"
                             id= "{{ $value->product_id }}-{{ $count }}"
                             data-index="{{ $count }}"
                             data-product_id="{{ $value->product_id }}"
                             data-raiting= "{{ $raiting }}"
                             class="raiting"
                             style="cursor:pointer;
                            {{ $color }} font-size:30px;">
                             &#9733;
                            </li>
                               @endfor
                </ul>

                {{--  <form action="#">
                    <span>
                        <input type="text" placeholder="Your Name"/>
                        <input type="email" placeholder="Email Address"/>
                    </span>
                    <textarea name="" ></textarea>
                    <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                    <button type="button" class="btn btn-default pull-right">
                        Submit
                    </button>
                </form>  --}}
            </div>
        </div>

    </div>
</div><!--/category-tab-->
@endforeach

<div>




@endsection
