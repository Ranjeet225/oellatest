@extends('admin.include.app')
@section('main-content')
    <div class="row">
        <!-- Lightbox -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0"> Manage   Feedback Video</h4>
                </div>
                <div class="card-body">
                    <div class="wizard">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" role="tabpanel" id="step1"
                                aria-labelledby="step1-tab">
                                <div class="mb-4">
                                    <h3>
                                        Add   Feedback Video</h3>
                                </div>
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form class="row g-4" action="{{ route('store-feedbackvideo') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12">
                                        <label>Category <span class="text-danger">*</span></label>
                                        <select name="category" class="form-control" required>
                                            <option value="">Select Category</option>
                                            <option value="Students" {{ old('category') == 'Students' ? 'selected' : '' }}>Students</option>
                                            <option value="Recruitment Partners" {{ old('category') == 'Recruitment Partners' ? 'selected' : '' }}>Recruitment Partners</option>
                                            <option value="Partner Institutions" {{ old('category') == 'Partner Institutions' ? 'selected' : '' }}>Partner Institutions</option>
                                        </select>
                                        @error('category')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label>Video <span class="text-danger">*</span> </label>
                                        <input type="file" name="video" class="form-control " accept=".mp4,.mkv,.webm,.avi,.mov" required />
                                        @error('video')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label>Meta Tags  </label>
                                        <input type="text" name="meta_tag" class="form-control " value="{{ old('meta_tag') }}" maxlength="200" required placeholder="Enter Meta Tags " />
                                        @error('meta_tag')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label>Meta Description  </label>
                                        <textarea name="meta_description"  class="form-control" placeholder="Enter Meta Description"  cols="20" rows="5">{{ old('meta_description') }}</textarea>
                                        @error('meta_description')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label>Status<span class="text-danger">*</span></label>
                                        <select name="status" class="form-control" required>
                                            <option value="1">Publish</option>
                                            <option value="0">Unpublish</option>
                                        </select>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12"><button type="submit" class="btn btn-info  py-6">Submit</button>
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

