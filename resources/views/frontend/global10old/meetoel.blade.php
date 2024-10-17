@extends('frontend.layouts.main')
@section('title', 'Meet OEL Counsellors')
@section('content')
<section>
    <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-course-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="http://127.0.0.1:8000/frontend/img/2.jpg" alt="gif">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">Meet OEL Counsellors ...</h1>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="university_title ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 ">
                    <!-- <div class="university_airplane d-flex justify-content-center ">
                        <img src="{{asset('frontend/img/gif in blue (1)_1 1.png')}}" alt="gif">
                    </div> -->
                    <div class="universities_heading text-center">
                        <h1 class="fw-bold mx_rounded text-black">Meet OEL Counsellors</h1>
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
                            <h4>Meet Counsellors </h4>
                            <p>Counselling for study overseas is the process in which, an overseas education expert talks to
                                the students and assist them in assessing their options, formulating a plan, and choosing
                                the right program to fulfil their dream of studying abroad. It is the most initial and
                                important part, that gives a lot of clarity to even the confused students who have just came
                                out of the school or college. It helps them in finding the best university and choosing
                                academic destinations according to their needs.</p>

                            <p>Our dedicated and expert counsellors at OEL make this process a whole lot easier through
                                their vast experience in this field. By one to one comprehensive counselling process they
                                understand the interest of student and provide them with a suitable course and destination
                                according to their inclination. </p>

                            <p>Our counsellors have successfully counselled over 1000 students since our inception and given
                                students pathways to build a good career and study a high-quality education overseas.</p>

                            <p>To reach counsellors at OEL, you can simply Call/WhatsApp/Mail to Overseas education Lane. We
                                will provide the best counselling to you with all options.</p>


                       </div>
                       <div class="our-counseller mb-3">
                        <div class="title-counseller-movinmg text-center mt-5 mb-5">
                            <h2 class="fw-bold mx_rounded ">Our Counseller</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="counseller-oel">
                                    <img src="http://127.0.0.1:8000/frontend/img/Group 179.png" alt="gif">"
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counseller-oel">
                                    <img src="http://127.0.0.1:8000/frontend/img/Group 180.png" alt="gif">"
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counseller-oel">
                                    <img src="http://127.0.0.1:8000/frontend/img/Group 181.png" alt="gif">"
                                </div>
                            </div>
                        </div>
                       </div>
 
                    </div>
                    <div class="col-md-4">
                        <div class="expert-form">
                            <div class="exp-header mb-25">
                                <h5>Quick Query</h5>
                                <p class="dis">I can help you with your admission to University of York today.</p>
                            </div>
                            <hr>
                            <div class="exp-form mt-25">



                                <form id="application_guidance" method="post" action="https://laravel.overseaseducationlane.com/submitApplicationGuidance">
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


                                        <!-- <h6 class="col-md-12">When do you plan to study? *</h6> -->


                                        <!-- <div class="col-md-12">
                                            <div class="mb-25 form-check">
                                                <input type="checkbox" class="form-check-input" id="isConfirm" name="isConfirm" required="">
                                                <label class="form-check-label" for="exampleCheck1">I confirm that I am over 16. I also agree to OEL's
                                                    Terms &amp; Privacy Policy *</label>
                                            </div>
                                        </div> -->

                                        <!-- <div class="col-md-12">
                                            <div class="mb-25 form-check">
                                                <input type="checkbox" class="form-check-input" id="isContacting" name="isContacting" required="">
                                                <label class="form-check-label" for="exampleCheck1">I agree to OEL contacting me by phone
                                                    &amp; email to help me with my enquiry *</label>
                                            </div>
                                        </div> -->

                                        <!-- <div class="col-md-12">
                                            <div class="mb-25 form-check">
                                                <input type="checkbox" class="form-check-input" id="isSend" name="isSend" value="1" required="">
                                                <label class="form-check-label" for="exampleCheck1">Yes! I'd like OEL to send me relevant information about courses, Universities, scholarships and studying abroad.</label>
                                            </div>
                                        </div> -->

                                        <div class="col-md-12">
                                            <button type="submit" class="btn nillp mt-4">Submit</button>

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