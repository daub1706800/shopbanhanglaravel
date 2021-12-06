@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->

                        <h2 class="title text-center">Video công ty</h2>

                        @foreach($all_video as $key => $video)
                            <div class="product-image-wrapper">

                                <div class="single-products single-products-video">
                                        <div class="productinfo text-center">
                                            <form>
                                                @csrf
                                            <a href="">

                                                <p>{{ $video->video_title }}</p>
                                               
                                             </a>
                                             <button type="button" class="btn btn-primary watch-video" data-toggle="modal"
                                             data-target="#modal_video" id="{{ $video->video_id }}">
                                               Xem video
                                              </button>
                                            </form>

                                        </div>

                                </div>

                            </div>
                        </div>
                          @endforeach
                    </div><!--features_items-->
                      <ul class="pagination pagination-sm m-t-none m-b-none">
                          {!! $all_video->links() !!}

                      </ul>
        <!--/recommended_items-->

        <!-- Modal xem video -->
<div class="modal fade" id="modal_video" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="video_title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div id="video_link"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        {{--  <button type="button" class="btn btn-primary"></button>  --}}
      </div>
    </div>
  </div>
</div>
@endsection

