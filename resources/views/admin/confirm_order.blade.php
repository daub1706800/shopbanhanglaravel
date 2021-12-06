<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> Xác nhận đơn hàng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
    <div class="container" style="background: #222;boder-radius:12px; padding:15px ">
        <div class="col-md-12">
            <p style="text-align: center; color:#fff">Đây là email tự động.Quý khách vui lòng không trả lời mail này.</p>
            <div class="row" style="background: cadetblue; padding: 15px">
                <div class="col-md-6" style="text-align: center; color: #fff;font-weight:bold;font-size:30px">
                    <h4 style="margin: 0">CÔNG TY BÁN HÀNG SHOPBRO</h4>
                    <h6 style="margin:0">DỊCH VỤ BÁN HÀNG-VẬN CHUYỂN- NHẬP KHẨU CHUYÊN NGHIỆP</h6>
                </div>

                <div class="col-md-6 logo" style="color: #fff">
                    <p> Chào bạn<strong style="color:#000;text-decoration:underline;">
                               {{ $shipping_array['customer_name'] }}
                               </strong></p>
                </div>

                <div class="col-md-12">
                    <p style="color:#fff;font-size:17px;">Bạn hoặc ai đó đã đăng ký dịch vụ tại shop với thông tin như sau:</p>
                    <h4 style="color:#000;text-transform:uppercase"> Thông tin đơn hàng</h4>
                    <p>Mã đơn hàng:<strong style="text-transform:uppercase;color:#fff">{{ $code['order_id'] }}</strong>
                        <p> Dịch vụ:<strong style="text-transform:uppercase;color:#fff">Đặt hàng trực tuyến</strong></p>
                        <h4 style="color:#000;text-transform:uppercase;">Thông tin người nhận</h4>

                        <p>
                            Email: @if($shipping_array['shipping_email']=='') không có @else
                            <span style="color:#fff">{{ $shipping_array['shipping_email'] }}</span> @endif
                        </p>

                        <p> Họ tên người gửi: @if($shipping_array['shipping_name']=='') không có @else
                            <span style="color:#fff">{{ $shipping_array['shipping_name'] }}</span> @endif
                        </p>

                        <p> Ghi chú đơn hàng: @if($shipping_array['shipping_notes']=='') không có @else
                            <span style="color:#fff">{{ $shipping_array['shipping_notes'] }}</span> @endif
                        </p>

                        <p> Địa chỉ giao hàng: @if($shipping_array['shipping_address']=='') không có @else
                            <span style="color:#fff">{{ $shipping_array['shipping_address'] }}</span> @endif
                        </p>
                        <p> Số điện thoại liên hệ: @if($shipping_array['shipping_phone']=='') không có @else
                            <span style="color:#fff">{{ $shipping_array['shipping_phone'] }}</span> @endif
                        </p>
                        <p> Hình thức thanh toán:<strong style="text-transform:uppercase;color:#fff"> Tiền mặt</strong>

                        </p>

                        <p style="color:#fff"> Nếu thông tin người nhận hàng không có chúng tôi sẽ liện hệ với người đặt hàng để trao đổi thông tin về đơn hàng đã đặt. </p>
                        <h4 style="color:#000;text-transform:uppercase;"> Sản phẩm đã đặt</h4>
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Giá tiền</th>
                                <th>Số lượng đặt</th>
                                <th>Thành tiền</th>
                            </tr>

                        </thead>
                        <tbody>
                            @php
                             $sub_total=0; $total=0;
                             @endphp
                             @foreach(cart_array as $cart)
                             @php
                                 $sub_total=$cart['product_qty']=$cart['product_price'];
                                 $total+=$sub_total;

                             @endphp
                             <tr>
                                 <td>{{ $cart['product_name'] }}</td>
                                 <td>{{ number_formart($cart['product_price'],0,',','.') }}vnđ</td>
                                 <td>{{ $cart['product_qty'] }}</td>
                                 <td>{{ number_formart($sub_total,0,',','.') }}vnđ</td>
                             </tr>
                             @endforeach
                             <tr>
                                 <td colspan="4" align="right">Tổng tiền thanh toán:{{ number_formart($total,0,',','.') }}vnđ  </td>
                             </tr>


                        </tbody>
                </div>
<p style="color:#fff"> Mọi chi tiết xin liên hệ wedsite tại:<a target="_blank" href="http://shopbro.com/">Shop</a>,hoặc liên hệ qua số hotline 19005678.Cảm ơn quý khách đã đặt hàng của chúng tôi.</p>
            </div>
        </div>
    </div>
</body>

</html>
