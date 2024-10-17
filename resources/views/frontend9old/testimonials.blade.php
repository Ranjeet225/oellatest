@extends('frontend.layouts.main')
@section('title', 'Testimonials')
@section('content')
<style>
@media (min-width: 992px) {
    .rs-latest-couses .course-item {
        max-width: 350px;
    }
}
</style>
<section>
    <div class="university_title ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="university_airplane d-flex justify-content-center ">
                        <img src="{{asset('frontend/img/gif in blue (1)_1 1.png')}}" alt="gif">
                    </div>
                    <div class="universities_heading text-center">
                        <h1 class="fw-bold mx_rounded text-black">We are Overseas Education Lane</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="rs-testimonial style1 home13-style rs-inner-blog">
    <div class="container">
        <section style="color: #000; background-color: #f3f2f2;">
            <div class="container py-5">
              <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                  <h3 class="fw-bold mb-4">Testimonials</h3>
                </div>
              </div>
              <div class="row text-center fr-home-test">
                @foreach ($testimonials as $testimonial)
                <div class="col-lg-4 mb-4 mb-md-0">
                  <div class="card">
                    <div class="card-body py-4 mt-2">
                      <div class="d-flex justify-content-center mb-4">
                        <img src="{{asset('imagesapi/' . $testimonial->profile_picture)}}"
                          class="rounded-circle shadow-1-strong" width="100" height="100" />
                      </div>
                      <h5 class="font-weight-bold">{{$testimonial->name}}</h5>
                      <h6 class="font-weight-bold my-3">{{$testimonial->location}}</h6>
                      <p class="mb-2">
                        <i class="fas fa-quote-left pe-2"></i>{!! $testimonial->testimonial_desc !!}
                      </p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </section>
    </div>
</section>
@endsection

