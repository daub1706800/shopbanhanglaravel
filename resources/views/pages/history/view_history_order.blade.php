@extends('layout')
@section('content')

<Link  rel = "stylesheet"  href = "//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
    <div class="table-agile-info">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
    Thông tin khách hàng
    </div>
    <div class="row w3-res-tb">

    </div>
    <div class="table-responsive">
                      <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>

            <th>Tên khách mua  hàng</th>
            <th>Số điện thoại người mua</th>
            <th>Email</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>

          <tr>

            <td>{{$customer->customer_name  }}</td>
            <td>{{$customer->customer_phone  }}</td>
            <td>{{$customer->customer_email  }}</td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
      Thông tin giao hàng
      </div>
      <div class="row w3-res-tb">

      </div>
      <div class="table-responsive">
                        <?php
                              $message = Session::get('message');
                              if($message){
                                  echo '<span class="text-alert">'.$message.'</span>';
                                  Session::put('message',null);
                              }
                              ?>
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th>Tên người nhận hàng</th>
              <th>Địa chỉ nhận hàng</th>
              <th>Số điện thoại nhận hàng</th>
              <th>Email</th>
              <th>Notes</th>

              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{$shipping->shipping_name}}</td>
              <td>{{$shipping->shipping_address }}</td>
              <td>{{$shipping->shipping_phone}}</td>
              <td>{{$shipping->shipping_email}}</td>
              <td>{{$shipping->shipping_notes   }}</td>

            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>

 <div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Liệt kê  chi tiết đơn hàng
      </div>
      <div class="row w3-res-tb">

      </div>
      <div class="table-responsive">
                        <?php
                              $message = Session::get('message');
                              if($message){
                                  echo '<span class="text-alert">'.$message.'</span>';
                                  Session::put('message',null);
                              }
                              ?>
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
            <th>STT</th>
              <th>Tên sản phẩm </th>
              <th>Số lượng sản phẩm </th>
              <th>Số lượng trong kho còn </th>
              <th>Giá sản phẩm</th>
              <th>Tổng cộng thanh toán</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
           <tbody>
                   @php
                   $i=0;
                   $total=0;
                   @endphp

              @foreach($order_details as $key =>$details)

                   @php
                    $i++;
                    $subtotal=$details->product_price* $details->product_sales_quantity;
                    $total+=$subtotal;
                    @endphp
                <tr>
                 <td>{{$i }}</td>
                <td>{{$details->product_name }}</td>
                <td>{{$details->product_sales_quantity }}</td>
                <td>{{$details->product->product_quantity }}</td>
                    <td>{{number_format($details->product_price ,0,',','.')}}đ</td>
                <td>{{number_format( $subtotal,0,',','.')}}đ</td>

            </tr>
            @endforeach
            <tr>

                <td>Thanh toán: {{number_format( $total,0,',','.')}}đ</td>
            </tr>

          </tbody>



        </table>
       

      </div>
    </div>
  </div>
  <a  target="blank" href="{{ url('/print-order/'.$details->order_id) }}"><button>In đơn hàng</button></a>
@endsection
