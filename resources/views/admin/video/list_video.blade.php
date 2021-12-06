@extends('admin_layout')
@section( 'admin_content')
<Link  rel = "stylesheet"  href = "//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
<div class="table-agile-info">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="panel panel-default">
      <div class="panel-heading">
        Liệt kê video
      </div>
      <div class="row w3-res-tb">
        {{-- <div class="col-sm-5 m-b-xs">
          <select class="input-sm form-control w-sm inline v-middle">
            <option value="0">Bulk action</option>
            <option value="1">Delete selected</option>
            <option value="2">Bulk edit</option>
            <option value="3">Export</option>
          </select>
          <button class="btn btn-sm btn-default">Apply</button>
        </div> --}}

        <div class="col-sm-12" >
          <div class="input-group">
            <div class="position-center">
                <form >
                    {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên video</label>
                    <input  size="250" type="text" name="video_title" class="form-control video_title" id="exampleInputEmail1" placeholder="Tên danh mục" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Link video</label>
                    <input type="text" name="video_link" class="form-control video_link" id="exampleInputEmail1" placeholder="Tên danh mục" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả Video</label>
                    <textarea rows="10" class="form-control video_desc"  name="video_desc"id="exampleInputEmail1"  placeholder="Mô tả danh mục"></textarea>
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Hiển thị</label>
                    <select name="brand_product_status" class="form-control input-sm m-bot15">
                        <option value="0">Ẩn</option>
                        <option value="1">Hiển thị</option>
                    </select>
                </div>


                <button type="button" name="add_video" class="btn btn-info btn-add-video">Thêm video</button>
            </form>
            <div id="notify"></div>
            </div>

          </div>
        </div>
      </div>
      <div class="table-responsive">
        <?php
        $message = Session::get('message');
       if($message){
           echo $message;
            Session::put('message',null);
              }
           ?>

        <div id="video_load"></div>
      </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="video_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chi tiết video</h5>
      </div>
      <div class="modal-body">
       Tên video
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>


</div>
  </div>
@endsection
