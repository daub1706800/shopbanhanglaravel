{{--  @extends('admin_layout')
@section( 'admin_content')
<h3>Chào mừng bạn đến với Admin</h3>
<div class="container-fluid">
    <style type="text/css">
        text-align:center;
        font-size:20px;
        font-weight:bold;
        </style>
        <div class="row">
            <p class="title_thongke">Thống kê doanh thu:</p>
            <form autocomplete="off">
               @csrf
                <div class="col-md-2">
                    <p>Từ ngày:
                        <input type="text" id="datepicker" class="form-control">
                    </p>
                    <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lọc kết quả"></p>
                </div>
                <div class="col-md-2">
                    <p>
                        Đến ngày:<input type="text" id="datepicker2" class="form-control">
                    </p>
                </div>
                <div class="col-md-2">
                    <p>
                        Lọc theo:
                            <select class="dashboard-filter form-control">
                               <option>--Chọn--</option>
                               <option vaule="7ngay">7 ngày qua</option>
                               <option vaule="thangtruoc">tháng trước</option>
                               <option vaule="thangnay">tháng này</option>
                               <option vaule="365ngayqua">365 ngày qua</option>
                            </select>
                    </p>
                </div>
            </form>
            <div class="col-md-12">
                <div id="myfirstchart" style="height: 250px;"></div>
            </div>
    </div>
 <script>
    $( function() {
      $( "#datepicker" ).datepicker({
          dateFormat:"yy-mm-dd"

      });

    } );

    </script>
    <script>
    $( function() {
        $( "#datepicker2" ).datepicker({
            dateFormat:"yy-mm-dd"

        });

      } );

      </script>
@endsection  --}}

  <!doctype html>
  @extends('admin_layout')
@section( 'admin_content')
<h3>Chào mừng bạn đến với Admin</h3>
<h2>Thống kê hóa đơn</h2>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Datepicker - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
      $( "#datepicker" ).datepicker({
          dateFormat:"yy-mm-dd"

      });

    } );

    </script>
    <script>
    $( function() {
        $( "#datepicker2" ).datepicker({
            dateFormat:"yy-mm-dd"

        });
      } );
      </script>
  </head>
  <body>


    <form autocomplete="off">
        @csrf
        <div class="col-md-2">
  <p>Từ ngày: <input type="text" id="datepicker" placeholder="YYYY-MM-DD"></p>
        </div>
  <div class="col-md-2">
  <p>Đến ngày: <input type="text" id="datepicker2" placeholder="YYYY-MM-DD"></p>
  <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lọc kết quả">
</div>
  <div class="col-md-4">
  {{-- <p>
    Lọc theo:
        <select class="dashboard-filter form-control">
           <option>--Chọn--</option>
           <option vaule="7ngay">7 ngày qua</option>
           <option vaule="thangtruoc">tháng trước</option>
           <option vaule="thangnay">tháng này</option>
           <option vaule="365ngayqua">365 ngày qua</option>
        </select>
</p> --}}
</div>
</form>

{{-- <div class="col-md-12">
    <div id="chart" style="height: 255px;"></div>
</div>
<style type="text/css">
    text-align:center;
    font-size:20px;
    font-weight:bold;

    </style> --}}


<table class="table table-bordered table-dark" >
    <thead>
      <tr style=" background:rgb(33, 41, 163)">
        <th  style="color:rgb(209, 247, 250)"scope="col">STT</th>
        <th  style="color:rgb(209, 247, 250)"scope="col">Ngày</th>
        <th  style="color:rgb(209, 247, 250)" scope="col">Mã khách hàng</th>
        <th  style="color:rgb(209, 247, 250)"scope="col">Mã hóa đơn</th>
        <th  style="color:rgb(238, 209, 250)"scope="col">Trạng thái</th>
        <th  style="color:rgb(209, 247, 250)"scope="col">Tổng cộng</th>
      </tr>
    </thead>

    <tbody id="filterOrderingBill">
      {{--  <tr style=" background:rgb(26, 24, 24)">
        <th scope="row">1</th>
        <td>5</td>
        <td>50</td>
        <td>2021</td>
        <td>1</td>
      </tr>  --}}

  </table>
  <div class="col-md-12">
    <div id="dount" style="height: 255px;"></div>
</div>

@endsection
