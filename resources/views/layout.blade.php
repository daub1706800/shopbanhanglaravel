<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="Thế giới điện thoại,shopbro.com, shopbro, điện thoại di động, dtdd, smartphone, tablet, máy tính bảng, laptop, máy tính xách tay, phụ kiện, smartwatch, đồng hồ, tin công nghệ" />
    <meta name="author" content="">
    <link href="" rel="shortcut icon" type="image/x-icon" />
    <link rel="dns-prefetch" href="http://shopbro.com.vn/">
    <meta content="INDEX,FOLLOW" name="robots" />
    <meta property="og:site_name" content="shopbro.com" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://shopbro.com/public/frontend/images/huaweit10s.jpg" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="fb:pages" content="214993791879039" />
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <title> Shopbro.com-Điện thoại-Máy tính bảng-Laptop</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href= "{{asset('public/frontend/css/bootstrap.min.css')}}"  rel="stylesheet">
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{asset ('public/frontend/css/price-range.css' )}}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/responsive.css' )}}" rel="stylesheet">

    <link href="{{ asset('public/frontend/css/sweetalert.css' ) }}" rel="stylesheet">

    <link href="{{ asset('public/frontend/css/lightgallery.min.css' ) }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/lightslider.min.css' ) }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/prettify.css' ) }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/lightslider.css' ) }}" rel="stylesheet">



    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{('public/frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!--/head-->

<marquee width="100%" STYLE="color:BLUE;" behavior="scroll"><b>THẾ GIỚI ĐIỆN THOẠI SHOPBRO, ĐIỆN THOẠI ,LAPTOP ,MÁY TÍNH XÁCH TAY, PHỤ KIỆN. (BÌNH LONG-BÌNH PHÚ-CAI LẬY-TIỀN GIANG)</b></marquee>
<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="#"><img src="{{ ('public/frontend/images/logo2.png') }}" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa"
                                    data-toggle="dropdown">
                                    USA
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa"
                                    data-toggle="dropdown">
                                  Việt Nam
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">VND</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">

                                <li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li>
                                <?php
                                $customer_id = Session::get('customer_id');
                                $shipping_id = Session::get('shipping_id');

                                if($customer_id!=NULL && $shipping_id==NULL){
                              ?>
                               <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>

                             <?php
                              }elseif($customer_id!=NULL && $shipping_id!=NULL){
                              ?>
                              <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                              <?php
                             }else{
                             ?>
                              <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                             <?php
                              }
                             ?>


                             <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                             @php
                             $customer_id = Session::get('customer_id');
                             if($customer_id!=NULL){
                           @endphp
                           <li><a href="{{URL::to('/history')}}"><i class="fa fa-history"></i> Lịch sử mua hàng</a></li>
                          @php
                             }
                           @endphp


                             <?php
                                $customer_id = Session::get('customer_id');
                                if($customer_id!=NULL){
                              ?>
                               <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất
                             </a>
                             <img width="15%" src="{{ Session::get('customer_picture') }}">
                             {{ Session::get('customer_name') }}
                            </li>

                             <?php
                         }else{
                              ?>
                              <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                              <?php
                          }
                              ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{ URL::to('/trang-chu') }}" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{ URL::to('/danh-muc-san-pham/11') }}">Laptop </a></li>
                                        <li><a href="{{ URL::to('/danh-muc-san-pham/8') }}">Smartphone</a></li>
                                        <li><a href="{{ URL::to('/danh-muc-san-pham/14') }}">Phụ kiện</a></li>
                                        <li><a href="{{ URL::to('/danh-muc-san-pham/17') }}">Tivi</a></li>
                                        <li><a href="{{ URL::to('/danh-muc-san-pham/10') }}">Máy tính bảng</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>

                                </li>
                                <li><a href="{{ URL::to('/show-cart') }}">Giỏ hàng</a></li>
                                <li><a href="{{ URL::to('/video-shop') }}">Video công ty</a></li>
                                <li><a href="contact-us.html">Liên hệ</a></li>
                                <div class="fb-like" data-href="http://shopbro.com/" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>




                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <form action="/tim-kiem" method="POST">
                            {{ csrf_field() }}
                        <div class="search_box pull-right">

                            <input type="text"  name="keywords_submit" id="keywords" placeholder="Tìm kiếm sản phẩm"
                            style="width:350px ;
                            "/>

                            <div id="search_ajax" style="position: absolute;
                            z-index: 1000;
                            background: white;">
                        </div>
                          <input type="submit" name="search_items" class="btn btn-info btn_sm" value="Tìm kiếm">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->
    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        <style type="text/css">
                            img.img.img-responsive.img-slider {
                                height: 350px;
                            }
                        </style>
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>G</span>alaxy S21 series 5G</h1>
                                    <h2>Smartphone  </h2>
                                    <p>Khai xuân như ý</p>
                                    <button type="button" class="btn btn-default get">Mua ngay nào.</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ ('public/frontend/images/dt.jpg') }}" class="girl img-responsive" alt="" />

                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1>Acer Aspire 3 Ạ315 54K</h1>
                                    <h2>Laptop chính hãng 100%</h2>
                                    <p>Khai xuân như ý. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay nào.</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ ('public/frontend/images/acer.jpg') }}"class="girl img-responsive" alt="" />

                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1>Huawei  Matepad T10s</h1>
                                    <h2>Ipad</h2>
                                    <p>Khai xuân như ý. </p>
                                    <button type="button" class="btn btn-default get">Mua ngay nào.</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ ('public/frontend/images/huaweit10s.jpg') }}" class="girl img-responsive" alt="" />

                                </div>
                            </div>

                        </div>


                        <a href="#slider-carousel" class="left control-carousel hidden-xs " data-slide="prev">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                         </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->

                        @foreach($category as $key => $cate)

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{ URL::to('/danh-muc-san-pham/'.$cate->category_id) }}">{{ $cate->category_name }}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!--/category-products-->

                        <div class="brands_products">
                            <!--brands_products-->
                            <h2>Thương hiệu sản phẩm</h2>
                             <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach($brand as $key => $brand)
                                    <li><a href="{{URL::to('/thuong-hieu/'.$brand->brand_id)}}"> {{$brand->brand_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!--/brands_products-->
                        {{--  <div class="wishlist">
                            <!--brands_products-->
                            <h2>Sản phẩm yêu thích</h2>
                             <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">

                                </ul>
                            </div>
                        </div><!--/wishlist-->  --}}
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>S</span>hopbro</h2>
                            <p>Laptop-điện thoại-máy tính bảng hàng mới nhất.</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/acer.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Latop Acer</p>
                                <h2>2/3/2021</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/samsung1.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Smart samsung</p>
                                <h2>2/3/2021</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/acer.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Laptop</p>
                                <h2>2021</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/acer.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Laptop</p>
                                <h2>2021</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="{{('public/frontend/images/acer.jpg')}}" alt="" />
                            <p>505 Cần Thơ,Việt Nam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Dịch vụ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Hỗ trợ trực tuyến</a></li>
                                <li><a href="#">Tương tác với chúng tôi</a></li>

                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Cửa hàng nhanh</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Phụ kiện</a></li>
                                <li><a href="#">Thẻ giảm giá</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Chính sách</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Điểu khoản sử dụng</a></li>
                                <li><a href="#">Chính sách bảo mật</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Thông tin Shopbro</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Thông tin công ty</a></li>
                                <li><a href="#">Bản quyền sở hữu</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Giới thiệu về Shopper</h2>
                            <form action="" class="searchform">
                                <ul class="nav nav-pills nav-stacked">
                                </ul>
                                    Nhận các thông tin khuyến mãi hấp dẫn nhất từ
                                    trang web của chúng tôi. </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

                    <marquee width="100%" behavior="alternate" bgcolor="pink">
                        Copyright © 2021 SHOPBRO Cần Thơ ,Việt Nam
                    </marquee>

    </footer>
    <!--/Footer-->

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v10.0'
        });
      };

      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
      attribution="setup_tool"
      page_id="109108354600885">
    </div>
    <div id="fb-root"></div>
    <div id="fb-root"></div>
    <div class="zalo-chat-widget" data-oaid="2351266528721207023" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="400" data-height="400"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0" nonce="DWx01fFC"></script>
    <div id="fb-root"></div>
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset( 'public/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{asset ('public/frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{asset( 'public/frontend/js/price-range.js') }}"></script>
    <script src="{{asset ('public/frontend/js/jquery.prettyPhoto.js' )}}"></script>
    <script src="{{asset ('public/frontend/js/sweetalert.min.js' )}}"></script>
    <script src="{{asset('public/frontend/js/main.js' )}}"></script>

    <script src="{{asset('public/frontend/js/lightgallery-all.min.js' )}}"></script>
    <script src="{{asset('public/frontend/js/lightslider.js' )}}"></script>
    <script src="{{asset('public/frontend/js/prettify.js' )}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>



    <script>
        var usd= document.getElementById("vn_to_usd").value;
        paypal.Button.render({
          // Configure environment
          env: 'sandbox',
          client: {
            sandbox: 'AekNr5oehqa32yA-Z8SI7WFf87_wb0hswl7ZMlxRzYQvo14DCw9nVvSKR6ixNpDx-kmd7bK30PXm3qUD',
            production: 'demo_production_client_id'
          },
          // Customize button (optional)
          locale: 'en_US',
          style: {
            size: 'large',
            color: 'gold',
            shape: 'pill',
          },

          // Enable Pay Now checkout flow (optional)
          commit: true,

          // Set up a payment
          payment: function(data, actions) {
            return actions.payment.create({
              transactions: [{
                amount: {
                  total: `${usd}`,
                  currency: 'USD'
                }
              }]
            });
          },
          // Execute the payment
          onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
              // Show a confirmation message to the buyer
              window.alert('Cảm ơn bạn đã mua hàng!');
            });
          }
        }, '#paypal-button');

      </script>




<script type="text/javascript">
     {{--  public function view(){
         if(localStorage.getItem('data')!=null){
         var data = JSON.parse(localStorage.getItem('data'));
         data.reverse();
         document.getElementById('row_wishlist').style.overflow = 'scroll';
         document.getElementById('row_wishlist').style.height = '600px';

         for(i=0;i<data.length;i++){
             var name = data[i].name;
             var image = data[i].image;
             var url = data[i].url;
             var price = data[i].price;
             $("#row_wishlist").append('<div class="row" style="margin:10px 0"><div class="col-md-4"><img src="'+image+
                '" width="100%"></div><div class="col-md-8 info_wishlist"><p>'+name+'</p><p style="color:#FE980F">'+
                    price+'</p><a href="'+url+'">Đặt hàng</a></div></div>');

         }
     }
 }
view();  --}}

    function add_wishlist(clicked_id){
        var id= clicked_id;
        var name=document.getElementById('wishlist_productname'+id).value;
        var price=document.getElementById('wishlist_productprice'+id).value;
        var image=document.getElementById('wishlist_productimage'+id).src;
        var url=document.getElementById('wishlist_producturl'+id).href;

        var newItem{
            'url':url,
            'id':id,
            'image':image,
            'name':name,
            'price':price

        }
        if(localStorage.getItem('data')==null){
            localStorage.setItem('data', '[]');
        }
        var old_data= JSON.parse(localStorage.getItem('data'));
        old_data.push(newItem);
        localStorage.setItem('data', JSON.stringify(old_data));

    }
    </script>



    <script type="text/javascript">
        function remove_background(product_id)
        {
            for(var count=1;count<=5;count++)
            {
                 $('#'+ product_id +'-'+count).css('color','#ccc');
            }

        }
        //hover chuot đánh giá sao

        $(document).on('mouseenter','.raiting',function(){

            var index = $(this).data("index");
            var product_id=$(this).data('product_id');


             remove_background(product_id);

            for(var count=1;count<=index;count++)
            {
                $('#'+ product_id +'-'+count).css('color','#ffcc00');
            }

        });
        //nha chuột không đánh giá
        $(document).on('mouseleave','.raiting',function(){
            var index = $(this).data("index");
            var product_id=$(this).data('product_id');
            var raiting=$(this).data("raiting");
            remove_background(product_id);
            for(var count=1;count<=raiting; count++)
            {
                $('#'+product_id+'-'+count).css('color','#ffcc00');
            }

        });
        //click danh gia sao
        $(document).on('click','.raiting',function(){
            var index = $(this).data("index");
            var product_id=$(this).data('product_id');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{ url('/insert-raiting') }}",
                method:"POST",
                data:{index:index,product_id:product_id,_token:_token},
                success:function(data)
                {
                    if(data =='done')
                    {
                        alert("Bạn đã đánh giá" + " "+ index +" " + "trên 5");

                    }
                    else{
                        alert("Bạn đã đánh giá" + " "+index+ " "+ "trên 5");
                    }
                }

            });


        });
    </script>
    <script type="text/javascript">
        $('#keywords').keyup(function(){
            var query= $(this).val();
            if(query != '')
            {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{ url('/autocomplete-ajax') }}",
                    method: "POST",
                    data:{
                        query:query,
                        _token:_token
                    },
                    success:function(data){
                     //   console.log(data);
                        var html = $("#search_ajax");
                        html.empty();
                        for(var i =0; i<= data.length; i++){
                            var item = data[i];
                           // console.log(item.product_name);

                            var els= $(`<li class="dropdown-list" style="display:block; position:relative"><a href="/chi-tiet-san-pham/${item.product_id}"><img src="/public/upload/product/${item.product_images}" height="40" width="40"> ${item.product_name} </a></li>`);
                          //  console.log(els);
                           // $('search_ajax').fadeIn(data);
                            //$('search_ajax').append(data);
                            html.append(els);
                        }

                    }
                });
            }else{

                $('search_ajax').fadeOut();
            }

        });
        $(document).on('click','li',function(){
            $('#keywords').val($(this).text());
            $('search_ajax').fadeOut();
            $('search_ajax').html(data);

        });
    </script>
    <script type="text/javascript">
      function  Huydonhang(id){
          var order_id=id;
          var lydo=$('.lydohuydon').val();
          var _token = $('input[name="_token"]').val();
          var order_status=3;
          {{--  alert(order_id);
          alert(lydo);
          alert(_token);  --}}



           $.ajax({
            url :'{{ url('/huy-don-hang') }}',
             method:"POST",
              data:{_token:_token,order_id:order_id,lydo:lydo,order_status:order_status},
            success:function(data){
                alert("Hủy đơn hàng thành công");

            }

        });

       }
    </script>




<script type="text/javascript">
    $(document).on('click','.watch-video',function() {
           var video_id = $(this).attr('id');
           var _token = $('input[name="_token"]').val();
           $.ajax({
               url:'{{url('/watch-video')}}',
               method:"POST",
               dataType:"JSON",
               data:{video_id:video_id,_token:_token},
                  success:function(data){
               $('#video_title').html(data.video_title);
               $('#video_link').html(data.video_link);
            }
           });
    });
</script>
 <script type="text/javascript">
        $('.order_details').change(function(){
            var order_status=$(this).val();
            var order_id=$(this).children(":selected").attr("id");
            var _token=$('input[name="_token"]').val();

            {{-- alert(order_status); --}}
            {{-- alert(order_id); --}}
//lay ra so luong
             quantity=[];
             $("input[name='product_sales_quantity']").each(function(){
                 quantity.push($(this).val());
             });
  //lay ra product_id
              order_product_id=[];
              $("input[name='order_product_id']").each(function(){
                order_product_id.push($(this).val());
            });
            j=0;
            for(i=0;i<order_product_id.length;i++){
                //so luong khach dat
               var order_qty=$('.order_qty_'+order_product_id[i]).val();
               var order_qty_storage=$('.order_qty_storage_'+order_product_id[i]).val();
              if(parseInt( order_qty)>parseInt(order_qty_storage)){
                  j=j+1;
                  if(j==1){
                  alert('Số lượng bán không đủ');
                  }
                  $('.color_qty_'+order_product_id[i]).css('background','#000');
              }
            }

     if(j==0){

    $.ajax({
        url :'{{ url('/update-order-qty') }}',
        method: 'POST',
        data:{_token:_token,order_status:order_status,order_id:order_id,quantity:quantity,order_product_id:order_product_id},
        success:function(data){
            alert("Cập nhật trạng thái thành công");
            location.reload();
        }
    });

   }





        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#sort').on('change',function(){
                var url=$(this).val();
                alert(url);
                if(url){
                    window.location=url;
                }
                return false;

            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.send_order').click(function(){
                swal({
                    title:"Xác nhận đơn hàng",
                    text:"Đơn hàng sẽ không được hoàn trả khi đặt,bạn có muốn đặt không?",
                    type:"warning",
                    showCancelButton:true,
                    confirmButtonClass:"btn-danger",
                    confirmButtonText:"Cảm ơn,Mua hàng",
                    cancelButtonText:"Đóng ,chưa mua",
                    closeOnConfirm:false,
                    closeOnCancel:false

                },
                function(isConfirm){
                    if(isConfirm){
                        var shipping_email=$('.shipping_email').val();
                        var shipping_name=$('.shipping_name').val();
                        var shipping_address=$('.shipping_address').val();
                        var shipping_phone=$('.shipping_phone').val();
                        var shipping_notes=$('.shipping_notes').val();
                        var _token=$('input[name="_token"]').val();

                        $.ajax({
                            url:'{{ url('/confirm-order') }}',
                            method:'POST',
                            data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token_token},

                            success:function(data){
                                swal("Đơn hàng","Đơn hàng của bạn đã được gửi thành công","success");
                            }

                        });
                        window.setTimeout(function(){
                            location.reload();
                        },3000);
                    }else{
                        swal("Đóng","Đơn hàng của bạn chưa  được gửi,làm ơn hoàn tất đơn hàng ","error");
                    }

                });

            });
        });
    </script>

    <script type="text/javascript">
        $('.xemnhanh').click(function(){
            var product_id = $(this).data('id_product');
            var _token=$('input[name="_token"]').val();
         console.log(product_id);
            $.ajax({
                url:"/quickview/",
                method: "POST",
                dataType:"JSON",
                data:{product_id:product_id,_token:_token},
                 success:function(data){

                     $('#product_quickview_title').html(data.product_name);
                     $('#product_quickview_id').html(data.product_id);
                     $('#product_quickview_price').html(data.product_price);
                     $('#product_quickview_images').html(data.product_images);
                     $('#product_quickview_desc').html(data.product_desc);
                     $('#product_quickview_content').html(data.product_content);
                 }
            });

        });
</script>


<script type="text/javascript">
    function getUserInfo(data) {
        return $(`
            <input type="text" readonly name="shipping_email" class="shipping_email" placeholder="Điền email" value="${data.email_customer}" required style="width:535px">
             <br><br><input type="text" readonly name="shipping_name" class="shipping_name" placeholder="Họ và tên người gửi" value="${data.name_customser}"required style="width:535px">
         <br>   <br>    <input type="text" readonly name="shipping_phone" class="shipping_phone" placeholder="Số điện thoại" value="${data.phone_customer}" required style="width:535px">

           <br>   <br><input type="text" name="shipping_address" class="shipping_address" placeholder="Địa chỉ gửi hàng" value="${data.address_customer}"required style="width:535px">
         <br>   <br>

         {{--  <input type="text" list="cars" name="shipping_address" class="shipping_address"  style="width:535px"/>
             <datalist id="cars">
                <option>${data.address_customer}</option>
                <option>CT</option>

            </datalist>  --}}


          {{--  <button type="button" class="btn btn-primary">Thêm địa chỉ mới</button>  --}}


            `);
    }

    $(document).ready(function(e){
        $.ajax({
            url:'{{url('/show-customer')}}',
            method:"GET",
            success:function(data){
                console.log(data);
                var htmlContent1 = $('#getUserInfo1');
                htmlContent1.html("");
                var els = getUserInfo(data);
                htmlContent1.append(els);
            }
        });
    }
    );

</script>

<script>!(function () {
    let e = document.createElement("script"),
      t = document.head || document.getElementsByTagName("head")[0];
    (e.src =
      "https://cdn.jsdelivr.net/npm/rasa-webchat@1.0.0/lib/index.js"),
      // Replace 1.x.x with the version that you want
      (e.async = !0),
      (e.onload = () => {
        window.WebChat.default(
          {
            initPayLoad: '/greet',
            customData: { language: "en" },
            socketUrl: "http://localhost:5005",
            // add other props here
          },
          null
        );
      }),
      t.insertBefore(e, t.firstChild);
  })();
  </script>
  <!-- Messenger Plugin chat Code -->
  <div id="fb-root"></div>

  <!-- Your Plugin chat code -->
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>

  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "111309991313131");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v12.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

</body>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3928.8414543437275!2d105.76842661433204!3d10.029938975271191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1625759329799!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</html>
