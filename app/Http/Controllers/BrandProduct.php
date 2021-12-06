<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Http\Requests;
use App\Models\Brand;
use App\Models\Brand as ModelsBrand;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

session_start();
class BrandProduct extends Controller
{

    public function add_brand_product(){

        return view('admin.add_brand_product');
}
public function all_brand_product(){

  //$all_brand_product= DB::table('tbl_brand')->get();//su dung DB huong doi tuong
  //$all_brand_product=Brand::all();//su dung model
  $all_brand_product=Brand::orderBy('brand_id','DESC')->get();
  $manager_brand_product=view('admin.all_brand_product')->with('all_brand_product',$all_brand_product);
  return view('admin_layout')->with('admin.all_brand_product',$manager_brand_product);
}
public function save_brand_product(Request $request){
    //DB
    //  $data= array();
    //  $data['brand_name']=$request->brand_product_name;
    //  $data['brand_desc']=$request->brand_product_desc;
    //  $data['brand_status']=$request->brand_product_status;

    // DB::table('tbl_brand')->insert($data);

    $data = $request->all();

    $brand = new Brand();
    $brand->brand_name = $data['brand_product_name'];
    $brand->brand_desc = $data['brand_product_desc'];
    $brand->brand_status = $data['brand_product_status'];
    $brand->save();

     Session::put('message','Thêm thương hiệu sản phẩm thành công');
     return redirect('add-brand-product');

}
public function unactive_brand_product( $brand_product_id){

     DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status' => 1]);
     Session::put('message','Không kích hoạt thương hiệu sản phẩm thành công');
     return redirect('all-brand-product');

}
public function active_brand_product( $brand_product_id){

    DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status' => 0]);
    Session::put('message','Kích hoạt thương hiệu sản phẩm thành công');
    return redirect('all-brand-product');

}
public function edit_brand_product($brand_product_id){

  //$edit_brand_product= DB::table('tbl_brand')->where('brand_id',$brand_product_id)->get();
  //$edit_brand_product=Brand::find($brand_product_id);
  $edit_brand_product=Brand::where('brand_id',$brand_product_id)->get();

  $manager_brand_product=view('admin.edit_brand_product')->with('edit_brand_product',$edit_brand_product);
  return view('admin_layout')->with('admin.edit_brand_product',$manager_brand_product);

}

public function update_brand_product(Request $request,$brand_product_id){

//    $data=array();
//    $data['brand_name']=$request->brand_product_name;
//    $data['brand_desc']=$request->brand_product_desc;
//    DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update($data);

$data = $request->all();
$brand =  Brand::find($brand_product_id);
$brand->brand_name = $data['brand_product_name'];
$brand->brand_desc = $data['brand_product_desc'];
$brand->brand_status = $data['brand_product_status'];
$brand->save();
   Session::put('message','Cập nhật thương hiệu sản phẩm thành công');
   return redirect('all-brand-product');

}
public function delete_brand_product($brand_product_id){

  DB::table('tbl_brand')->where('brand_id',$brand_product_id)->delete();
  Session::put('message','Xóa thương hiệu sản phẩm thành công');
  return redirect('all-brand-product');

}
//end fun admin page
public function show_brand_home(Request $request, $brand_id){
    $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
    $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
    $brand_by_id=DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')
    ->where('tbl_product.brand_id',$brand_id)
   ->get();
   $brand_name=DB::table('tbl_brand')->where('tbl_brand.brand_id',$brand_id)->limit(1)->get();
    return view('pages.brand.show_brand')->with('category',$cate_product)
    ->with('brand',$brand_product) ->with('brand_by_id',$brand_by_id)->with('brand_name',$brand_name);

}
}
