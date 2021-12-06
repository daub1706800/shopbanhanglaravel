@extends('admin_layout')
@section( 'admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm  sản phẩm
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
                        <form role="form" action="{{ URL::to('/save-product') }}" method="POST" id="fsave"
                         class="form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="form-group ">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text"
                             name="product_name" class="form-control"id="product_name"  placeholder="Tên sản phẩm" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số lượng sản phẩm</label>
                            <input type="number" name="product_quantity" class="form-control" id="product_quantity" placeholder="Số lượng sản phẩm"required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="number" name="product_price" class="form-control" id="product_price" placeholder="Giá sản phẩm"required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                            <input type="file" name="product_images" class="form-control" id="exampleInputImg1" placeholder="Hình sản phẩm" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea style="resize: none" rows="5" class="form-control"  name="product_desc"id="ckeditor1" placeholder="Mô tả sản phẩm" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Nôi dung sản phẩm</label>
                            <textarea style="resize: none" rows="5" class="form-control"  name="product_content"id="ckeditor"  placeholder="Nội dung sản phẩm" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                            <select name="product_cate" class="form-control input-sm m-bot15">
                                @foreach($cate_product as $key => $cate)
                                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thương hiệu</label>
                            <select name="product_brand" class="form-control input-sm m-bot15">
                                @foreach($brand_product as $key => $brand)
                                <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>

                        <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
@endsection
