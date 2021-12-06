<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Shipping;
use App\Models\OrderDetails;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Brand;
use Cart;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
use PDF;
session_start();
class OrderController extends Controller
{
    public function huy_don_hang(Request $request){
        $data=  $request->all();
         $order=Order::where('order_id',$data['order_id'])->first();
        $order->order_destroy= $data['lydo'];
        $order->order_status=3;
        $order->save();
        return Redirect::to('/history');
        //print_r($order);


    }
    public function order_qty(Request $request){
        $data=  $request->all();
        $order_details=OrderDetails::where('product_id',$data['order_product_id'])->where('order_id',$data['order_id'])->first();
        $order_details->product_sales_quantity=$data['order_qty'];
        $order_details->save();
    }
    public function update_order_qty(Request $request){


        //updata trang thai
        $data=  $request->all();
        $order=Order::find($data['order_id']);
        $order->order_status=$data['order_status'];
        $order->save();

    //     $now=Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s');
    //         $title_mail="Đơn hàng xác nhận ngày".' '.$now;
    //         $customer=Customer::where('customer_id',$order->customer_id)->first();
    //         $data['email'][] = $customer->customer_email;

    //         //lay san pham
    //         foreach($data['order_product_id'] as $key =>$product){
    //             $product_mail=Product::find($product);
    //             foreach($data['quantity'] as $key2 =>$qty){
    //                 if($key=$key2){
    //                      $cart_array[]=  array(
    //                         'product_name' =>$product_mail['product_name'],
    //                         'product_price' =>$product_mail['product_price'],
    //                         'product_qty' =>$qty


    //                     );
    //             }
    //         }

    //  }
    //  //lay shipping
    //  $details=OrderDetails::where('order_id',$order->order_id)->first();

    //  $shipping=Shipping::where('shipping_id',$order->shipping_id)->first();
    //         $shipping_array=array(
    //             'customer_name'=>$customer->customer_name,
    //             'shipping_name'=>$shipping['shipping_name'],
    //             'shipping_email'=>$shipping['shipping_email'],
    //             'shipping_phone'=>$shipping['shipping_phone'],
    //             'shipping_address'=>$shipping['shipping_address'],
    //             'shipping_notes'=>$shipping['shipping_notes'],

    //         );
    //      Mail::send('pages.mail.mail_order', ['shipping_array'=>$shipping_array,
    //      'cart_array'=> $cart_array],function($message) use($title_mail,$data){
    //      $message->to($data['email'])->subject($title_mail);
    //      $message->from($data['email'],$title_mail);
    //               });


        if ($order->order_status==2) {
            foreach ($data['order_product_id'] as $key => $product_id) {
                $product = Product::find($product_id);
                $product_quantity = $product->product_quantity;
                $product_sold = $product->product_sold;
                foreach ($data['quantity'] as $key2 => $qty) {
                    if ($key==$key2) {
                        $pro_remain = $product_quantity - $qty;
                        $product->product_quantity = $pro_remain;
                        $product->product_sold = $product_sold + $qty;
                        $product->save();
                    }
                }
            }
        }
           elseif($order->order_status!=2 && $order->order_status!=3){
                            foreach ($data['order_product_id'] as $key => $product_id) {
                                $product = Product::find($product_id);
                                $product_quantity = $product->product_quantity;
                                $product_sold = $product->product_sold;
                                foreach ($data['quantity'] as $key2 => $qty) {
                                    if ($key==$key2) {
                                        $pro_remain = $product_quantity + $qty;
                                        $product->product_quantity = $pro_remain;
                                        $product->product_sold = $product_sold - $qty;
                                    $product->save();
                      }
                }
            }
        }


    }

    public function manage_order(){
        $order=Order::orderBy('order_id','DESC')->get();
        return view('admin.manage_order')->with('order',$order);
    }
    public function view_order($orderID){
        $order_details=OrderDetails::with('product')->where('order_id',$orderID)->get();
        $order=Order::where('order_id',$orderID)->get();
        foreach($order as $key =>$ord){
            $customer_id=$ord->customer_id;
            $shipping_id=$ord->shipping_id;
            $order_status = $ord->order_status;
        }
        $customer=Customer::where('customer_id',$customer_id)->first();
        $shipping=Shipping::where('shipping_id',$shipping_id)->first();
        $order_details_product=OrderDetails::with('product')->where('order_id',$orderID)->get();
        $order=Order::where('order_id',$orderID)->get();
        $order=Order::where('order_id',$orderID)->get();
        return view('admin.view_order')->with(compact('order_details','customer','shipping','order_details','order','order_status'));

    }
    public function history(Request $request){
        if(!Session::get('customer_id')){
            return redirect('login-checkout')->with('error','Vui lòng đăng nhập để xem lịch sử mua hàng');
        }
        else{
            //lay id khach hang dang nhap bang mail
            $value =  $request->session()->get('customer_id');

            $meta_desc="Lịch sử đơn hàng";
            $meta_keywords="smartphone,laptop,máy tính bảng";
            $meta_title=" Shopbro Điện thoại, Laptop, Phụ kiện";
            $url_dns=$request->url();
            // //--seo
            $cate_product=DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
            $brand_product=DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
            // $order=DB::table('tbl_order')
            //     ->where(['customer_id'=>$value])
            //     ->get();
            $order=Order::where('customer_id','=',$value)->orderBy('order_id','DESC')->get();
            foreach($order as $key =>$ord){
                $customer_id=$ord->customer_id;
            }
            $customer=Customer::where('customer_id', $value)->get();

            return view('pages.history.history')->with('category',$cate_product)->with('brand',$brand_product)
            ->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)
            // ->with('meta_title',$meta_title)->with('url_dns',$url_dns)
            ->with('order',$order)
            ->with('customer',$customer_id) ;

        }
    }
    public function view_history_order(Request $request,$orderID){


        $meta_desc="Lịch sử đơn hàng";
        $meta_keywords="smartphone,laptop,máy tính bảng";
        $meta_title=" Shopbro Điện thoại, Laptop, Phụ kiện";
        $url_dns=$request->url();
        //--seo
        $cate_product=DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product=DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        $order=Order::orderBy('created_at','ASC')->get();
        $order_details=OrderDetails::where('order_id',$orderID)->get();
        $order=Order::where('order_id',$orderID)->get();
        foreach($order as $key =>$ord){
            $customer_id=$ord->customer_id;
            $shipping_id=$ord->shipping_id;


        }
        $customer=Customer::where('customer_id',$customer_id)->first();
        $shipping=Shipping::where('shipping_id',$shipping_id)->first();
        $order_details_product=OrderDetails::with('product')->where('order_id',$orderID)->get();
        return view('pages.history.view_history_order')->with('category',$cate_product)->with('brand',$brand_product)
        ->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)
        ->with('meta_title',$meta_title)->with('url_dns',$url_dns)->with('order',$order)
        ->with('order_details',$order_details)->with('customer',$customer)
        ->with('shipping',$shipping)  ->with('order_details_product',$order_details_product)
       ;


    }



    public function print_order($checkout_code){
$pdf=\App::make('dompdf.wrapper');
$pdf->loadHTML($this->print_order_convert($checkout_code));
return $pdf->stream();
    }
    public function print_order_convert($checkout_code){
        $order_details=OrderDetails::where('order_id',$checkout_code)->get();
        $order=Order::where('order_id',$checkout_code)->get();
        foreach($order as $key =>$ord){
            $customer_id=$ord->customer_id;
            $shipping_id=$ord->shipping_id;
            $order_status = $ord->order_status;

        }
        $customer=Customer::where('customer_id',$customer_id)->first();
        $shipping=Shipping::where('shipping_id',$shipping_id)->first();
        $order_details_product=OrderDetails::with('product')->where('order_id',$checkout_code)->get();
        $output='';
        $output='<style>body{
                  font-family:DejaVu Sans;
        }
        .table-styling{
              border:1px solid #000;
        }
        .table-styling tbody tr td{
            border:1px solid #000;

      }
        </style>
        <h1><center>Công ty TNHH một mình tao Shopbro</center></h1>
        <h5><center>(Ban hành theo thông tư số ....../.....-BTC ngày ..../.../20.... của Bộ Tài chính)</center></h5>
        <p>Người đặt hàng</p>
        <table class="table-styling">
                   <thead>
                      <tr>
                           <th> Tên khách đặt</th>
                           <th> Số điện thoại</th>
                           <th> Email</th>

                      </tr>
                   </thead>
                   <tbody>';

               $output.='
                          <tr>
                               <td>'.$customer->customer_name.'</td>
                               <td>'.$customer->customer_phone.'</td>
                               <td>'.$customer->customer_email.'</td>
                          </tr>';

              $output.='
                   </tbody>
                   </table>
                   <p>Người nhận hàng</p>
        <table class="table-styling">
                   <thead>
                      <tr>
                           <th> Tên người nhận</th>
                           <th> Địa chỉ</th>
                           <th> Số điện thoại</th>
                           <th> Email</th>
                           <th> Ghi chú</th>

                      </tr>
                   </thead>
                   <tbody>';

               $output.='
                          <tr>
                               <td>'.$shipping->shipping_name.'</td>
                               <td>'.$shipping->shipping_address.'</td>
                               <td>'.$shipping->shipping_phone.'</td>
                               <td>'.$shipping->shipping_email.'</td>
                               <td>'.$shipping->shipping_notes.'</td>
                          </tr>';

              $output.='
                   </tbody>
                   </table>

                   <p>Chi tiết đơn hàng</p>
                   <table class="table-styling">
                              <thead>
                                 <tr>
                                      <th> Tên sản phẩm</th>
                                      <th> Số lượng</th>
                                      <th> Giá sản phẩm</th>
                                      <th>Thành tiền</th>

                                 </tr>
                              </thead>
                              <tbody>';
                              $total=0;
                              foreach ($order_details_product  as  $key =>$product) {
                                  $subtotal=$product->product_price* $product->product_sales_quantity;
                                  $total+=$subtotal;
                                  $output.='
                                     <tr>
                                          <td>'.$product->product_name.'</td>
                                          <td>'.$product->product_sales_quantity.'</td>
                                          <td>'.number_format($product->product_price, 0, ',', '.').'đ'.'</td>
                                          <td>'.number_format($subtotal,0, ',', '.').'đ'.'</td>

                                     </tr>';
                              }
                              $output.='<tr>
                                          <td colspan="2">
                                         <h4> Tổng thanh toán:'.number_format($total,0, ',', '.').'đ'.' </h4>

                                          </td>
                              </tr>';
                         $output.='
                              </tbody>
                              </table>
                   <p>.....Ngày........Tháng......Năm 20..........</p>
                   <table >
                              <thead>
                                 <tr>
                                      <th width="200px">Người lập phiếu</th>
                                      <th width="800px">Người nhận trả tiền</th>
                                 </tr>
                              </thead>
                              <tbody>';
                         $output.='

                              </tbody>
                              </table>
                   ';
                   return $output;
    }
}
