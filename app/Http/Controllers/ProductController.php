<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Raiting;
use App\Models\Product;
session_start();

class ProductController extends Controller
{
    public function add_product(){
        $cate_product=DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product=DB::table('tbl_brand')->orderby('brand_id','desc')->get();

        return view('admin.add_product')->with('cate_product',$cate_product)->with('brand_product',$brand_product);


}
public function all_product(){
  $all_product= DB::table('tbl_product')

  //->orderby('tbl_product.product_id','desc')->get();

 ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
 ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
->orderby('tbl_product.product_id','desc')
->get();
  $manager_product=view('admin.all_product')->with('all_product',$all_product);
  return view('admin_layout')->with('admin.all_product',$manager_product);
}
public function save_product(Request $request){
     $data= array();

     $data['product_name']=$request->product_name;
     $data['product_quantity']=$request->product_quantity;
     //$data['meta_keywords']=$request->product_keywords;
     $data['product_price']=$request->product_price;
     $data['product_desc']=$request->product_desc;
     $data['product_content']=$request->product_content;
     $data['category_id']=$request->product_cate;
     $data['brand_id']=$request->product_brand;
     $data['product_status']=$request->product_status;
     $get_image= $request->file('product_images');
     if($get_image){
        $get__name_image=$get_image->getClientOriginalName();
        $name_image=current(explode('.',$get__name_image));
         $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
         $get_image->move('public/upload/product',$new_image);
         $data['product_images']=$new_image;
        DB::table('tbl_product')->insert($data);
        Session::put('message','Thêm sản phẩm sản phẩm thành công');
        return redirect('add-product');


     }
     $data['product_images']='';
     DB::table('tbl_product')->insert($data);
     Session::put('message','Thêm sản phẩm sản phẩm thành công');
     return redirect('all-product');

}
public function unactive_product( $product_id){
     DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status' => 1]);
     Session::put('message','Không kích hoạt  sản phẩm thành công');
     return redirect('all-product');

}
public function active_product( $product_id){
    DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status' => 0]);
    Session::put('message','Kích hoạt  sản phẩm thành công');
    return redirect('all-product');

}
public function edit_product($product_id){
    $cate_product=DB::table('tbl_category_product')->orderby('category_id','desc')->get();
    $brand_product=DB::table('tbl_brand')->orderby('brand_id','desc')->get();

  $edit_product= DB::table('tbl_product')->where('product_id',$product_id)->get();
  $manager_product=view('admin.edit_product')->with('edit_product',$edit_product)
  ->with('cate_product',$cate_product)->with('brand_product',$brand_product);
  return view('admin_layout')->with('admin.edit_product',$manager_product);

}

public function update_product(Request $request,$product_id){
    $data= array();

    $data['product_name']=$request->product_name;
    $data['product_quantity']=$request->product_quantity;
    //$data['meta_keywords']=$request->product_keywords;
    $data['product_price']=$request->product_price;
    $data['product_desc']=$request->product_desc;
    $data['product_content']=$request->product_content;
    $data['category_id']=$request->product_cate;
    $data['brand_id']=$request->product_brand;
    $data['product_status']=$request->product_status;
    $get_image=$request->file('product_images');
    if($get_image){
        $get__name_image=$get_image->getClientOriginalName();
        $name_image=current(explode('.',$get__name_image));
         $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
         $get_image->move('public/upload/product',$new_image);
         $data['product_images']=$new_image;
        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return redirect('all-product');


     }

     DB::table('tbl_product')->where('product_id',$product_id)->update($data);
     Session::put('message','Cập nhật sản phẩm thành công');
     return redirect('all-product');

}
public function delete_product($product_id){
  DB::table('tbl_product')->where('product_id',$product_id)->delete();
  Session::put('message','Xóa sản phẩm thành công');
  return redirect('all-product');

}
//end  admin pages
public function details_product( $product_id){
    $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
    $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
    $details_product= DB::table('tbl_product')
 ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
 ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
->where('tbl_product.product_id',$product_id)
->get();
           foreach($details_product as $key => $value) {
               $category_id = $value -> category_id;
           }

$related_product= DB::table('tbl_product')
->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
->where('tbl_category_product.category_id',$category_id)
->whereNotIn('tbl_product.product_id',[$product_id])
->get();
//foreach( $details_product as $key => $val){
    //seo
///$meta_desc= $val->product_desc;
//$meta_keywords=$val->meta_keywords;
//$meta_title=$val->product_name;
//$url_dns=$request->url();
//--seo
//}
$raiting=Raiting::where('product_id',$product_id)->avg('raiting');
$raiting=round($raiting);
    return view('pages.sanpham.show_details')
    ->with('category',$cate_product) ->with('brand',$brand_product)->with('product_details',$details_product)
    ->with('relate',$related_product)->with('raiting',$raiting);
    //->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)
       // ->with('meta_title',$meta_title)->with('url_dns',$url_dns)


}
public function insert_raiting(Request $request){
    $data = $request->all();
    $raiting= new Raiting();
    $raiting->product_id= $data['product_id'];
    $raiting->raiting= $data['index'];
    $raiting->save();

    // Session::put('message','Đánh giá thành công');
    //        return redirect('show_details');
    echo ('đánh giá thành công');

}

public function quickview(Request $request,$product_id){
    $product_id=$request->product_id;
    $product= Product::find($product_id);
    $output['product_name']=$product->product_name;
    $output['product_id']=$product->product_id;
    $output['product_desc']=$product->product_desc;
    $output['product_content']=$product->product_content;
    $output['product_price']=$product->product_price;
    $output['product_images']= '<p><img width="100% src="public/upload/product/'. $product->product_images.'"></p>' ;
    return json_encode($output);

}

}
