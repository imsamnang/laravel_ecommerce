<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css?family=Hanuman" rel="stylesheet">
  <title>Select a Category</title>
  <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <link  href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <script src="{{asset('assets/js/plupload.full.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.chained.js')}}"></script>
  <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script> 
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <link  href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css">
  <link  href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
  <link  href="https://unpkg.com/ionicons@4.3.0/dist/css/ionicons.min.css">
  <link  href="{{asset('assets/css/khmer24_plupload.css')}}" rel="stylesheet" type="text/css"> 
  <style type="text/css">
    body {
      min-width: 1080px;
    }
  </style>

</head>
<body>

  <div class="container">
    <div class="post_form p-3">
      <div class="post_form">
        <form action="{{route('post.store')}}" class="form form-horizontal" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="form_post">
          {{csrf_field()}}
          {{-- Title --}}
          <div class="form-group">
            <label for="ad_headline" class="col control-label">Title <span class="red">*</span></label>
            <div class="col col-6 form-input">
            <input id="title" class="form-control" type="text" name="title" value="{{ isset($property->title)?$property->title :'' }}" required="">
            </div>
          </div>
          {{-- Photo --}}
            <div class="form-group">
              <label for="ad_text" class="col control-label">Ad Photos <i class="red">*</i></label>
              <div id="plupload" class="col-8">
                <div class="row plupload_block">
                  <div class="pl fleft col-12">
                    <span class="drop_file_hear"></span>
                    <div id="multi-upload">
                      <div id="console"></div>
                      <ul class="list-image list-unstyled">
                        @for ($i = 1; $i < 9; $i++)
                          <li>
                            <div id="item-{{ $i }}" class="item">
                              <a href="javascript:;" class="btn-browse" id="browse-{{ $i }}">Add Image</a>
                            </div>
                          </li>
                        @endfor
                      </ul>
                      <div class="drop_box" id="drop-image">
                        <span class="image_placeholder"></span>
                        <p>Drop your photo hear.</p>
                      </div>
                      <div class="total_status">
                        <span class="current_uploads" id="current_uploads">0</span> of 
                        <span class="total">8</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="clear"></div>
                <div style="display:none;">
                <input type="hidden" id="count" value="1">
                <input type="hidden" id="csrf" value="{{ csrf_field() }}">
                <input type="hidden" id="browser" value="">
                </div>
              </div>
            </div>
          {{-- submit button --}}
          <div class="form-group submit_box">
            <div class="col-sm-offset-2 col col-3 btn_submit">
              <input type="submit" value="Submit" class="btn btn-lg btnsavead btn-warning btn-block">
              {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
            </div>
          </div>
        </form>
      </div>
    </div>    
  </div>

@include('freeads.script.khmer24')
  
</body>
</html>