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
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="profile-info">
                            <form action="{{route('admin.profile.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex align-items-center mb-30">
                                    <div class="profile-image">
                                        <img src="{{asset('admin_files/assets/images/profile/profile-1.png')}}" alt="" />
                                        <div class="update-image">
                                            <input type="file" name="picture" id="picture" />
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
                                    <input type="text" name="name" placeholder="Tural" value="{{old('name')}}" />
                                    @if ($errors->has('name'))
                                        <div>
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="input-style-1">
                                    <label>Surname</label>
                                    <input type="text" name="surname" placeholder="Babirov" value="{{old('surname')}}" />
                                    @if ($errors->has('surname'))
                                        <div>
                                            <span class="text-danger">{{ $errors->first('surname') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="input-style-1">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="admin@example.com" value="{{old('email')}}" />
                                    @if ($errors->has('email'))
                                        <div>
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="input-style-1">
                                    <label>Password</label>
                                    <input type="password" name="password" />
                                    @if ($errors->has('password'))
                                        <div>
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <input type="submit" class="btn btn-success" value="Add Profile" />
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
    {{--<script src="{{asset('admin_files/')}}{{ asset('js/index.js') }}"></script>--}}
@endsection
