@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Home Slide Page </h4>

                            <form method="post" action="{{ route('update.slide') }}" enctype="multipart/form-data">@csrf
                                <input type="hidden" name="id" value="{{ $homeSlide->id }}">
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="example-text-input" name="title" type="text" value="{{ $homeSlide->title }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                                    <div class="col-sm-10">
                                        {{-- <input class="form-control" id="example-text-input" name="short_title" type="text" value="{{ $homeSlide->short_title }}"> --}}
                                        <textarea id="elm1" name="short_title">{{ $homeSlide->short_title }}</textarea>
                                    </div>
                                </div>

                                {{-- <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Blog Description </label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="short_title">{{ $homeSlide->short_title }}</textarea>
                                    </div>
                                </div> --}}


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Video URL</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="example-text-input" name="video_url" type="text" value="{{ $homeSlide->video_url }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Slider Image </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="image" name="home_slide" type="file">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img alt="Card image cap" class="avatar-lg rounded" id="showImage"
                                            src="{{ !empty($homeSlide->home_slide) ? url($homeSlide->home_slide) : url('upload/no_image.jpg') }}">
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Slide">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
