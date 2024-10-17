@extends('frontend.layouts.main')
@section('title', 'Blogs Details')
@section('content')
<section>
    <div class="university_title ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="university_airplane d-flex justify-content-center ">
                        <img src="{{asset('frontend/img/gif in blue (1)_1 1.png')}}" alt="gif" style="max-width:800px">
                    </div>
                    <div class="universities_heading text-center">
                        <h1 class="fw-bold mx_rounded text-black">{{$blog->title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="quick_selection_title  mt-5">
        <div class="rs-inner-blog orange-color">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 pr-50 md-pr-15">
                     <div class="blog-deatails">
                        <div class="blog-full">
                           <div class="bs-img">
                              <h1 style="font-size: 26px;">UK Graduate Visas: A Closer Look at Policy, Perspectives, and Potential Reforms</h1>
                           </div>
                           <ul class="single-post-meta">
                              <li>
                                 <span class="p-date"> <i class="fa fa-calendar-check-o"></i> {{date('Y-m-d',strtotime($blog->created_at))}} </span>
                              </li>
                           </ul>
                           <div class="bs-img" >
                              <img src="{{asset('imagesapi/'.$blog->image)}}" alt="{{$blog->title}}" class="w-100">
                           </div>
                           <div class="blog-desc">
                            {!! $blog->text !!}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </div>
</section>
@endsection
