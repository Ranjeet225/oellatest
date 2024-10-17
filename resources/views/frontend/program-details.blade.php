@extends('frontend.layouts.main')
@section('title', "OverseasEducationLane")
@section('content')
<section>
    <div class="coursedetail_title">
        <div class="one-image_com">
            <img src="{{asset($program_data->university_name->banner ?? null)}}" alt="17">
        </div>
        <div class="courses_heading_k text-white">
            <h1 class="fw-semibold">{{$program_data->name ?? null}}
            </h1>
            <p class="text-center fw-bold">{{$program_data->university_name->university_name ?? null}}</p>

        </div>
    </div>
</section>

<!-- first-section background-imgae course end -->

<section>
    <div class="detail_hr_edu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left_article bg-white">
                        <div class="left_heading_h">
                            <h2 class="fw-bold">{{$program_data->name ?? null}}</h2>
                        </div>
                        <div class="all_list_h">
                            <ul>
                                <li class="lectures-feature">
                                    <i class="fa fa-flag"></i>
                                    <span class="label mx-2">Country</span>
                                    <span class="value">{{$program_data->university_name->country_name->name ?? null}}</span>
                                </li>
                                <li class="quizzes-feature">
                                    <i class="fa-fa-flaticon-timer"></i>
                                    <span class="label mx-2">Course Duration</span>
                                    <span class="value">{{$program_data->length ?? null}}-Month</span>
                                </li>
                                <li class="duration-feature">
                                    <i class="fa fa-tag"></i>
                                    <span class="label mx-2">Course Type</span>
                                    <span class="value">{{$program_data->programType ?? null}}</span>
                                </li>
                                <li class="duration-feature">
                                    <i class="fa fa-building"></i>
                                    <span class="label mx-2">Courses Campus</span>
                                    <span class="value">{{$program_data->programCampus ?? null}}</span>
                                </li>
                                <li class="duration-feature">
                                    <i class="fa fa-language"></i>
                                    <span class="label mx-2">Language Specification</span>
                                    @php
                                        $exam_name =implode(',', $exam_text->pluck('name')->toArray());
                                    @endphp
                                    <span class="value">{{$exam_name ?? null}}</span>
                                </li>
                                <li class="duration-feature">
                                    <i class="fa fa-graduation-cap"></i>
                                    <span class="label mx-2">Program Level</span>
                                    <span class="value">{{$program_data->programLevel->name ?? null}}</span>
                                </li>
                                <li class="duration-feature">
                                    <i class="fa fa-graduation-cap"></i>
                                    <span class="label mx-2">Education Required</span>
                                    <span class="text-wrap">-{{$program_data->educationLevelprogram->name ?? null}}</span>
                                </li>
                                <li class="duration-feature">
                                    <i class="fa fa-calendar"></i>
                                    <span class="label mx-2">Admission intake</span>
                                    <span class="value">{{date('F', mktime(0, 0, 0, $program_data->intake ?? null, 10))}}</span>
                                </li>
                                <li class="duration-feature">
                                    <i class="fa fa-trophy"></i>
                                    <span class="label mx-2">Minimum GPA</span>
                                    @php
                                        $grading_scheme = App\Models\GradingScheme::where('id', $program_data->grading_scheme_id ?? null)->pluck('name')->first();
                                    @endphp
                                    <span class="value">({{$program_data->grading_number ?? null}} {{$grading_scheme ?? null}})</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                   <div class="btn-part mb-20">
                        @if(Auth::check())
                            @php
                                $user=Auth::user();
                                @endphp
                            @if($user->hasRole('student'))
                                @php
                                    $student_id=App\Models\Student::where('user_id',$user->id)->select('id')->first();
                                    $student_program_applied = App\Models\PaymentsLink::with('program:name,id,school_id')->where('payment_type_remarks','applied_program')->where('user_id', $user->id)->get();
                                    $university_id = $student_program_applied->pluck('program.school_id')->toArray();
                                @endphp
                                @if(in_array($program_data->school_id,$university_id))
                                    <button class="btn btn-primary">You Can Select One University One Program</button>
                                @else
                                    <a href="{{ route('apply-program-payment', ['student_id' => $student_id->id, 'program_id' => $program_data->id]) }}" class="btn btn-primary">Apply</a>
                                @endif
                            @endif
                        @else
                            <a href="{{route('user-login')}}"  class="btn btn-primary w-100">Login</a>
                        @endif
                </div>
                </div>
                <div class="col-lg-8">
                    <div class="tabing-tab">
                        <div class=" bg-light">
                            <div class="card shadow" ">
                                <!-- <h2 class=" text-center p-3">Card with Tabs</h2> -->
                                <nav>
                                    <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab"
                                            aria-controls="nav-home" aria-selected="true">Home</button>
                                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab"
                                            aria-controls="nav-profile" aria-selected="false">Description</button>
                                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-contact" type="button" role="tab"
                                            aria-controls="nav-contact" aria-selected="false">Extra Notes</button>
                                    </div>
                                </nav>
                                <div class="tab-content  bg-white" id="nav-tabContent">
                                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="tab-f">
                                            <div class="head-4 mb-3">
                                                <h3 class="">Application Charges</h3>
                                            </div>
                                            <div class="table-cl">

                                                    <table class="mb-5">
                                                        <tr>
                                                            <th scope="col">Application Fee</th>
                                                            <th scope="col">Tution Fee</th>
                                                        </tr>
                                                        <tr>
                                                            <td> @if (empty($program_data->application_fee))
                                                                {{'Free'}}
                                                              @else
                                                              {{$program_data->currency ?? null}}  {{$program_data->application_fee ?? null}}
                                                              @endif</td>
                                                            <td>
                                                                {{$program_data->currency ?? null}}
                                                                {{$program_data->tution_fee ?? null}}
                                                            </td>
                                                        </tr>
                                                    </table>
                                            </div>
                                            <div class="head-4 mb-3">
                                                <h3 class="">Application Date</h3>
                                            </div>
                                            <div class="table-cl">

                                                    <table class="mb-5">
                                                        <tr>
                                                            <th scope="col">Application Start Date</th>
                                                            <th scope="col">Application Closing Date</th>
                                                        </tr>
                                                        <tr>
                                                            <td>{{$program_data->application_apply_date ?? null}}</td>
                                                            <td>
                                                                {{$program_data->application_closing_date ?? null}}
                                                            </td>
                                                        </tr>
                                                    </table>
                                            </div>
                                            <div class="head-4 mb-3">
                                                <h3 class="">Exam Test Required</h3>
                                            </div>
                                            @forelse ($exam_text as $exam)
                                            <div class="exam_heading">{{$exam->name ?? null}}</div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">Speaking Score</th>
                                                        <th scope="col">Listening Score</th>
                                                        <th scope="col">Writing Score</th>
                                                        <th scope="col">Reading Score</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <td>{{$exam->speaking_score ?? null}}</td>
                                                        <td>{{$exam->listening_score ?? null}}</td>
                                                        <td>{{$exam->writing_score ?? null}}</td>
                                                        <td>{{$exam->reading_score ?? null}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="sub-left">
                                              {!! $program_data->description !!}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                      <div class="strong-ex">
                                        <h4 class="mb-5">Extra Notes</h4>
                                        <div>{!! $program_data->extra_notes !!}
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

