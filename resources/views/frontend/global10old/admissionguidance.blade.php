@extends('frontend.layouts.main')
@section('title', 'Country, Program & University Selection')
@section('content')
<section>
    <div class="university_title ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="university_airplane d-flex justify-content-center ">
                        <img src="{{asset('frontend/img/gif in blue (1)_1 1.png')}}" alt="gif">
                    </div>
                    <div class="universities_heading text-center">
                        <h1 class="fw-bold mx_rounded text-black">Country, Program & University Selection</h1>
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

                    <div class="col-md-8">

                        <div class="consultant-info-div ">
                        <h4>University Application Assistance</h4>
                        <p class="about-content">
                        Your application to the University speaks volumes about you. It not only reflects your academic profile and subject interests but also mirrors your persona. The university gets an insight into your background through the Statement of Purpose (SOP), Letters of Recommendation (LOR), Motivation Letter, Resume or Curriculum Vitae as well as Essays and other essential documents which are deciding factors for your application to be shortlisted.
                        </p>


                        <p>Our counsellors give you complete guidelines for drafting SOP, LOR, Resume, Essays and for filling the application forms. You can make good use of the complete handholding right from screening your application to posting it to the universities.</p>
                        </div>
                    </div>


                    <div class="col-md-4">

                        <div class="expert-form">
                                <div class="exp-header mb-25">
                                    <h5>Quick Query</h5>

                                    <p class="dis">I can help you with your admission to University of York today.
                                        <i class="fa fa-caret-down"></i></p>

                                </div>
                                <hr>
                            <div class="exp-form mt-25">


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
   </div>
</section>
@endsection
