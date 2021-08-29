<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet"> -->
    <link href="{{asset('vendor/fontawesome/css/all.css')}}" rel="stylesheet"> 
    <link href="{{asset('css/elegant-icons-style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/summernote/summernote-bs4.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <title>Doisuthep</title>
  </head>
  
  <body>
    <div id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
        <div class="toggle-nav">
          <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="index.html" class="logo">CMU <span class="lite">Doisuthep</span></a>
        <a href="" class="d-block d-md-none pt-3 ps-3"> <h4> Log out</h4></a> 
        <!--logo end-->

        <div class="top-nav notification-row">
          <ul class="nav pull-right top-menu">
            <a href=""> <h4> Log out</h4></a> 
            <!-- <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </button>
              <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
              </ul>
            </div>
          </ul> -->
        </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_document_alt"></i>
              <span>ประชาสัมพันธ์</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="{{url('/admin/content?type=publicize')}}">ข่าวประชาสัมพันธ์ </a></li>
              <li><a class="" href="{{url('/admin/content?type=context')}}">บทความ</a></li>
              <li><a class="" href="{{url('/admin/product?type=product')}}">ของที่ระลึก</a></li>
              <li><a class="" href="{{url('/admin/vedio?type=vedio')}}">วิดีโอ</a></li>
              <li><a class="" href="{{url('/admin/work?type=work')}}">ร่วมงานกันเรา</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_desktop"></i>
              <span>UI Fitures</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="general.html">Components</a></li>
              <li><a class="" href="buttons.html">Buttons</a></li>
              <li><a class="" href="grids.html">Grids</a></li>
            </ul>
          </li>
          <li>
            <a class="" href="widgets.html">
              <i class="icon_genius"></i>
              <span>Widgets</span>
            </a>
          </li>
          <li>
            <a class="" href="chart-chartjs.html">
              <i class="icon_piechart"></i>
              <span>Charts</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_table"></i>
              <span>Tables</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="active" href="basic_table.html">Basic Table</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_documents_alt"></i>
              <span>Pages</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="profile.html">Profile</a></li>
              <li><a class="" href="login.html"><span>Login Page</span></a></li>
              <li><a class="" href="contact.html"><span>Contact Page</span></a></li>
              <li><a class="" href="blank.html">Blank Page</a></li>
              <li><a class="" href="404.html">404 Error</a></li>
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
      @yield('content')
 
    </div>
    <script src="{{asset('js/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- <script src="{{asset('vendor/summernote/summernote-bs4.min.js')}}"></script> -->
    <!-- <script src="{{asset('js/summernote-custom.js')}}"></script> -->
    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}" ></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
      $(document).ready(function () {
        function readImage (fileInput, onSuccess) {
          if (!fileInput.files || !fileInput.files[0]) return false;
          var imgPath = $(fileInput)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof (FileReader) != "undefined") {
              var reader = new FileReader();
              reader.onload = function (e) {
                // get loaded data and render thumbnail.
                if (typeof (onSuccess) === 'function') onSuccess(e);
              };
              // read the image file as a data URL.
              reader.readAsDataURL(fileInput.files[0]);
              return 'success';
            } else {
              return 'not support';
            }
          } else {
            return 'invalid type';
          }
        }
        $(document).off('touchstart click', '.image-upload .btn-change-image');
          $(document).on('touchstart click', '.image-upload .btn-change-image', function(e) {
            var $container = $(this).parents('.image-upload');
            var $file_select = $container.find('.img-upload-file');
            $file_select.trigger('click');
          });

          $(document).off('change', '.image-upload .img-upload-file');
          $(document).on('change', '.image-upload .img-upload-file', function(e) {
            var $container = $(this).parents('.image-upload');
            var $btn_remove = $container.find('.btn-remove-image');
            var $img = $container.find('.image-preview');
            var $btn_change_image = $container.find('.btn-change-image');

             var status = readImage(this, function(file_event) {
              $img.attr('src', file_event.target.result);
              $btn_remove.removeClass('d-none');
              $btn_change_image.addClass('has-image');
            });

            if (status != 'success') {
              $img.attr('src', '');
              $btn_remove.addClass('d-none');
              $btn_change_image.removeClass('has-image');
            }
          })
      });
    </script>
     @yield('footer')

  </body>
</html>