@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->

                        <h2 class="title text-center">Sản phẩm mới nhất</h2>

                        @foreach($all_product as $key => $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">

                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <form>
                                                @csrf
                                            <input type="hidden" value="{{$product->product_id}}" class="cart_product_id_{{$product->product_id}}">
                                            <input type="hidden" id="wishlist_productname{{$product->product_id}}" value="{{$product->product_name}}" class="cart_product_name_{{$product->product_id}}">
                                            <input type="hidden" value="{{$product->product_quantity}}" class="cart_product_name_{{$product->product_quantity}}">
                                            <input type="hidden" value="{{$product->product_images}}" class="cart_product_images_{{$product->product_id}}">
                                            <input type="hidden" id="wishlist_productprice{{$product->product_id}}"value="{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}" class="cart_product_price_{{$product->product_id}}">
                                            <input type="hidden" value="1" class="cart_product_qty_{{$product->product_id}}">

                                            <a  id="wishlist_producturl{{$product->product_id}}"href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
                                                <img id="wishlist_productimage{{$product->product_id}}"src="{{URL::to('public/upload/product/'.$product->product_images)}}" alt="" />
                                                <h2>{{number_format($product->product_price,0,',','.').' '.'VNĐ'}}</h2>
                                                <p>{{$product->product_name}}</p>


                                             </a>
                                             <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>

                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#xemnhanh"
                                                value="Xem nhanh" class="btn btn-default xemnhanh" data-id_product="$product->product_id"
                                                name="add-to-cart">
                                           Xem nhanh
                                                  </button>

                                            </form>

                                        </div>

                                </div>

                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                    <style type="text/css">
                                        ul.nav.nav-pills.nav-justified  li{
                                            text-align: center;
                                            font-size:13px;
                                        }
                                        .button_wishlist{
                                            border: none;
                                            background: #ffff;
                                            color: #83AFA8;
                                        }
                                        ul.nav.nav-pills.nav-justified  i{
                                            color: #83AFA8;
                                        }
                                        .button_wishlist span:hover{
                                            color: #FE980F;
                                        }
                                        .button_wishlist:focus{
                                            border: none;
                                            outline: none;
                                        }
                                       </style>
                                        <li>
                                           <i class="fa fa-plus-square"></i>
                                           <button  class="button_wishlist" id="{{$product->product_id}}"
                                               onclick="add_wishlist(this.id);"><span>Yêu Thích</span>

                                           </button>
                                        </li>

                                        <li><a href="#"><i class="fa fa-plus-square"></i>Xem chi tiết</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div><!--features_items-->
                    <!-- Modal -->

<div class="modal fade" id="xemnhanh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title product_quickview_title" >
            <span id="product_quickview_title"></span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-5">
            <span id="product_quickview_images"></span>
            Hình ảnh
            </div>
            <div class="col-md-7">
                Mô tả
            </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary">Đi tới sản phẩm</button>
      </div>
    </div>
  </div>
</div>
                      <ul class="pagination pagination-sm m-t-none m-b-none">

                      </ul>
        <!--/recommended_items-->
@endsection
