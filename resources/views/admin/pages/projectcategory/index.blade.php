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
                    <!-- input style start -->
                    <div class="mt-4 d-flex justify-content-end mb-4">
                        <form action="{{ route('admin.user.profile.create', ['id' => $id]) }}" method="post">
                            @csrf
                            <button class="btn btn-secondary">Back to profile page</button>
                        </form>
                    </div>

                    <div class="card-style mb-30">
                        <div class="input-style-1">
                            <form id="addprojectcategory" action="{{ route('admin.user.profile.projectcategory.store') }}" method="post">
                                @csrf
                                <label>Add project category</label>
                                <input type="hidden" name="id" value="{{$id}}">
                                <input type="text" name="title" value="{{ old('title') }}" placeholder="Write your project category name here.." />
                            </form>

                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- end input -->
                        <div class="mt-4" id="buttonContainer">
                            <button form="addprojectcategory" class="btn btn-success">Add</button>
                        </div>
                    </div>

                    <div class="card-style mb-30">
                        <h6 class="mb-25">{{$user}}'s Project Categories</h6>
                        <div class="col">
                            <!-- end card -->
                            <div class="table-wrapper table-responsive">
                                <table class="table striped-table">
                                    <thead>
                                    <tr>
                                        <th>
                                            <h6>Category Name</h6>
                                        </th>
                                        <th>
                                            <h6>Action</h6>
                                        </th>
                                    </tr>
                                    <!-- end table row-->
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>
                                                    <p>{{ $category->title }}</p>
                                                </td>
                                                <td class="d-flex">
                                                    <form action="{{ route('admin.user.profile.projectcategory.edit', ['id' => $category->id]) }}" method="post" class="me-2">
                                                        @csrf
                                                        <input type="hidden" name="user_id" value="{{$id}}">
                                                        <button class="btn btn-primary">Edit</button>
                                                    </form>

                                                    <a href="{{ route('admin.user.profile.projectcategory.delete', ['id' => $category->id]) }}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    <!-- end table row -->
                                    </tbody>
                                </table>
                                <!-- end table -->
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

@endsection
