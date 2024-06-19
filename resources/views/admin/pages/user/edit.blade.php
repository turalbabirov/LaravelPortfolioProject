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
                            <h6>My Profile</h6>
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
                            <form id="imageUploadForm" action="{{ route('admin.user.update', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex align-items-center mb-30">
                                    <div class="profile-image">
                                        <img class="preview-image" src="{{ $user->picture ? asset('storage/pictures/' . $user->picture) : 'https://static.vecteezy.com/system/resources/previews/006/059/989/non_2x/crossed-camera-icon-avoid-taking-photos-image-is-not-available-illustration-free-vector.jpg' }}" alt="" />
                                        <div class="update-image">
                                            <input type="file" name="picture" id="picture" class="file-input picture" accept="image/*" />
                                            <label for="picture"><i class="lni lni-cloud-upload"></i></label>
                                        </div>
                                    </div>
                                    <div class="profile-meta">
                                        <h5 class="text-bold text-dark mb-10">Upload Profile Picture</h5>
                                        <p class="text-sm text-gray">Click the upload button to personalize your profile picture.</p>
                                    </div>
                                </div>
                                <div class="input-style-1">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Tural" value="{{$user->name}}" />
                                    @if ($errors->has('name'))
                                        <div>
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="input-style-1">
                                    <label>Surname</label>
                                    <input type="text" name="surname" placeholder="Babirov" value="{{$user->surname}}" />
                                    @if ($errors->has('surname'))
                                        <div>
                                            <span class="text-danger">{{ $errors->first('surname') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="input-style-1">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="admin@example.com" value="{{$user->email}}" />
                                    @if ($errors->has('email'))
                                        <div>
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="input-style-1">
                                    <label>Password</label>
                                    <input type="password" name="password" value="{{$user->password}}" />
                                    @if ($errors->has('password'))
                                        <div>
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <input type="submit" class="btn btn-success" value="Update Profile" />
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
