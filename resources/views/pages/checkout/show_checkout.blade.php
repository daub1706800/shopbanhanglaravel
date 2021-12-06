@extends('layout')
@section( 'content')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
                <li class="active">Thanh toán giỏ hàng</li>
            </ol>
        </div><!--/breadcrums-->




        <div class="register-req">
            <p>
                Vui lòng sử dụng Đăng ký và Thanh toán để dễ dàng truy cập vào lịch sử đơn đặt hàng của bạn hoặc sử dụng Thanh toán với tư cách Khách</p>
        </div><!--/register-req-->

        <div class="shopper-informations">
            <div class="row">

                <div class="col-sm-12 clearfix">
                    <div class="bill-to">
                        <p>Điển thông tin gửi hàng</p>
                        <div class="form-one">
                            <form action="{{ URL::to('/save-checkout-customer') }}" method="POST">
                                {{ csrf_field() }}
                                {{-- <input type="text" name="shipping_email" class="shipping_email" placeholder="Điền email">
                                <input type="text" name="shipping_name" class="shipping_name" placeholder="Họ và tên người gửi">
                                <input type="text" name="shipping_address" class="shipping_address" placeholder="Địa chỉ gửi hàng">
                                <input type="text" name="shipping_phone" class="shipping_phone" placeholder="Số điện thoại"> --}}
                                <div id="getUserInfo1" class="form-group">

                                </div>

                                <textarea name="shipping_notes" placeholder="Ghi chú đơn hàng " rows="16"></textarea>

                                <input type="submit" value="Gửi"name="sent_order" class="btn btn-primary btn-sm">
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="review-payment">
            <h2>Xem lại giỏ hàng</h2>
        </div>

        <div class="table-responsive cart_info">

        </div>

        <div class="payment-options">
                <span>
                    <label><input type="checkbox"> Thanh toán Paypal</label>

                </span>
                <span>
                    <label><input type="checkbox"> Nhận tiền mặt</label>
                </span>
                <span>
                    <label><input type="checkbox"> Thẻ ghi nợ</label>
                </span>
            </div>
    </div>

    
</section> <!--/#cart_items-->

@endsection
