@extends('admin.include.app')
@section('main-content')
<div class="row">
    <!-- Lightbox -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0"> Manage Ads</h4>
            </div>
            <div class="card-body">
                <div class="wizard">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" role="tabpanel" id="step1"
                            aria-labelledby="step1-tab">
                            <div class="mb-4">
                                <h3>
                                    Add Ads</h3>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <form action="{{route('store.ads')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label class="form-label">Enter title</label>
                                            <input type="text" name="title" required maxlength="199" class="form-control"
                                                placeholder="title" >
                                                <span class="text-danger name"></span>
                                        </div>
                                        @error('title')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label class="form-label">Meta Tags</label>
                                            <input type="text" name="meta_tags" required maxlength="199" class="form-control"
                                                placeholder="Meta Tags" >
                                                <span class="text-danger name"></span>
                                        </div>
                                        @error('meta_tags')
                                            {{$message}}
                                        @enderror
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label">Upload Image</label>
                                            <input type="file" name="image"  class="form-control"
                                                placeholder="name" required>
                                                <span class="text-danger name"></span>
                                            @error('images')
                                                {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label class="form-label">Meta Description</label>
                                            <textarea name="meta_description" id="" cols="20" rows="5" placeholder="Meta Description" class="form-control"></textarea>
                                        </div>
                                        @error('meta_description')
                                            {{$message}}
                                        @enderror
                                    </div>

                                </div>
                                <div class="text-center mt-2">
                                    <button  type="submit" class="btn btn-primary w-25 mx-auto">Save</button>
                                </div>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
