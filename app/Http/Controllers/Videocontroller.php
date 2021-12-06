<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Admin;
use Test;
use App\Models\Roles;
use App\Http\Requests;
use App\Models\Video;
use Illuminate\Support\Facades\Redirect;
use GrahamCampbell\ResultType\Result;


class Videocontroller extends Controller
{
    public function video(){
        return view('admin.video.list_video');
    }
public function insert_video(Request $request){
    $data=$request->all();
    $video=new Video();
    $sub_link=substr($data['video_link'],17);
    $video->video_title=$data['video_title'];
    $video->video_link=$sub_link;

    $video->video_desc=$data['video_desc'];
    $get_image= $request->file('file');


    $video->save();

}
public function delete_video(Request $request){
    $data=$request->all();
    $video_id=$data['video_id'];
    $video=Video::find($video_id);
    $video->delete();
}
public function update_video(Request $request){
    $data=$request->all();
    $video_id=$data['video_id'];
    $video_edit=$data['video_edit'];
    $video_check=$data['video_check'];
    $video=Video::find($video_id);

    if($video_check=='video_title'){

        $video->video_title=$data['video_edit'];
        $video->save();

    }elseif($video_check=='video_desc'){
        $
        $video->video_desc=$data['video_edit'];
        $video->save();

    }else{

        $sub_link=substr($video_edit,17);
        $video->video_link=$sub_link;
        $video->save();
    }
}
    public function select_video(Request $request){
            $video= Video::orderBy('video_id','DESC')->get();
            $video_count=$video->count();
            $output='<form>
                         '.csrf_field().'
                         <table class="table table-striped b-t b-light">
                         <thead>
                           <tr>
                           <th>Thứ tự</th>
                             <th>Tên video</th>
                             <th>Mô tả</th>

                             <th>Demo video</th>
                             <th>Link video</th>
                             <th style="width:30px;"> Quản lý</th>
                           </tr>
                         </thead>
                         <tbody>
            ';
            if($video_count>0){
                $i=0;
                foreach($video as $key => $vid){
                    $i++;
                    $output.='
                    <tr>
                    <td>'.$i.'</td>
                    <td contenteditable data-video_id="'.$vid->video_id.'" data-video_type="video_title"
                    class="video_edit" id="video_title_'.$vid->video_id.'">'.$vid->video_title.'</td>

                    <td contenteditable data-video_id="'.$vid->video_id.'" data-video_type="video_desc"
                     class="video_edit" id="video_desc_'.$vid->video_id.'">'.$vid->video_desc.'</td>


                    <td><iframe width="200"height="200" src="https://www.youtube.com/embed/'.$vid->video_link.'"
                        frameborder="0" allow="accelerometer;autoplay;encrypted-media; gyroscope;picture-in-picture"
                        alloefullscreen
                        ></iframe></td>

                    <td contenteditable data-video_id="'.$vid->video_id.'" data-video_type="video_link"
                        class="video_edit"id="video_link_'.$vid->video_id.'">https://www.youtube.com/embed/'.$vid->video_link.'</td>

                    <td><button type="button"  data-video_id="'.$vid->video_id.'"
                    class="btn btn-xs btn-danger btn-delete-video">Xóa video</button></td>

                </tr>
                    ';
                }
            } else{
                $output.='
                      <tr>
                             <td colspan="4">Chưa có video nào hết.</td>
                      </tr>
                ';
            }
            $output.='
                </tbody>
                </table>
                </form>
            ';
            echo $output;
    }
    public function video_shop(Request $request){

        $meta_desc="Hệ thống bán lẻ điện thoại di động, smartphone, máy tính bảng, tablet, laptop, phụ kiện, giá tốt, dịch vụ khách hàng ...";
        $meta_keywords="smartphone,laptop,máy tính bảng";
        $meta_title=" Shopbro Điện thoại, Laptop, Phụ kiện";
        $url_dns=$request->url();
        //--seo
        $cate_product=DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product=DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

     $all_video=DB::table('tbl_videos')->paginate(6);

        return view('pages.video.video')->with('category',$cate_product)->with('brand',$brand_product)->with('all_video',$all_video)
        ->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)
        ->with('meta_title',$meta_title)->with('url_dns',$url_dns);
    }
    public function watch_video(Request $request){

        $video_id= $request->video_id;
        $video=Video::find($video_id);
        $output['video_title']= $video->video_title;
        $output['video_link']='<iframe width="550"height="300" src="https://www.youtube.com/embed/'.$video->video_link.'"
            frameborder="0" allow="accelerometer;autoplay;encrypted-media; gyroscope;picture-in-picture"
            alloefullscreen
            ></iframe>';
        echo json_encode($output);
    }
}
