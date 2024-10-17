<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OEL</title>
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css"
        integrity="sha512-/VYneElp5u4puMaIp/4ibGxlTd2MV3kuUIroR3NSQjS2h9XKQNebRQiyyoQKeiGE9mRdjSCIZf9pb7AVJ8DhCg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('frontend-css')
        <style>
            nav{

 display: flex;
 align-items: baseline;
 justify-content: space-between;

 position: relative;
 height: 60px;

}
.nav_links {
 list-style: none;
 gap: 30px;
}
.oel-logo img{
 width: 80px;
 height: auto;
}
.main-oel {
 background: #F7F9FF;
}
.nav_menu_btn {
 display: none;
}

.counter_item h1{
    font-size: 2.2rem;
    color: #224099;
}
.icon_flag  {
    display: flex;
    justify-content: space-around;
    align-items: center;

}
.students_img {
    margin-top:-6px;
}
.oel_main_title {
    background-color: #070758;
    padding: .1rem;
    font-family: Inter;
}
.navbar_section {
     position:fixed;
    top:30px;
    width:100%;
    background-color: #F7F9FF;
}

.lady_img img {
    width: 106%;
    height: 100%;
    object-fit: cover;
}
.nav_menu_btn{
    display:none;
}

.sign_flower_ints, .sign_flower_int {
    z-index: -1;
}

/* .all_media_icon{
    position: relative;
} */
.icon_social{
    position:absolute;
    z-index: -1;
    top: -450px;
}
 .footer-title{
    position:relative;
}
/* .heading-search {
    position:absolute;
} */
.containers {
    overflow: hidden;
}
.marquee_section  video{
    width: 100%;
    height:auto;
}
.main_google_int .gz_up h4 {
    font-weight: 600;
    font-family: 'Rubik';
    font-size: 18px;
}
.nav-sec-title{
    position:sticky;
    top:0;
    width:100%;
    z-index: 999;
}

.all_media_icon{
    position: fixed;
    right: 0px;
    z-index: 999;
}
.course_name ul li a img {
    width: 12px;
    height: auto;
}
/* .courses_int_img img{
    width:200px;
    height:auto;
} */
.marquee_section_text marquee {
  background:orange;
  padding: 6px;
}

/* about-page */
.over_edu_title span {
    font-size: 1rem;
    font-family: 'Monserrat';
    color: #505050;
}

/* program-offered */
.program_title_honors {
    margin-top: 30px;
}

/* page-login */
.admission-login {
    width:100%;
    height:auto;
}

/* check-eleigibility */
/* .intro-tabs a:active{
    background:#112958;
    color:#fff;
} */




.gallery-title img{
    width: 100%;
    height: auto;
}

.duration-feature span{
    font-size:15px;
}
.accomadation .head-4 p{
    width:100% !important;
}
 .form-input{
    display:flex;
}

/* ul .nav-item{
    display:flex;
} */
 /* .detail_hr_edu, .btn-part{
    margin-top: 20px;
    margin-bottom: 20px;
 } */
 /* .detail_hr_edu, .btn-part a{
    width:100%;
 } */

 .rs-testimonial, .card{
    margin-top: 20px;
}
/* .st-title-login span:hover{
    color:#fff !important;
} */
.step-4 ul li a{
    display: ruby-text;
}
.program_subdiscipline_list{
    list-style: none;
    display: flex;
}
.tab-btns {
    /* margin: 0px 5px; */
}
.tabs-box{
    margin-top: 10px;
}
.blog-full, .bs-img img{
    width: 100%;
    height: auto;
}

.oel-logo img {
    width: 80px;
    height: auto;
}
.courses_int_img{
        margin-top: 30px;
}
.foundation_ttile img {
    width: 70px;
    height: 70px;
    object-fit: scale-down;
}
/* programs */
.program_title_honors {
    height: 600px;
}

/* check-eligibility */
.modal-content h4{
    padding-top: 10px;
}
.nav-tabs .nav-link:hover{

}

/* university-details */
.ehl-logo img{
  width: 80px;
  height:auto;
}
.secong-ehl-text {
    margin-top: 20px;
}
.tabing-tab{
    margin-top: 30px;

}
/* .content-part {
    border-bottom:1px solid #bfbfbf;
} */

/* course-details */
/* .btn-primary {
    width:100%;
} */

/* register */
.submit-btn{
    border: none;
    background: #112958;
    color: #fff;
    padding: 10px 50px;
    border-radius: 10px;
    margin-top: 10px;
}

.register-box, .sec-title {
    margin-top:30px;
    margin-bottom:30px;
}

/* contact-us */

.universities_heading{
    margin-top: 50px;
}

/* testiminoals */
/* .card-body {
    height:600px;
} */
 .card-body img{
    width: 200px;
    height:auto;
 }

 /* model */
 .modal-header button{
    background: none;
    font-size: 20px;
    border: 1px solid #bfbfbf;
    border-radius: 100%;
    width: 34px;
    height: 34px;
    text-align: center;
 }

 /* appply-form */
 .course_card_logo_sec a{
    color:#000;
    text-decoration:none;
 }
 /* .nav_links li a:focus, .nav_links li a:hover{
  background-color: #112958;
  color: #fff;
}
.nav_links li a.active{
    color: #fff;
    background-color: #070758;
} */

 /* index-page */
 /* .img-name{
    width:200px !important;
    height:auto;
 } */

/* universities */

 .img-mx{
    height:390px;
 }

@media(max-width:1224px) and (min-width:1025px){
    .last_search h4 {
        font-size: 21px;
}
}
@media(max-width:1199px) and (min-width:1025px){
    ul.nav_links a {
    font-size: .7rem;
}
}


@media(max-width:1024px){
    .nav_links {
    list-style: none;
    gap: 25px;
}
.right-brand-st p {
    font-size: 13px;

}
}

@media(max-width:991px) {
  nav ul{
      position:absolute;
      top: 60px;
      left: 0;
      right: 0;
      flex-direction: column;
      text-align: center;
      background-color: #070758;
      gap: 0;
      overflow: hidden;
      z-index: 1;
      padding:0px  20px;

  }
  #nav_links{
      transition: all .5s linear;
  }
  nav ul li{
    border: 1px solid #bfbfbf;
    padding: 10px;
  }
  .nav_menu_btn{
      display: block;
  }
  .main-oel  .nav_links {
    list-style: none;
    gap: 0px;

}
/* ul.nav_links a{
    color:#0b2553;
} */
.nav_menu_btn span{
    border: 1px solid #9999;
    padding: 5px 10px;
    border-radius: 5px;
}
.buddy_icon {
        margin-top: 30px;
    }

    .main_google_int {
        margin-top: 30px;
    }
    .b-flv{
        flex-direction: column-reverse;
    }
    .over_edu_title {
        margin-bottom: 30px;
    }
    .mission_title_orgo{
        margin-top: 30px;
    }
    .courses_int_img{
        margin-top: 30px !important;
        width: 100%;
    }
    .full-direction{
        flex-direction:column;
    }
    /* .coueses_img {
        flex-direction:column;
    } */
    .int_cheating_role {
        margin-top: 30px;
    }
    .agriculture_title .agri_sub ul a {
    font-size: 1rem;
}
    .bn-st--student {
        border-radius: 0px !important;
        padding: 20px;

}
    .bn-st--student {
        flex-direction: column !important;
    }
    .cn-counselling {
        text-align: center;
}
.main-brand {
    flex-direction:column;
}
/* .all_overses_edu {
    flex-direction: column;
} */
.all_overses_edu .all_img_education_int img{
    width:100% ;
    height:auto;
}
}

@media(max-width:768px){
    .form-control{
        width:100% !important;
    }
    .courses_heading_k h1 {
    font-size: 30px;
    white-space: nowrap;
}
.fr-home-test{
    flex-direction:column;
}
.card-body {
    height: inherit;
}
.marquee_section {
    margin-top: 0px;
}
}
@media(max-width:767px) and (min-width:426px){
    .courses_int_img img{
        max-height: 100% !important;
    }
    .courses_int_img {
        height: inherit;

}
.sub-left{
    display:flex;
}
.courses_heading_k h1 {
    font-size: 20px;
}
.courses_heading_k p {
    font-size: 18px;
}
.marquee_section {
    margin-top: 0px;
}
.tabs-mp {
    gap: 20px;
}
}


@media(max-width:425px){
    .courses_int_img img{
        max-height: 100% !important;
    }
    .courses_int_img {
    height: inherit;

}
.nav_links{
    padding: 0;
}
.styled-form, .form-group{
    box-shadow:inherit !important;
    margin-bottom:10px;
}
.courses_heading_k h1 {
    font-size: 13px;
}
.courses_heading_k p {
    font-size: 12px;
}
.course_card_logo_sec {
    flex-direction:column;
}
.airplane-gif img {
        width: 100%;
        height: auto;
    }
    .marquee_section_text marquee {
    background: orange;
    padding: 0px;
}
.students_form{
    margin: 0px 35px;
}
}



</style>
</head>

<body>
    <div class="oel_main_title">
        <div class="oel_title">
            <div class="container">
                <div class="social_icon d-flex justify-content-between align-items-center w-100 ">
                    <div class="social_icon_inner text-white d-flex align-items-center">
                        <!--<i class="fa-solid fa-phone"></i><span>(+91 8929922525)</span>-->
                        <!--<i class="fa-solid fa-envelope"></i><span>info@overseaseducationlane.com</span>-->
                        <!--<i class="fa-solid fa-location-dot"></i><span>Overseas Eduaction Lane</span>-->

                    </div>
                    <div class="english_title text-white d-flex">
                        <!--<span>English</span>-->
                        <div class="sep mx-4"></div>
                        <div class="icon_second">
                            <!-- <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-linkedin"></i> -->
                            <!--<img src="{{ asset('frontend/img/facebook-round-color-icon 1.png') }}" alt="facebook">-->
                            <!--<img src="{{ asset('frontend/img/ig-instagram-icon 1.png') }}" alt="instagram">-->
                            <!--<img src="{{ asset('frontend/img/LinkedIn_icon 1.png') }}" alt="indstagram">-->
                        <a href="tel:8929922525" ><i class="fa-solid fa-phone"></i><span style="color:white">(+91 8929922525)</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="nav-sec-title">
        <div class="main-oel header " id="myHeader">
            <div class="container ">
                <nav>
                    <div class="oel-logo pt-2">
                    <a href="{{url('/')}}"><img src="{{ asset('frontend/img/oel (1) 1.png') }}"></a>
                    </div>
                    <ul class="nav_links d-flex" id="nav_links">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about-oel') }}">About OEL</a></li>
                        <li><a href="{{ route('universities') }}">Universities</a></li>
                        <li><a href="{{ route('programs') }}">Programs</a></li>
                        <li><a href="{{ route('program-offered') }}">Courses Offered</a></li>
                        <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                        <!-- Modal -->
                        <li>
                            <a class="apply-btn rounded fn border-0 p-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"> Check My Eligibility
                            </a>
                        </li>
                        <li><a href="{{ route('user-login') }}"><button
                                    class="rounded apply-btn fn  border-0 p-2">Login</button></a>
                        </li>
                        <div class="students_img ">
                        <img src="{{ asset('frontend/img/new-list.png') }}">
                        </div>
                    </ul>
                    <div class="nav_menu_btn" id="menu_btn">
                        <span><i class="ri-menu-line" onclick="toggleMenu()"></i></span>
                    </div>
                </nav>
            </div>
        </div>
    </section>
     @yield('content')



    <section>
        <div class="footer-title position-relative d-none d-sm-block">
            <div class="container">
                <div
                    class="heading-search  d-flex align-items-center justify-content-between mx-4 px-5 position-absolute ">
                    <div class="searchbar">
                        <img src="{{ asset('frontend/img/newsletter.png.png') }}">
                    </div>
                    <div class="last_search text-white fw-bold">
                        <h4>Subscribe to Newsletter</h4>
                    </div>
                    <div class="input-bar">
                        <form>
                            <div class="form-group d-flex justify-content-between">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <div class="sumbit-btn">
                                    <button>Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-title position-relative d-xl-none d-sm-none">
            <div class="container">
                <div class="heading-search  d-flex align-items-center justify-content-between mb-3 ">
                    <div class="searchbar d-flex gap-3">
                        <img src="{{ asset('frontend/img/newsletter.png.png') }}">
                        <div class="last_search text-white fw-bold">
                            <h4>Subscribe to Newsletter</h4>
                        </div>
                    </div>
                </div>
                <div class="input-bar mb-3">
                    <form>
                        <div class="form-group d-flex ">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <div class="sumbit-btn">
                                <button>Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>



        <div class="bottom_footer bv_cs">
            <div class="fw_footer container text-white">
                <div class="row  ratio-text-row">
                    <div class="col-lg-2">
                        <div class="bottom_heading_fooet">
                            <h5 class="text-uppercase fw-bold">Other Links</h5>
                            <ul class="mt-3">
                                <li><a href="{{ route('about-oel') }}">About OEL</a></li>
                                <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                                <li><a href="{{ route('all-blogs') }}">Blogs</a></li>
                                <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                                <li><a href="{{ route('frequently-asked-questions') }}">FAQ</a></li>
                                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('user-login') }}">Franchise Login</a></li>
                                <li><a href="{{ route('user-login') }}">Counselor Login</a></li>
                                 <li><a href="{{ route('user-login') }}">Student Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="bottom_heading_fooet">
                            <h5 class="text-uppercase fw-bold">Hot Courses</h5>
                            <ul class=" mt-3">
                                <!--<li><a href="{{ route('about-oel') }}">About OEL</a></li>-->
                                <li><a href="{{ url('programs') }}">Hospitality</a></li>
                                <li><a href="{{ url('programs') }}">Nursing</a></li>
                                <li><a href="{{ url('programs') }}">Design/Media</a></li>
                                <li><a href="{{ url('programs') }}">Engineering</a></li>
                                 <li><a href="{{ url('programs') }}">Management</a></li>
                                  <li><a href="{{ url('programs') }}">Medicine</a></li>
                                   <li><a href="{{ url('programs') }}">Bussiness</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="bottom_heading_fooet">
                            <h5 class="text-uppercase fw-bold">Top Destination</h5>
                            <ul class="mt-3">
                                <li><a href="{{url('universities?country=38')}}">Canada</a></li>
                                <li><a href="{{url('universities?country=231')}}">USA</a></li>
                                <li><a href="{{url('universities?country=13')}}">Australia</a></li>
                                <li><a href="{{url('universities?country=230')}}">UK</a></li>
                                <li><a href="{{url('universities?country=157')}}">New Zealand</a></li>
                                <li><a href="{{url('universities?country=157')}}">South korea</a></li>
                                <li><a href="{{url('universities?country=157')}}">Japan</a></li>
                                <li><a href="{{url('universities?country=157')}}">Italy</a></li>
                                <li><a href="{{url('universities?country=157')}}">Russia</a></li>
                                <li><a href="{{url('universities?country=157')}}">Ireland</a></li>
                                <li><a href="{{url('universities?country=157')}}">Germany</a></li>
                            </ul>
                        </div>
                    </div>
                        <div class="col-lg-2">
                        <div class="bottom_heading_fooet">
                            <h5 class="text-uppercase fw-bold">Our services</h5>
                            <ul class="mt-3">
                                <li><a href="{{url('universities?country=38')}}">IELTS/DET/TOEFL/PTE</a></li>
                                <li><a href="{{url('universities?country=231')}}">Free counseling</a></li>
                                <li><a href="{{url('universities?country=13')}}">LOR</a></li>
                                <li><a href="{{url('universities?country=230')}}">SOP</a></li>
                                <li><a href="{{url('universities?country=157')}}">Other Exam</a></li>
                                <li><a href="{{url('universities?country=157')}}">Education Loan</a></li>
                                <li><a href="{{url('universities?country=157')}}">Forex</a></li>
                                <li><a href="{{url('universities?country=157')}}">Scholarship</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="bottom_heading_fooet list_st_grup">
                            <h5 class="text-uppercase fw-bold">Address</h5>
                            <ul class="mt-3">
                                <li><img src="{{ asset('frontend/img/address.png') }}"><a href="mailto:info@overseaseducationlane.com"
                                    class="mx-3">Overseas Education Lane</a>
                                </li>
                                <li><img src="{{ asset('frontend/img/phone.png') }}"><a href="tel:+91892992525"
                                        class="mx-3">+(91) 892 992 2525</a>
                                </li>
                                <li><img src="{{ asset('frontend/img/enveloper.png') }}"><a href="mailto:info@overseaseducationlane.com"
                                        class="mx-3">info@overseaseducationlane.com</a></li>
                                <li><img src="{{ asset('frontend/img/enveloper.png') }}"><a href="mailto:help@overseaseducationlane.com"
                                        class="mx-3">help@overseaseducationlane.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="sub-footer mt-5 d-flex justify-content-between">
                    <div class="sub-right fw-medium">
                        <h6>© {{date('Y')}} Copyright <span>Overseas Education Lane</span> All Rights Reserved.</h6>
                    </div>
                    <div class="sub-left">

                          <a href="https://www.facebook.com/overseasedu.lane/" style="color:white"> <i class="fa-brands fa-facebook-f mx-1"></i></a>
         <a href="https://in.linkedin.com/in/overseaseducationlane?trk=public_profile_samename-profile"style="color:white">   <i class="fa-brands fa-linkedin-in mx-1"></i></a>
         <a href="https://www.youtube.com/@OverseasEducationLane1" style="color:white"><i class="fa-brands fa-youtube mx-1"></i></a>
        <a href="https://www.instagram.com/overseaseducation_lane/" style="color:white"> <i class="fa-brands fa-instagram mx-1"></i></a>
       <a href="https://twitter.com/LaneEducation" style="color:white"> <i class="fa-brands fa-twitter mx-1"></i> </a>





                    </div>
                </div>
            </div>

        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered" style="min-width: 800px;">
                <div class="modal-content">
                    <div class="row">
                        <div class="col-md-6 p-0">
                            <img src="https://overseaseducationlane.com/public/frontend/images/login.jpg"
                                style="height: 100%;width: 100%;object-fit: cover;">
                        </div>
                        <div class="col-md-6"
                            style="background: #EAEAEA;">
                            <div class="modal-header float-end">
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <h4 style="text-align:center">REQUEST AN ENQUIRY<br>we usually respond in seconds</h4>
                            <div class="modal-header">
                                <!--<h5 class="modal-title" id="exampleModalLabel">Enquiry Now </h5>-->
                            </div>
                            <form class="mx-1 mx-md-4" id="enquiry_data" method="POST" autocomplete="off"
                                novalidate="novalidate">
                                <input type="hidden" name="_token" value="EtDPgMZlqrXdbXLqqmRFysU8re1mNncBoQPgqNA7">
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fa fa-user" aria-hidden="true"
                                        style="height: 29px;padding: 0px 6px;font-size: 24px;color: #070758;"></i>
                                    <input type="text" class="form-control" name="full_name" id="full_name"
                                        required="" aria-describedby="emailHelp" placeholder="First Name">
                                </div>
                                <div class="d-flex flex-row align-items-center mb-4">
                                    <i class="fa fa-envelope" aria-hidden="true"
                                        style="height: 32px;padding: 0px 6px;font-size: 22px;color: #070758;"></i>
                                    <input type="email" name="email" class="form-control" required=""
                                        id="email_name" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <span class="text-danger email_error"></span>
                                <span
                                    style="margin-left: 37px;margin-bottom: 50px !important;position: relative;top: -8px;font-size: 12px;">We'll
                                    never share your email with anyone else.</span>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fa fa-mobile" aria-hidden="true"
                                                style="height: 44px;padding: 0px 8px;font-size: 42px;color: #070758;"></i>
                                            <input type="tel" name="mobile_number" class="form-control"
                                                aria-describedby="emailHelp" pattern="[0-9]{10}"
                                                placeholder="Enter mobile number" id="mobile_number" required="">
                                        </div>
                                        <span
                                            style="margin-left: 37px;position: relative;top: -8px;font-size: 12px;">Please
                                            enter 10 digits only.</span>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-flex float-end  mt-2">
                                            <button type="button" id="verify_otp" class="btn btn-primary btn-sm">
                                                <span class="spinner-grow spinner-grow-sm d-none" role="status"
                                                    aria-hidden="true"></span>
                                                Verify OTP</button>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-danger error-phone"></span>
                                <div class="d-flex flex-row align-items-center mb-4 otp-verify"
                                    style="display:none !important;">
                                    <input type="number" name="otp" class="form-control" id="otp"
                                        required="" aria-describedby="emailHelp" placeholder="Enter otp">
                                </div>
                                <span class="text-danger otp-error"></span>
                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                    <button type="button" id="booking_enquiry"
                                        class="btn btn-primary btn-lg booking_enquiry" disabled="">
                                        <span class="spinner-grow spinner-grow-sm d-none" role="status"
                                            aria-hidden="true"></span>Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        @yield('javascript_section')

   <script>
        AOS.init();
    </script>
    <script>
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector(".logo-slider").appendChild(copy);
    </script>
    <script>
        const menuBtn = document.getElementById("menu_btn");
        const navLinks = document.getElementById("nav_links");
        const menuBtnIcon = menuBtn.querySelector("i");
        menuBtn.addEventListener("click", (e) => {
            navLinks.classList.toggle("open");

            const isOpen = navLinks.classList.contains("open");
            menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line")
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#verify_otp').click(function() {
                $('#booking_enquiry').prop('disabled', false);
            });
        });
    </script>
    <script>
        $(document).on('click', '#verify_otp', function(e) {
            $('.error-phone').html('');
            e.preventDefault();
            let mobile_number = $('#mobile_number').val();
            if (!mobile_number || mobile_number.length != 10 || !/^\d+$/.test(mobile_number)) {
                alert('Please enter valid mobile number', 'error');
                return false;
            }
            var spinner = this.querySelector('.spinner-grow');
            spinner.classList.remove('d-none');
            $.ajax({
                url: '{{ route('send-otp') }}',
                type: 'POST',
                data: {
                    phone_number: mobile_number,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    spinner.classList.add('d-none');
                    if (data.success) {
                        $('.otp-sent').html(data.message);
                    }
                    if (data.success) {
                        $('.otp-verify').show();
                    } else {
                        $('.error-phone').html(data.message);
                    }
                },
                error: function(xhr) {
                    spinner.classList.add('d-none');
                    if (xhr.responseJSON.errors.phone_number) {
                        $('.error-phone').html(xhr.responseJSON.errors.phone_number[0]);
                    }
                    if (xhr.responseJSON.errors.email) {
                        $('.error-email').html(xhr.responseJSON.errors.email[0]);
                    }
                }
            })
        })
        $('.booking_enquiry').on('click', function(e) {
            e.preventDefault();
            let mobile_number = $('#mobile_number').val();
            if (!mobile_number || mobile_number.length != 10 || !/^\d+$/.test(mobile_number)) {
                alert('Please enter valid mobile number', 'error');
                return false;
            }
            let full_name = $('#full_name').val();
            if (!full_name) {
                alert('Please enter your full name', 'error');
                return false;
            }
            let email = $('#email_name').val();
            let otp = $('#otp').val();
            if (!otp) {
                alert('Please enter otp', 'error');
                return false;
            }
            var spinner = this.querySelector('.spinner-grow');
            spinner.classList.remove('d-none');
            $.ajax({
                url: '{{ route('verify-otp') }}',
                type: 'POST',
                data: {
                    phone_number: mobile_number,
                    full_name: full_name,
                    email: email,
                    otp: otp,
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    spinner.classList.add('d-none');
                    if (data.success) {
                        window.location.href = '{{ url('check-eligibility') }}';
                    } else {
                        $('.otp-error').html(data.message);
                        $('#exampleModal').css('display', 'none');
                    }
                },
                error: function(xhr, status, error) {
                    spinner.classList.add('d-none');
                    alert(xhr.responseJSON.errors.email[0]);
                    if (xhr.responseJSON.errors.email) {
                        $('.email_error').html(xhr.responseJSON.errors.email[0]);
                    }
                    if (xhr.status == 422) {
                        $('.otp-error').html('Invalid OTP.');
                    }
                }
            })
        })
        $('.myspan').on('click', function() {
            $('#exampleModal').css('display', 'none');
        });
    </script>

</body>

</html>
