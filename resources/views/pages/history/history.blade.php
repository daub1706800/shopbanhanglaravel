@extends('layout')
@section('content')

<Link  rel = "stylesheet"  href = "//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
<div class="table-agile-info">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="panel panel-default">
      <div class="panel-heading">
        Đơn hàng của bạn
      </div>

      <div class="table-responsive">
        <?php
        $message = Session::get('message');
       if($message){
           echo $message;
            Session::put('message',null);
              }
           ?>
        <table class="table table-striped b-t b-light">

          <thead>


            <tr>

              <th>STT</th>
              <th>Mã đơn hàng</th>
              <th>Mã khách hàng</th>
              <th>Tình trạng đơn hàng</th>
              <th >Thao tác</th>

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
              <td>{{ $ord->customer_id }}</td>
              <td>
                  @if($ord->order_stautus==1)
                    <span class="text text-success">Chờ xử lý</span>
                     @elseif($ord->order_status==1)
                    <span class="text text-success"> Đơn hàng mới</span>
                    @elseif($ord->order_status==2)
                    <span class="text text-warning"> Đã xử lý-Đã giao hàng</span>
                    @else
                    <span class="text text-danger">Đơn hàng đã bị hủy</span>
                  @endif
                  {{--  print_r($ord->order_stautus);die;  --}}
              </td>
           <td>

               <p> <a href="{{ URL::to('/view-history-order/'.$ord->order_id) }}"  ui-toggle-class="">
                   Xem đơn hàng</a></p></td>
                     <td>

            <!-- Trigger the modal with a button -->
            @if($ord->order_status!=2&&$ord->order_status!=3)
        <p><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#huydon">Hủy đơn hàng</button></p>
            @endif


<form>
    @csrf
<!-- Modal -->
<div id="huydon" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hủy đơn hàng</h4>
      </div>
      <div class="modal-body">
        <p><textarea rows="5" class="lydohuydon" required placeholder="Lý do hủy đơn hàng.....(bắt buộc)"></textarea></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        @if($ord->order_status=3)
        <button type="button" id="{{$ord->order_id }}" onclick="Huydonhang(this.id)" class="btn btn-success" >Gửi lý do hủy</button>

      @endif

    </div>
    </div>
</form>
  </div>
</div>


            </tr>

            @endforeach

          </tbody>
        </table>
      </div>


    </div>
  </div>
@endsection
