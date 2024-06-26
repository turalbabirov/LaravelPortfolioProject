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
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Blogs</h2>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#0">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Tables
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->

            <!-- ========== tables-wrapper start ========== -->
            <div class="tables-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-style mb-30">
                            <a href="{{route('admin.blog.create')}}" class="main-btn primary-btn-light square-btn btn-hover mb-10">Add Blog</a>
{{--                            <p class="text-sm mb-20">--}}
{{--                                For basic styling—light padding and only horizontal--}}
{{--                                dividers—use the class table.--}}
{{--                            </p>--}}
                            <div class="table-wrapper table-responsive">
                                @if(isset($blogs) && $blogs->isEmpty())
                                    <p class="mt-4">Henüz blog yazısı bulunmamaktadır.</p>
                                @else
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th></th>

                                            <th class="lead-name">
                                                <h6>Title</h6>
                                            </th>

                                            <th>
                                                <h6>Text</h6>
                                            </th>
                                            <th>
                                                <h6>Action</h6>
                                            </th>
                                        </tr>
                                        <!-- end table row-->
                                        </thead>
                                        <tbody>
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <td>
                                                    <h6 class="text-sm">#{{ $blog->id }}</h6>
                                                </td>

                                                <td class="min-width">
                                                    <div class="lead">
                                                        <p>{{ substr($blog->title, 0, 50) }}{{ strlen($blog->text) > 50 ? '...' : '' }}</p>
                                                    </div>
                                                </td>

                                                <td class="min-width">
                                                    <div class="lead">
                                                        <p>{{ substr($blog->text, 0, 200) }} {{ strlen($blog->text) > 200 ? '...' : '' }}</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="action">
                                                        <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-sm me-2" onclick="return confirm('Silmek istediğinizden emin misiniz?')">
                                                                <i class="lni lni-trash-can text-danger"></i>
                                                            </button>
                                                        </form>

                                                        <button>
                                                            <a href="{{ route('admin.blog.edit', ['blog' => $blog->id]) }}" class="text-primary">
                                                                <i class="lni lni-pencil-alt"></i>
                                                            </a>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <!-- end table -->
                                @endif
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== tables-wrapper end ========== -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== Profile Show components end ========== -->
@endsection


{{-- Spesific Footer JS includes: --}}
@section('footerJS')
    {{--<script src="{{asset('admin_files/')}}{{ asset('js/index.js') }}"></script>--}}
@endsection
