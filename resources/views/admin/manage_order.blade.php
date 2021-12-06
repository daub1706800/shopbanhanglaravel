@extends('admin_layout')
@section( 'admin_content')
<Link  rel = "stylesheet"  href = "//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
<div class="table-agile-info">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="panel panel-default">
      <div class="panel-heading">
        Đơn hàng của bạn
      </div>
      <div class="row w3-res-tb">



      </div>
      <div class="table-responsive">
        <?php
        $message = Session::get('message');
       if($message){
           echo $message;
            Session::put('message',null);
              }
           ?>
        <table class="table table-striped b-t b-light" id="myTable">
          <thead>
            <tr>

              <th>STT</th>
              <th>Mã đơn hàng</th>
              <th>Tình trạng đơn hàng</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
              @php
                  $i=0;
              @endphp
              @foreach($order as $key => $ord)
              @php
                  $i++;
              @endphp


            <tr>

              <td>{{ $i}}</td>
              <td>{{ $ord->order_id }}</td>
              <td>
                  @if($ord->order_stauts==1)
                <span class="text text-success">Đơn hàng mới</span>
                @elseif($ord->order_status==1)
                <span class="text text-success">Đơn hàng mới</span>
                  @elseif($ord->order_status==2)
                  <span class="text text-warning">Đã xử lý-Đã giao hàng</span>
                  @else
                  <span class="text text-danger">Đơn hàng đã bị hủy</span>
                  @endif
              </td>

              <td>
                <a href="{{ URL::to('/view-order/'.$ord->order_id) }}" class="active" ui-toggle-class="">
                    <i class="fa fa-eye text-success text-active" ></i></a>
                <a onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" href="{{ URL::to('/delete-order/'.$ord->order_id) }}" class="active" ui-toggle-class="">
                    <i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>


    </div>
  </div>
@endsection
