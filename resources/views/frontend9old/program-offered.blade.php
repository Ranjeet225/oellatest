@extends('frontend.layouts.main')
@section('title', 'Offered Program')
@section('content')
    <style>
        .pricing-content {
            padding: 0;
            margin: 0 0 25px;
            list-style: none;
            display: inline-block;
            max-height: 176px;
            overflow-y: auto;
            min-width: 100%;
        }
    </style>
    <section>
        <div class="university_title ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-mg-12 col-xs-12 col-sm-12">
                        <div class="university_airplane d-flex justify-content-center ">
                            <!--<img src="{{ asset('frontend/img/gif in blue (1)_1 1.png') }}" alt="gif">-->    
                        </div>
                        <div class="universities_heading text-center">
                            <h1 class="fw-medium mx_rounded text-black"> PIck your program specialization.
</h1>
                        </div>
                    </div>
                    <div class="main_col_design_edu mt-5">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="int_cheating_role border rounded" style="min-height:175px">
                                    <div class="img_ab_cirle position-relative">
                                        <div class="position_cl position-absolute">
                                            <img src="{{ asset('frontend/img/Background 57.png') }}" alt="bc">
                                        </div>
                                    </div>
                                    <div class="sep mx-auto mt-4"></div>
                                    <div class="agriculture_title">
                                        <div class="agri_sub p-2">
                                            <h3 class="fw-bold text-center">Agriculture & Veterinary
                                                Medicine</h3>
                                            <P class="text-center mt-3 fw-medium">Subject Includes</P>
                                            <ul class="pricing-content">
                                                <li>
                                                   <a href="{{url('programs-offered?program_name=Agriculture')}}"><i class="fa fa-angle-double-right"></i>Agriculture</a>
                                                </li>
                                                <li>
                                                   <a href="{{url('programs-offered?program_name=Farm Management')}}"><i class="fa fa-angle-double-right"></i>Farm Management</a>
                                                </li>
                                                <li>
                                                   <a href="{{url('programs-offered?program_name=Horticulture')}}"><i class="fa fa-angle-double-right"></i>Horticulture</a>
                                                </li>
                                                <li>
                                                   <a href="{{url('programs-offered?program_name=Plant and Crop Sciences')}}"><i class="fa fa-angle-double-right"></i>Plant and Crop Sciences</a>
                                                </li>
                                                <li>
                                                   <a href="{{url('programs-offered?program_name=Veterinary Medicine')}}"><i class="fa fa-angle-double-right"></i>Veterinary Medicine</a>
                                                </li>
                                             </ul>
                                        </div>
                                        <div class="circle_img position-relative">
                                            <div class="img_child_img position-absolute left-0 bottom-0">
                                                <img src="{{ asset('frontend/img/Background 56.png') }}" alt="bc">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="int_cheating_role border rounded" style="min-height:175px">
                                    <div class="img_ab_cirle position-relative">
                                        <div class="position_cl position-absolute">
                                            <img src="{{ asset('frontend/img/Background 57.png') }}" alt="bc">
                                        </div>
                                    </div>
                                    <div class="sep mx-auto mt-4"></div>
                                    <div class="agriculture_title">
                                        <div class="agri_sub p-2">
                                            <h3 class="fw-bold text-center">Applied & Pure Sciences</h3>
                                            <P class="text-center mt-3 fw-medium">Subject Includes</P>
                                            <ul class="pricing-content">
                                                <li>
                                                    <a href="{{ url('programs-offered?program_name=Astronomy') }}"><i
                                                            class="fa fa-angle-double-right"></i>Astronomy</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('programs-offered?program_name=Biology') }}"><i
                                                            class="fa fa-angle-double-right"></i>Biology</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ url('programs-offered?program_name=Biomedical Sciences') }}"><i
                                                            class="fa fa-angle-double-right"></i>Biomedical Sciences</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('programs-offered?program_name=Chemistry') }}"><i
                                                            class="fa fa-angle-double-right"></i>Chemistry</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('programs-offered?program_name=Earth Sciences') }}"><i
                                                            class="fa fa-angle-double-right"></i>Earth Sciences</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ url('programs-offered?program_name=Environmental Sciences') }}"><i
                                                            class="fa fa-angle-double-right"></i>Environmental Sciences</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ url('programs-offered?program_name=Food Science &amp; Technology') }}"><i
                                                            class="fa fa-angle-double-right"></i>Food Science &amp;
                                                        Technology</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('programs-offered?program_name=General Sciences') }}"><i
                                                            class="fa fa-angle-double-right"></i>General Sciences</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('programs-offered?program_name=Life Sciences') }}"><i
                                                            class="fa fa-angle-double-right"></i>Life Sciences</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ url('programs-offered?program_name=Materials Sciences') }}"><i
                                                            class="fa fa-angle-double-right"></i>Materials Sciences</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('programs-offered?program_name=Mathematics') }}"><i
                                                            class="fa fa-angle-double-right"></i>Mathematics</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ url('programs-offered?program_name=Physical Geography') }}"><i
                                                            class="fa fa-angle-double-right"></i>Physical Geography</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('programs-offered?program_name=Physics') }}"><i
                                                            class="fa fa-angle-double-right"></i>Physics</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('programs-offered?program_name=Sports Science') }}"><i
                                                            class="fa fa-angle-double-right"></i>Sports Science</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="circle_img position-relative">
                                            <div class="img_child_img position-absolute left-0 bottom-0">
                                                <img src="{{ asset('frontend/img/Background 56.png') }}" alt="bc">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="int_cheating_role border rounded" style="min-height:175px">
                                    <div class="img_ab_cirle position-relative">
                                        <div class="position_cl position-absolute">
                                            <img src="{{ asset('frontend/img/Background 57.png') }}" alt="bc">
                                        </div>
                                    </div>
                                    <div class="sep mx-auto mt-4"></div>
                                    <div class="agriculture_title">
                                        <div class="agri_sub p-2">
                                            <h3 class="fw-bold text-center">Creative Arts & Design</h3>
                                            <P class="text-center mt-3 fw-medium">Subject Includes</P>
                                            <ul class="pricing-content">
                                                <li>
                                                    <a href="{{ url('programs-offered?program_name=Art') }}"><i
                                                            class="fa fa-angle-double-right"></i>Art</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ url('programs-offered?program_name=Art Administration') }}"><i
                                                            class="fa fa-angle-double-right"></i>Art Administration</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('programs-offered?program_name=Crafts') }}"><i
                                                            class="fa fa-angle-double-right"></i>Crafts</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ url('programs-offered?program_name=Fashion and Textile Design') }}"><i
                                                            class="fa fa-angle-double-right"></i>Fashion and Textile
                                                        Design</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('programs-offered?program_name=Graphic Design') }}"><i
                                                            class="fa fa-angle-double-right"></i>Graphic Design</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ url('programs-offered?program_name=Industrial Design') }}"><i
                                                            class="fa fa-angle-double-right"></i>Industrial Design</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('programs-offered?program_name=Interior Design') }}"><i
                                                            class="fa fa-angle-double-right"></i>Interior Design</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('programs-offered?program_name=Music') }}"><i
                                                            class="fa fa-angle-double-right"></i>Music</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ url('programs-offered?program_name=Non-industrial Design') }}"><i
                                                            class="fa fa-angle-double-right"></i>Non-industrial Design</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="{{ url('programs-offered?program_name=Theatre and Drama Studies') }}"><i
                                                            class="fa fa-angle-double-right"></i>Theatre and Drama
                                                        Studies</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="circle_img position-relative">
                                            <div class="img_child_img position-absolute left-0 bottom-0">
                                                <img src="{{ asset('frontend/img/Background 56.png') }}" alt="bc">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main_col_design_edu mt-4">
                                <div class="row">
                                    <div class="col-lg-4 ">
                                        <div class="int_cheating_role border rounded" style="min-height:175px">
                                            <div class="img_ab_cirle position-relative">
                                                <div class="position_cl position-absolute">
                                                    <img src="{{ asset('frontend/img/Background 57.png') }}"
                                                        alt="bc">
                                                </div>
                                            </div>
                                            <div class="sep mx-auto mt-4"></div>
                                            <div class="agriculture_title">
                                                <div class="agri_sub p-2">
                                                    <h3 class="fw-bold text-center">Social Studies & Media</h3>
                                                    <p class="text-center mt-3 fw-medium">Subject Includes</p>
                                                    <ul class="pricing-content">
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Anthropology') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Anthropology</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Economics') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Economics</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Environmental Management') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Environmental
                                                                Management</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Film &amp; Television') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Film &amp;
                                                                Television</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Human Geography') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Human
                                                                Geography</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=International Development') }}"><i
                                                                    class="fa fa-angle-double-right"></i>International
                                                                Development</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=International relations') }}"><i
                                                                    class="fa fa-angle-double-right"></i>International
                                                                relations</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Journalism') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Journalism</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Library Studies') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Library
                                                                Studies</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Linguistics') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Linguistics</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('programs-offered?program_name=Media') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Media</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Photography') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Photography</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('programs-offered?program_name=Politics') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Politics</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Public Administration') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Public
                                                                Administration</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Social Sciences') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Social
                                                                Sciences</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Social Work') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Social Work</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Sociology') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Sociology</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('programs-offered?program_name=Writing') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Writing</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="circle_img position-relative">
                                                    <div class="img_child_img position-absolute left-0 bottom-0">
                                                        <img src="{{ asset('frontend/img/Background 56.png') }}"
                                                            alt="bc">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 ">
                                        <div class="int_cheating_role border rounded" style="min-height:175px">
                                            <div class="img_ab_cirle position-relative">
                                                <div class="position_cl position-absolute">
                                                    <img src="{{ asset('frontend/img/Background 57.png') }}"
                                                        alt="bc">
                                                </div>
                                            </div>
                                            <div class="sep mx-auto mt-4"></div>
                                            <div class="agriculture_title">
                                                <div class="agri_sub p-2">
                                                    <h3 class="fw-bold text-center">Master of Business Administration</h3>
                                                    <p class="text-center mt-3 fw-medium">Subject Includes</p>
                                                    <ul class="pricing-content">
                                                        <i class="fa fa-angle-double-right d-flex align-items-center gap-2"
                                                            aria-hidden="true">
                                                            <li><a href="{{ url('programs-offered?program_name=MBA') }}">All
                                                                    MBA courses</a></li>
                                                        </i>
                                                    </ul>
                                                </div>
                                                <div class="circle_img position-relative">
                                                    <div class="img_child_img position-absolute left-0 bottom-0">
                                                        <img src="{{ asset('frontend/img/Background 56.png') }}"
                                                            alt="bc">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 ">
                                        <div class="int_cheating_role border rounded">
                                            <div class="img_ab_cirle position-relative">
                                                <div class="position_cl position-absolute">
                                                    <img src="{{ asset('frontend/img/Background 57.png') }}"
                                                        alt="bc">
                                                </div>
                                            </div>
                                            <div class="sep mx-auto mt-4"></div>
                                            <div class="agriculture_title">
                                                <div class="agri_sub p-2">
                                                    <h3 class="fw-bold text-center">Architecture & Construction</h3>
                                                    <p class="text-center mt-3 fw-medium">Subject Includes</p>
                                                    <ul class="pricing-content">
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Architecture') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Architecture</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Built Environment') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Built
                                                                Environment</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Construction') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Construction</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Maintenance Services') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Maintenance
                                                                Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('programs-offered?program_name=Planning') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Planning</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Property Management') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Property
                                                                Management</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Surveying') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Surveying</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="circle_img position-relative">
                                                    <div class="img_child_img position-absolute left-0 bottom-0">
                                                        <img src="{{ asset('frontend/img/Background 56.png') }}"
                                                            alt="bc">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main_col_design_edu mt-4">
                                <div class="row">
                                    <div class="col-lg-4 ">
                                        <div class="int_cheating_role border rounded">
                                            <div class="img_ab_cirle position-relative">
                                                <div class="position_cl position-absolute">
                                                    <img src="{{ asset('frontend/img/Background 57.png') }}"
                                                        alt="bc">
                                                </div>
                                            </div>
                                            <div class="sep mx-auto mt-4"></div>
                                            <div class="agriculture_title">
                                                <div class="agri_sub p-2">
                                                    <h3 class="fw-bold text-center">Business & Management</h3>
                                                    <p class="text-center mt-3 fw-medium">Subject Includes</p>
                                                    <ul class="pricing-content">
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Accounting') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Accounting</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Business Studies') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Business
                                                                Studies</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=E-Commerce') }}"><i
                                                                    class="fa fa-angle-double-right"></i>E-Commerce</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Entrepreneurship') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Entrepreneurship</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('programs-offered?program_name=Finance') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Finance</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Human Resource Management') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Human Resource
                                                                Management</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Management') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Management</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Marketing') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Marketing</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Office Administration') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Office
                                                                Administration</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Quality Management') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Quality
                                                                Management</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('programs-offered?program_name=Retail') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Retail</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Transportation &amp; Logistics') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Transportation
                                                                &amp; Logistics</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="circle_img position-relative">
                                                    <div class="img_child_img position-absolute left-0 bottom-0">
                                                        <img src="{{ asset('frontend/img/Background 56.png') }}"
                                                            alt="bc">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 ">
                                        <div class="int_cheating_role border rounded">
                                            <div class="img_ab_cirle position-relative">
                                                <div class="position_cl position-absolute">
                                                    <img src="{{ asset('frontend/img/Background 57.png') }}"
                                                        alt="bc">
                                                </div>
                                            </div>
                                            <div class="sep mx-auto mt-4"></div>
                                            <div class="agriculture_title">
                                                <div class="agri_sub p-2">
                                                    <h3 class="fw-bold text-center">Humanities</h3>
                                                    <p class="text-center mt-3 fw-medium">Subject Includes</p>
                                                    <ul class="pricing-content">
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Archaeology') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Archaeology</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('programs-offered?program_name=Classics') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Classics</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Cultural Studies') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Cultural
                                                                Studies</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=English Studies') }}"><i
                                                                    class="fa fa-angle-double-right"></i>English
                                                                Studies</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=General Studies') }}"><i
                                                                    class="fa fa-angle-double-right"></i>General
                                                                Studies</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('programs-offered?program_name=History') }}"><i
                                                                    class="fa fa-angle-double-right"></i>History</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Languages') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Languages</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Literature') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Literature</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Museum Studies') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Museum Studies</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Philosophy') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Philosophy</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Regional Studies') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Regional
                                                                Studies</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="circle_img position-relative">
                                                    <div class="img_child_img position-absolute left-0 bottom-0">
                                                        <img src="{{ asset('frontend/img/Background 56.png') }}"
                                                            alt="bc">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 ">
                                        <div class="int_cheating_role border rounded">
                                            <div class="img_ab_cirle position-relative">
                                                <div class="position_cl position-absolute">
                                                    <img src="{{ asset('frontend/img/Background 57.png') }}"
                                                        alt="bc">
                                                </div>
                                            </div>
                                            <div class="sep mx-auto mt-4"></div>
                                            <div class="agriculture_title">
                                                <div class="agri_sub p-2">
                                                    <h3 class="fw-bold text-center">Health & Medicine</h3>
                                                    <p class="text-center mt-3 fw-medium">Subject Includes</p>
                                                    <ul class="pricing-content">
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Complementary Health') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Complementary
                                                                Health</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Counselling') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Counselling</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('programs-offered?program_name=Dentisry') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Dentisry</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Health Studies') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Health Studies</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Health and Safety') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Health and
                                                                Safety</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Medicine') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Medicine</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Midwifery') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Midwifery</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('programs-offered?program_name=Nursing') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Nursing</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Nutrition and Health') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Nutrition and
                                                                Health</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Ophthalmology') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Ophthalmology</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Pharmacology') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Pharmacology</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Physiology') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Physiology</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Physiotherapy') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Physiotherapy</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Psychology') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Psychology</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ url('programs-offered?program_name=Public Health') }}"><i
                                                                    class="fa fa-angle-double-right"></i>Public Health</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="circle_img position-relative">
                                                    <div class="img_child_img position-absolute left-0 bottom-0">
                                                        <img src="{{ asset('frontend/img/Background 56.png') }}"
                                                            alt="bc">
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

    <section>
        <!--<div class="banner_iamge mt-5">-->
        <!--</div>-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 ">
                    <div class="int_cheating_role border rounded">
                        <div class="img_ab_cirle position-relative">
                            <div class="position_cl position-absolute">
                                <img src="{{ asset('frontend/img/Background 57.png') }}" alt="bc">
                            </div>
                        </div>
                        <div class="sep mx-auto mt-4"></div>
                        <div class="agriculture_title">
                            <div class="agri_sub p-2">
                                <h3 class="fw-bold text-center">Law</h3>
                                <p class="text-center mt-3 fw-medium">Subject Includes</p>
                                <ul class="pricing-content">
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Civil Law') }}"><i
                                                class="fa fa-angle-double-right"></i>Civil Law</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Criminal Law') }}"><i
                                                class="fa fa-angle-double-right"></i>Criminal Law</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=International Law') }}"><i
                                                class="fa fa-angle-double-right"></i>International Law</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Legal Advice') }}"><i
                                                class="fa fa-angle-double-right"></i>Legal Advice</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Legal Studies') }}"><i
                                                class="fa fa-angle-double-right"></i>Legal Studies</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Public Law') }}"><i
                                                class="fa fa-angle-double-right"></i>Public Law</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="circle_img position-relative">
                                <div class="img_child_img position-absolute left-0 bottom-0">
                                    <img src="{{ asset('frontend/img/Background 56.png') }}" alt="bc">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="int_cheating_role border rounded">
                        <div class="img_ab_cirle position-relative">
                            <div class="position_cl position-absolute">
                                <img src="{{ asset('frontend/img/Background 57.png') }}" alt="bc">
                            </div>
                        </div>
                        <div class="sep mx-auto mt-4"></div>
                        <div class="agriculture_title">
                            <div class="agri_sub p-2">
                                <h3 class="fw-bold text-center">Education & Training</h3>
                                <p class="text-center mt-3 fw-medium">Subject Includes</p>
                                <ul class="pricing-content">
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Adult Education') }}"><i
                                                class="fa fa-angle-double-right"></i>Adult Education</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=CPD') }}"><i
                                                class="fa fa-angle-double-right"></i>CPD</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Career Advice') }}"><i
                                                class="fa fa-angle-double-right"></i>Career Advice</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Childhood Education') }}"><i
                                                class="fa fa-angle-double-right"></i>Childhood Education</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Coaching') }}"><i
                                                class="fa fa-angle-double-right"></i>Coaching</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Education Learning') }}"><i
                                                class="fa fa-angle-double-right"></i>Education Learning</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Education Management') }}"><i
                                                class="fa fa-angle-double-right"></i>Education Management</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Education Research') }}"><i
                                                class="fa fa-angle-double-right"></i>Education Research</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Educational Psychology') }}"><i
                                                class="fa fa-angle-double-right"></i>Educational Psychology</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Pedagogy') }}"><i
                                                class="fa fa-angle-double-right"></i>Pedagogy</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Special Education') }}"><i
                                                class="fa fa-angle-double-right"></i>Special Education</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Specialised Teaching') }}"><i
                                                class="fa fa-angle-double-right"></i>Specialised Teaching</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Teacher Training/PGCE') }}"><i
                                                class="fa fa-angle-double-right"></i>Teacher Training/PGCE</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="circle_img position-relative">
                                <div class="img_child_img position-absolute left-0 bottom-0">
                                    <img src="{{ asset('frontend/img/Background 56.png') }}" alt="bc">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="int_cheating_role border rounded">
                        <div class="img_ab_cirle position-relative">
                            <div class="position_cl position-absolute">
                                <img src="{{ asset('frontend/img/Background 57.png') }}" alt="bc">
                            </div>
                        </div>
                        <div class="sep mx-auto mt-4"></div>
                        <div class="agriculture_title">
                            <div class="agri_sub p-2">
                                <h3 class="fw-bold text-center">Personal Care & Fitness</h3>
                                <p class="text-center mt-3 fw-medium">Subject Includes</p>
                                <ul class="pricing-content">
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Aromatherapy') }}"><i
                                                class="fa fa-angle-double-right"></i>Aromatherapy</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Beauty Therapy') }}"><i
                                                class="fa fa-angle-double-right"></i>Beauty Therapy</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Hairdressing') }}"><i
                                                class="fa fa-angle-double-right"></i>Hairdressing</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Health and Fitness') }}"><i
                                                class="fa fa-angle-double-right"></i>Health and Fitness</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Massage') }}"><i
                                                class="fa fa-angle-double-right"></i>Massage</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Reflexology') }}"><i
                                                class="fa fa-angle-double-right"></i>Reflexology</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Therapeutic') }}"><i
                                                class="fa fa-angle-double-right"></i>Therapeutic</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="circle_img position-relative">
                                <div class="img_child_img position-absolute left-0 bottom-0">
                                    <img src="{{ asset('frontend/img/Background 56.png') }}" alt="bc">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 ">
                    <div class="int_cheating_role border rounded">
                        <div class="img_ab_cirle position-relative">
                            <div class="position_cl position-absolute">
                                <img src="{{ asset('frontend/img/Background 57.png') }}" alt="bc">
                            </div>
                        </div>
                        <div class="sep mx-auto mt-4"></div>
                        <div class="agriculture_title">
                            <div class="agri_sub p-2">
                                <h3 class="fw-bold text-center">Travel & Hospitality
                                </h3>
                                <p class="text-center mt-3 fw-medium">Subject Includes</p>
                                <ul class="pricing-content">
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Aviation') }}"><i
                                                class="fa fa-angle-double-right"></i>Aviation</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Catering') }}"><i
                                                class="fa fa-angle-double-right"></i>Catering</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Food &amp; Drink Production') }}"><i
                                                class="fa fa-angle-double-right"></i>Food &amp; Drink Production</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Hospitality') }}"><i
                                                class="fa fa-angle-double-right"></i>Hospitality</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Hotel Management') }}"><i
                                                class="fa fa-angle-double-right"></i>Hotel Management</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Leisure Management') }}"><i
                                                class="fa fa-angle-double-right"></i>Leisure Management</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Travel and Tourism') }}"><i
                                                class="fa fa-angle-double-right"></i>Travel and Tourism</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="circle_img position-relative">
                                <div class="img_child_img position-absolute left-0 bottom-0">
                                    <img src="{{ asset('frontend/img/Background 56.png') }}" alt="bc">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="int_cheating_role border rounded">
                        <div class="img_ab_cirle position-relative">
                            <div class="position_cl position-absolute">
                                <img src="{{ asset('frontend/img/Background 57.png') }}" alt="bc">
                            </div>
                        </div>
                        <div class="sep mx-auto mt-4"></div>
                        <div class="agriculture_title">
                            <div class="agri_sub p-2">
                                <h3 class="fw-bold text-center">Computer Science & IT</h3>
                                <p class="text-center mt-3 fw-medium">Subject Includes</p>
                                <ul class="pricing-content">
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Computer Science') }}"><i
                                                class="fa fa-angle-double-right"></i>Computer Science</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Computing') }}"><i
                                                class="fa fa-angle-double-right"></i>Computing</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=IT') }}"><i
                                                class="fa fa-angle-double-right"></i>IT</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Multimedia') }}"><i
                                                class="fa fa-angle-double-right"></i>Multimedia</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Software') }}"><i
                                                class="fa fa-angle-double-right"></i>Software</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="circle_img position-relative">
                                <div class="img_child_img position-absolute left-0 bottom-0">
                                    <img src="{{ asset('frontend/img/Background 56.png') }}" alt="bc">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="int_cheating_role border rounded">
                        <div class="img_ab_cirle position-relative">
                            <div class="position_cl position-absolute">
                                <img src="{{ asset('frontend/img/Background 57.png') }}" alt="bc">
                            </div>
                        </div>
                        <div class="sep mx-auto mt-4"></div>
                        <div class="agriculture_title">
                            <div class="agri_sub p-2">
                                <h3 class="fw-bold text-center">Engineering</h3>
                                <p class="text-center mt-3 fw-medium">Subject Includes</p>
                                <ul class="pricing-content">
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Aerospace Engineering') }}"><i
                                                class="fa fa-angle-double-right"></i>Aerospace Engineering</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Biomedical Engineering') }}"><i
                                                class="fa fa-angle-double-right"></i>Biomedical Engineering</a>
                                    </li>
                                    <li>
                                        <a
                                            href="{{ url('programs-offered?program_name=Chemical and Materials Engineering') }}"><i
                                                class="fa fa-angle-double-right"></i>Chemical and Materials Engineering</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Civil Engineering') }}"><i
                                                class="fa fa-angle-double-right"></i>Civil Engineering</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Electrical Engineering') }}"><i
                                                class="fa fa-angle-double-right"></i>Electrical Engineering</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Electronic Engineering') }}"><i
                                                class="fa fa-angle-double-right"></i>Electronic Engineering</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Environmental Engineering') }}"><i
                                                class="fa fa-angle-double-right"></i>Environmental Engineering</a>
                                    </li>
                                    <li>
                                        <a
                                            href="{{ url('programs-offered?program_name=General Engineering and Technology') }}"><i
                                                class="fa fa-angle-double-right"></i>General Engineering and Technology</a>
                                    </li>
                                    <li>
                                        <a
                                            href="{{ url('programs-offered?program_name=Manufacturing &amp; Production') }}"><i
                                                class="fa fa-angle-double-right"></i>Manufacturing &amp; Production</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Marine Engineering') }}"><i
                                                class="fa fa-angle-double-right"></i>Marine Engineering</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Mechanical Engineering') }}"><i
                                                class="fa fa-angle-double-right"></i>Mechanical Engineering</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Metallurgy') }}"><i
                                                class="fa fa-angle-double-right"></i>Metallurgy</a>
                                    </li>
                                    <li>
                                        <a
                                            href="{{ url('programs-offered?program_name=Mining and Oil &amp; Gas Operations') }}"><i
                                                class="fa fa-angle-double-right"></i>Mining and Oil &amp; Gas
                                            Operations</a>
                                    </li>
                                    <li>
                                        <a
                                            href="{{ url('programs-offered?program_name=Power &amp; Energy Engineering') }}"><i
                                                class="fa fa-angle-double-right"></i>Power &amp; Energy Engineering</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Quality Control') }}"><i
                                                class="fa fa-angle-double-right"></i>Quality Control</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Structural Engineering') }}"><i
                                                class="fa fa-angle-double-right"></i>Structural Engineering</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Telecommunications') }}"><i
                                                class="fa fa-angle-double-right"></i>Telecommunications</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('programs-offered?program_name=Vehicle Engineering') }}"><i
                                                class="fa fa-angle-double-right"></i>Vehicle Engineering</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="circle_img position-relative">
                                <div class="img_child_img position-absolute left-0 bottom-0">
                                    <img src="{{ asset('frontend/img/Background 56.png') }}" alt="bc">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section>-->
    <!--    <div class="overseas_cast_edu">-->
    <!--        <div class="container">-->
    <!--            <div class="values_plus mt-5 text-center">-->
    <!--                <P class="fw-medium">Our Values</P>-->
    <!--                <h2 class="fw-bold">At Overseas Education Lane, we commit to:</h2>-->
    <!--            </div>-->
    <!--            <div class="all_overses_edu mt-5 d-flex justify-content-between">-->
    <!--                <div class="all_img_education_int mt-5">-->
    <!--                    <img src="{{ asset('frontend/img/Background.png') }}" alt="bc">-->
    <!--                </div>-->
    <!--                <div class="all_img_education_int mt-4">-->
    <!--                    <img src="{{ asset('frontend/img/Background (1).png') }}" alt="bc">-->
    <!--                </div>-->
    <!--                <div class="all_img_education_int">-->
    <!--                    <img src="{{ asset('frontend/img/Background (2).png') }}" alt="bc">-->
    <!--                </div>-->
    <!--                <div class="all_img_education_int mt-4">-->
    <!--                    <img src="{{ asset('frontend/img/Background (3).png') }}" alt="bc">-->
    <!--                </div>-->
    <!--                <div class="all_img_education_int mt-5">-->
    <!--                    <img src="{{ asset('frontend/img/Background (4).png') }}" alt="bc">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

@endsection
