@extends('frontend.layouts.main')
@section('title', 'Course Finder')
@section('content')
<style>
.content-part{
    margin-top: 10px;
}
.university-item a{
    text-decoration: none;
}
.btn-part a{
    background: #112958;
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 6px;
}
.course_card_logo_sec img, .university_logo img{
    width: 200px;
    height: auto;
}
    </style>
@php
    $country_name = App\Models\Country::whereIn('id', explode(',', $_GET['country'] ?? null))->Select('name','id')->get();
    $program_level_name = App\Models\ProgramLevel::whereIn(
    'id',
    explode(',', $_GET['program_level'] ?? null),
    )->get();
    $program_sub_level_name = App\Models\ProgramSubLevel::whereIn(
    'id',
    explode(',', $_GET['program_sub_level'] ?? null),
    )->get();
    $education_level_name = App\Models\EducationLevel::whereIn(
    'id',
    explode(',', $_GET['education_level'] ?? null),
    )->get();
    $program_discipline_name = App\Models\ProgramDiscipline::whereIn(
    'id',
    explode(',', $_GET['program_discipline'] ?? null),
    )->get();
    $program_sub_discipline_name = App\Models\ProgramSubdiscipline::whereIn(
    'id',
    explode(',', $_GET['program_subdispline'] ?? null),
    )->get();
    $eng_proficiency_level_name = App\Models\EngProficiencyLevel::whereIn(
    'id',
    explode(',', $_GET['eng_proficiency_level'] ?? null),
    )->get();
    $other_exam_name = App\Models\Exam::whereIn('id', explode(',', $_GET['other_exam'] ?? null))->get();
    $state = App\Models\Province::where('id', $university->state ?? null)->get();
    $university_type = App\Models\SchoolType::where('id', $university->type_of_university ?? null)->get();
@endphp
@if(Auth::check())
    @php
    $user=Auth::user();
    $student_data=DB::table('student')->select('country_id','id')->where('user_id',$user->id)->first();
    $program_id=DB::table('student_by_agent')->select('program_label')->where('student_user_id',$student_data->id ?? null)->first();
    $education_id=DB::table('education_history')->select('education_level_id')->where('student_id',$student_data->id  ?? null)->first();
    @endphp
@endif
<section>
   <div class="tan-title-tag w-75 mx-auto mt-5">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="d-flex gap-2">
            <div class="country_name">
                @foreach ($country_name as $item)
                <span class="badge bg-primary text-dark">{{ $item->name }}</span>
                @endforeach
            </div>
            <div class="program_level_name">
                @foreach ($program_level_name as $item)
                    <span class="badge bg-primary text-dark">{{ $item->name }}</span>
                @endforeach
            </div>
            <div class="program_sub_level_name">
                @foreach ($program_sub_level_name as $item)
                    <span class="badge bg-primary text-white">{{ $item->name }}</span>
                @endforeach
            </div>
            <div class="education_level_name">
                @foreach ($education_level_name as $item)
                    <span class="badge bg-primary text-white">{{ $item->name }}</span>
                @endforeach
            </div>
            <div class="intake_name">
            </div>
            <div class="program_discipline_name">
                @foreach ($program_discipline_name as $item)
                    <span class="badge bg-primary text-white">{{ $item->name }}</span>
                @endforeach
            </div>
            <div class="program_sub_discipline_name">
                @foreach ($program_sub_discipline_name as $item)
                    <span class="badge bg-primary text-white">{{ $item->name }}</span>
                @endforeach
            </div>
            <div class="eng_proficiency_level_name">
                @foreach ($eng_proficiency_level_name as $item)
                    <span class="badge bg-primary text-white">{{ $item->name }}</span>
                @endforeach
            </div>
            <div class="other_exam_name">
                @foreach ($other_exam_name as $item)
                    <span class="badge bg-primary text-white">{{ $item->name }}</span>
                @endforeach
            </div>
            <br>
        </div>
      <div class="container py-2">
         <div class="w-lg-50 mx-auto d-flex align-items-center">
            <h1 class=""><img src="{{asset('frontend/img/party.png')}}"></h1>
            <h2 class="mx-2"><span class="course_count"></span> Courses in
                <span class="university_count"></span> universities found</h2>
         </div>
      </div>
      <div class="main-tag-line">
         <div class="container">
            <div class="row">
               <div class=" col-lg-4 ">
                  <div class="inner-column">
                     <div class="faq-section py-3">
                        <div class="w-lg-50 mx-auto">
                           <div class="accordion accordion-flush" id="accordionExample">
                              <!-- 1: country -->
                              <div class="accordion-item">
                                 <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#col1"
                                       aria-expanded="false" aria-controls="col1">
                                       <h5>Country</h5>
                                    </button>
                                 </h2>
                                 <div id="col1" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="addto-search">
                                       <form action="#">
                                          <div class="form-input">
                                             <input class="keyword" type="text"
                                                placeholder="Search Country">
                                             <button class="search-button  srchbtn">
                                             <i class="fa fa-search"></i>
                                             </button>
                                          </div>
                                       </form>
                                    </div>
                                    <div class="addto-playlists1">
                                       <ul>
                                            @foreach ($country as $item)
                                                <li>
                                                    <label for="random-1" class="country-name">
                                                        <input type="checkbox" name="country[]" class="country-checkbox"
                                                            value="{{ $item->id }}"
                                                            id="{{ $item->id }}-country"
                                                            {{ in_array($item->id, $country_name->pluck('id')->toArray()) ? 'checked' : '' }}>
                                                        {{ $item->name }}
                                                    </label>
                                                </li>
                                            @endforeach
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <!-- 2: program level -->
                              <div class="accordion-item">
                                 <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#col2"
                                       aria-expanded="false" aria-controls="col2">
                                       <h5>Program Level</h5>
                                    </button>
                                 </h2>
                                 <div id="col2" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="addto-search">
                                       <form action="#">
                                          <div class="form-input ">
                                             <input class="keyword1" type="text"
                                                placeholder="Program Level "><button class="search-button  srchbtn">
                                             <i class="fa fa-search"></i>
                                             </button>
                                          </div>
                                       </form>
                                    </div>
                                    <div class="addto-playlists1">
                                       <ul>
                                          @foreach ($program_level as $item)
                                          <li>
                                             <label for="{{ $item->id }}-program-level"  class="country-name"
                                                >
                                             <input class="program_level_value"
                                             id="{{ $item->id }}-program-level"
                                             {{ in_array($item->id, $program_level_name->pluck('id')->toArray()) ? 'checked' : '' }}
                                             type="checkbox" name="program_level[]"
                                             value="{{ $item->id }}"
                                             onchange="fetchProgramSubLevel(this.id)">
                                             {{ $item->name }} </label>
                                          </li>
                                          @endforeach
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <!-- 3: program sub level -->
                              <div class="accordion-item">
                                 <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" id="education_level" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#col3"
                                       aria-expanded="false" aria-controls="col3">
                                       <h5>Program Sub Level</h5>
                                    </button>
                                 </h2>
                                 <div id="col3" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="addto-search">
                                       {{--
                                       <form action="#">
                                          <div class="form-input ">
                                             <input class="keyword1" type="text"
                                                placeholder="Program Level "><button class="search-button  srchbtn">
                                             <i class="fa fa-search"></i>
                                             </button>
                                          </div>
                                       </form>
                                       --}}
                                    </div>
                                    <div class="addto-playlists1">
                                       <ul class="program-sub-level">
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <!-- 4: Education level -->
                              <div class="accordion-item">
                                 <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#col4"
                                       aria-expanded="false" aria-controls="col4">
                                       <h5>Education Level</h5>
                                    </button>
                                 </h2>
                                 <div id="col4" class="accordion-collapse collapse"  data-bs-parent="#accordionExample">
                                    <div class="addto-playlists1">
                                       <ul id="education-level-list">
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <!-- 5: Intake -->
                              <div class="accordion-item">
                                 <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#col5"
                                       aria-expanded="false" aria-controls="col5">
                                       <h5>Intake</h5>
                                    </button>
                                 </h2>
                                 <div id="col5" class="accordion-collapse collapse"  data-bs-parent="#accordionExample">
                                    <div class="addto-playlists1">
                                       <ul>
                                          @foreach (range(1, 12) as $month)
                                          <li>
                                             <label for="random-{{ $month }}"
                                                class="playlist-name">
                                             <input id="random-{{ $month }}" type="checkbox"
                                                name="intake[]" class="i    ntake-name-data"
                                                value="{{ $month }}" id="">
                                             {{ date('M', strtotime(date('Y') . '-' . $month . '-01')) }}</label>
                                          </li>
                                          @endforeach
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              {{-- Program Discipline --}}
                              <div class="accordion-item">
                                 <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#col6"
                                       aria-expanded="false" aria-controls="col6">
                                       <h5>Program Discipline</h5>
                                    </button>
                                 </h2>
                                 <div id="col6" class="accordion-collapse collapse"  data-bs-parent="#accordionExample">
                                    <div class="addto-playlists1">
                                       <ul>
                                          @foreach ($program_discipline as $item)
                                          <li>
                                             <label for="random-1" class="playlist-name">
                                             <input type="checkbox" name="program_discipline[]"
                                             class="program_discipline_checkbox"
                                             {{ in_array($item->id, $program_discipline_name->pluck('id')->toArray()) ? 'checked' : '' }}
                                             value="{{ $item->id }}"
                                             id="{{ $item->id }} "> {{ $item->name }}
                                             </label>
                                          </li>
                                          @endforeach
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              {{-- Program Sub Discipline --}}
                              <div class="accordion-item">
                                 <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#col7"
                                       aria-expanded="false" aria-controls="col7">
                                       <h5>Program Sub Discipline</h5>
                                    </button>
                                 </h2>
                                 <div id="col7" class="accordion-collapse collapse"  data-bs-parent="#accordionExample">
                                    <div class="addto-playlists1">
                                       <ul class="program_subdiscipline">
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              {{-- eng pro level  --}}
                              <div class="accordion-item">
                                 <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#col8"
                                       aria-expanded="false" aria-controls="col8">
                                       <h5>English Profiency Level</h5>
                                    </button>
                                 </h2>
                                 <div id="col8" class="accordion-collapse collapse"  data-bs-parent="#accordionExample">
                                    <div class="addto-playlists1">
                                       <ul>
                                          @foreach ($eng_proficiency_level as $item)
                                          <li>
                                             <label for="random-1" class="playlist-name">
                                             <input type="checkbox" name="end_profiency_level[]"
                                             class="eng-pro"
                                             {{ in_array($item->id, $eng_proficiency_level_name->pluck('id')->toArray()) ? 'checked' : '' }}
                                             value="{{ $item->id }}"
                                             id="{{ $item->id }} "> {{ $item->name }}
                                             </label>
                                          </li>
                                          @endforeach
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              {{-- Other Exam  --}}
                              <div class="accordion-item">
                                 <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#col9"
                                       aria-expanded="false" aria-controls="col9">
                                       <h5>Other Exam</h5>
                                    </button>
                                 </h2>
                                 <div id="col9" class="accordion-collapse collapse"  data-bs-parent="#accordionExample">
                                    <div class="addto-playlists1">
                                       <ul>
                                          @foreach ($eng_proficiency_level as $item)
                                          <li>
                                             <label for="random-1" class="playlist-name">
                                             <input type="checkbox" name="end_profiency_level[]"
                                             class="eng-pro"
                                             {{ in_array($item->id, $eng_proficiency_level_name->pluck('id')->toArray()) ? 'checked' : '' }}
                                             value="{{ $item->id }}"
                                             id="{{ $item->id }} "> {{ $item->name }}
                                             </label>
                                          </li>
                                          @endforeach
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              {{-- Scholarship  --}}
                              <div class="accordion-item">
                                 <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#col10"
                                       aria-expanded="false" aria-controls="col10">
                                       <h5>Scholarship</h5>
                                    </button>
                                 </h2>
                                 <div id="col10" class="accordion-collapse collapse"  data-bs-parent="#accordionExample">
                                    <div class="addto-playlists1">
                                       <ul>
                                          <li>
                                             <label for="random-1" class="playlist-name">
                                             <input id="random-1" type="checkbox" name="schlorship[]"
                                                value="schlarship"> Scholarship Available </label>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              {{-- Tuition Fees Budget --}}
                              <div class="accordion-item">
                                 <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#col11"
                                       aria-expanded="false" aria-controls="col11">
                                       <h5>Tuition Fees Budget</h5>
                                    </button>
                                 </h2>
                                 <div id="col11" class="accordion-collapse collapse"  data-bs-parent="#accordionExample">
                                    <div class="addto-playlists1">
                                       <ul>
                                          <li>
                                             <label for="random-1" class="playlist-name">
                                             <input id="random-1" type="checkbox" name="tution_fees[]"
                                                value="tution_fees">Tuition Fees Budget</label>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 pt-3">
                  <div class="tabing-tab">
                     <div class=" ">
                        <div class="cards">
                           <nav class="">
                              <div class="nav nav-tabs nav-link-universe " id="nav-tab" role="tablist">
                                 <button class="nav-link w-100 app-vt" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="showProfileTab()" tabindex="-1"><i class="fa fa-university" aria-hidden="true"></i> Universities
                                    (<span class="university_count">578</span>)</button>
                                 <button class="nav-link w-100 apps-vt active" id="nav-contact-tab " data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="true" onclick="showContactTab()"><i class="fa fa-book mx-1" aria-hidden="true"></i>Courses (<span class="course_count">749</span>)</button>
                              </div>
                           </nav>
                           <div class="tab-content " id="nav-tabContent">
                              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                 <div class="ehl-heading mt-1">
                                    <div class="ehl-heading border-0">
                                       <div class="text-ehl-title">
                                          <h1>Universities</h1>
                                       </div>
                                    </div>
                                    <div class=" justify-content-between gap-2 align-items" id="university">

                                    
                                 <div class="university-item course-logo">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="" class="university_logo">
                                                <div class="u-logo">
                                                    <img src="http://127.0.0.1:8000/public/imagesapi/1717412228_Uni-logo-RobertGordon_730_290_80 (1).jpg" alt="university-logo" class="img-fluid uc-logo">
                                                </div>
                                            </a>
                                            <h5 class="university_name" style="margin-left: 10px; margin-bottom: 0px; margin-top: 5px;">
                                                <a href="https://www.rgu.ac.uk/">Robert Gordon University</a>
                                            </h5>
                                        </div>
                                        <div class="content-part">
                                            <ul class="meta-part" style="flex: 1 1 0%;">
                                                <li class="user meta_item">
                                                    <i class="fa fa-map"></i>
                                                    <span class="info_bold">Location: </span>
                                                    <span class="text_ellipsis">United Kingdom ,Aberdeen, AB10 7AQ</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-flag"></i>
                                                    <span class="info_bold">Country: </span>
                                                    <span>United Kingdom</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-list"></i>
                                                    <span class="info_bold">University Type: </span>
                                                    <span>English Institute</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-tasks"></i>
                                                    <span class="info_bold">Total Program: </span>
                                                    <span><a href="http://127.0.0.1:8000/view-program-data/1?" class="badge bg-primary">181 View Programs</a></span>
                                                </li>
                                            </ul>
                                            <div class="bottom-part">
                                                <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                <div class="btn-part">
                                                    <a href="university-details/1">View Details <i class="flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                 <div class="university-item course-logo">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="" class="university_logo">
                                                <div class="u-logo">
                                                    <img src="http://127.0.0.1:8000/public/imagesapi/1717485541_u.l logo.png" alt="university-logo" class="img-fluid uc-logo">
                                                </div>
                                            </a>
                                            <h5 class="university_name" style="margin-left: 10px; margin-bottom: 0px; margin-top: 5px;">
                                                <a href="https://www.leeds.ac.uk/">(STUDY GROUP) University of Leeds, Leeds</a>
                                            </h5>
                                        </div>
                                        <div class="content-part">
                                            <ul class="meta-part" style="flex: 1 1 0%;">
                                                <li class="user meta_item">
                                                    <i class="fa fa-map"></i>
                                                    <span class="info_bold">Location: </span>
                                                    <span class="text_ellipsis">United Kingdom ,Leeds, LS2 9JT</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-flag"></i>
                                                    <span class="info_bold">Country: </span>
                                                    <span>United Kingdom</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-list"></i>
                                                    <span class="info_bold">University Type: </span>
                                                    <span>English Institute</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-tasks"></i>
                                                    <span class="info_bold">Total Program: </span>
                                                    <span><a href="http://127.0.0.1:8000/view-program-data/2?" class="badge bg-primary">161 View Programs</a></span>
                                                </li>
                                            </ul>
                                            <div class="bottom-part">
                                                <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                <div class="btn-part">
                                                    <a href="university-details/2">View Details <i class="flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                 <div class="university-item course-logo">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="" class="university_logo">
                                                <div class="u-logo">
                                                    <img src="http://127.0.0.1:8000/public/imagesapi/1717492119_university-of-nottingham-logo.jpg" alt="university-logo" class="img-fluid uc-logo">
                                                </div>
                                            </a>
                                            <h5 class="university_name" style="margin-left: 10px; margin-bottom: 0px; margin-top: 5px;">
                                                <a href="https://www.kaplanpathways.com/where-to-study/university-of-nottingham-international-college/">(KAPLAN) University of Nottingham International College</a>
                                            </h5>
                                        </div>
                                        <div class="content-part">
                                            <ul class="meta-part" style="flex: 1 1 0%;">
                                                <li class="user meta_item">
                                                    <i class="fa fa-map"></i>
                                                    <span class="info_bold">Location: </span>
                                                    <span class="text_ellipsis">United Kingdom ,Nottingham, NG7 2RU</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-flag"></i>
                                                    <span class="info_bold">Country: </span>
                                                    <span>United Kingdom</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-list"></i>
                                                    <span class="info_bold">University Type: </span>
                                                    <span>English Institute</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-tasks"></i>
                                                    <span class="info_bold">Total Program: </span>
                                                    <span><a href="http://127.0.0.1:8000/view-program-data/3?" class="badge bg-primary">9 View Programs</a></span>
                                                </li>
                                            </ul>
                                            <div class="bottom-part">
                                                <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                <div class="btn-part">
                                                    <a href="university-details/3">View Details <i class="flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                 <div class="university-item course-logo">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="" class="university_logo">
                                                <div class="u-logo">
                                                    <img src="http://127.0.0.1:8000/public/imagesapi/1717502244_sheffield.png" alt="university-logo" class="img-fluid uc-logo">
                                                </div>
                                            </a>
                                            <h5 class="university_name" style="margin-left: 10px; margin-bottom: 0px; margin-top: 5px;">
                                                <a href="https://usic.sheffield.ac.uk">(STUDY GROUP) The University of Sheffield International College</a>
                                            </h5>
                                        </div>
                                        <div class="content-part">
                                            <ul class="meta-part" style="flex: 1 1 0%;">
                                                <li class="user meta_item">
                                                    <i class="fa fa-map"></i>
                                                    <span class="info_bold">Location: </span>
                                                    <span class="text_ellipsis">United Kingdom ,Sheffield, S1 4DE</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-flag"></i>
                                                    <span class="info_bold">Country: </span>
                                                    <span>United Kingdom</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-list"></i>
                                                    <span class="info_bold">University Type: </span>
                                                    <span>Public</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-tasks"></i>
                                                    <span class="info_bold">Total Program: </span>
                                                    <span><a href="http://127.0.0.1:8000/view-program-data/4?" class="badge bg-primary">311 View Programs</a></span>
                                                </li>
                                            </ul>
                                            <div class="bottom-part">
                                                <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                <div class="btn-part">
                                                    <a href="university-details/4">View Details <i class="flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                 <div class="university-item course-logo">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="" class="university_logo">
                                                <div class="u-logo">
                                                    <img src="http://127.0.0.1:8000/public/imagesapi/1717504808_leed.png" alt="university-logo" class="img-fluid uc-logo">
                                                </div>
                                            </a>
                                            <h5 class="university_name" style="margin-left: 10px; margin-bottom: 0px; margin-top: 5px;">
                                                <a href="https://www.leeds.ac.uk/">University of Leeds</a>
                                            </h5>
                                        </div>
                                        <div class="content-part">
                                            <ul class="meta-part" style="flex: 1 1 0%;">
                                                <li class="user meta_item">
                                                    <i class="fa fa-map"></i>
                                                    <span class="info_bold">Location: </span>
                                                    <span class="text_ellipsis">United Kingdom ,Leeds, LS2 9JT</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-flag"></i>
                                                    <span class="info_bold">Country: </span>
                                                    <span>United Kingdom</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-list"></i>
                                                    <span class="info_bold">University Type: </span>
                                                    <span>Public</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-tasks"></i>
                                                    <span class="info_bold">Total Program: </span>
                                                    <span><a href="http://127.0.0.1:8000/view-program-data/5?" class="badge bg-primary">87 View Programs</a></span>
                                                </li>
                                            </ul>
                                            <div class="bottom-part">
                                                <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                <div class="btn-part">
                                                    <a href="university-details/5">View Details <i class="flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                 <div class="university-item course-logo">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="" class="university_logo">
                                                <div class="u-logo">
                                                    <img src="http://127.0.0.1:8000/public/imagesapi/1717571309_ncl logo.png" alt="university-logo" class="img-fluid uc-logo">
                                                </div>
                                            </a>
                                            <h5 class="university_name" style="margin-left: 10px; margin-bottom: 0px; margin-top: 5px;">
                                                <a href="https://www.intostudy.com/universities/newcastle-university">(INTO) Newcastle University</a>
                                            </h5>
                                        </div>
                                        <div class="content-part">
                                            <ul class="meta-part" style="flex: 1 1 0%;">
                                                <li class="user meta_item">
                                                    <i class="fa fa-map"></i>
                                                    <span class="info_bold">Location: </span>
                                                    <span class="text_ellipsis">United Kingdom ,Newcastle upon Tyne, NE1 7RU</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-flag"></i>
                                                    <span class="info_bold">Country: </span>
                                                    <span>United Kingdom</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-list"></i>
                                                    <span class="info_bold">University Type: </span>
                                                    <span>Public</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-tasks"></i>
                                                    <span class="info_bold">Total Program: </span>
                                                    <span><a href="http://127.0.0.1:8000/view-program-data/6?" class="badge bg-primary">0 View Programs</a></span>
                                                </li>
                                            </ul>
                                            <div class="bottom-part">
                                                <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                <div class="btn-part">
                                                    <a href="university-details/6">View Details <i class="flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                 <div class="university-item course-logo">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="" class="university_logo">
                                                <div class="u-logo">
                                                    <img src="http://127.0.0.1:8000/public/imagesapi/1717573641_university-of-nottingham-logo.jpg" alt="university-logo" class="img-fluid uc-logo">
                                                </div>
                                            </a>
                                            <h5 class="university_name" style="margin-left: 10px; margin-bottom: 0px; margin-top: 5px;">
                                                <a href="https://www.nottingham.ac.uk/">University of Nottingham</a>
                                            </h5>
                                        </div>
                                        <div class="content-part">
                                            <ul class="meta-part" style="flex: 1 1 0%;">
                                                <li class="user meta_item">
                                                    <i class="fa fa-map"></i>
                                                    <span class="info_bold">Location: </span>
                                                    <span class="text_ellipsis">United Kingdom ,Nottingham, NG7 2RD</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-flag"></i>
                                                    <span class="info_bold">Country: </span>
                                                    <span>United Kingdom</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-list"></i>
                                                    <span class="info_bold">University Type: </span>
                                                    <span>Public</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-tasks"></i>
                                                    <span class="info_bold">Total Program: </span>
                                                    <span><a href="http://127.0.0.1:8000/view-program-data/7?" class="badge bg-primary">0 View Programs</a></span>
                                                </li>
                                            </ul>
                                            <div class="bottom-part">
                                                <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                <div class="btn-part">
                                                    <a href="university-details/7">View Details <i class="flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                 <div class="university-item course-logo">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="" class="university_logo">
                                                <div class="u-logo">
                                                    <img src="http://127.0.0.1:8000/public/imagesapi/1717580079_Kaplan_International_College_London_fa265ceb35.jpg" alt="university-logo" class="img-fluid uc-logo">
                                                </div>
                                            </a>
                                            <h5 class="university_name" style="margin-left: 10px; margin-bottom: 0px; margin-top: 5px;">
                                                <a href="https://www.kaplanpathways.com/where-to-study/uk-universities/queen-mary-university-of-london/">(KAPLAN) Queen Mary University of London</a>
                                            </h5>
                                        </div>
                                        <div class="content-part">
                                            <ul class="meta-part" style="flex: 1 1 0%;">
                                                <li class="user meta_item">
                                                    <i class="fa fa-map"></i>
                                                    <span class="info_bold">Location: </span>
                                                    <span class="text_ellipsis">United Kingdom ,Queen Mary, E1 4NS</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-flag"></i>
                                                    <span class="info_bold">Country: </span>
                                                    <span>United Kingdom</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-list"></i>
                                                    <span class="info_bold">University Type: </span>
                                                    <span>Public</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-tasks"></i>
                                                    <span class="info_bold">Total Program: </span>
                                                    <span><a href="http://127.0.0.1:8000/view-program-data/8?" class="badge bg-primary">0 View Programs</a></span>
                                                </li>
                                            </ul>
                                            <div class="bottom-part">
                                                <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                <div class="btn-part">
                                                    <a href="university-details/8">View Details <i class="flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                 <div class="university-item course-logo">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="" class="university_logo">
                                                <div class="u-logo">
                                                    <img src="http://127.0.0.1:8000/public/imagesapi/1717581592_BRISTOL.jpeg" alt="university-logo" class="img-fluid uc-logo">
                                                </div>
                                            </a>
                                            <h5 class="university_name" style="margin-left: 10px; margin-bottom: 0px; margin-top: 5px;">
                                                <a href="https://www.bristol.ac.uk/">University of Bristol</a>
                                            </h5>
                                        </div>
                                        <div class="content-part">
                                            <ul class="meta-part" style="flex: 1 1 0%;">
                                                <li class="user meta_item">
                                                    <i class="fa fa-map"></i>
                                                    <span class="info_bold">Location: </span>
                                                    <span class="text_ellipsis">United Kingdom ,Bristol, BS8 1QU</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-flag"></i>
                                                    <span class="info_bold">Country: </span>
                                                    <span>United Kingdom</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-list"></i>
                                                    <span class="info_bold">University Type: </span>
                                                    <span>Public</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-tasks"></i>
                                                    <span class="info_bold">Total Program: </span>
                                                    <span><a href="http://127.0.0.1:8000/view-program-data/9?" class="badge bg-primary">0 View Programs</a></span>
                                                </li>
                                            </ul>
                                            <div class="bottom-part">
                                                <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                <div class="btn-part">
                                                    <a href="university-details/9">View Details <i class="flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                 <div class="university-item course-logo">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="" class="university_logo">
                                                <div class="u-logo">
                                                    <img src="http://127.0.0.1:8000/public/imagesapi/1717586027_Sheffield-Logo-02.png" alt="university-logo" class="img-fluid uc-logo">
                                                </div>
                                            </a>
                                            <h5 class="university_name" style="margin-left: 10px; margin-bottom: 0px; margin-top: 5px;">
                                                <a href="https://www.sheffield.ac.uk/">The University of Sheffield</a>
                                            </h5>
                                        </div>
                                        <div class="content-part">
                                            <ul class="meta-part" style="flex: 1 1 0%;">
                                                <li class="user meta_item">
                                                    <i class="fa fa-map"></i>
                                                    <span class="info_bold">Location: </span>
                                                    <span class="text_ellipsis">United Kingdom ,Sheffield, S10 2TN</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-flag"></i>
                                                    <span class="info_bold">Country: </span>
                                                    <span>United Kingdom</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-list"></i>
                                                    <span class="info_bold">University Type: </span>
                                                    <span>Public</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-tasks"></i>
                                                    <span class="info_bold">Total Program: </span>
                                                    <span><a href="http://127.0.0.1:8000/view-program-data/10?" class="badge bg-primary">0 View Programs</a></span>
                                                </li>
                                            </ul>
                                            <div class="bottom-part">
                                                <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                <div class="btn-part">
                                                    <a href="university-details/10">View Details <i class="flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                 <div class="university-item course-logo">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="" class="university_logo">
                                                <div class="u-logo">
                                                    <img src="http://127.0.0.1:8000/public/imagesapi/1717666306_glasgow logo.jpeg" alt="university-logo" class="img-fluid uc-logo">
                                                </div>
                                            </a>
                                            <h5 class="university_name" style="margin-left: 10px; margin-bottom: 0px; margin-top: 5px;">
                                                <a href="https://www.gla.ac.uk/">University of Glasgow</a>
                                            </h5>
                                        </div>
                                        <div class="content-part">
                                            <ul class="meta-part" style="flex: 1 1 0%;">
                                                <li class="user meta_item">
                                                    <i class="fa fa-map"></i>
                                                    <span class="info_bold">Location: </span>
                                                    <span class="text_ellipsis">United Kingdom ,Glasgow, G12 8QQ</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-flag"></i>
                                                    <span class="info_bold">Country: </span>
                                                    <span>United Kingdom</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-list"></i>
                                                    <span class="info_bold">University Type: </span>
                                                    <span>Public</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-tasks"></i>
                                                    <span class="info_bold">Total Program: </span>
                                                    <span><a href="http://127.0.0.1:8000/view-program-data/11?" class="badge bg-primary">0 View Programs</a></span>
                                                </li>
                                            </ul>
                                            <div class="bottom-part">
                                                <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                <div class="btn-part">
                                                    <a href="university-details/11">View Details <i class="flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                 <div class="university-item course-logo">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="" class="university_logo">
                                                <div class="u-logo">
                                                    <img src="http://127.0.0.1:8000/public/imagesapi/1717667645_newcastle.png" alt="university-logo" class="img-fluid uc-logo">
                                                </div>
                                            </a>
                                            <h5 class="university_name" style="margin-left: 10px; margin-bottom: 0px; margin-top: 5px;">
                                                <a href="https://www.ncl.ac.uk/">Newcastle University</a>
                                            </h5>
                                        </div>
                                        <div class="content-part">
                                            <ul class="meta-part" style="flex: 1 1 0%;">
                                                <li class="user meta_item">
                                                    <i class="fa fa-map"></i>
                                                    <span class="info_bold">Location: </span>
                                                    <span class="text_ellipsis">United Kingdom ,Newcastle, NE1 7R</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-flag"></i>
                                                    <span class="info_bold">Country: </span>
                                                    <span>United Kingdom</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-list"></i>
                                                    <span class="info_bold">University Type: </span>
                                                    <span>Public</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-tasks"></i>
                                                    <span class="info_bold">Total Program: </span>
                                                    <span><a href="http://127.0.0.1:8000/view-program-data/12?" class="badge bg-primary">0 View Programs</a></span>
                                                </li>
                                            </ul>
                                            <div class="bottom-part">
                                                <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                <div class="btn-part">
                                                    <a href="university-details/12">View Details <i class="flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            </div>

                                 </div>
                              </div>
                              <div class="tab-pane fade active show" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                 <div class="ehl-heading mt-1">
                                    <div class="ehl-heading border-0">
                                       <div class="text-ehl-title">
                                          <h1>Courses</h1>
                                       </div>
                                    </div>
                                    <div class="course_data justify-content-between gap-2 align-items">

                                    
                                <div class="col-lg-12 col-md-4 col-sm-6 mt-30">
                                    <div class="courses-item course-logo">
                                        <div>
                                            <div class="course_card_logo_sec d-flex gap-5">
                                                <div class="img-part" style="margin: 2px 5px;">
                                                    <a href="http://127.0.0.1:8000/course-details/1">
                                                        <img src="http://127.0.0.1:8000/public/imagesapi/1717412228_Uni-logo-RobertGordon_730_290_80 (1).jpg" alt="university logo" class="img-thumbnail university_logo">
                                                    </a>
                                                </div>
                                                <div style="flex: 1 1 0%;">
                                                    <h5 class="mb-1">
                                                        <a href="http://127.0.0.1:8000/course-details/1">MSc Business and Management</a>
                                                    </h5>
                                                    <a href="https://www.rgu.ac.uk/" style="font-weight: 500; font-size: 14px;">Robert Gordon University</a>
                                                </div>
                                            </div>
                                            <div class="content-part">
                                                <ul class="meta-part">
                                                    <li class="user">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <span class="info_bold">Level</span>
                                                        <span>Postgradute</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">Application Fees</span>
                                                        <span>$0</span>
                                                    </li>
                                                     <li class="user">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="info_bold">Duration</span>
                                                        <span>12 month</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">1st Year Tuition Fees</span>
                                                        <span>A$18500</span>
                                                    </li>
                                                </ul>
                                                <p class="mb-0" style="font-size: 13px;">fees may vary according to university current structure and policy</p>
                                                <div class="bottom-part">
                                                    <div class="info-meta">
                                                        <ul>
                                                            <li class="user">
                                                                <i class="fa fa-flag"></i>
                                                                <span>United Kingdom</span>
                                                                <span>-</span>
                                                                <span>Full Time</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                 <div class="bottom-part">
                                                    <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                    <div class="btn-part">
                                                        <a href="course-details/1">View Details <i class="flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                <div class="col-lg-12 col-md-4 col-sm-6 mt-30">
                                    <div class="courses-item course-logo">
                                        <div>
                                            <div class="course_card_logo_sec d-flex gap-5">
                                                <div class="img-part" style="margin: 2px 5px;">
                                                    <a href="http://127.0.0.1:8000/course-details/2">
                                                        <img src="http://127.0.0.1:8000/public/imagesapi/1717412228_Uni-logo-RobertGordon_730_290_80 (1).jpg" alt="university logo" class="img-thumbnail university_logo">
                                                    </a>
                                                </div>
                                                <div style="flex: 1 1 0%;">
                                                    <h5 class="mb-1">
                                                        <a href="http://127.0.0.1:8000/course-details/2">MSc Accounting and Finance</a>
                                                    </h5>
                                                    <a href="https://www.rgu.ac.uk/" style="font-weight: 500; font-size: 14px;">Robert Gordon University</a>
                                                </div>
                                            </div>
                                            <div class="content-part">
                                                <ul class="meta-part">
                                                    <li class="user">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <span class="info_bold">Level</span>
                                                        <span>Postgradute</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">Application Fees</span>
                                                        <span>$0</span>
                                                    </li>
                                                     <li class="user">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="info_bold">Duration</span>
                                                        <span>12 month</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">1st Year Tuition Fees</span>
                                                        <span>A$18500</span>
                                                    </li>
                                                </ul>
                                                <p class="mb-0" style="font-size: 13px;">fees may vary according to university current structure and policy</p>
                                                <div class="bottom-part">
                                                    <div class="info-meta">
                                                        <ul>
                                                            <li class="user">
                                                                <i class="fa fa-flag"></i>
                                                                <span>United Kingdom</span>
                                                                <span>-</span>
                                                                <span>Full Time</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                 <div class="bottom-part">
                                                    <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                    <div class="btn-part">
                                                        <a href="course-details/2">View Details <i class="flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                <div class="col-lg-12 col-md-4 col-sm-6 mt-30">
                                    <div class="courses-item course-logo">
                                        <div>
                                            <div class="course_card_logo_sec d-flex gap-5">
                                                <div class="img-part" style="margin: 2px 5px;">
                                                    <a href="http://127.0.0.1:8000/course-details/4">
                                                        <img src="http://127.0.0.1:8000/public/imagesapi/1717412228_Uni-logo-RobertGordon_730_290_80 (1).jpg" alt="university logo" class="img-thumbnail university_logo">
                                                    </a>
                                                </div>
                                                <div style="flex: 1 1 0%;">
                                                    <h5 class="mb-1">
                                                        <a href="http://127.0.0.1:8000/course-details/4">MSc Accounting and Finance with Placement</a>
                                                    </h5>
                                                    <a href="https://www.rgu.ac.uk/" style="font-weight: 500; font-size: 14px;">Robert Gordon University</a>
                                                </div>
                                            </div>
                                            <div class="content-part">
                                                <ul class="meta-part">
                                                    <li class="user">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <span class="info_bold">Level</span>
                                                        <span>Postgradute</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">Application Fees</span>
                                                        <span>$0</span>
                                                    </li>
                                                     <li class="user">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="info_bold">Duration</span>
                                                        <span>24 month</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">1st Year Tuition Fees</span>
                                                        <span>A$18500</span>
                                                    </li>
                                                </ul>
                                                <p class="mb-0" style="font-size: 13px;">fees may vary according to university current structure and policy</p>
                                                <div class="bottom-part">
                                                    <div class="info-meta">
                                                        <ul>
                                                            <li class="user">
                                                                <i class="fa fa-flag"></i>
                                                                <span>United Kingdom</span>
                                                                <span>-</span>
                                                                <span>Full Time</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                 <div class="bottom-part">
                                                    <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                    <div class="btn-part">
                                                        <a href="course-details/4">View Details <i class="flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                <div class="col-lg-12 col-md-4 col-sm-6 mt-30">
                                    <div class="courses-item course-logo">
                                        <div>
                                            <div class="course_card_logo_sec d-flex gap-5">
                                                <div class="img-part" style="margin: 2px 5px;">
                                                    <a href="http://127.0.0.1:8000/course-details/3">
                                                        <img src="http://127.0.0.1:8000/public/imagesapi/1717412228_Uni-logo-RobertGordon_730_290_80 (1).jpg" alt="university logo" class="img-thumbnail university_logo">
                                                    </a>
                                                </div>
                                                <div style="flex: 1 1 0%;">
                                                    <h5 class="mb-1">
                                                        <a href="http://127.0.0.1:8000/course-details/3">MSc Advanced Architectural Design</a>
                                                    </h5>
                                                    <a href="https://www.rgu.ac.uk/" style="font-weight: 500; font-size: 14px;">Robert Gordon University</a>
                                                </div>
                                            </div>
                                            <div class="content-part">
                                                <ul class="meta-part">
                                                    <li class="user">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <span class="info_bold">Level</span>
                                                        <span>Postgradute</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">Application Fees</span>
                                                        <span>$0</span>
                                                    </li>
                                                     <li class="user">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="info_bold">Duration</span>
                                                        <span>12 month</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">1st Year Tuition Fees</span>
                                                        <span>A$16180</span>
                                                    </li>
                                                </ul>
                                                <p class="mb-0" style="font-size: 13px;">fees may vary according to university current structure and policy</p>
                                                <div class="bottom-part">
                                                    <div class="info-meta">
                                                        <ul>
                                                            <li class="user">
                                                                <i class="fa fa-flag"></i>
                                                                <span>United Kingdom</span>
                                                                <span>-</span>
                                                                <span>Full Time</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                 <div class="bottom-part">
                                                    <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                    <div class="btn-part">
                                                        <a href="course-details/3">View Details <i class="flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                <div class="col-lg-12 col-md-4 col-sm-6 mt-30">
                                    <div class="courses-item course-logo">
                                        <div>
                                            <div class="course_card_logo_sec d-flex gap-5">
                                                <div class="img-part" style="margin: 2px 5px;">
                                                    <a href="http://127.0.0.1:8000/course-details/5">
                                                        <img src="http://127.0.0.1:8000/public/imagesapi/1717412228_Uni-logo-RobertGordon_730_290_80 (1).jpg" alt="university logo" class="img-thumbnail university_logo">
                                                    </a>
                                                </div>
                                                <div style="flex: 1 1 0%;">
                                                    <h5 class="mb-1">
                                                        <a href="http://127.0.0.1:8000/course-details/5">MSc Analytical Science - Drug Analysis and Toxicology</a>
                                                    </h5>
                                                    <a href="https://www.rgu.ac.uk/" style="font-weight: 500; font-size: 14px;">Robert Gordon University</a>
                                                </div>
                                            </div>
                                            <div class="content-part">
                                                <ul class="meta-part">
                                                    <li class="user">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <span class="info_bold">Level</span>
                                                        <span>Postgradute</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">Application Fees</span>
                                                        <span>$0</span>
                                                    </li>
                                                     <li class="user">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="info_bold">Duration</span>
                                                        <span>12 month</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">1st Year Tuition Fees</span>
                                                        <span>A$17600</span>
                                                    </li>
                                                </ul>
                                                <p class="mb-0" style="font-size: 13px;">fees may vary according to university current structure and policy</p>
                                                <div class="bottom-part">
                                                    <div class="info-meta">
                                                        <ul>
                                                            <li class="user">
                                                                <i class="fa fa-flag"></i>
                                                                <span>United Kingdom</span>
                                                                <span>-</span>
                                                                <span>Full Time</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                 <div class="bottom-part">
                                                    <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                    <div class="btn-part">
                                                        <a href="course-details/5">View Details <i class="flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                <div class="col-lg-12 col-md-4 col-sm-6 mt-30">
                                    <div class="courses-item course-logo">
                                        <div>
                                            <div class="course_card_logo_sec d-flex gap-5">
                                                <div class="img-part" style="margin: 2px 5px;">
                                                    <a href="http://127.0.0.1:8000/course-details/6">
                                                        <img src="http://127.0.0.1:8000/public/imagesapi/1717412228_Uni-logo-RobertGordon_730_290_80 (1).jpg" alt="university logo" class="img-thumbnail university_logo">
                                                    </a>
                                                </div>
                                                <div style="flex: 1 1 0%;">
                                                    <h5 class="mb-1">
                                                        <a href="http://127.0.0.1:8000/course-details/6">MSc Analytical Science - Environmental Analysis</a>
                                                    </h5>
                                                    <a href="https://www.rgu.ac.uk/" style="font-weight: 500; font-size: 14px;">Robert Gordon University</a>
                                                </div>
                                            </div>
                                            <div class="content-part">
                                                <ul class="meta-part">
                                                    <li class="user">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <span class="info_bold">Level</span>
                                                        <span>Postgradute</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">Application Fees</span>
                                                        <span>$0</span>
                                                    </li>
                                                     <li class="user">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="info_bold">Duration</span>
                                                        <span>12 month</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">1st Year Tuition Fees</span>
                                                        <span>A$17600</span>
                                                    </li>
                                                </ul>
                                                <p class="mb-0" style="font-size: 13px;">fees may vary according to university current structure and policy</p>
                                                <div class="bottom-part">
                                                    <div class="info-meta">
                                                        <ul>
                                                            <li class="user">
                                                                <i class="fa fa-flag"></i>
                                                                <span>United Kingdom</span>
                                                                <span>-</span>
                                                                <span>Full Time</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                 <div class="bottom-part">
                                                    <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                    <div class="btn-part">
                                                        <a href="course-details/6">View Details <i class="flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                <div class="col-lg-12 col-md-4 col-sm-6 mt-30">
                                    <div class="courses-item course-logo">
                                        <div>
                                            <div class="course_card_logo_sec d-flex gap-5">
                                                <div class="img-part" style="margin: 2px 5px;">
                                                    <a href="http://127.0.0.1:8000/course-details/7">
                                                        <img src="http://127.0.0.1:8000/public/imagesapi/1717412228_Uni-logo-RobertGordon_730_290_80 (1).jpg" alt="university logo" class="img-thumbnail university_logo">
                                                    </a>
                                                </div>
                                                <div style="flex: 1 1 0%;">
                                                    <h5 class="mb-1">
                                                        <a href="http://127.0.0.1:8000/course-details/7">MSc Analytical Science - Food Analysis, Authenticity and Safety</a>
                                                    </h5>
                                                    <a href="https://www.rgu.ac.uk/" style="font-weight: 500; font-size: 14px;">Robert Gordon University</a>
                                                </div>
                                            </div>
                                            <div class="content-part">
                                                <ul class="meta-part">
                                                    <li class="user">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <span class="info_bold">Level</span>
                                                        <span>Postgradute</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">Application Fees</span>
                                                        <span>$0</span>
                                                    </li>
                                                     <li class="user">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="info_bold">Duration</span>
                                                        <span>12 month</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">1st Year Tuition Fees</span>
                                                        <span>A$17600</span>
                                                    </li>
                                                </ul>
                                                <p class="mb-0" style="font-size: 13px;">fees may vary according to university current structure and policy</p>
                                                <div class="bottom-part">
                                                    <div class="info-meta">
                                                        <ul>
                                                            <li class="user">
                                                                <i class="fa fa-flag"></i>
                                                                <span>United Kingdom</span>
                                                                <span>-</span>
                                                                <span>Full Time</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                 <div class="bottom-part">
                                                    <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                    <div class="btn-part">
                                                        <a href="course-details/7">View Details <i class="flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                <div class="col-lg-12 col-md-4 col-sm-6 mt-30">
                                    <div class="courses-item course-logo">
                                        <div>
                                            <div class="course_card_logo_sec d-flex gap-5">
                                                <div class="img-part" style="margin: 2px 5px;">
                                                    <a href="http://127.0.0.1:8000/course-details/8">
                                                        <img src="http://127.0.0.1:8000/public/imagesapi/1717412228_Uni-logo-RobertGordon_730_290_80 (1).jpg" alt="university logo" class="img-thumbnail university_logo">
                                                    </a>
                                                </div>
                                                <div style="flex: 1 1 0%;">
                                                    <h5 class="mb-1">
                                                        <a href="http://127.0.0.1:8000/course-details/8">Master of Architecture Part 2 RIBA/ARB</a>
                                                    </h5>
                                                    <a href="https://www.rgu.ac.uk/" style="font-weight: 500; font-size: 14px;">Robert Gordon University</a>
                                                </div>
                                            </div>
                                            <div class="content-part">
                                                <ul class="meta-part">
                                                    <li class="user">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <span class="info_bold">Level</span>
                                                        <span>Postgradute</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">Application Fees</span>
                                                        <span>$0</span>
                                                    </li>
                                                     <li class="user">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="info_bold">Duration</span>
                                                        <span>60 month</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">1st Year Tuition Fees</span>
                                                        <span>A$17040</span>
                                                    </li>
                                                </ul>
                                                <p class="mb-0" style="font-size: 13px;">fees may vary according to university current structure and policy</p>
                                                <div class="bottom-part">
                                                    <div class="info-meta">
                                                        <ul>
                                                            <li class="user">
                                                                <i class="fa fa-flag"></i>
                                                                <span>United Kingdom</span>
                                                                <span>-</span>
                                                                <span>Full Time</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                 <div class="bottom-part">
                                                    <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                    <div class="btn-part">
                                                        <a href="course-details/8">View Details <i class="flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                <div class="col-lg-12 col-md-4 col-sm-6 mt-30">
                                    <div class="courses-item course-logo">
                                        <div>
                                            <div class="course_card_logo_sec d-flex gap-5">
                                                <div class="img-part" style="margin: 2px 5px;">
                                                    <a href="http://127.0.0.1:8000/course-details/9">
                                                        <img src="http://127.0.0.1:8000/public/imagesapi/1717412228_Uni-logo-RobertGordon_730_290_80 (1).jpg" alt="university logo" class="img-thumbnail university_logo">
                                                    </a>
                                                </div>
                                                <div style="flex: 1 1 0%;">
                                                    <h5 class="mb-1">
                                                        <a href="http://127.0.0.1:8000/course-details/9">MSc Biomedical Technology</a>
                                                    </h5>
                                                    <a href="https://www.rgu.ac.uk/" style="font-weight: 500; font-size: 14px;">Robert Gordon University</a>
                                                </div>
                                            </div>
                                            <div class="content-part">
                                                <ul class="meta-part">
                                                    <li class="user">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <span class="info_bold">Level</span>
                                                        <span>Postgradute</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">Application Fees</span>
                                                        <span>$0</span>
                                                    </li>
                                                     <li class="user">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="info_bold">Duration</span>
                                                        <span>12 month</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">1st Year Tuition Fees</span>
                                                        <span>A$18960</span>
                                                    </li>
                                                </ul>
                                                <p class="mb-0" style="font-size: 13px;">fees may vary according to university current structure and policy</p>
                                                <div class="bottom-part">
                                                    <div class="info-meta">
                                                        <ul>
                                                            <li class="user">
                                                                <i class="fa fa-flag"></i>
                                                                <span>United Kingdom</span>
                                                                <span>-</span>
                                                                <span>Full Time</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                 <div class="bottom-part">
                                                    <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                    <div class="btn-part">
                                                        <a href="course-details/9">View Details <i class="flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                <div class="col-lg-12 col-md-4 col-sm-6 mt-30">
                                    <div class="courses-item course-logo">
                                        <div>
                                            <div class="course_card_logo_sec d-flex gap-5">
                                                <div class="img-part" style="margin: 2px 5px;">
                                                    <a href="http://127.0.0.1:8000/course-details/10">
                                                        <img src="http://127.0.0.1:8000/public/imagesapi/1717412228_Uni-logo-RobertGordon_730_290_80 (1).jpg" alt="university logo" class="img-thumbnail university_logo">
                                                    </a>
                                                </div>
                                                <div style="flex: 1 1 0%;">
                                                    <h5 class="mb-1">
                                                        <a href="http://127.0.0.1:8000/course-details/10">MSc Business Analytics</a>
                                                    </h5>
                                                    <a href="https://www.rgu.ac.uk/" style="font-weight: 500; font-size: 14px;">Robert Gordon University</a>
                                                </div>
                                            </div>
                                            <div class="content-part">
                                                <ul class="meta-part">
                                                    <li class="user">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <span class="info_bold">Level</span>
                                                        <span>Postgradute</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">Application Fees</span>
                                                        <span>$0</span>
                                                    </li>
                                                     <li class="user">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="info_bold">Duration</span>
                                                        <span>12 month</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">1st Year Tuition Fees</span>
                                                        <span>A$16900</span>
                                                    </li>
                                                </ul>
                                                <p class="mb-0" style="font-size: 13px;">fees may vary according to university current structure and policy</p>
                                                <div class="bottom-part">
                                                    <div class="info-meta">
                                                        <ul>
                                                            <li class="user">
                                                                <i class="fa fa-flag"></i>
                                                                <span>United Kingdom</span>
                                                                <span>-</span>
                                                                <span>Full Time</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                 <div class="bottom-part">
                                                    <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                    <div class="btn-part">
                                                        <a href="course-details/10">View Details <i class="flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                <div class="col-lg-12 col-md-4 col-sm-6 mt-30">
                                    <div class="courses-item course-logo">
                                        <div>
                                            <div class="course_card_logo_sec d-flex gap-5">
                                                <div class="img-part" style="margin: 2px 5px;">
                                                    <a href="http://127.0.0.1:8000/course-details/11">
                                                        <img src="http://127.0.0.1:8000/public/imagesapi/1717412228_Uni-logo-RobertGordon_730_290_80 (1).jpg" alt="university logo" class="img-thumbnail university_logo">
                                                    </a>
                                                </div>
                                                <div style="flex: 1 1 0%;">
                                                    <h5 class="mb-1">
                                                        <a href="http://127.0.0.1:8000/course-details/11">MSc Business and Management (Jan Start)</a>
                                                    </h5>
                                                    <a href="https://www.rgu.ac.uk/" style="font-weight: 500; font-size: 14px;">Robert Gordon University</a>
                                                </div>
                                            </div>
                                            <div class="content-part">
                                                <ul class="meta-part">
                                                    <li class="user">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <span class="info_bold">Level</span>
                                                        <span>Postgradute</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">Application Fees</span>
                                                        <span>$0</span>
                                                    </li>
                                                     <li class="user">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="info_bold">Duration</span>
                                                        <span>16 month</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">1st Year Tuition Fees</span>
                                                        <span>A$18500</span>
                                                    </li>
                                                </ul>
                                                <p class="mb-0" style="font-size: 13px;">fees may vary according to university current structure and policy</p>
                                                <div class="bottom-part">
                                                    <div class="info-meta">
                                                        <ul>
                                                            <li class="user">
                                                                <i class="fa fa-flag"></i>
                                                                <span>United Kingdom</span>
                                                                <span>-</span>
                                                                <span>Full Time</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                 <div class="bottom-part">
                                                    <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                    <div class="btn-part">
                                                        <a href="course-details/11">View Details <i class="flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            
                                <div class="col-lg-12 col-md-4 col-sm-6 mt-30">
                                    <div class="courses-item course-logo">
                                        <div>
                                            <div class="course_card_logo_sec d-flex gap-5">
                                                <div class="img-part" style="margin: 2px 5px;">
                                                    <a href="http://127.0.0.1:8000/course-details/12">
                                                        <img src="http://127.0.0.1:8000/public/imagesapi/1717412228_Uni-logo-RobertGordon_730_290_80 (1).jpg" alt="university logo" class="img-thumbnail university_logo">
                                                    </a>
                                                </div>
                                                <div style="flex: 1 1 0%;">
                                                    <h5 class="mb-1">
                                                        <a href="http://127.0.0.1:8000/course-details/12">MSc Business and Management with Placement</a>
                                                    </h5>
                                                    <a href="https://www.rgu.ac.uk/" style="font-weight: 500; font-size: 14px;">Robert Gordon University</a>
                                                </div>
                                            </div>
                                            <div class="content-part">
                                                <ul class="meta-part">
                                                    <li class="user">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <span class="info_bold">Level</span>
                                                        <span>Postgradute</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">Application Fees</span>
                                                        <span>$0</span>
                                                    </li>
                                                     <li class="user">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="info_bold">Duration</span>
                                                        <span>24 month</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">1st Year Tuition Fees</span>
                                                        <span>A$18500</span>
                                                    </li>
                                                </ul>
                                                <p class="mb-0" style="font-size: 13px;">fees may vary according to university current structure and policy</p>
                                                <div class="bottom-part">
                                                    <div class="info-meta">
                                                        <ul>
                                                            <li class="user">
                                                                <i class="fa fa-flag"></i>
                                                                <span>United Kingdom</span>
                                                                <span>-</span>
                                                                <span>Full Time</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                 <div class="bottom-part">
                                                    <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                    <div class="btn-part">
                                                        <a href="course-details/12">View Details <i class="flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
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
@section('javascript_section')
<script type="text/javascript">
   (function($) {
       $(".keyword").on('keyup', function(e) {
           var $this = $(this);
           var exp = new RegExp($this.val(), 'i');
           $(".addto-playlists1 li label").each(function() {
               var $self = $(this);
               if (!exp.test($self.text())) {
                   $self.parent().hide();
               } else {
                   $self.parent().show();
               }
           });
       });
   })(jQuery);
   (function($) {
       $(".keyword1").on('keyup', function(e) {
           var $this = $(this);
           var exp = new RegExp($this.val(), 'i');
           $(".addto-playlists1 li label").each(function() {
               var $self = $(this);
               if (!exp.test($self.text())) {
                   $self.parent().hide();
               } else {
                   $self.parent().show();
               }
           });
       });
   })(jQuery);
</script>
<script>
    $(document).ready(function() {
            function csrf() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            }
            let pages = 2;
            let current_page = 0;
            let bool = false;
            let lastPage;
            $(window).scroll(function() {
                let height = 1000;
                if ($(window).scrollTop() + $(window).height() >= height && bool == false && lastPage > pages - 2) {
                    bool = true;
                    $('.ajax-load').show();
                    lazyLoad(pages)
                        .then(() => {
                            bool = false;
                            pages++;
                            if (pages - 2 == lastPage) {
                                $('.no-data').show();
                            }
                        })
                }
            })
            function getParams() {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.toString();
            }
            function lazyLoad(page) {
                return new Promise((resolve, reject) => {
                    $.ajax({
                        url: `?page=${page}&${getParams()}`,
                        type: 'GET',
                        beforeSend: function() {
                            $('.ajax-load').show();
                        },
                        success: function(response) {
                            $('.ajax-load').hide();
                            let html = '';
                            let course_data ='';
                            $.each(response.data.data, function(index, item) {
                                var url_param =getParams();
                                html += `
                                 <div class="university-item course-logo">
                                    <div>
                                        <div class="d-flex">
                                            <a href="${item.university ? item.website : ''}" class="university_logo">
                                                <div class="u-logo">
                                                    <img src="${window.location.origin}/public/${item ? item.logo : ''}" alt="university-logo" class="img-fluid uc-logo">
                                                </div>
                                            </a>
                                            <h5 class="university_name" style="margin-left: 10px; margin-bottom: 0px; margin-top: 5px;">
                                                <a href="${item.university_name ? item.website : ''}">${item ? item.university_name : ''}</a>
                                            </h5>
                                        </div>
                                        <div class="content-part">
                                            <ul class="meta-part" style="flex: 1 1 0%;">
                                                <li class="user meta_item">
                                                    <i class="fa fa-map"></i>
                                                    <span class="info_bold">Location: </span>
                                                    <span class="text_ellipsis">${item.country ? item.country.name : ''}, ${item.city} ,${item ? item.zip : ''}</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-flag"></i>
                                                    <span class="info_bold">Country: </span>
                                                    <span>${item.country ? item.country.name  : '' }</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-list"></i>
                                                    <span class="info_bold">University Type: </span>
                                                    <span>${item.university_type ? item.university_type.name : ''}</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-tasks"></i>
                                                    <span class="info_bold">Total Program: </span>
                                                    <span><a href="{{ url('view-program-data') }}/${item.id}?${url_param}" class="badge bg-primary">${item.program_count ? item.program_count : '0'} View Programs</a></span>
                                                </li>
                                            </ul>
                                            <div class="bottom-part">
                                                <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                <div class="btn-part">
                                                    <a href="university-details/${item.id ? item.id : ''}">View Details <i class="flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                                 <hr class="mt-10">
                                `;
                            });
                            $.each(response.course_data.data, function(index, item) {
                                $('.course_data').append(`
                                    <div class="col-lg-12 col-md-4 col-sm-6 mt-30">
                                        <div class="courses-item course-logo">
                                            <div>
                                                <div class="course_card_logo_sec d-flex gap-5">
                                                    <div class="img-part" style="margin: 2px 5px;">
                                                        <a href="{{url('course-details')}}/${item.id}">
                                                            <img src="${window.location.origin}/public/${item.university_name ? item.university_name.logo : ''}" alt="university logo" class="img-thumbnail university_logo">
                                                        </a>
                                                    </div>
                                                    <div style="flex: 1 1 0%;">
                                                        <h5 class="mb-1">
                                                            <a href="{{url('course-details')}}/${item.id}">${item.name ?? ''}</a>
                                                        </h5>
                                                        <a href="${item.university_name?.website ?? ''}" style="font-weight: 500; font-size: 14px;">
                                                            ${item.university_name?.university_name ?? ''}</a>
                                                    </div>
                                                </div>
                                                <div class="content-part">
                                                    <ul class="meta-part">
                                                        <li class="user">
                                                            <i class="fa fa-graduation-cap"></i>
                                                            <span class="info_bold">Level</span>
                                                            <span>${ item.program_level.name}</span>
                                                        </li>
                                                        <li class="user">
                                                            <i class="fa fa-money"></i>
                                                            <span class="info_bold">Application Fees</span>
                                                            <span>$${item.application_fee}</span>
                                                        </li>
                                                        <li class="user">
                                                            <i class="fa fa-clock-o"></i>
                                                            <span class="info_bold">Duration</span>
                                                            <span>${item.length}</span>
                                                        </li>
                                                        <li class="user">
                                                            <i class="fa fa-money"></i>
                                                            <span class="info_bold">1st Year Tuition Fees</span>
                                                            <span>A$${item.tution_fee }</span>
                                                        </li>
                                                    </ul>
                                                    <p class="mb-0" style="font-size: 13px;">fees may vary according to university current structure and policy</p>
                                                    <div class="bottom-part">
                                                        <div class="info-meta">
                                                            <ul>
                                                                <li class="user">
                                                                    <i class="fa fa-flag"></i>
                                                                    <span>${item.university_name ? item.university_name.country_name.name : ''}</span>
                                                                    <span>-</span>
                                                                    <span>${item.programType}</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-part">
                                                        <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                        <div class="btn-part">
                                                            <a href="course-details/${item.id ? item.id : ''}">View Details <i class="flaticon-right-arrow"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class=" mt-10">
                                `);
                            });
                            $('#university').append(html);
                            $('.course_data').append(course_data);
                            resolve();
                        }
                    });
                })
            }
            loadData(1);
            function loadData(page) {
                $.ajax({
                    url: `?page=${page}&${getParams()}`,
                    type: 'GET',
                    beforeSend: function() {
                        $('.ajax-load').show();
                    },
                    success: function(response) {
                        $('.ajax-load').hide();
                        lastPage = Math.max(response.data.last_page, response.course_data.last_page);
                        let html = '';
                        let course_data ='';
                        $.each(response.data.data, function(index, item) {
                                var url_param =getParams();
                                html += `
                                 <div class="university-item course-logo">
                                    <div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="${item.university ? item.website : ''}" class="university_logo">
                                                <div class="u-logo">
                                                    <img src="${window.location.origin}/public/${item ? item.logo : ''}" alt="university-logo" class="img-fluid uc-logo">
                                                </div>
                                            </a>
                                            <h5 class="university_name" style="margin-left: 10px; margin-bottom: 0px; margin-top: 5px;">
                                                <a href="${item.university_name ? item.website : ''}">${item ? item.university_name : ''}</a>
                                            </h5>
                                        </div>
                                        <div class="content-part">
                                            <ul class="meta-part" style="flex: 1 1 0%;">
                                                <li class="user meta_item">
                                                    <i class="fa fa-map"></i>
                                                    <span class="info_bold">Location: </span>
                                                    <span class="text_ellipsis">${item.country ? item.country.name : ''} ,${item.city}, ${item ? item.zip : ''}</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-flag"></i>
                                                    <span class="info_bold">Country: </span>
                                                    <span>${item.country ? item.country.name : '' }</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-list"></i>
                                                    <span class="info_bold">University Type: </span>
                                                    <span>${item.university_type ? item.university_type.name : ''}</span>
                                                </li>
                                                <li class="user meta_item">
                                                    <i class="fa fa-tasks"></i>
                                                    <span class="info_bold">Total Program: </span>
                                                    <span><a href="{{ url('view-program-data') }}/${item.id}?${url_param}" class="badge bg-primary">${item.program_count ? item.program_count : '0'} View Programs</a></span>
                                                </li>
                                            </ul>
                                            <div class="bottom-part">
                                                <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                <div class="btn-part">
                                                    <a href="university-details/${item.id ? item.id : ''}">View Details <i class="flaticon-right-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            `;
                        });
                        $.each(response.course_data.data, function(index, item) {
                            $('.course_data').append(`
                                <div class="col-lg-12 col-md-4 col-sm-6 mt-30">
                                    <div class="courses-item course-logo">
                                        <div>
                                            <div class="course_card_logo_sec d-flex gap-5">
                                                <div class="img-part" style="margin: 2px 5px;">
                                                    <a href="{{url('course-details')}}/${item.id}">
                                                        <img src="${window.location.origin}/public/${item.university_name ? item.university_name.logo : ''}" alt="university logo" class="img-thumbnail university_logo">
                                                    </a>
                                                </div>
                                                <div style="flex: 1 1 0%;">
                                                    <h5 class="mb-1">
                                                        <a href="{{url('course-details')}}/${item.id}">${item?.name ?? ''}</a>
                                                    </h5>
                                                    <a href="${item.university_name?.website ?? ''}" style="font-weight: 500; font-size: 14px;">${item.university_name?.university_name ?? ''}</a>
                                                </div>
                                            </div>
                                            <div class="content-part">
                                                <ul class="meta-part">
                                                    <li class="user">
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <span class="info_bold">Level</span>
                                                        <span>${ item.program_level.name}</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">Application Fees</span>
                                                        <span>$${item.application_fee}</span>
                                                    </li>
                                                     <li class="user">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span class="info_bold">Duration</span>
                                                        <span>${item.length}</span>
                                                    </li>
                                                    <li class="user">
                                                        <i class="fa fa-money"></i>
                                                        <span class="info_bold">1st Year Tuition Fees</span>
                                                        <span>A$${item.tution_fee }</span>
                                                    </li>
                                                </ul>
                                                <p class="mb-0" style="font-size: 13px;">fees may vary according to university current structure and policy</p>
                                                <div class="bottom-part">
                                                    <div class="info-meta">
                                                        <ul>
                                                            <li class="user">
                                                                <i class="fa fa-flag"></i>
                                                                <span>${item.university_name ? item.university_name.country_name.name : ''}</span>
                                                                <span>-</span>
                                                                <span>${item.programType}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                 <div class="bottom-part">
                                                    <div class="info-meta" style="flex: 1 1 0%;"></div>
                                                    <div class="btn-part">
                                                        <a href="course-details/${item.id ? item.id : ''}">View Details <i class="flaticon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-10">
                            `);
                        });
                        $('#university').append(html);
                        $('.course_count').html(response.course_data.total);
                        $('.university_count').html(response.data.total);
                        $('.course_data').append(course_data);
                    }
                });
            }
            window.fetchProgramSubLevel = function(id) {
                var checkboxes = document.getElementsByName('program_level[]');
                var selectedProgramLevelOptions = [];
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].checked) {
                        selectedProgramLevelOptions.push(checkboxes[i].value);
                    }
                }
                csrf();
                $.ajax({
                    url: '{{ route('get-program-sublevel') }}',
                    type: 'POST',
                    data: {
                        'program_level_id': selectedProgramLevelOptions
                    },
                    success: function(data) {
                        $('.program-sub-level').empty();
                        if (data.length > 0) {
                            $.each(data, function(index, program_sub_level) {
                                var programSubLevel = <?php echo json_encode($program_sub_level_name); ?>;
                                var programSubLevelIds = programSubLevel.map(function(item) {
                                    return item.id;
                                });
                                var desiredId = program_sub_level.id;
                                var isChecked = programSubLevelIds.includes(desiredId);
                                var checkbox = `
                                            <li>
                                                <label for="random-${index}" class="playlist-name">
                                                    <input id="random-${index}" class="program-sub-level-check" ${isChecked ? 'checked' : ''} data-sublevel-id="${program_sub_level.id}" type="checkbox" value="${program_sub_level.id}" name="program_sub_level[]"> ${program_sub_level.name.toUpperCase()}
                                                </label>
                                            </li>
                                        `;
                                $('.program-sub-level').append(checkbox);
                            });
                        } else {
                            $('.program-sub-level').empty().append(
                                '<li class="nav-item tab-btns"><h4>Not Found</h4></li>');
                        }
                    }
                });
            }
            window.checkAndCall = function() {
                var checkboxes = document.getElementsByName('program_level[]');
                var id = [];
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].checked) {
                        id.push(checkboxes[i].value);
                    }
                }
                fetchProgramSubLevel(id);
            }
            checkAndCall();
            $('#education_level').on('click', function() {
                var selectedOptions = [];
                $.each($("input[name='program_level[]']:checked"), function() {
                    selectedOptions.push($(this).val());
                });
                var programSubLevel = [];
                $.each($("input[name='program_sub_level[]']:checked"), function() {
                    programSubLevel.push($(this).val());
                });
                csrf();
                $.ajax({
                    url: '{{ route('get-education-level-filter') }}',
                    type: 'POST',
                    data: {
                        'program_level_id': selectedOptions,
                        'program_sublevel_id': programSubLevel
                    },
                    success: function(data) {
                        $('#education-level-list').empty();
                        if (data.length > 0) {
                            $.each(data, function(index, education_level) {
                                var educationLevel = <?php echo json_encode($education_level_name); ?>;
                                var educationLevelIds = educationLevel.map(function(
                                    education_level) {
                                    return education_level.id;
                                });
                                var desiredId = education_level.id;
                                var isChecked = educationLevelIds.includes(desiredId);
                                $('#education-level-list').append(`
                            <li>
                                <label for="${education_level.id}-education-level" class="playlist-name">
                                    <input id="${education_level.id}-education-level" ${isChecked ? 'checked' : ''} class="education_level_check" type="checkbox" name="education_level[]" value="${education_level.id}"> ${education_level.name.toUpperCase()} </label>
                            </li>
                        `);
                            });
                        } else {
                            $('#education-level-list').empty().append(
                                '<li><label for="random-1" class="playlist-name"> Not Found</label></li>'
                                );
                        }
                    }
                });
            });

            $('.subdiscipline').on('click', function() {
                program_discipline();
            })
            program_discipline();

            function program_discipline() {
                var selectedOptions = [];
                $.each($("input[name='program_discipline[]']:checked"), function() {
                    selectedOptions.push($(this).val());
                });
                csrf();
                $.ajax({
                    url: '{{ route('program-subdiscipline-data') }}',
                    type: 'POST',
                    data: {
                        'program_displine': selectedOptions,
                    },
                    success: function(data) {
                        $('.program_subdiscipline').empty();
                        if (data.length > 0) {
                            $.each(data, function(index, program_sub_discipline) {
                                var program_sub_discipline_name = <?php echo json_encode($program_sub_discipline_name); ?>;
                                var programDiscipline = program_sub_discipline_name.map(
                                    function(program_sub_discipline_name) {
                                        return program_sub_discipline_name.id;
                                    });
                                var desiredId = program_sub_discipline.id;
                                var isChecked = programDiscipline.includes(desiredId);
                                $('.program_subdiscipline').append(`
                            <li>
                                <label for="${program_sub_discipline.id}-discipline" class="playlist-name">
                                <input id="${program_sub_discipline.id}-discipline" class="program-sub-discipline-checkbox" type="checkbox" ${isChecked ? 'checked' : ''} name="program_sub_discipline[]" value="${program_sub_discipline.id}"> ${program_sub_discipline.name.toUpperCase()} </label>
                            </li>
                        `);
                            });
                        } else {
                            $('.program_subdiscipline').empty().append(
                                '<li><label for="random-1" class="playlist-name"> Not Found</label></li>'
                                );
                        }

                    }
                });
            }
            $('.other_exam').on('click', function() {
                other_exam();
            })
            other_exam();

            function other_exam() {
                var checkboxes = document.getElementsByName('program_level[]');
                var selectedProgramLevelOptions = [];
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].checked) {
                        selectedProgramLevelOptions.push(checkboxes[i].value);
                    }
                }
                $.ajax({
                    url: "{{ route('fetch-other-exam-data') }}",
                    type: "POST",
                    data: {
                        _token: '{{ csrf_token() }}',
                        program_id: selectedProgramLevelOptions
                    },
                    success: function(response) {
                        $('.other_exam_show').empty();
                        $.each(response, function(index, value) {
                            var other_exam_name = <?php echo json_encode($other_exam_name); ?>;
                            var otherExam = other_exam_name.map(function(other_exam_name) {
                                return other_exam_name.id;
                            });
                            var desiredId = value.id;
                            var isChecked = otherExam.includes(desiredId);
                            var tab_element = `<li>
                                            <label for="${value.id}-other_exam" class="playlist-name">
                                                <input id="${value.id}-other_exam" ${isChecked ? 'checked' : ''} class="other_exam_check" type="checkbox" name="other_exam[]" value="${value.id}"> ${value.name.toUpperCase()} </label>
                                        </li>`;
                            $('.other_exam_show').append(tab_element);
                        });
                    }
                });
            }

            // function makeAjaxRequest(page = 1, selectedProgramLevelOptions, programSubLevel, education_level,
            //     program_discipline, programSubDiscipline, other_exam, country, intake, end_profiency_level,
            //     schlorship, tution_fees) {
            //     csrf();
            //     $.ajax({
            //                 url: '{{ route('get-university-course') }}',
            //                 method: 'POST',
            //                 data: {
            //                     program_level_id: selectedProgramLevelOptions,
            //                     program_sublevel_id: programSubLevel,
            //                     education_level: education_level,
            //                     program_discipline: program_discipline,
            //                     program_sub_discipline: programSubDiscipline,
            //                     other_exam: other_exam,
            //                     country: country,
            //                     intake: intake,
            //                     end_profiency_level: end_profiency_level,
            //                     schlorship: schlorship,
            //                     tution_fees: tution_fees,
            //                     page: page
            //                 },
            //                 success: function(response) {
            //                     $('.university').empty();
            //                     $.each(response.university, function(index, item) {
            //                         $('.university').append(`
            //           <h2>university Data ${item.id}</h2>
            //         `);
            //                     });
            //                     $('.course_data').empty();
            //                     $.each(response.course.data, function(index, item) {
            //                         $('.course_data').append(`
            //                             <div class="courses-item course-logo">
            //                                 <div>
            //                                     <div class="d-flex">
            //                                         <a href="${item.university ? item.university_name.website : ''}" class="university_logo">
            //                                             <div class="u-logo">
            //                                                 <img src="${window.location.origin}/${item.university ? item.university_name.logo : ''}" alt="${item.university ? item.university_name.logo : ''}" class="img-fluid uc-logo">
            //                                             </div>
            //                                         </a>
            //                                         <h5 class="university_name" style="margin-left: 10px; margin-bottom: 0px; margin-top: 5px;">
            //                                             <a href="${item.university_name ? item.university_name.website : ''}">${item.university ? item.university_name.name : ''}</a>
            //                                         </h5>
            //                                     </div>
            //                                     <div class="content-part">
            //                                         <ul class="meta-part" style="flex: 1 1 0%;">
            //                                             <li class="user meta_item">

            //                                                 <i class="fa fa-map"></i>
            //                                                 <span class="info_bold">Location: </span>
            //                                                 <span class="text_ellipsis">${item.university_name ? item.university_name.logo : ''} ${item.university_name ? item.university_name.zip : ''}</span>
            //                                             </li>
            //                                             <li class="user meta_item">
            //                                                 <i class="fa fa-flag"></i>
            //                                                 <span class="info_bold">Country: </span>
            //                                                 <span>${item.university_name ? item.university_name.country_name.name : '' }</span>
            //                                             </li>
            //                                             <li class="user meta_item">
            //                                                 <i class="fa fa-list"></i>
            //                                                 <span class="info_bold">University Type: </span>
            //                                                 <span>${item.university_name ? item.university_name.university_type_name.name : ''}</span>
            //                                             </li>
            //                                         </ul>
            //                                         <hr class="mb-10 mt-10">
            //                                         <div class="bottom-part">
            //                                             <div class="info-meta" style="flex: 1 1 0%;"></div>
            //                                             <div class="btn-part">
            //                                                 <a href="${item.university_name ? item.university_name.website : ''}">View Details <i class="flaticon-right-arrow"></i></a>
            //                                             </div>
            //                                         </div>
            //                                     </div>
            //                                 </div>
            //                             </div>
            //                         `);
            //                     });
            //                     var perPage = 100;
            //                     var totalPages = Math.ceil(response.total_university / perPage);
            //                     var paginationLinks = `
            //         <nav aria-label="Page navigation example">
            //             <ul class="pagination">
            //                 <li class="page-item ${response.current_page > 1 ? '' : 'disabled'}">
            //                     <a class="page-link pagination-custom" href="javascript:void(0);" onclick="makeAjaxRequest(${response.current_page - 1}, '${selectedProgramLevelOptions}', '${programSubLevel}', '${education_level}', '${program_discipline}', '${programSubDiscipline}', '${other_exam}', '${country}', '${intake}', '${end_profiency_level}', '${schlorship}', '${tution_fees}')">Previous</a>
            //                 </li>
            //                 ${Array.from({ length: totalPages }, (_, i) => {
            //                     return ` < li class = "page-item ${(i + 1) == response.current_page ? 'active' : ''}" >
            //                         <
            //                         a class = "page-link pagination-custom"
            //                     href = "javascript:void(0);"
            //                     data - page = "${i + 1}"
            //                     onclick =
            //                         "makeAjaxRequest(${i + 1}, '${selectedProgramLevelOptions}', '${programSubLevel}', '${education_level}', '${program_discipline}', '${programSubDiscipline}', '${other_exam}', '${country}', '${intake}', '${end_profiency_level}', '${schlorship}', '${tution_fees}')" >
            //                         $ {
            //                             i + 1
            //                         } < /a> <
            //                         /li>`;
            //             }).join('')
            //     } <
            //     li class = "page-item ${response.current_page < totalPages ? '' : 'disabled'}" >
            //     <
            //     a class = "page-link"
            //         href = "javascript:void(0);"
            //         onclick =
            //             "makeAjaxRequest(${response.current_page + 1}, '${selectedProgramLevelOptions}', '${programSubLevel}', '${education_level}', '${program_discipline}', '${programSubDiscipline}', '${other_exam}', '${country}', '${intake}', '${end_profiency_level}', '${schlorship}', '${tution_fees}')" >
            //             Next < /a> <
            //             /li> <
            //             /ul> <
            //             /nav>
            //         `;

            //         $('#university-pagination-links').html(paginationLinks);
            //         // $('#university-pagination-links').append(response.university.links);
            //     },
            //     error: function(xhr, status, error) {
            //         // Handle error here
            //     }
            // });
        // }



        function collectSelectedOptions(page = 1) {
            var selectedProgramLevelOptions = [];
            $.each($("input[name='program_level[]']:checked"), function(){
                selectedProgramLevelOptions.push($(this).val());
            });
            var programSubLevel1 = [];
            $.each($("input[name='program_sub_level[]']:checked"), function(){
                programSubLevel1.push($(this).val());
            });
            var education_level = [];
            $.each($("input[name='education_level[]']:checked"), function(){
                education_level.push($(this).val());
            });
            var program_discipline = [];
            $.each($("input[name='program_discipline[]']:checked"), function(){
                program_discipline.push($(this).val());
            });
            var programSubDiscipline = [];
            $.each($("input[name='program_sub_discipline[]']:checked"), function(){
                programSubDiscipline.push($(this).val());
            });
            var other_exam = [];
            $.each($("input[name='other_exam[]']:checked"), function(){
                other_exam.push($(this).val());
            });
            var country = [];

            $.each($("input[name='country[]']:checked"), function(){
                country.push($(this).val());
            });
            var intake = [];
            $.each($("input[name='intake[]']:checked"), function(){
                intake.push($(this).val());
            });
            var end_profiency_level = [];
            $.each($("input[name='end_profiency_level[]']:checked"), function(){
                end_profiency_level.push($(this).val());
            });
            var schlorship = [];
            $.each($("input[name='schlorship[]']:checked"), function(){
                schlorship.push($(this).val());
            });
            var tution_fees = [];
            $.each($("input[name='tution_fees[]']:checked"), function(){
                tution_fees.push($(this).val());
            });
            // makeAjaxRequest(page,selectedProgramLevelOptions, programSubLevel1,education_level,program_discipline, programSubDiscipline,other_exam,country,intake,end_profiency_level,schlorship,tution_fees);
        }
        $('.country-checkbox').on('click', function() {
            var itemName = $(this).closest('label').text().trim();
            var checkedCountries = $("input[name='country[]']:checked").map(function() {
                return this.value;
            }).get().join(',');
            var checkedCountriesName = $("input[name='country[]']:checked").map(function() {
                return $(this).closest('label').text().trim();
            }).get().join(',');
            var url = window.location.origin + window.location.pathname;
            if(window.location.search){
                var params = new URLSearchParams(window.location.search);
                params.delete('country');
                if (checkedCountries) {
                    params.append('country', checkedCountries);
                }
                url += '?' + params.toString();
            } else {
                if (checkedCountries) {
                    url += '?country=' + checkedCountries;
                }
            }
            window.history.pushState(null, '', url);
            $('#university').empty();
            $('.course_data').empty();
            loadData(1);
            $('.country_name').empty();
            if (checkedCountries) {
                var countryNames = checkedCountriesName.split(',');
                countryNames.forEach(function(countryName) {
                    $('.country_name').append(`<span class="badge bg-primary">${countryName}</span>`);
                });
            }
        });
        $('.program_level_value').on('click', function() {
            var itemName = $(this).closest('label').text().trim();
            var program_level = $("input[name='program_level[]']:checked").map(function(){
                return this.value;
            }).get().join(',');
            var program_level_name = $("input[name='program_level[]']:checked").map(function(){
                return $(this).closest('label').text().trim();
            }).get().join(',');
            var url = window.location.origin + window.location.pathname;
            if(window.location.search){
                var params = new URLSearchParams(window.location.search);
                params.delete('program_level');
                if (program_level) {
                    params.append('program_level', program_level);
                }
                url += '?' + params.toString();
            } else {
                if (program_level) {
                    url += '?program_level=' + program_level;
                }
            }
            window.history.pushState(null, '', url);
            $('#university').empty();
            $('.course_data').empty();
            loadData(1);
            $('.program_level_name').empty();
            if (program_level) {
                var programLevel = program_level_name.split(',');
                programLevel.forEach(function(programlevel) {
                    $('.program_level_name').append(`<span class="badge bg-primary">${programlevel}</span>`);
                });
            }
        });
        $(document).on('click', '.program-sub-level-check', function() {
            var itemName = $(this).closest('label').text().trim();
            var program_sub_level = $("input[name='program_sub_level[]']:checked").map(function(){
                return this.value;
            }).get().join(',');
            var program_sub_level_name = $("input[name='program_sub_level[]']:checked").map(function(){
                return $(this).closest('label').text().trim();
            }).get().join(',');
            var url = window.location.origin + window.location.pathname;
            if(window.location.search){
                var params = new URLSearchParams(window.location.search);
                params.delete('program_sub_level');
                if (program_sub_level) {
                    params.append('program_sub_level', program_sub_level);
                }
                url += '?' + params.toString();
            } else {
                if (program_sub_level) {
                    url += '?program_sub_level=' + program_sub_level;
                }
            }
            window.history.pushState(null, '', url);
            $('#university').empty();
            $('.course_data').empty();
            loadData(1);
            $('.program_sub_level_name').empty();
            if (program_sub_level) {
                var programSubLevel = program_sub_level_name.split(',');
                programSubLevel.forEach(function(programsublevel) {
                    $('.program_sub_level_name').append(`<span class="badge bg-primary">${programsublevel}</span>`);
                });
            }
        });
        $(document).on('click', '.education_level_check', function() {
            var itemName = $(this).closest('label').text().trim();
            var education_level = $("input[name='education_level[]']:checked").map(function(){
                return this.value;
            }).get().join(',');
            var education_level_name = $("input[name='education_level[]']:checked").map(function(){
                return $(this).closest('label').text().trim();
            }).get().join(',');
            var url = window.location.origin + window.location.pathname;
            if(window.location.search){
                var params = new URLSearchParams(window.location.search);
                params.delete('education_level');
                if (education_level) {
                    params.append('education_level', education_level);
                }
                url += '?' + params.toString();
            } else {
                if (education_level) {
                    url += '?education_level=' + education_level;
                }
            }
            window.history.pushState(null, '', url);
            $('#university').empty();
            $('.course_data').empty();
            loadData(1);
            $('.education_level_name').empty();
            if (education_level) {
                console.log(education_level_name);
                var educationlevel = education_level_name.split(',');
                educationlevel.forEach(function(education) {
                    $('.education_level_name').append(`<span class="badge bg-primary">${education}</span>`);
                });
            }
        });
        $('.intake-name-data').on('click', function() {
            var itemName = $(this).closest('label').text().trim();
            var intake_name = $("input[name='intake[]']:checked").map(function(){
                return this.value;
            }).get().join(',');
            var intake = $("input[name='intake[]']:checked").map(function(){
                return $(this).closest('label').text().trim();
            }).get().join(',');
            var url = window.location.origin + window.location.pathname;
            if(window.location.search){
                var params = new URLSearchParams(window.location.search);
                params.delete('intake');
                if (intake_name) {
                    params.append('intake', intake_name);
                }
                url += '?' + params.toString();
            } else {
                if (intake_name) {
                    url += '?intake=' + intake_name;
                }
            }
            window.history.pushState(null, '', url);
            $('#university').empty();
            $('.course_data').empty();
            loadData(1);
            $('.intake_name').empty();
            if (intake_name) {
                var intake_data = intake.split(',');
                intake_data.forEach(function(intake) {
                    $('.intake_name').append(`<span class="badge bg-primary">${intake}</span>`);
                });
            }
        });
        $('.program_discipline_checkbox').on('click', function() {
            var itemName = $(this).closest('label').text().trim();
            var program_displine = $("input[name='program_discipline[]']:checked").map(function(){
                return this.value;
            }).get().join(',');
            var program_displine_name = $("input[name='program_discipline[]']:checked").map(function(){
                return $(this).closest('label').text().trim();
            }).get().join(',');
            var url = window.location.origin + window.location.pathname;
            if(window.location.search){
                var params = new URLSearchParams(window.location.search);
                params.delete('program_discipline');
                if (program_displine) {
                    params.append('program_discipline', program_displine);
                }
                url += '?' + params.toString();
            } else {
                if (program_displine) {
                    url += '?program_discipline=' + program_displine;
                }
            }
            window.history.pushState(null, '', url);
            $('.program_discipline_name').empty();
            $('#university').empty();
            $('.course_data').empty();
            loadData(1);
            if (program_displine) {
                var program = program_displine_name.split(',');
                program.forEach(function(data) {
                    $('.program_discipline_name').append(`<span class="badge bg-primary">${data}</span>`);
                });
            }
        });
        $(document).on('click', '.program-sub-discipline-checkbox', function() {
            var itemName = $(this).closest('label').text().trim();
            var program_subdispline = $("input[name='program_sub_discipline[]']:checked").map(function(){
                return this.value;
            }).get().join(',');
            var program_subdispline_name = $("input[name='program_sub_discipline[]']:checked").map(function(){
                return $(this).closest('label').text().trim();
            }).get().join(',');
            var url = window.location.origin + window.location.pathname;
            if(window.location.search){
                var params = new URLSearchParams(window.location.search);
                params.delete('program_subdispline');
                if (program_subdispline) {
                    params.append('program_subdispline', program_subdispline);
                }
                url += '?' + params.toString();
            } else {
                if (program_subdispline) {
                    url += '?program_subdispline=' + program_subdispline;
                }
            }
            window.history.pushState(null, '', url);
            $('.program_sub_discipline_name').empty();
            $('#university').empty();
            $('.course_data').empty();
            loadData(1);
            if (program_subdispline) {
                var subdispline = program_subdispline_name.split(',');
                subdispline.forEach(function(data) {
                    $('.program_sub_discipline_name').append(`<span class="badge bg-primary">${data}</span>`);
                });
            }
        });
        $(document).on('click', '.eng-pro', function() {
            var itemName = $(this).closest('label').text().trim();
            var eng_proficiency_level = $("input[name='end_profiency_level[]']:checked").map(function(){
                return this.value;
            }).get().join(',');
            var eng_proficiency_level_name = $("input[name='end_profiency_level[]']:checked").map(function(){
                return $(this).closest('label').text().trim();
            }).get().join(',');
            var url = window.location.origin + window.location.pathname;
            if(window.location.search){
                var params = new URLSearchParams(window.location.search);
                params.delete('eng_proficiency_level');
                if (eng_proficiency_level) {
                    params.append('eng_proficiency_level', eng_proficiency_level);
                }
                url += '?' + params.toString();
            } else {
                if (eng_proficiency_level) {
                    url += '?eng_proficiency_level=' + eng_proficiency_level;
                }
            }
            window.history.pushState(null, '', url);
            $('.eng_proficiency_level_name').empty();
            $('#university').empty();
            $('.course_data').empty();
            loadData(1);
            if (eng_proficiency_level) {
                var eng_prof = eng_proficiency_level_name.split(',');
                eng_prof.forEach(function(data) {
                    $('.eng_proficiency_level_name').append(`<span class="badge bg-primary">${data}</span>`);
                });
            }
        });
        $(document).on('click', '.other_exam_check', function() {
            var itemName = $(this).closest('label').text().trim();
            var other_exam = $("input[name='other_exam[]']:checked").map(function(){
                return this.value;
            }).get().join(',');
            var other_exam_name = $("input[name='other_exam[]']:checked").map(function(){
                return $(this).closest('label').text().trim();
            }).get().join(',');
            var url = window.location.origin + window.location.pathname;
            if(window.location.search){
                var params = new URLSearchParams(window.location.search);
                params.delete('other_exam');
                if (other_exam) {
                    params.append('other_exam', other_exam);
                }
                url += '?' + params.toString();
            } else {
                if (other_exam) {
                    url += '?other_exam=' + other_exam;
                }
            }
            window.history.pushState(null, '', url);
            $('#university').empty();
            $('.course_data').empty();
            $('.other_exam_name').empty();
            loadData(1);
            if (other_exam) {
                var other = other_exam_name.split(',');
                other.forEach(function(data) {
                    $('.other_exam_name').append(`<span class="badge bg-primary">${data}</span>`);
                });
            }
        });
    });
</script>
@endsection
