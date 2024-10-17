@extends('frontend.layouts.main')
@section('title', 'About Oel')
@section('content')
<section>
    <div class="university_title ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 ">
                    <!--<div class="university_airplane d-flex justify-content-center ">-->
                    <!--    <img src="{{asset('frontend/img/gif in blue (1)_1 1.png')}}" alt="gif">-->
                    <!--</div>-->
                    <div class="universities_heading text-center">
                        <h1 class="fw-bold mx_rounded text-black">Contact Us</h1>
                    </div>
                </div>
                <div class="contact_us_title mt-5">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="perdis_zero_issue">
                                <div class="contact_permission text-center">
                                    <img src="{{asset('frontend/img/Border.png')}}">
                                </div>
                                <div class="emil_sec text-center pt-5">
                                    <P class="fw-bold">Please email us for your enquiry</P>
                                    <span class="fw-semibold">info@overseaseducationlane.com</span> <br>
                                    <span class="fw-semibold">help@overseaseducation ane.com</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="perdis_zero_issue">
                                <div class="contact_permission text-center">
                                    <img src="{{asset('frontend/img/Border (1).png')}}">
                                </div>
                                <div class="emil_sec text-center pt-5">
                                    <P class="fw-bold">Phone Number</P>
                                    <span class="fw-semibold">+(91) 892 992 2525</span> <br>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="perdis_zero_issue">
                                <div class="contact_permission text-center">
                                    <img src="{{asset('frontend/img/Border (2).png')}}">
                                </div>
                                <div class="emil_sec text-center pt-3">
                                    <P class="fw-bold">Corporate office</P>
                                    <span class="fw-semibold">A 12-13,2nd Floor, Sector 16 Noida,
                                        Uttar Pradesh, 201301</span> <br>
                                    <p class="fw-bold mt-3">Branch office</p>
                                    <span class="fw-semibold">22/ A Parha mohaddipur P. O Railway
                                        colony Gorakhpur 273008</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="quick_selection_title  mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 form_create p-4">
                     <form  action="{{ route('contact_us.store') }}" method="POST" class="onSubmitdisableButton">
                        @csrf
                        <div class="quick_cl">
                            <h3 class="fw-bold">Quick Query</h3>
                        </div>
                        <div class="row">
                            <div class="col mt-3">
                                <input type="text" class="form-control control_pt" name="name" value="{{old('name')}}" placeholder="name" required aria-label="Name">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col mt-3">
                                <input type="text" class="form-control control_pt" placeholder="Email"
                                    aria-label="email" name="email" required value="{{old('email')}}"">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col ">
                                <input type="text" class="form-control control_pt" required placeholder="Phone"
                                    aria-label="Phone" name="phone" value="{{old('phone')}}"">
                                    @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col ">
                                <input type="text" class="form-control control_pt" required placeholder="subject"
                                    aria-label="Subject" name="subject" value="{{old('subject')}}"">
                            </div>
                        </div>
                        <div class="form-floating mt-3">
                            <textarea class="form-control " name="message" required placeholder="Leave a comment here"
                                id="floatingTextarea"> {{old('message')}}</textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-5 mt-3 ">
                                <div class="form-group has-feedback">
                                    {!! app('captcha')->display(['data-theme' => 'light', 'data-type' =>  'audio']) !!}

                                </div>
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="sumbit_btn">
                            <button class="border-0 rounded text-white px-3 py-2">Submit Now</button>
                        </div>
                     </form>
                </div>
                <div class="col-lg-4">
                    <div class="iframe_map mt-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d112110.81895152271!2d77.23344859115441!3d28.585881104489292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x390d1fb7b5dcf419%3A0x61593bc5ea9d697!2sB-95%2C%20B%20Block%2C%20Sector%202%2C%20Noida%2C%20Uttar%20Pradesh%20201301!3m2!1d28.585884399999998!2d77.3158113!5e0!3m2!1sen!2sin!4v1706535441310!5m2!1sen!2sin" width="auto" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="gradient_bottom_title p-4 mt-5">
            <div class="gradient_p container">
                <p class="text-center text-white fw-light">If you are an existing customer, contact your account representative for assistance. For questions about student applications, please leave a
                    message in the notes of the application and our customer experience team will respond.</p>
            </div>
            <div class="all_button_social text-center">
                <button class="border-0 ba text-white px-2 py-1"><i class="fa-brands fa-facebook-f mx-1"></i>Facebook</button>
                <button class="border-0 ca text-white px-2 py-1"><i class="fa-brands fa-twitter mx-1 "></i>Twitter</button>
                <button class="border-0 da text-white px-2 py-1"><i class="fa-brands fa-instagram mx-1"></i>Instagram</button>
                <button class="border-0 ea text-white px-2 py-1"><i class="fa-brands fa-linkedin-in mx-1 "></i>Linkedin</button>
            </div>
        </div>
    </div>
</section>
@endsection
