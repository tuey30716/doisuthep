@extends('master')

@section('content')
  <div class="container pt-30px mb-5">
    <section id="box-plants" class="wow fadeInDown" >
      <div class="header-selected pt-20px">
        <h3>{{__('message.services')}}</h3>
      </div>
      <div class="row">
        <div class="col-12">
      
        </div>
      </div>
    </section>
    @foreach($data_topic as $key => $topic) 
    <section id="{{$topic_name[$key]}}" class="wow fadeInDown " >
      <div class="header-selected ">
        <p><i class="fa fa-bullhorn"></i>{{__('message.'.$topic["topic"])}} </p>
      </div>
      <div class="row">
        <div class="col-12">
          <p class="mb-3">{!! $topic['detail'] !!}</p>
        </div>
        <div class="col-md-4">
          <div class="card card-box mb-3">
            <div class="highlight-hover">
              <div class="img-16by9 holder ">
                <img src="{{URL::asset('images/cover3.jpg')}}" class="img-responsive image-preview" alt="...">
              </div>
              <div class="show-hover">
                <a href="{{URL::asset('images/cover3.jpg')}}" class="me-3" data-lightbox="context"  title="ดูรูปภาพ">
                  <i class="far fa-image"></i>
                </a>
                <a href="" title="รายละเอียด">
                  <i class="fas fa-eye"></i>
                </a>
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">STeP นำทัพนักศึกษา มช. กวาดรางวัล Startup Thailand League 2021 (ภาคเหนือ) คว้าชัยชนะแบบจัดเต็ม พร้อมเดินหน้าคว้าชัยเวทีระดับประเทศในเดือนสิงหาคมนี้</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-box mb-3">
            <div class="highlight-hover">
              <div class="img-16by9 holder " style="background-image:url();">
                <img src="{{URL::asset('images/image-5.jpg')}}" class="img-responsive image-preview" alt="...">
              </div>
              <div class="show-hover">
                <a href="{{URL::asset('images/image-5.jpg')}}" class="me-3" data-lightbox="context"  title="ดูรูปภาพ">
                  <i class="far fa-image"></i>
                </a>
                <a href="" title="รายละเอียด">
                  <i class="fas fa-eye"></i>
                </a>
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">STeP นำทัพนักศึกษา มช. กวาดรางวัล Startup Thailand League 2021 (ภาคเหนือ) คว้าชัยชนะแบบจัดเต็ม พร้อมเดินหน้าคว้าชัยเวทีระดับประเทศในเดือนสิงหาคมนี้</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-box mb-3">
            <div class="highlight-hover">
              <div class="img-16by9 holder">
                <img src="{{URL::asset('images/image-5.jpg')}}" class="img-responsive image-preview" alt="...">
              </div>
              <div class="show-hover">
                <a href="{{URL::asset('images/image-5.jpg')}}" class="me-3" data-lightbox="context"  title="ดูรูปภาพ">
                  <i class="far fa-image"></i>
                </a>
                <a href="" title="รายละเอียด">
                  <i class="fas fa-eye"></i>
                </a>
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">STeP นำทัพนักศึกษา มช. กวาดรางวัล Startup Thailand League 2021 (ภาคเหนือ) คว้าชัยชนะแบบจัดเต็ม พร้อมเดินหน้าคว้าชัยเวทีระดับประเทศในเดือนสิงหาคมนี้</p>
            </div>
          </div>
        </div>
        <div class="col-lg-12 d-flex justify-content-end">
          <a href="news.php" class="btn btn-main btn-sm "><i class="fa fa-arrow-right me-2"></i>{{__('message.more')}}</a>
        </div>
      </div>
    </section> 
    @endforeach
  </div>
@endsection

