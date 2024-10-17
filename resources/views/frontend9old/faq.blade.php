@extends('frontend.layouts.main')
@section('title', 'frequently asked questions')
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
                        <h1 class="fw-bold mx_rounded text-black">Frequently Asked Questions</h1>
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
            <div class="accordion" id="accordionExample">
            @foreach ($faqs as $faq)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{$faq->id}}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faq->id}}" aria-expanded="false" aria-controls="collapse{{$faq->id}}">
                    {{$faq->faq_question}}
                </button>
                </h2>
                <div id="collapse{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$faq->id}}" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    {!! $faq->faq_answer !!}
                </div>
                </div>
            </div>
            @endforeach
            </div>
            </div>
        </div>
    </div>
</section>
@endsection
