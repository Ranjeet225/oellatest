<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pb-5">
                  
                <div class="row">
                    <div class="col-lg-6">
                        <div class="universities_heading ">
                            <h3 class="fw-bold">Contact OEL</h3>
                            <p> We offer numerous way for you to connect with us.</p>
                        </div>
                        <div class="attractive-bar">
                            <img src="{{asset('frontend/img/Group 271.png')}}" alt="gif">"
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="universities_heading ">
                            <p>Book your FREE consultation with Certified Counsellors.</p>
                        </div>
                         @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <form action = "{{route('contact_us.store')}}" method="post">
                            @csrf
                        <div class="row">
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control delete  rounded" name="first_name" placeholder="First name" aria-label="First name">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control delete  rounded" name="last_name" placeholder="Last name" aria-label="Last name">
                            </div>
                            <div class="col-4 mb-3">
                                <select class="form-control delete rounded" name="phone_code" >
                                    @foreach(App\Models\Country::select('phonecode')->get() as $country)
                                      <option value="{{$country->phonecode}}">+{{$country->phonecode}}</option>
                                    @endforeach
                                </select>
                               
                            </div>
                            <div class="col-8 mb-3">
                                <input type="Number" class="form-control delete rounded" name="phone"  placeholder="Mobile Number" aria-label="Mobile Number">
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select " id="inputGroupSelect01">
                                    <option selected="">Nearest Office</option>
                                    <option value="gorakhpur">Gorakhpur</option>
                                    <option value="2">Noida</option>
                                
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                 <input type="text" class="form-control delete rounded" name="preferred_study_destination"  placeholder="Preferred Study Destination" aria-label="Preferred Study Destination">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control delete rounded" name="preferred_study_year"  placeholder="Preferred Study Year" aria-label="Preferred Study Year">
                              
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control delete rounded" name="preferred_study_intake"  placeholder="Preferred Study Intake" aria-label="Preferred Study Intake">
                            </div>
                            <div class="form-check mx-2">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                <label class="form-check-label " for="flexCheckDefault">
                                    By clicking you agree to our <span>Privacy Policy</span> and <span>Terms &amp; Conditions</span>
                                </label>
                            </div>
                            <div class="free-code text-center mt-3">
                                <button class="apply-btn fn border-0 px-4 py-2" type="submit">Get Started for Free</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
