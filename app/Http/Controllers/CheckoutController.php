<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Slider;
use Illuminate\Support\Facades\Redirect;
use Cart;
use Illuminate\Support\Facades\Mail;
use App\Coupon;
use App\Models\Shipping;
use App\Models\Order;
use App\Models\Customer;
use App\Models\OrderDetails;
use Carbon\Carbon;
use Illuminate\Support\Str;
session_start();

class CheckoutController extends Controller
{
    public function login_checkout()
    {
        $cate_product=DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
        $brand_product=DB::table('tbl_brand')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();

        return view('pages.checkout.login_checkout')->with('category', $cate_product)->with('brand', $brand_product);
    }
    public function add_customer(Request $request)
    {
        $data = array();
        $data['customer_name']=$request->customer_name;
        $data['customer_phone']=$request->customer_phone;
        $data['customer_email']=$request->customer_email;
        $data['customer_password']=md5($request->customer_password);
        $data['customer_address']=$request->customer_address;
        $customer_id=DB::table('tbl_customers')->insertGetId($data);

        Session::put('customer_id', $customer_id);
        Session::put('customer_name', $request->customer_name);
        return Redirect::to('/checkout');
    }
    public function checkout()
    {
        $cate_product=DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
        $brand_product=DB::table('tbl_brand')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();

        return view('pages.checkout.show_checkout')->with('category', $cate_product)->with('brand', $brand_product);
    }
    public function save_checkout_customer(Request $request)
    {
        $data = array();
        $data['shipping_name']=$request->shipping_name;
        $data['shipping_phone']=$request->shipping_phone;
        $data['shipping_email']=$request->shipping_email;
        $data['shipping_notes']=$request->shipping_notes;
        $data['shipping_address']=$request->shipping_address;


        $shipping_id=DB::table('tbl_shipping')->insertGetId($data);

        Session::put('shipping_id', $shipping_id);

        return Redirect::to('/payment');
    }
    public function show_customer(){
        $user_id=Session::get('customer_id');
        $result =DB::table('tbl_customers')->where('customer_id',$user_id)->first();
        $data = [
            "name_customser"=>$result->customer_name,
            "email_customer"=>$result->customer_email,
            "phone_customer"=>$result->customer_phone,
            "address_customer"=>$result->customer_address,
        ];
       // print_r($data); die;
        return $data;
    }
    public function payment()
    {
        $cate_product=DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
        $brand_product=DB::table('tbl_brand')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();

        return view('pages.checkout.payment')->with('category', $cate_product)->with('brand', $brand_product);
    }
    public function order_place(Request $request)
    {
        $meta_desc = "Đăng nhập thanh toán";
        $meta_keywords = "Đăng nhập thanh toán";
        $meta_title = "Đăng nhập thanh toán";
        $url_canonical = $request->url();
        //get pament_method

        $data = array();
        $data['payment_method']=$request->payment_option;
        $data['payment_status'] = 'Đang chờ xử lý';

        $payment_id = DB::table('tbl_payment')->insertGetId($data);
        //insert order
        $order_data = array();
        $order_data['customer_id'] = Session::get('customer_id');
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = Cart::total();
        $order_data['order_status'] = 1;
        $order_id = DB::table('tbl_order')->insertGetId($order_data);

        //insert order_details
        $content = Cart::content();
        foreach ($content as $v_content) {
            $order_d_data['order_id'] = $order_id;
            $order_d_data['product_id'] = $v_content->id;
            $order_d_data['product_name'] = $v_content->name;
            $order_d_data['product_price'] = $v_content->price;
            $order_d_data['product_sales_quantity'] = $v_content->qty;
            DB::table('tbl_order_details')->insert($order_d_data);
        }
        if ($data['payment_method']==1) {
            Cart::destroy();

            $cate_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
            $brand_product = DB::table('tbl_brand')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();
            return view('pages.checkout.handcash')->with('category', $cate_product)->with('brand', $brand_product)->with('meta_desc', $meta_desc)->with('meta_keywords', $meta_keywords)->with('meta_title', $meta_title)->with('url_canonical', $url_canonical);
        } elseif ($data['payment_method']==2) {
            Cart::destroy();

            $cate_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
            $brand_product = DB::table('tbl_brand')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();
            return view('pages.checkout.handcash')->with('category', $cate_product)->with('brand', $brand_product)->with('meta_desc', $meta_desc)->with('meta_keywords', $meta_keywords)->with('meta_title', $meta_title)->with('url_canonical', $url_canonical);
        } else {
            echo 'Thẻ ghi nợ';
        }

        //return Redirect::to('/payment');
    }


    public function logout_checkout()
    {
        Session::flush();
        return Redirect::to('/login-checkout');
    }
    public function login_customer(Request $request)
    {
        $email = $request->email_accout;
        $password = md5($request->password_accout);
        $result = DB::table('tbl_customers')->where('customer_email', $email)->where('customer_password', $password)->first();


        if ($result) {
            Session::put('customer_id', $result->customer_id);
            return Redirect::to('/checkout');
        } else {
            return Redirect::to('/login-checkout');
        }
    }
    public function manage_order()
    {
        $all_order = DB::table('tbl_order')
        ->join('tbl_customers', 'tbl_order.customer_id', '=', 'tbl_customers.customer_id')
        ->select('tbl_order.*', 'tbl_customers.customer_name')
        ->orderby('tbl_order.order_id', 'desc')->get();
        $manager_order  = view('admin.manage_order')->with('all_order', $all_order);
        return view('admin_layout')->with('admin.manage_order', $manager_order);
    }
    public function view_order($orderId)
    {
        $order_by_id = DB::table('tbl_order')

        ->join('tbl_customers', 'tbl_order.customer_id', '=', 'tbl_customers.customer_id')
        ->join('tbl_shipping', 'tbl_order.shipping_id', '=', 'tbl_shipping.shipping_id')
        ->join('tbl_order_details', 'tbl_order.order_id', '=', 'tbl_order_details.order_id')
        ->where('tbl_order.order_id', '=', $orderId)
        ->select('tbl_order.*', 'tbl_customers.*', 'tbl_shipping.*', 'tbl_order_details.*')->first();

        $manager_order_by_id  = view('admin.view_order')->with('order_by_id', $order_by_id);
        return view('admin_layout')->with('admin.view_order', $manager_order_by_id);
    }
    public function delete_order($orderId)
    {
        DB::table('tbl_order')->where('order_id', $orderId)->delete();
        Session::put('message', 'Xóa sản phẩm thành công');
        return redirect('manage-order');
    }
    public function confirm_order(Request $request){
        $data=$request->all();
        $shipping=new Shipping();
        $shipping->shipping_name=$data['shipping_name'];
        $shipping->shipping_email=$data['shipping_email'];
        $shipping->shipping_phone=$data['shipping_phone'];
        $shipping->shipping_address=$data['shipping_address'];
        $shipping->shipping_notes=$data['shipping_notes'];

        $shipping_id=$shipping->shipping_id;

        $checkout_code=substr(md5(microtime()),rand(0,26),5);

        $order=new Order;
        $order->customer_id= Session::get('customer_id');
        $order->shipping_id=$shipping_id;
        $order->order_status=1;
        $order->order_id=$checkout_code;
        // $order->code= Str::Uuid();

        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $today=Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s');

        $order_date=Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');;

        $order->created_at=$today;
        $order->order_date=$order_date;

        if(Session::get('cart')==true){
            foreach(Session::get('cart') as $key =>$cart){
                $order_details=new OrderDetails;
                $order_details->order_id=$checkout_code;
                $order_details->product_id=$cart['product_id'];
                $order_details->product_name=$cart['product_name'];
                $order_details->product_price=$cart['product_price'];
                $order_details->product_sales_quanlity=$cart['product_sales_quanlity'];
                $order_details->product_id=$cart['product_id'];
            }
        }
        $now=Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s');
        $title_mail="Đơn hàng xác nhận ngày".' '.$now;
        $customer=Customer::find(Session::get('customer_id'));
        $data['email'][]=$customer->customer_email;


        if(Session::get('cart')==true){
            foreach(Session::get('cart') as $key =>$cart_mail){
                $cart_array[]=array(
                    'product_name' =>$cart_mail['product_name'],
                    'product_price' =>$cart_mail['product_price'],
                    'product_qty' =>$cart_mail['product_qty'],
                );
            }
        }
        $shipping_array=array(
            'customer_name'=>$customer->customer_name,
            'shipping_name'=>$data['shipping_name'],
            'shipping_email'=>$data['shipping_email'],
            'shipping_phone'=>$data['shipping_phone'],
            'shipping_address'=>$data['shipping_address'],
            'shipping_notes'=>$data['shipping_notes'],
        );

     Mail::send('pages.mail.mail_order',['cart_array'=>$cart_array,'shipping_array'=>$shipping_array],
     function($message) use($title_mail,$data){
     $message->to($data['email'])->subject($title_mail);
     $message->from($data['email'],$title_mail);
              });

    }

// function checkLoginState() {
//     FB.getLoginStatus(function(response) {
//       statusChangeCallback(response);
//     });
//     {
//         status: 'connected',
//         authResponse: {
//             accessToken: '...',
//             expiresIn:'...',
//             signedRequest:'...',
//             userID:'...'
//         }
//     }
//   }
//   function checkLoginState() {
//     FB.getLoginStatus(function(response) {
//       statusChangeCallback(response);
//     });
//   }

}




