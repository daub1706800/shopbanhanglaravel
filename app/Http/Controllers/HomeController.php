<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Http\Requests;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
session_start();

class HomeController extends Controller
{
    public function send_mail(){
        $to_name = "Dau Vo";
        $to_email = "dauvo12a3@gmail.com";//send to this email


        $data = array("name"=>"Mail từ tài khoản Khách hàng","body"=>'Mail gửi về vấn về hàng hóa'); //body of mail.blade.php

        Mail::send('pages.send_mail',$data,function($message) use ($to_name,$to_email){

            $message->to($to_email)->subject('Test thử gửi mail google');//send this mail with subject
            $message->from($to_email,$to_name);//send from this mail
        });
        // return redirect('/')->with('message','');
    }
    public function index(Request $request){
        //slider
        $slider=Slider::orderBy('slider_id','DESC')->where('slider_status','0')->take(4)->get();
        //seo
        $meta_desc="Hệ thống bán lẻ điện thoại di động, smartphone, máy tính bảng, tablet, laptop, phụ kiện, giá tốt, dịch vụ khách hàng ...";
        $meta_keywords="smartphone,laptop,máy tính bảng";
        $meta_title=" Shopbro Điện thoại, Laptop, Phụ kiện";
        $url_dns=$request->url();
        //--seo
        $cate_product=DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product=DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        //$all_product= DB::table('tbl_product')
        //->orderby('tbl_product.product_id','desc')->get();
       //->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
       //>join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
      //>orderby('tbl_product.product_id','desc')
     // ->get();
     $all_product=DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(6)->get();
        return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product)
        ->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)
        ->with('meta_title',$meta_title)->with('url_dns',$url_dns)
        ->with('slider',$slider);
    }
    public function search(Request $request){
        $keywords=$request->keywords_submit;
        $cate_product=DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product=DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();

        return view('pages.sanpham.search')->with('category',$cate_product)->with('brand',$brand_product)
        ->with('search_product',$search_product);

    }
    public function autocomplete_ajax(Request $request){
        $data= $request->all();
        if($data['query']){
            $product= Product::where('product_name','LIKE','%'.$data['query'].'%')->get();
        //      $output='<ul class="dropdown-list" style="display:block; position:relative">';

        //      foreach($product as $key=> $val){
        //          $output .='
        //         <li><a href="#">'.$val->product_name.'</a></li>
        //          ';
        //      }
        //    $output .='</ul>';

         return  $product;
        }

    }
}
