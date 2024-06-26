@extends('admin.layouts.layout')

@section('headerCssJs')
    {{--<link rel="stylesheet" href="{{ asset('css/index.css') }}">--}}
@endsection

@section('mainContent')
    <section class="table-components">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card-style settings-card-1 mb-30">
                        <div class="title mb-30 d-flex justify-content-between align-items-center">
                            <h6>Edit Blog Page</h6>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <div class="alert">
                                    <h4 class="alert-heading">Error!</h4>
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
                            <form id="imageUploadForm" action="{{ route('admin.blog.update', ['blog' => $blog->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') <!-- veya @method('PATCH') -->

                                <div class="input-style-1">
                                    <label>Title</label>
                                    <input type="text" name="blogtitle" placeholder="Add blog title here.." value="{{ $blog->title }}" />
                                    @if ($errors->has('blogtitle'))
                                        <div>
                                            <span class="text-danger">{{ $errors->first('blogtitle') }}</span>
                                        </div>
                                    @endif
                                </div>

                                <div class="input-style-1">
                                    <div class="d-flex align-content-end">
                                        @if($blog->images)
                                            @foreach(json_decode($blog->images) as $image)
                                                <img src="{{ $image }}" alt="Resim" class="img-thumbnail" style="max-width: 200px; margin-right: 10px; object-fit: cover; object-position: center">
                                            @endforeach
                                        @endif
                                    </div>
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

                                <div class="card-style mb-30">
                                    <h6 class="mb-25">Blog Text</h6>
                                    <div class="input-style-1">
                                        <label>Message</label>
                                        <textarea placeholder="Message" name="blogtext" rows="5">{{ $blog->text }}</textarea>
                                    </div>

                                    @if ($errors->has('blogtext'))
                                        <div>
                                            <span class="text-danger">{{ $errors->first('blogtext') }}</span>
                                        </div>
                                    @endif
                                </div>

                                <div>
                                    <input type="submit" class="btn btn-success" value="Edit Blog" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

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
