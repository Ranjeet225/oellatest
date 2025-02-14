@extends('frontend.layouts.main')
@section('title', 'Home')
@section('content')
<section>
    <div class="airplane_Section ">
        <div class="airplane_section_title">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center b-flv">
                    <div class="col-lg-5">
                        <div class="sec_air_Plane d-none d-lg-block" "="">
                            <h1 class=" fw-bold">Dreaming of Studying <br>
                            Abroad? <sapn class="text-black">We're Here to</sapn> <br>
                            Guide You!</h1>
                            <div class="btns mt-5">
                                <a href="{{url('contact-us')}}">
                                    <button class="text-white p-2 border-0 px-4 border rounded">Enquiry now</button>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-7">
                        <div class="main_air">
                            <div class="airplane-gif">
                                <img src="{{asset('frontend/gif/gif in blue (1)_1 (1).gif')}}" width="w-100" height="auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="all_media_icon">
        <div class="icon_social ">
             <a href="https://www.facebook.com/overseasedu.lane/"><img src="https://www.overseaseducationlane.com/public/frontend/img/facebook.png"></a>
         <a href="https://in.linkedin.com/in/overseaseducationlane?trk=public_profile_samename-profile"> <img src="https://www.overseaseducationlane.com/public/frontend/img/linkdin.png"></a>
         <a href="https://www.youtube.com/@OverseasEducationLane1"><img src="https://www.overseaseducationlane.com/public/frontend/img/youtube.png"></a>
        <a href="https://www.instagram.com/overseaseducation_lane/"><img src="https://www.overseaseducationlane.com/public/frontend/img/instagram.png"></a>
       <a href="https://twitter.com/LaneEducation"> <img src="https://www.overseaseducationlane.com/public/frontend/img/twitter.png"></a>
        </div>
    </div>
</section>

<section>
    <div class="marquee_section ">
        <img src="{{asset('frontend/img/transparent gif.gif')}}">
        <!--<video controls loop>-->
        <!--  <source src="{{asset('frontend/img/website.mp4')}}" type="video/mp4">-->
        <!--  <source src="{{asset('frontend/img/website.mp4')}}" type="video/ogg">-->
        <!--</video> -->
    </div>
</section>
<section>
    <div class="marquee_section_text ">
        <marquee>
            <P>Click Here for Exclusively Designed Insurance Policies for Architects....Click Here for Exclusively
                Designed Insurance Policies for Architects....Click Here for Exclusively Designed Insurance Policies
                for Architects....</P>
        </marquee>
    </div>
</section>
<section>
    <div class="container d-block d-xl-none d-lg-none">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec_air_Plane text-center mt-5 mb-5">
                    <h1 class="fw-bold">Dreaming of Studying <br>
                        Abroad? <sapn class="text-black">We're Here to</sapn> <br>
                        Guide You!</h1>
                    <div class="btns mt-5">
                        <a href="{{url('contact-us')}}">
                            <button class="text-white p-2 border-0 px-4 border rounded">Enquiry now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="student_titles pt-5 pb-5">
        <div class="students_form">
            <div class="container">
                <div class="main_form_students">
                    <h1 class="text-center heading text-center fw-bold">
                        We take STUDENTS from a stage of</h1>
                    <P class="text-center frd mb-5">We are a dedicated team of experienced education counsellors and registered
                    visa agents, committed to guiding you through every stage of the admissions and visa process. Reach out to us
                    today for personalized assistance and expert support.</P>
                </div>
                <div class="row">
                    @foreach ($service as $item)
                    <div class="col-lg-3">
                        <div class="buddy_icon  rounded">
                            <div class="buddy_title"></div>
                            <div class="buddy_img text-center">
                                <img src="{{asset('imagesapi')}}/{{$item->image}}">
                                <div class="confusion mt-4">
                                    <h4 class="text-center fw-bold imgg">{{$item->name}}</h4>
                                    @php
                                    $content = strip_tags($item->content);
                                    $words = explode(' ', $content);
                                    $content = implode(' ', array_slice($words, 0, 10));
                                    echo $content . '...';
                                    @endphp
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="about_us_title position-relative">
        <div class="sign_flower">
            <div class="sign_flower_int position-absolute top-0 end-0 ">
                <img src="{{asset('frontend/img/bg-partial-3.svg.png')}}" alt="paritial">
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="about_int">
            <div class="row">
                <div class="col-lg-5">
                    <div class="s_img mt-4">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1000 918">
                            <image style="width: 90%;height:auto" xlink:href="{{asset('frontend/img/milestone2.png.png')}}"></image>
                            <a xlink:href="{{url('bonvoyage')}}" target="_blank">
                                <rect x="652" y="678" fill="#fff" opacity="0" width="106" height="77"></rect>
                            </a><a xlink:href="{{url('predeparturebriefing')}}" target="_blank">
                                <rect x="781" y="581" fill="#fff" opacity="0" width="110" height="53"></rect>
                            </a><a xlink:href="{{url('resumeevaluation')}}" target="_blank">
                                <rect x="656" y="110" fill="#fff" opacity="0" width="100" height="100"></rect>
                            </a><a xlink:href="{{url('financialcounselling')}}" target="_blank">
                                <rect x="703" y="305" fill="#fff" opacity="0" width="100" height="158"></rect>
                            </a><a xlink:href="#">
                                <rect x="880" y="326" fill="#fff" opacity="0" width="88" height="86"></rect>
                            </a><a xlink:href="{{url('foreignexchange')}}" target="_blank">
                                <rect x="811" y="456" fill="#fff" opacity="0" width="100" height="100"></rect>
                            </a><a xlink:href="{{url('visa&interview')}}" target="_blank">
                                <rect x="557" y="518" fill="#fff" opacity="0" width="81" height="80" target="_blank"></rect>
                            </a><a xlink:href="{{url('universityapplicationassistance')}}" target="_blank">
                                <rect x="534" y="368" fill="#fff" opacity="0" width="82" height="81" target="_blank"></rect>
                            </a><a xlink:href="{{url('psychometricstest')}}" target="_blank">
                                <rect x="171" y="546" fill="#fff" opacity="0" width="86" height="86" target="_blank"></rect>
                            </a><a xlink:href="{{url('countryprogram')}}" target="_blank">
                                <rect x="113" y="310" fill="#fff" opacity="0" width="212" height="137" target="_blank"></rect>
                            </a><a xlink:href="{{url('admissionguidance')}}" target="_blank">
                                <rect x="209" y="120" fill="#fff" opacity="0" width="103" height="108" target="_blank"></rect>
                            </a><a xlink:href="{{url('testprepration')}}" target="_blank">
                                <rect x="354" y="36" fill="#fff" opacity="0" width="100" height="100" target="_blank"></rect>
                            </a><a xlink:href="{{url('travel&amp;medical')}}">
                                <rect x="0" y="0" fill="#fff" opacity="0" width="100" height="100"></rect>
                            </a><a xlink:href="{{url('pretestprepration')}}" target="_blank">
                                <rect x="494" y="92" fill="#fff" opacity="0" width="116" height="152"></rect>
                            </a><a xlink:href="{{url('meetoel')}}" target="_blank">
                                <rect x="287" y="605" fill="#fff" opacity="0" width="140" height="86"></rect>
                            </a>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="s_img_about">
                        <div class="forign_study">
                            <h3 class="fw-bold">About Us</h3>
                            <p class="fw-semibold text-black">
                                We'll make your <span>STUDYING ABROAD </span>    dream come true</p>
                            <li class="text-black fw-light-bold text-black">Overseas Education Lane, a venture of Ekon Solutions India Pvt Ltd was
                            incepted to bridge this divide and provide equal opportunities for higher education. We are a one-stop solution,
                            facilitating assistance to the students and simplifying the hassled process of college selection, admission, test, VISA and Accommodation.
                            </li>
                            <div class="bts2">
                                <a href="{{url('about-oel')}}">
                                    <button class="  bts2 border border-primary p-2 px-3 mt-3 rounded">Know
                                        More</button>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="about_us_titles position-relative">
        <div class="sign_flower">
            <div class="sign_flower_ints position-absolute  start-0 ">
                <img src="{{asset('frontend/img/bg-partial-3.svg (1).png')}}" alt="paritial">
            </div>
        </div>
    </div>
</section>

<section>

    <div class="choose_us_title  xs-p-0" data-aos="fade-up"
        data-aos-duration="3000">
        <div class="container">
            <div class="choose_title text-center ">
                <h3 class="fw-bold cs fw-medium">Why choose us?</h3>
                <p class="text-black">At OEL, our team of experienced education counselors and certified immigration agents
                is dedicated to guiding you through every step of your journey, from securing admission
                to completing the visa process. With expert advice and personalized support, we aim to make
                your experience seamless and stress-free. Contact us today to find out
                how we can help you achieve your goals!.</p>
            </div>
            <div class="icon_flag d-flex justify-content-evenly text-center mt-5">
                <div class="founded_p">
                    <img src="{{asset('frontend/img/Clip path group.png')}}" alt="flag">
                    <div class="yr_txt mt-3">
                        <h3 class="fw-bold">2013</h3>
                        <P class="fw-semibold text-black fd_s">Founded In</P>
                    </div>
                </div>
                <div class="founded_ps">
                    <img src="{{asset('frontend/img/man-user-color-icon 1.png')}}" alt="man">
                    <div class="yr_txt mt-3">
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="counter_wrapper">
                            <div class="counter_item">
                                <h1 class="counter fw-bold" data-number="2500" data-speed="200"><span>+</span></h1>
                                <p class="fw-semibold text-black fd_s">Successful Students</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="founded_p">
                    <img src="{{asset('frontend/img/SVG.png')}}" alt="svg">
                    <div class="yr_txt">
                        <div class="counter_wrapper">
                            <div class="counter_item">
                                <h1 class="fw-bold" >99%</h1>
                                <p class="fw-semibold text-black fd_s">Success Rate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="education_title ">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="education_aside pt-5">
                        <div class="edu_as">
                            <h3 class="fw-bold">Education</h3>
                            <h4 class="text-black fw-medium"> Unleash Your Potential with Global Learning Tailored to Your Ambitions</span> </h4>
                            <p class="text-black fw-normal">Studying abroad is more than just an educational opportunity—it's the gateway to realizing
                            your full potential and building a thriving future. Whether you're looking to
                            accelerate your career, develop personally, or acquire new expertise, an
                            international education equips you with the tools and experiences to turn
                            your aspirations into reality. By aligning your studies with your unique goals,
                            you'll be empowered to achieve both personal and professional growth on a global scale. </p>
                            <div class="all_btns d-none d-sm-block">
                                <a href="{{url('universities?country=13')}}">
                                    <button class="border-0 text-white fw-light rounded p-2 px-3">Study in
                                        Australia</button>
                                </a>
                                <a href="{{url('universities?country=38')}}">
                                    <button class="border-0 text-white fw-light rounded p-2 px-3">Study in
                                        Canada</button>
                                </a>
                                <a href="{{url('universities?country=157')}}">
                                    <button class="border-0 text-white fw-light rounded  p-2 px-3 ">Study in New
                                        Zealand</button>
                                </a>
                                <a href="{{url('universities?country=231')}}">
                                    <button class="border-0 text-white fw-light rounded p-2 px-3 pv">Study in
                                        USA</button>
                                </a>
                            </div>
                            <div class="d-block d-sm-none all_btns text-center mt-5">
                                <a href="{{url('universities?country=13')}}">
                                    <button class="border-0 text-white fw-light rounded p-2 px-3">Study in
                                        Australia</button>
                                </a>
                                <a href="{{url('universities?country=38')}}">
                                    <button class="border-0 text-white fw-light rounded p-2 px-3">Study in
                                        Canada</button>
                                </a>
                            </div>
                            <div class="d-block d-sm-none all_btns text-center mt-3">
                                <a href="{{url('universities?country=230')}}">
                                    <button class="border-0 text-white fw-light rounded p-2 px-3 ">Study in UK</button>
                                </a>
                                <a href="{{url('universities?country=231')}}">
                                    <button class="border-0 text-white fw-light rounded p-2 px-3 ">Study in USA</button>
                                </a>
                                <a href="{{url('universities?country=157')}}">
                                    <button class="border-0 text-white fw-light pgo rounded p-2 px-3 ">Study in New
                                        Zealand</button>
                                </a>
                            </div>

                            <div class="all_btns mt-3 d-none d-sm-block">
                                <button class="border-0 text-white fw-light rounded p-2 px-3">Study in UK</button>
                                <button class="border-0 text-white fw-light rounded p-2 px-3">Study in South Korea</button>
                                <button class="border-0 text-white fw-light rounded p-2 px-3">Study in Europe</button>
                                <button class="border-0 text-white fw-light rounded p-2 px-3">Study in Russia</button>
                                <button class="border-0 text-white fw-light rounded p-2 px-3 mt-3">Study in Japan</button>
                            </div>
                            <div class="bts2">
                                <a href="https://overseas.skylabserp.com/universities">
                                    <button class="  bts2 border border-primary p-2 px-3 mt-3 rounded">
                                        More Countries</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="transform_img">
                        <img src="{{asset('frontend/img/Frame.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="education_title  cf">
        <div class="container">
            <div class="row dl-title">
                <div class="col-lg-5">
                    <div class="transform_img">
                        <img src="{{asset('frontend/img/Comp 1.gif')}}">
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="education_aside ">
                        <div class="edu_as">
                            <h3 class="fw-bold">Migration</h3>
                            <h4 class="text-black fw-medium">Your Pathway to Global Education: Expert Guidance for a Seamless <span>Migration</span>  </h4>
                            <p class="text-black fw-normal">Studying abroad is a life-changing journey, and with the right support, it can unlock a world of
                            new opportunities and a brighter future. Whether you're pursuing higher education, bringing your family along, or seeking to expand
                            your career prospects, our specialized migration expertise ensures that your academic and personal transitions are smooth and well-guided. From securing
                            student visas to helping with dependent, skilled, or sponsor visas, we are here to support every step of your international journey. </p>
                            <div class="all_btns d-none d-sm-block">
                                 <button class="border-0 text-white fw-light rounded p-2  px-3">Visitor Visa</button>
                                <button class="border-0 text-white fw-light rounded p-2  px-3">Student Visa</button>
                                <button class="border-0 text-white fw-light rounded p-2  px-3">Student Dependent Visa</button>
                                <button class="border-0 text-white fw-light rounded p-2  px-3 pv">Skilled Migration Visa</button>


                            </div>

                            <div class="all_btns text-center mt-5 d-block d-sm-none">
                                <button class="border-0 text-white fw-light rounded p-2  px-3">Visitor Visa</button>
                                <button class="border-0 text-white fw-light rounded pgo p-2  px-3">Partner Visa</button>

                            </div>
                            <div class="all_btns text-center mt-3 d-block d-sm-none">
                                <button class="border-0 text-white fw-light rounded p-2  px-3">Parent Visa</button>
                                <button class="border-0 text-white fw-light rounded p-2 pgo  px-3">Tourist Visa</button>

                            </div>

                            <div class="all_btns text-center mt-3 d-block d-sm-none">
                                <button class="border-0 text-white fw-light rounded p-2  px-3">Family Visa</button>
                                <button class="border-0 text-white fw-light rounded p-2  px-3">Parent Visa</button>
                                <button class="border-0 text-white fw-light rounded pgo p-2  px-3">Visitor Visa</button>

                            </div>

                            <div class="all_btns text-center mt-3 d-block d-sm-none">
                                <button class="border-0 text-white fw-light rounded p-2  px-3">Business
                                    Visa</button>
                                <button class="border-0 text-white fw-light rounded p-2  px-3 ">Protection
                                    Visa</button>

                            </div>
                            <div class="bts2 d-block d-sm-none text-center">
                                <button class=" border border-primary p-2 px-3 mt-3 rounded">Know More</button>
                            </div>

                            <div class="all_btns mt-3 d-none d-sm-block ">

                                <button class="border-0 text-white fw-light rounded p-2  px-3">Partner Visa</button>
                                <button class="border-0 text-white fw-light rounded p-2  px-3">Parent
                                    Visa</button>
                                <button class="border-0 text-white fw-light rounded p-2  px-3 pv">Tourist
                                    Visa</button>
                                     <button class="border-0 text-white fw-light rounded p-2  px-3 pv">Study Sponsor Visa</button>

                            </div>
                            <!--<div class="all_btns mt-3 d-none d-sm-block">-->
                            <!--    <button class="border-0 text-white fw-light rounded p-2  px-3">Business-->
                            <!--        Visa</button>-->
                            <!--</div>-->
                        </div>
                         <div class="bts2">
                                <a href="https://overseas.skylabserp.com/contact-us">
                                    <button class="  bts2 border border-primary p-2 px-3 mt-3 rounded">Know
                                        More</button>
                                </a>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="text_heading_mobile d-block d-sm-none mt-4 container d-none d-sm-block">
        <h4 class="fw-bold px-4 text-center">We provide Comprehensive Student Support and Industry Expertise for Global Education.
</h4>
    </div>
</section>

<section>
    <div class="partner_title mt-5 ">
        <div class="container">
            <div class="partner_title_head">
                <h3 class="fw-bold text-center cs ">What Our Students Say</h3>
            </div>
            <div class="anot_int text-center mt-5">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-students-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-students" type="button" role="tab" aria-controls="pills-students"
                            aria-selected="true">Students</button>
                    </li>
                    <!--<li class="nav-item" role="presentation">-->
                    <!--    <button class="nav-link text-black text-uppercase" id="pills-partners-tab" data-bs-toggle="pill"-->
                    <!--        data-bs-target="#pills-partners" type="button" role="tab" aria-controls="pills-partners"-->
                    <!--        aria-selected="false">Recruitment Partners</button>-->
                    <!--</li>-->
                    <!--<li class="nav-item" role="presentation">-->
                    <!--    <button class="nav-link text-black text-uppercase" id="pills-institutions-tab" data-bs-toggle="pill"-->
                    <!--        data-bs-target="#pills-institutions" type="button" role="tab"-->
                    <!--        aria-controls="pills-institutions" aria-selected="false">Partner Institutions</button>-->
                    <!--</li>-->
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-students" role="tabpanel"
                        aria-labelledby="pills-students-tab">
                        <div class="all_images_circle ">
                            <div class="al_img_most_title d-flex">
                                @foreach ($feedback_video->where('category', 'Students')->take(6) as $item)
                                <div class="circle_video_top {{ $loop->index == 0 ? 'mt-5' : ($loop->index == 1 ? 'mt-4' : ($loop->index == 4 ? 'mt-4' : ($loop->index == 5 ? 'mt-5' : ''))) }}">
                                    <video class="cl{{ $loop->index + 1 }} " style="width: 163px;border-radius: 20px;"
                                        data-aos="fade-up" controls>
                                        <source src="{{ asset('video/' . $item->video_url) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-partners" role="tabpanel"
                        aria-labelledby="pills-partners-tab ">
                        <div class="all_images_circle mt-5">
                            <div class="al_img_most_title d-flex">
                                @foreach ($feedback_video->where('category', 'Recruitment Partners')->take(6) as $item)
                                <div class="circle_video_top {{ $loop->index == 0 ? 'mt-5' : ($loop->index == 1 ? 'mt-4' : ($loop->index == 4 ? 'mt-4' : ($loop->index == 5 ? 'mt-5' : ''))) }}">
                                    <video class="cl{{ $loop->index + 1 }} " style="width: 180px;border-radius: 20px;"
                                        data-aos="fade-up" controls>
                                        <source src="{{ asset('video/' . $item->video_url) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-institutions" role="tabpanel"
                        aria-labelledby="pills-institutions-tab text-black text-uppercase">
                        <div class="all_images_circle mt-5">
                            <div class="al_img_most_title d-flex">
                                @foreach ($feedback_video->where('category', 'Partner Institutions')->take(6) as $item)
                                <div class="circle_video_top {{ $loop->index == 0 ? 'mt-5' : ($loop->index == 1 ? 'mt-4' : ($loop->index == 4 ? 'mt-4' : ($loop->index == 5 ? 'mt-5' : ''))) }}">
                                    <video class="cl{{ $loop->index + 1 }} " style="width: 180px;border-radius: 20px;"
                                        data-aos="fade-up" controls>
                                        <source src="{{ asset('video/' . $item->video_url) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="main_sl">
        <div class="logo-slider d-block d-sm-none">
            <div class="logos-slide slider-max">
                <div class="slide">
                    <img src="{{asset('frontend/img/Component 8.png')}}" alt="Image 1">

                </div>
                <div class="slide">
                    <img src="{{asset('frontend/img/Component 8.png')}}" alt="Image 2">

                </div>
                <div class="slide">
                    <img src="{{asset('frontend/img/Component 8.png')}}" alt="Image 1">

                </div>
                <div class="slide">
                    <img src="{{asset('frontend/img/Component 8.png')}}" alt="Image 2">

                </div>
                <div class="slide">
                    <img src="{{asset('frontend/img/Component 8.png')}}" alt="Image 1">

                </div>
                <div class="slide">
                    <img src="{{asset('frontend/img/Component 8.png')}}" alt="Image 2">

                </div>
                <div class="slide">
                    <img src="{{asset('frontend/img/Component 8.png')}}" alt="Image 1">

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="coures_head text-center  d-block d-sm-none mt-4">
        <h3 class="fw-bold cs">Most Viewed Courses</h3>
    </div>
</section>
<section>
    <div class="main_cl mt-5">
        <div class="text_heading_slide text-black  text-center  pt-5 d-none d-sm-block">
            <h3 class="fw-bold cs">We provide Comprehensive Student Support and Industry Expertise for Global Education.</h3>
        </div>
        <div class="logo-slider d-none d-sm-block">
            <div class="logos-slide">

                @foreach ($ads as $item)
                <div class="slide">
                    <img src="{{asset($item->image)}}" style="width:280px;height:280px" alt="{{$item->title}}" class="img-name">
                </div>
                @endforeach
            </div>
        </div>

        <div class="courses_view_title mt-5 ">
            <div class="coures_head text-center  d-none d-sm-block">
                <h3 class="fw-bold">Most Viewed Courses</h3>
            </div>
            <div class="logo-slider slide-mx-slide">
                <div class="logos-slide logos-max">

                    @foreach ($programs as $item)
                    <div class="slide slide-t mx-2">
                        <div class="rm-int">
                            <img src="{{asset($item->university_name->banner)}}" alt="university" class="img-name" >
                        </div>
                        <div class="course_name mt-4">
                            <span class="fw-light">{{$item->university_name->country_name->name ?? null}}</span>
                            <h4 class="fw-bold">{{substr($item->name , 0, 30)}}</h4>
                            <p>Application Fees:{{($item->application_fee == 0) ? 'Free' : $item->application_fee}}</p>
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="{{asset('frontend/img/Vector.png')}}">
                                        <span>{{substr($item->university_name->university_name ?? null, 0,25)}}</span>{{$item->university_name->country_name->name ?? null}}</a>
                                </li>
                            </ul>
                            <div class="right_click d-flex justify-content-between align-items-center  ">
                                <div class="king">
                                    <!-- <span>Kingdom</span> -->
                                </div>
                                <div class="details">
                                    <a href="{{route('course-details',$item->id)}}">View Details</a><i class="fa-solid fa-arrow-right mx-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach


                </div>
            </div>


            <div class="google_title ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="google_img">
                                <img src="{{asset('frontend/img/Google-Review-Logo 1.png')}}" alt="google_img">
                                <div class="sign_img">
                                    <span>Win up to ₹ 3,00,000* to study in the UK, Canada &amp; US.</span>
                                    <img src="{{asset('frontend/img/Group (1).png')}}" alt="sign">
                                </div>
                            </div>
                            <div class="all_btns">
                                <a href="{{url('contact-us')}}">
                                    <button class=" bd border-0 text-white fw-light rounded px-4 py-2">Apply now</button>
                                </a>
                                <a href="https://g.page/r/CUAQxHMudnKuEAE/review" target="_blank">
                                    <button class="  bts23 border border-primary p-2 mt-3 rounded">Give us a Review</button>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="main_google_int d-none d-sm-block">




                            @foreach ($testimonials as $key=>$item)
                            @if($key == 0)
                                <div class="google_right_side d-flex gap-5 align-items-center">
                                    <div class="side_r">
                                        <img src="{{asset('imagesapi')}}/{{$item->profile_picture}}" style="width: 150px;border-radius:50%" alt="google_img">
                                    </div>
                                    <div class="gz_up">
                                        <h4>{{$item->name}}</h4>

                                        @php
                                        $content = strip_tags($item->testimonial_desc);
                                        $words = explode(' ', $content);
                                        $content = implode(' ', array_slice($words, 0, 10));
                                        echo $content . '...';
                                       @endphp
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="sign_img">
                                        <img src="{{asset('frontend/img/Group (1).png')}}" alt="sign">
                                    </div>

                                </div>
                                @elseif($key == 1)
                                <div class="google_right_side d-flex gap-5 align-items-center mx-5 mt-4">
                                    <div class="side_r">
                                        <img src="{{asset('imagesapi')}}/{{$item->profile_picture}}" style="width: 150px;border-radius:50%" alt="google_img">
                                    </div>
                                    <div class="gz_up">
                                        <h4>{{$item->name}}</h4>

                                        @php
                                        $content = strip_tags($item->testimonial_desc);
                                        $words = explode(' ', $content);
                                        $content = implode(' ', array_slice($words, 0, 10));
                                        echo $content . '...';
                                       @endphp
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="sign_img">
                                        <img src="{{asset('frontend/img/Group (1).png')}}" alt="sign">
                                    </div>

                                </div>

                                @elseif($key == 2)

                                <div class="google_right_side d-flex gap-5 align-items-center mt-4" >
                                    <div class="side_r">
                                        <img src="{{asset('imagesapi')}}/{{$item->profile_picture}}" style="width: 150px;border-radius:50%" alt="google_img">
                                    </div>
                                    <div class="gz_up">
                                        <h4>{{$item->name}}</h4>

                                        @php
                                        $content = strip_tags($item->testimonial_desc);
                                        $words = explode(' ', $content);
                                        $content = implode(' ', array_slice($words, 0, 10));
                                        echo $content . '...';
                                       @endphp
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="sign_img">
                                        <img src="{{asset('frontend/img/Group (1).png')}}" alt="sign">
                                    </div>

                                </div>


                                @endif
                              @endforeach
                            </div>


                            <div class="main_google_int  d-block d-sm-none ">


                            @foreach($testimonials as $key=>$item)
                            @if($key == 0)
                                <div class="google_right_side d-flex gap-3 align-items-center mx-3">
                                    <div class="side_r">
                                        <img src="{{asset('imagesapi')}}/{{$item->profile_picture}}" style="width: 150px;border-radius:50%" alt="google_img">
                                    </div>
                                    <div class="gz_up mt-4">
                                        <h4>{{$item->name}},{{$item->designation}}</h4>
                                        <p>Ghaziabad, UP</p>
                                        @php
                                        $content = strip_tags($item->testimonial_desc);
                                        $words = explode(' ', $content);
                                        $content = implode(' ', array_slice($words, 0, 10));
                                        echo $content . '...';
                                    @endphp
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="sign_img">
                                        <img src="{{asset('frontend/img/Group (1).png')}}" alt="sign">
                                    </div>

                                </div>
                                @elseif($key == 1)

                                <div class="google_right_side d-flex gap-3 align-items-center mx-5">
                                    <div class="side_r">
                                        <img src="{{asset('imagesapi')}}/{{$item->profile_picture}}" style="width: 150px;border-radius:50%" alt="google_img">
                                    </div>
                                    <div class="gz_up mt-4">
                                        <h4>{{$item->name}}</h4>
                                        <p>Ghaziabad, UP</p>
                                        @php
                                        $content = strip_tags($item->testimonial_desc);
                                        $words = explode(' ', $content);
                                        $content = implode(' ', array_slice($words, 0, 10));
                                        echo $content . '...';
                                    @endphp
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="sign_img">
                                        <img src="{{asset('frontend/img/Group (1).png')}}" alt="sign">
                                    </div>

                                </div>

                                @elseif($key == 2)
                                <div class="google_right_side d-flex gap-3 align-items-center mx-3">
                                    <div class="side_r">
                                        <img src="{{asset('imagesapi')}}/{{$item->profile_picture}}" style="width: 150px;border-radius:50%" alt="google_img">
                                    </div>
                                    <div class="gz_up mt-4">
                                        <h4>{{$item->name}}</h4>
                                        <p>Ghaziabad, UP</p>
                                        @php
                                        $content = strip_tags($item->testimonial_desc);
                                        $words = explode(' ', $content);
                                        $content = implode(' ', array_slice($words, 0, 10));
                                        echo $content . '...';
                                    @endphp
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="sign_img">
                                        <img src="{{asset('frontend/img/Group (1).png')}}" alt="sign">
                                    </div>

                                </div>

                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="size_logo position-relative">
                    <div class="size_logo_img position-absolute">
                        <img src="{{asset('frontend/img/shape-2-5 12.png')}}" alt="shape">
                    </div>
                </div>
                <div class="size_logos position-relative">
                    <div class="size_logo_imgs position-absolute">
                        <img src="{{asset('/frontend/img/image.png')}}" alt="shape">
                    </div>
                </div>
            </div>


            <section>
                <div class="category_title">
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg-4 ">
                                <div class="heading_text_ht  d-none d-sm-block">
                                    <h4>Discover Your Ideal Field of Study</h4>

                                    <div class="category_section d-flex mt-5">
                                        <div class="ex_div_cop d-flex gap-3 ">

                                            <div class="all_design_btn d-flex gap-3 flex-column">
                                                <a href="{{route('programs')}}"><button>ART DESIGN</button></a>
                                                <a href="{{route('programs')}}"><button>COMPUTER SCIENCE</button></a>
                                                <a href="{{route('programs')}}"><button>HUMANITIES</button></a>
                                                <a href="{{route('programs')}}"><button>TOURISM HOSPILITY</button></a>
                                            </div>

                                            <div class="all_design_btn d-flex gap-3 flex-column">
                                                <a href="{{route('programs')}}"><button>MEDIA</button></a>
                                                <a href="{{route('programs')}}"><button>ENGINEERING</button></a>
                                                <a href="{{route('programs')}}"><button>GENERAL STUDIES</button></a>
                                                <a href="{{route('programs')}}"><button>MADICINE &amp; HEALTH</button></a>
                                            </div>

                                            <div class="all_design_btn d-flex gap-3 flex-column">
                                                <a href="{{route('programs')}}"><button>LAW</button></a>
                                                <a href="{{route('programs')}}"><button>MEDIA</button></a>
                                                <a href="{{route('programs')}}"><button>SCIENCE</button></a>
                                                <a href="{{route('programs')}}"><button>LANGUAGE</button></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="lady_img d-none d-sm-block">
                                    <img src="{{asset('/frontend/img/oel-png2.png')}}" alt="untiled">
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="gt_gh d-none d-sm-block">
                                    <h4> Explore Academic Pathways by Degree Level</h4>

                                    <div class="ex_div_cop d-flex gap-3 mt-5">
                                        <div class="all_design_btn gap-3 d-flex flex-column">
                                            <a href="{{route('programs')}}"><button>BACHELOR DEGREE</button></a>
                                            <a href="{{route('programs')}}"><button>MASTER DEGREE</button></a>
                                            <a href="{{route('programs')}}"><button>DOCTORATE / PHD</button></a>
                                            <a href="{{route('programs')}}"><button>ASSOCIATE DEGREE</button></a>
                                        </div>

                                        <div class="all_design_btn gap-3 d-flex flex-column">
                                            <a href="{{route('programs')}}"><button>GRADUATE DEGREE</button></a>
                                            <a href="{{route('programs')}}"><button>DIPLOMA / CERTIFICATE</button></a>
                                            <a href="{{route('programs')}}"><button>SUMMER / SHORT COURSE</button></a>

                                        </div>

                                        <!--<div class="all_design_btn gap-3 d-flex flex-column">-->
                                        <!--    <a href="{{route('programs')}}"><button>MBA</button></a>-->
                                        <!--    <a href="{{route('programs')}}"><button>MCA</button></a>-->
                                        <!--</div>-->

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="lady_img d-block d-sm-none">
                                    <img src="{{asset('frontend/img/oel-png2.png')}}" alt="untiled">
                                </div>
                            </div>

                            <div class="col-lg-4 ">
                                <div class="heading_text_ht  d-block d-sm-none">
                                    <h4 class="text-uppercase px-3">Browse programs by category</h4>

                                    <div class="category_section  mt-5 py-4 px-3">
                                        <div class="ex_div_cop gap-1 ">

                                            <div class="all_design_btn  d-flex gap-3">
                                                <a href="{{route('programs')}}"><button>ART & DESIGN</button></a>
                                                <a href="{{route('programs')}}"><button>MEDIA</button></a>
                                                <a href="{{route('programs')}}"><button>ENGINEERING</button></a>
                                                <a href="{{route('programs')}}"><button>LOW</button></a>
                                            </div>
                                            <div class="all_design_btn  d-flex mt-3 gap-3">
                                                <a href="{{route('programs')}}"><button>COMPUTER SCIENCE</button></a>
                                                <a href="{{route('programs')}}"><button>GENERAL STUDIES</button></a>
                                                <a href="{{route('programs')}}"><button>MEDIA</button></a>
                                            </div>
                                            <div class="all_design_btn  d-flex mt-3 gap-3 justify-content-center">
                                                <a href="{{route('programs')}}"><button>HUMANITIES</button></a>
                                                <a href="{{route('programs')}}"><button>SCIENCE</button></a>
                                                <a href="{{route('programs')}}"><button>LANGUAGE</button></a>
                                            </div>
                                            <div class="all_design_btn  d-flex mt-3 gap-3 justify-content-center">
                                                <a href="{{route('programs')}}"><button>TOURISM HOSPILITY</button></a>
                                                <a href="{{route('programs')}}"><button>MADICINE &amp; HEALTH</button></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 ">
                                <div class="gt_gh d-block d-sm-none">
                                    <h4 class="text-uppercase px-3">Browse programs by Lavel</h4>

                                    <div class="ex_div_cop  justify-content-center px-3 mt-5 py-4">
                                        <div class="all_design_btn gap-3 d-flex ">
                                            <a href="{{route('programs')}}"><button>SUMMER/SOURCE COURSE</button></a>
                                            <a href="{{route('programs')}}"><button>MBA</button></a>
                                            <a href="{{route('programs')}}"><button>MCA</button></a>

                                        </div>

                                        <div class="all_design_btn gap-3 d-flex mt-3 ">
                                            <a href="{{route('programs')}}"><button class="pm">ASSOCIATE DEGREE</button></a>
                                            <a href="{{route('programs')}}"><button class="pm">MASTER'S DEGREE</button></a>


                                        </div>

                                        <div class="all_design_btn gap-3 d-flex mt-3">
                                            <a href="{{route('programs')}}"><button>DIPLOMA/CERTIFICATE</button></a>

                                            <a href="{{route('programs')}}"><button class="pm">GRADUATE DIPLOMA</button></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>




            <div class="growing_title mt-5">
                <div class="growing_title_text text-center fw-light ">
                    <!-- <span> University Partners</span> -->
                    <h3 class="fw-bold cs">Partner Universities</h3>
                </div>
                <div class=" containers h-100 mt-5">
                    <div class="row align-items-center h-100">
                        <div class="container rounded">
                            <div class="slider">
                                <div class="logos">
                                <img src="{{asset('frontend/img/image-6.png')}}" alt="image">
                                <img src="{{asset('frontend/img/image (1).png')}}" alt="image">
                                <img src="{{asset('frontend/img/image-1.png')}}" alt="image">
                                <img src="{{asset('frontend/img/image-2.png')}}" alt="image">
                                <img src="{{asset('frontend/img/image-3.png')}}" alt="image">
                                <img src="{{asset('frontend/img/image-6.png')}}" alt="image">
                                <img src="{{asset('frontend/img/image (1).png')}}" alt="image">
                                <img src="{{asset('frontend/img/image-1.png')}}" alt="image">
                                   <img src="{{asset('frontend/img/image-6.png')}}" alt="image">
                                <img src="{{asset('frontend/img/image (1).png')}}" alt="image">
                                <img src="{{asset('frontend/img/image-1.png')}}" alt="image">
                                <img src="{{asset('frontend/img/image-2.png')}}" alt="image">
                                <img src="{{asset('frontend/img/image-3.png')}}" alt="image">
                                <img src="{{asset('frontend/img/image-6.png')}}" alt="image">
                                <img src="{{asset('frontend/img/image (1).png')}}" alt="image">
                                <img src="{{asset('frontend/img/image-1.png')}}" alt="image">
                                </div>
                                <br>
                                <br>
                            </div>

                        </div>
                    </div>

                </div>

            </div>


            <div class="advantages_title d-none d-sm-block">
                <div class="">
                    <div class="multi_ad">
                        <h3 class="fw-bold text-center cs">Your Gateway to a Global Education: Discover the World</h3>
                    </div>
                    <div class="world_fm pb-5 ">
                        <div class="scale_map ">
                            <div class="sc_map  ">
                                <img src="{{asset('/frontend/img/shape-2-5 12.png')}}" alt="shape">
                            </div>
                            <div class="d-flex fg">
                                <div class="world_famous mt-5">
                                    <h4 class="fw-normal">The World is your Campus!</h4>
                                    <p>Unlock the world! Explore your academic journey through 900+ leading universities across 34 countries, each offering unique opportunities and experiences. Whether you're seeking cutting-edge research, cultural immersion, or international networks, our diverse global partnerships offer endless possibilities tailored to your aspirations.
  Chart your personalized academic path by choosing the destination that aligns with your goals. Embrace diversity, grow beyond borders, and make the world your classroom!

                                    </p>
                                    <div class="explore_right">
                                        <a href="https://www.overseaseducationlane.com/universities">Start Exploring Now</a><i class="fa-solid fa-arrow-right mx-2"></i>
                                    </div>
                                </div>
                                <div class="rigt_img ">
                                    <img src="{{asset('/frontend/img/14254.png')}}" alt="image">
                                    <!-- <div class="poly_h ">
                                    <img src="http://127.0.0.1:8000/frontend/img/Polygon 1.png" alt="polygon">
                                </div> -->
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
</section>


<section>
    <div class="advantages_title  d-block d-sm-none">
        <div class="">
            <div class="multi_ad">
                <h3 class="fw-bold text-center">Multi Country Advantage</h3>
            </div>
            <div class="world_fm pb-5 ">
                <div class="scale_map ">
                    <!-- <div class="sc_map  ">
                        <img src="{{asset('frontend/img/shape-2-5 12.png')}}" alt="shape">
                    </div> -->
                    <div class="d-flex fg text-center">
                        <div class="world_famous ">
                            <h4 class="fw-normal">The World is your Campus!</h4>
                            <p>Aspire for more. Choose what suits you the best from 750+ global universities in
                                31
                                countries, world over. The choices and opportunities our universities offer are
                                endless!
                            </p>
                            <div class="explore_right">
                                <a href="">Explore Countries</a><i class="fa-solid fa-arrow-right mx-2"></i>
                            </div>
                        </div>
                        <div class="rigt_img ">
                            <img src="{{asset('frontend/img/14254.png')}}" alt="image">
                            <!-- <div class="poly_h ">
                                <img src="{{asset('frontend/img/Polygon 1.png')}}" alt="polygon">
                            </div> -->
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<script>
    let counter = document.querySelectorAll(".counter")
    let arr = Array.from(counter)

    arr.map((item) => {
        let count = 0

        function CounterUp() {
            count++
            item.innerHTML = count
            if (count == item.dataset.number) {
                clearInterval(stop);
            }
        }
        let stop = setInterval(
            function() {
                CounterUp();
            }, 100 / item.dataset.speed
        );
    })
</script>
@endsection
