@extends('admin_layout')
@section( 'admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Slider
                </header>
                <div class="panel-body">
                    <?php
                        $message = Session::get('message');
                       if($message){
                           echo $message;
                            Session::put('message',null);
                              }
        ?>
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/insert-slider') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Slider</label>
                            <input type="text" name="slider_name" class="form-control" id="exampleInputEmail1" placeholder="Tên slider" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hình ảnh Slider</label>
                            <input type="file" name="slider_image" class="form-control" id="exampleInputEmail1"  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả Slider</label>

                            <input type="text" name="slider_desc" class="form-control" id="exampleInputEmail1"  required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="slider_status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn slider</option>
                                <option value="1">Hiển thị slider</option>
                            </select>
                        </div>

                        <button type="submit" name="add_slidert" class="btn btn-info">Thêm slider</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
@endsection
