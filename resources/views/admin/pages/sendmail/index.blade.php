{{-- Layouts: --}}
@extends('admin.layouts.layout')

{{-- Spesific CSS/JS includes: --}}
@section('headerCssJs')
    {{--<link rel="stylesheet" href="{{ asset('css/index.css') }}">--}}
@endsection


{{-- Main Content Section: --}}
@section('mainContent')
    <!-- ========== section start ========== -->
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif


    <div class="form-elements-wrapper mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- input style start -->
                <div class="card-style mb-30">
                    <form method="POST" action="{{ route('admin.sendmail.store') }}">
                        @csrf

                        <h6 class="mb-25">Send to mail anyone</h6>
                        <div class="input-style-3">
                            <input type="text" id="name" name="name" required placeholder="Name" />
                            <span class="icon"><i class="lni lni-user"></i></span>
                        </div>
                        <!-- end input -->
                        <div class="input-style-3">
                            <input type="text" id="surname" name="surname" required placeholder="Surname" />
                            <span class="icon"><i class="lni lni-users"></i></span>
                        </div>
                        <!-- end input -->
                        <div class="input-style-3">
                            <input type="email" id="email" name="email" required placeholder="Email" />
                            <span class="icon"><i class="lni lni-notepad"></i></span>
                        </div>
                        <!-- end input -->
                        <div class="input-style-1">
                            <label>Subject</label>
                            <input type="text" id="subject" name="subject" required placeholder="Add your subject here.." />
                        </div>
                        <!-- end input -->
                        <div class="input-style-3">
                            <textarea placeholder="Message" id="message" name="message" required rows="5"></textarea>
                            <span class="icon"><i class="lni lni-text-format"></i></span>
                        </div>
                        <!-- end textarea -->
                        <div>
                            <input type="submit" class="btn btn-success" value="Send mail" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== section end ========== -->
@endsection


{{-- Spesific Footer JS includes: --}}
@section('footerJS')
    {{--<script src="{{asset('admin_files/')}}{{ asset('js/index.js') }}"></script>--}}
@endsection
