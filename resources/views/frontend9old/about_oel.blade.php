@extends('frontend.layouts.main')
@section('title', 'About Oel')
@section('content')
<section>
    <div class="university_title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12">
                    <!--<div class="university_airplane d-flex justify-content-center ">-->
                    <!--    <img src="{{asset('frontend/img/gif in blue (1)_1 1.png')}}" alt="gif">-->
                    <!--</div>-->
                    <div class="universities_heading text-center">
                        <h1 class="fw-medium mx_rounded text-black">We are Overseas Education Lane</h1>
                        <P class="fw-medium text-black">
                            Dedicated to opening doors worldwide, helping individuals pursue their dreams of studying abroad and accessing world-class education opportunities.</P>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-7 ">
                        <div class="over_edu_title">
                            <h2 class="fw-medium  text-uppercase">Overseas Education Lane</h2>
                            <P class="fw-bold">One of the biggest challenges students of tier 2 and tier 3
                                cities in India face is accessibility to quality international
                                education unlike their counterparts in Metros and Tier 1
                                cities.</P>
                            <span class="fw-light">Overseas Education Lane, a venture of Ekon Solutions India Pvt
                                Ltd was
                                incepted to bridge this divide and provide equal opportunities of higher
                                education. We are a one-stop-solution, facilitating assistance to the students
                                and simplify the hassled process of college selection, admission, test, VISA and
                                Accommodation. We help students make the right choice when it comes to
                                pursuing education abroad.</sapn>
                                <br>
                              <sapn class="fw-light">
                                Our innovative approach has filled this gap by making over 3000 global
                                educational institutions and their programs accessible to the students living in
                                smaller towns and cities. We’ve counselled and placed over 1000 students in
                                some reputed institutions all over the world with 100% success rate.</span>
                        </div>
                    </div>
                    <div class="col-lg-5 ">
                        <di class="lane_edu_right">
                            <img src="{{asset('frontend/img/image7.jpg')}}" data-aos="fade-up"
                            data-aos-duration="3000" alt="edu">
                        </di>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="mission_title mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="mission_title_img">
                        <img src="{{asset('frontend/img/3ce9387d-be07-4084-8c5f-f2b703fa2f30.jpg')}}" data-aos="fade-up"
                        data-aos-duration="3000" alt="img">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mission_title_orgo">
                        <h3 class="fw-bold">MISSION</h3>
                        <P class="fw-light">To alleviate students' uncertainties by providing personalized counseling and guidance.
                        We carefully analyze their interests and financial situations to recommend the most suitable courses and institutions.
                        We strive to simplify the entire
                        journey, from application submission to visa acquisition, ensuring a smooth and stress-free experience for every student.</P>
                    </div>
                    <div class="mission_title_orgo">
                        <h3 class="fw-bold">VISION</h3>
                        <P class="fw-light">We envision a world where higher education abroad is attainable for everyone. For over a decade, we have dedicated ourselves to guiding individuals through the process of applying for international studies. Our commitment is to deliver comprehensive support and expert consultation, ensuring that every aspiring student receives the assistance they need to pursue their dreams of studying overseas.</P>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section>
    <div class="overseas_cast_edu">
        <div class="container">
            <div class="values_plus mt-5 text-center">
                <P class="fw-medium">Our Values</P>
                <h2 class="fw-bold">At Overseas Education Lane, we commit to:</h2>
            </div>
            <div class="all_overses_edu  d-flex justify-content-between mt-5">
                <div class="all_img_education_int " data-aos="fade-up" data-aos-duration="3000"class="aos-init aos-animate">
                    <img src="{{asset('frontend/img/Background.png')}}" alt="bc">
                </div>
                <div class="all_img_education_int mt" data-aos="fade-up" data-aos-duration="3000"class="aos-init aos-animate">
                    <img src="{{asset('frontend/img/Background (1).png')}}" alt="bc">
                </div>
                <div class="all_img_education_int  mt mtcp"data-aos="fade-up" data-aos-duration="3000"class="aos-init aos-animate">
                    <img src="{{asset('frontend/img/Background (2).png')}}" alt="bc">
                </div>
                <div class="all_img_education_int mt"data-aos="fade-up" data-aos-duration="3000"class="aos-init aos-animate">
                    <img src="{{asset('frontend/img/Background (3).png')}}" alt="bc">
                </div>
                <div class="all_img_education_int mt bg_rotate"data-aos="fade-up" data-aos-duration="3000"class="aos-init aos-animate">
                    <img src="{{asset('frontend/img/Background (4).png')}}" alt="bc">
                </div>
            </div>
        </div>
    </div>
</section>
 @endsection
