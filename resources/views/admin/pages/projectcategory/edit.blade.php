{{-- Layouts: --}}
@extends('admin.layouts.layout')

{{-- Spesific CSS/JS includes: --}}
@section('headerCssJs')
    {{--<link rel="stylesheet" href="{{ asset('css/index.css') }}">--}}
@endsection


{{-- Main Content Section: --}}
@section('mainContent')
    <!-- ========== section start ========== -->
    <div class="container-fluid mt-5">
        <div class="form-elements-wrapper">
            <div class="row">
                <div class="col">
                    <div class="mt-4 d-flex justify-content-end mb-4">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Go to back</a>
                    </div>

                    <div class="card-style mb-30">
                        <!-- input style start -->
                        <div class="input-style-1">
                            <label>Add project category</label>
                            <form id="updateprojectcategory" action="{{ route('admin.user.profile.projectcategory.update', ['id' => $id]) }}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{$user_id}}">
                                <input type="text" name="title" value="{{ $category->title }}"/>
                            </form>

                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- end input -->
                        <div class="mt-4" id="buttonContainer">
                            <!-- Button -->
                            <button form="updateprojectcategory" class="btn btn-success">Edit category</button>
                        </div>
                    </div>
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
