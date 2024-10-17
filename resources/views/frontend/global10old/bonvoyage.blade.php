@extends('frontend.layouts.main')
@section('title', 'CBon Voyage')
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
                        <h1 class="fw-bold mx_rounded text-black">CBon Voyage</h1>
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

                    <div class="col-md-7">

                        <div class="consultant-info-div ">
                        <h4>Bon Voyage</h4>
                        <p class="about-content">
                         <img src="{{asset('frontend/img/bonvoage.jpg')}}">
                        </p>


                        </div>
                    </div>

                   <div class="col-md-5">
                        <div class="expert-form">
                            <div class="exp-header mb-25">
                                <h5>Quick Query</h5>
                                <p class="dis">I can help you with your admission to University of York today.</p>
                            </div>
                            <hr>
                            <div class="exp-form mt-25">



                                <form id="application_guidance" method="post" action="">
                                    <input type="hidden" name="_token" value="OiZlEqsWolgvIMb5v0gTnZgWr970tUqRO4HRocY7">
                                    <div class="row">
                                        <div class="col-md-12 mb-25">
                                            <input class="from-control" type="text" id="agfirst_name" name="agfirst_name" placeholder="First Name *" value="" required="">
                                        </div>
                                        <div class="col-md-12 mb-25">
                                            <input class="from-control" type="text" id="aglast_name" name="aglast_name" placeholder="Last Name *" required="" value="">
                                        </div>
                                        <div class="col-md-12 mb-25">
                                            <input class="from-control" type="text" id="agemailId" name="agemailId" placeholder="Email ID *" required="" value="">

                                        </div>

                                        <div class="col-md-12 mb-25">
                                            <input class="from-control" type="text" id="agMobileno" name="agMobileno" placeholder="Mobile Number *" required="" value="">


                                        </div>
                                        <div class="col-md-12 mb-25">
                                            <textarea row="10" class="from-control" id="agMessage" name="agMessage" placeholder=" Message"></textarea>
                                        </div>

                                        <input type="hidden" name="source" value="website">


                                        <h6 class="col-md-12">When do you plan to study? *</h6>


                                        <div class="col-md-12">
                                            <div class="mb-25 form-check">
                                                <input type="checkbox" class="form-check-input" id="isConfirm" name="isConfirm" required="">
                                                <label class="form-check-label" for="exampleCheck1">I confirm that I am over 16. I also agree to OEL's
                                                    Terms &amp; Privacy Policy *</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-25 form-check">
                                                <input type="checkbox" class="form-check-input" id="isContacting" name="isContacting" required="">
                                                <label class="form-check-label" for="exampleCheck1">I agree to OEL contacting me by phone
                                                    &amp; email to help me with my enquiry *</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-25 form-check">
                                                <input type="checkbox" class="form-check-input" id="isSend" name="isSend" value="1" required="">
                                                <label class="form-check-label" for="exampleCheck1">Yes! I'd like OEL to send me relevant information about courses, Universities, scholarships and studying abroad.</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn nillp mt-4">Get Application Guidance</button>

                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
   </div>
</section>
@endsection

