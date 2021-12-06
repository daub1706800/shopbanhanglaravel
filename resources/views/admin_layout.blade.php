
    <!DOCTYPE html>
    <head>

    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/bootstrap.min.css') }}" >
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('public/backend/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{asset ('public/backend/css/style-responsive.css') }}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/font.css') }}" type="text/css"/>
    <link href="{{asset ('public/backend/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/backend/css/morris.css') }}" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/monthly.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.12.1/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->

    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .dropbtn {
        background-color: #134414;
        color:rgb(5, 5, 24);
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
      }

      .dropdown {
        position: relative;
        display: inline-block;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #18b365;
        min-width: 240px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }

      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }

      .dropdown-content a:hover {background-color: #f1f1f1}

      .dropdown:hover .dropdown-content {
        display: block;
      }

      .dropdown:hover .dropbtn {
        background-color: #3e8e41;
      }

</style>
    </head>
    <body>
    <section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">
        <a href="{{ URL::to('/trang-chu') }}" class="logo">
            Trang chủ
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <!--logo end-->
        <!--  notification end -->
    </div>
    <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder=" Search">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown ">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="{{ asset('public/backend/images/2.png') }}">
                    <span class="username">
                        <?php
                        $name = Session::get('admin_name');
                        if($name){
                            echo $name;
                            Session::put('name',null);
                        }
                        ?>
                    </span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-content list-group">
                    <li  class="list-group-item"><a href="#"><i class="fa fa-cog"></i>Cài đặt</a></li>
                    <li  class="list-group-item"><a href="{{ URL::to('/logout') }}"><i class="fa fa-key "></i> Đăng xuất</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->

        </ul>
        <!--search & user info end-->
    </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>

        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">

                    {{--  <li>
                        <ul class="sub">
                            <li><a href="{{ URL::to('/add-slider') }}">Thêm slider</a></li>
                            <li><a href="{{ URL::to('/manage-banner') }}">Liệt kê lider</a></li>

                        </ul>
                    </li>  --}}
                    <li class=" dropdown" >
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Tổng quan</span>
                        </a>
                        <ul class="dropdown-content">
                            <li><a href="{{ URL::to('/dashboard') }}">Tổng quan</a></li>

                        </ul>
                    </li>
<br>
<style>
    span.badges{
        background-color: red;
        padding: 10px;
        border-radius:10px;
        font-size:14px;
        font-weight:bold;
        color: white;
    }
</style>
                    <li class=" dropdown" >
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Đơn hàng</span>
                            <span class="badges">7</span>
                        </a>
                        <ul class="dropdown-content">
                            <li><a href="{{ URL::to('/manage-order') }}">Quản lý đơn hàng</a></li>

                        </ul>
                    </li>
                    <li class=" dropdown">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Danh mục sản phẩm</span>
                        </a>
                        <ul class="dropdown-content">
                            <li><a href="{{ URL::to('/add-category-product') }}">Thêm danh mục sản phẩm</a></li>
                            <li><a href="{{ URL::to('/all-category-product') }}">Liệt kê danh mục sản phẩm</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu dropdown">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span> Thương hiệu sản phẩm</span>
                        </a>
                        <ul class="sub dropdown-content">
                            <li><a href="{{ URL::to('/add-brand-product') }}">Thêm thương hiệu sản phẩm</a></li>
                            <li><a href="{{ URL::to('/all-brand-product') }}">Liệt kê thương hiệu sản phẩm</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu dropdown">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span> Sản phẩm</span>
                        </a>
                        <ul class="sub  dropdown-content">
                            <li><a href="{{ URL::to('/add-product') }}">Thêm sản phẩm</a></li>
                            <li><a href="{{ URL::to('/all-product') }}">Liệt kê  sản phẩm</a></li>
                        </ul>
                    </li>

<br>
                    <li class="sub-menu dropdown">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Video</span>
                        </a>
                        <ul class="sub  dropdown-content">
                            <li><a href="{{ URL::to('/video') }}">Thêm video</a></li>

                        </ul>
                    </li>
<br>
               @hasrole('admin')
                    <li class="sub-menu dropdown">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Quyền tài khoản</span>
                        </a>
                        <ul class="sub  dropdown-content">
                            <li><a href="{{ URL::to('/add_users') }}">Thêm quyền</a></li>
                            <li><a href="{{URL::to('/users')}}">Liệt kê user</a></li>
                        </ul>

                    </li>
                  @endhasrole
                </ul>            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
         @yield('admin_content')
    </section>
     <!-- footer -->
              <div class="footer">
                <div class="wthree-copyright">
                  <p>© 2021 - Bản quyền của Công Ty Cổ Phần Shopbro - Shopbro.com   </a></p>
                </div>
              </div>
      <!-- / footer -->
    </section>
    <!--main content end-->
    </section>
    <script src="{{ asset('public/backend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('public/backend/js/scripts.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('public/backend/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('pubic/backend/js/jquery2.0.3.min.js') }}"></script>
    <script src="{{ asset('pubic/backend/js/raphael-min.js') }}"></script>
    <script src="{{ asset('pubic/backend/js/morris.js') }}"></script>
    <script  src="{{ asset('public/backend/js/validator.js') }}"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.12.1/js/bootstrap-datepicker.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
       $(document).ready( function () {
        $('#myTable').DataTable();
        } );
    </script>


     {{--  <script type="text/javascript">
        $(document).ready(function(){
            var chart=new Morris.Line({

                element: 'myfirstchart',

                lineColors:['#819C79','#fc8710','#FF6541','#A4ADD3','#766B56'],
                pointFillColors:['#ffffff'],
                pointStrokeColors:['black'],
                fillOpacity:0.6,
                hideHover:'auto',
                data: [
                  { year: '2017', value: 300 },
                  { year: '2018', value: 1000 },
                  { year: '2019', value: 500 },
                  { year: '2020', value: 50 },
                  { year: '2021', value: 200 }
                ],

                xkey: 'year',

                ykeys: ['value'],

                labels: ['Value']

        });
    });
    </script  --}}


    <script type="text/javascript">

    $(document).ready(function(){
        var chart=new Morris.Donut({
            element: 'donut',
  resize: true,
  colors: [
    '#E0F7FA',
    '#B2EBF2',
    '#80DEEA',
    '#4DD0E1',
    '#26C6DA',
    '#00BCD4',
    '#00ACC1',
    '#0097A7',
    '#00838F',
    '#006064'
  ],
  data: [
    {label:"1", value:123, color:colorDanger},
    {label:".2", value:369},
    {label:".3", value:246},
    {label:"Dato Ej.4", value:159},
    {label:"Dato Ej.5", value:357}
  ]
});
</script >

    <script type="text/javascript">
        $(document).ready(function(){

            chart60ngaysorder();

            var chart =new Morris.Bar({

                element: 'chart',

                lineColors:['#819C79','#fc8710','#FF6541','#A4ADD3'],
                hideHover:'auto',
                parseTime:false,
                data: [
                    { year: '2017', value: 300 },
                    { year: '2018', value: 1000 },
                    { year: '2019', value: 500 },
                    { year: '2020', value: 50 },
                    { year: '2021', value: 200 }
                  ],
                xkey: 'period',
                ykeys: ['order','sales','profit','quantity'],

                labels: ['đơn hàng','doanh số','lợi nhuận','số lượng']
            });

            function chart60ngaysorder(){
                var _token=$('input[name="_token"]').val();
                $.ajax({

                    url:"{{ ('/days-order') }}",
                    method:"POST",
                    dataType:"json",
                    data:{_token:_token},
                    success:function(data)
                    {
                        chart.setData(data);
                    }
                });
            }

    </script>


    <script type="text/javascript">
        $('.dashboard-filter').change(function(){
            var dashboard_value= $(this).val();
            var _token=$('input[name="_token"]').val();
            {{--  alert(dashboard_value);  --}}
            $.ajax({
                url:"{{ url('/dashboard-filter') }}",
                method:"POST",
                dataType:"JSON",
                data:{dashboard_value:dashboard_value,_token:_token},
                success:function(data)
                {
                    chart.setData(data);
                }

            });
         });

    </script>
    <script type="text/javascript" >
        $( function() {
          $( "#datepicker").datepicker({
              prevText:"Tháng trước",
              nextText:"Tháng sau",
              dateFormat:"yy-mm-dd",
              dayNamesMin:["Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7","Chủ Nhật"],
              duration:"slow"
          });

    } );
        </script>
        <script type="text/javascript" >
            $( function() {
              $( "#datepicker2").datepicker({
                  prevText:"Tháng trước",
                  nextText:"Tháng sau",
                  dateFormat:"yy-mm-dd",
                  dayNamesMin:["Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7","Chủ Nhật"],
                  duration:"slow"
              });

        } );
            </script>

         <script type="text/javascript">
            $('#btn-dashboard-filter').click(function(){
                var from_date = $('#datepicker').val();
                var to_date=$('#datepicker2').val();
                var _token=$('input[name="_token"]').val();
               $.ajax({
                   url:"{{ url('/filter-by-date') }}",
                   method:"GET",
                   dataType:"JSON",
                   data:{from_date:from_date,to_date:to_date,_token:_token},
                   success:function(data)
                   {
                        console.log(data.length);
                        j = 0;
                        var filterOrderingBill = $('#filterOrderingBill');
                        filterOrderingBill.html("");
                        console.log(data);
                        for(i=0; i<data.length; i++){
                            //  filterOrderingBill.html("");
                            var els1 = `
                            <tr style="background:white">
                                <th scope="row">${i+1}</th>
                                <td>${data[i].updated_at ??"Đang cập nhật"}</td>
                                <td>${data[i].customer_id ??"Đang cập nhật"}</td>
                                <td>${data[i].order_id ??"Đang cập nhật"}</td>
                                <td>${data[i].order_status ??"Đang cập nhật"}</td>
                                <td>${data[i].order_total ??"Đang cập nhật"}</td>
                              </tr>
                            `;
                            filterOrderingBill.append(els1);
                        }
                        //chart.setData(data);
                   }

               });
            });
        </script>

    <script type="text/javascript">
        $(document).ready(function(){

        load_video();
        function load_video(){
            var_video=$('input[name="_token"]').val();
            $.ajax({
                url:"{{ url('/select-video') }}",
                method:"POST",
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success:function(data){
                    $('#video_load').html(data);
                }

            });

        }
        $(document).on('click','.btn-add-video',function(){
            var video_title = $('.video_title').val();
            var video_link = $('.video_link').val();
            var video_desc = $('.video_desc').val();

            var _token=$('input[name="_token"]').val();
            $.ajax({
                url:"{{ url('/insert-video') }}",
                method:"POST",
                data:{_token:_token,video_title:video_title,video_link:video_link,video_desc:video_desc},
                success:function(data){
                    load_video();
                    $('#notify').html('<span class="text text-success"> Thêm video thành công</span>');
                }

            });


        });
        $(document).on('click','.btn-delete-video',function(){
            var video_id=$(this).data('video_id');
          if(confirm('Bạn có muốn xóa không?')){
            $.ajax({
                url:"{{ url('/delete-video') }}",
                method:"POST",
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{video_id:video_id},
                success:function(data){
                    load_video();
                    $('#notify').html('<span class="text text-success"> Xóa video thành công</span>');
                }

            });
        }


        });
        $(document).on('blur','.video_edit',function(){
            var video_type=$(this).data('video_type');
            var video_id=$(this).data('video_id');

           if(video_type=='video_title'){
           var video_edit=$('#'+video_type+'_'+video_id).text();
           var video_check=video_type;
           }else if(video_type=='video_desc'){
            var video_edit= $('#'+video_type+'_'+video_id).text();
            var video_check=video_type;
           }else{
            var video_edit=$('#'+video_type+'_'+video_id).text();
            var video_check=video_type;
           }
           $.ajax({
            url:"{{ url('/update-video') }}",
            method:"POST",
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{video_edit:video_edit,video_id:video_id,video_check:video_check},
            success:function(data){
                load_video();
                $('#notify').html('<span class="text text-success"> Cập nhật video thành công</span>');
            }

        });

        });

    });
    </script>
    <script type="text/javascript">
        $('.update_quantity_order').click(function(){
            var order_product_id=$(this).data('product_id');
            var order_qty=$('.order_qty_'+order_product_id).val();
            var order_id=$('.order_id').val();
            var _token=$('input[name="_token"]').val();
            {{--  alert(order_qty);  --}}

            $.ajax({
                url :'{{ url('/update-qty') }}',
                method: 'POST',
                data:{_token:_token,order_product_id:order_product_id,order_qty:order_qty,order_id:order_id},
                success:function(data){
                    alert("Cập nhật số lượng thành công");
                    location.reload();
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
   // <script type="text/javascript">
     //   $("#fsave").validate({
        //    console.log("submit");
        //   var inputTag=document.querySelector("#product_name");
        //    if(inputTag.value == null){
        //        alert("Vui long nhan";)
        ///    }
    // });
//</script>
<script>
    Validator({
        form:'fsave',
        rules:[
            Validator.isRequired('#product_name'),
            Validator.isEmail('#product_price'),
        ]
    });
</script>
    <script>
        CKEDITOR.replace('ckeditor');
        CKEDITOR.replace('ckeditor1');
        CKEDITOR.replace('ckeditor2');
        CKEDITOR.replace('ckeditor3');


    </script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{ asset('public/backend/js/jquery.scrollTo.js') }}"></script>
    <!-- morris JavaScript -->
    <script>
        $(document).ready(function() {
            //BOX BUTTON SHOW AND CLOSE
           jQuery('.small-graph-box').hover(function() {
              jQuery(this).find('.box-button').fadeIn('fast');
           }, function() {
              jQuery(this).find('.box-button').fadeOut('fast');
           });
           jQuery('.small-graph-box .box-close').click(function() {
              jQuery(this).closest('.small-graph-box').fadeOut(200);
              return false;
           });

            //CHARTS
            function gd(year, day, month) {
                return new Date(year, month - 1, day).getTime();
            }

            graphArea2 = Morris.Area({
                element: 'hero-area',
                padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth:true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity:0.85,
                data: [
                    {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                    {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                    {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                    {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                    {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                    {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                    {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                    {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                    {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},

                ],
                lineColors:['#eb6f6f','#926383','#eb6f6f'],
                xkey: 'period',
                redraw: true,
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });


        });
        </script>
    <!-- calendar -->
        <script type="text/javascript" src="{{ asset('public/backend/js/monthly.js') }}"></script>
        <script type="text/javascript">
            $(window).load( function() {

                $('#mycalendar').monthly({
                    mode: 'event',

                });

                $('#mycalendar2').monthly({
                    mode: 'picker',
                    target: '#mytarget',
                    setWidth: '250px',
                    startHidden: true,
                    showTrigger: '#mytarget',
                    stylePast: true,
                    disablePast: true
                });

            switch(window.location.protocol) {
            case 'http:':
            case 'https:':
            // running on a server, should be good.
            break;
            case 'file:':
            alert('Just a heads-up, events will not work when run locally.');
            }

            });
        </script>
        <!-- //calendar -->
    </body>
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3928.8414543437275!2d105.76842661433204!3d10.029938975271191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1625759329799!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </html>
