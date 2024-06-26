{{-- Layouts: --}}
@extends('admin.layouts.layout')

{{-- Spesific CSS/JS includes: --}}
@section('headerCssJs')
    {{--<link rel="stylesheet" href="{{ asset('css/index.css') }}">--}}
@endsection


{{-- Main Content Section: --}}
@section('mainContent')
    <!-- ========== Profile Show components start ========== -->
    <section class="table-components">
        <div class="container-fluid">

            <div class="row mt-5">
                <div class="col-lg-12">
                    <!-- start card -->
                    <div class="card-style settings-card-1 mb-30">
                        <div class="title mb-30 d-flex justify-content-between align-items-center">
                            <h6>Create Blog Page</h6>
                        </div>

                        <!-- Eger xeta varsa -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <div class="alert">
                                    <h4 class="alert-heading">Xəta!</h4>
                                    <br>
                                    @foreach ($errors->all() as $error)
                                        <p class="text-medium">
                                            {{ $error }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div class="mt-5"></div>

                        <div class="profile-info">
                            <form id="imageUploadForm" action="{{route('admin.blog.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="input-style-1">
                                    <label>Title</label>
                                    <input type="text" name="blogtitle" placeholder="Add blog title here.." value="{{ old('name') }}" />
                                    @if ($errors->has('blogtitle'))
                                        <div>
                                            <span class="text-danger">{{ $errors->first('blogtitle') }}</span>
                                        </div>
                                    @endif
                                </div>

                                <div class="input-style-1">
                                    <label>Blog images</label>
                                    <input type="file" name="blogimages[]" multiple class="form-control form-control-file">

                                    @if ($errors->has('blogimages'))
                                        <div>
                                            <span class="text-danger">{{ $errors->first('blogimages') }}</span>
                                        </div>
                                    @endif
                                </div>

                                <!-- ======= textarea style start ======= -->
                                <div class="card-style mb-30">
                                    <h6 class="mb-25">Blog Text</h6>
                                    <div class="input-style-1">
                                        <label>Message</label>
                                        <textarea placeholder="Message" name="blogtext" rows="5"></textarea>
                                    </div>
                                    <!-- end textarea -->

                                    @if ($errors->has('blogtext'))
                                        <div>
                                            <span class="text-danger">{{ $errors->first('blogtext') }}</span>
                                        </div>
                                    @endif
                                </div>

                                <div>
                                    <input type="submit" class="btn btn-success" value="Add Blog" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- ========== Profile Show components end ========== -->
@endsection


{{-- Spesific Footer JS includes: --}}
@section('footerJS')
    <script>
        document.querySelector(".picture").addEventListener("change", function(e) {
            var file = e.target.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                var previewImage = document.querySelector(".preview-image");
                previewImage.src = e.target.result;
            }
            reader.readAsDataURL(file);
        });
    </script>
@endsection
