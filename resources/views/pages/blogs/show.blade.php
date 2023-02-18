@extends('layouts.app')

@section('title-meta')
@endsection

@section('custom-css')
@endsection

@section('page-content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Show Tutorials</h4>
                                        {{-- <span>Create Tutorials from here.</span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('home') }}"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ route('admin.blogs.index') }}">Tutorials</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ route('admin.blogs.edit', $blog) }}">Edit</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <!-- Left column start -->
                            <div class="col-lg-12 col-xl-12">
                                <!-- Job description card start -->
                                <div class="card">
                                    <img src="
                                    @if (is_null($blog->image))
                                    {{asset('assets/images/blog-default.png')}}
                                    @else
                                    {{asset('storage/images/blogs/'.$blog->image)}}
                                    @endif
                                    " alt="" style="width: 100%; height: 350px;">
                                    <div class="card-header">
                                        <h1>{{ $blog->title }}</h1>
                                        <span class="text-muted f-14 m-b-10">{{ $blog->author_name }},
                                            {{ $blog->created_at }}</span>
                                            <span class="f-14 m-b-10">Category: {{ $blog->category->name }}</span>
                                    </div>
                                    <div class="card-block">
                                        {!! $blog->description !!}
                                    </div>
                                </div>
                                <!-- Job description card end -->
                                <!-- Similar Jobs card start -->
                                <div class="card similar-job">
                                    <div class="card-header">
                                        <h5>Similar Jobs</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-lg-12 col-xl-6">
                                                <div class="media p-t-10">
                                                    <div class="media-left">
                                                        <img class="media-object m-r-10"
                                                            src="..\files\assets\images\logo-blue.png"
                                                            alt="Generic placeholder image">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="company-name">
                                                            <p><a href="#!">UX/UI Industrial
                                                                    Designer</a></p>
                                                            <span class="text-muted f-14">December 16,
                                                                2017</span>
                                                        </div>
                                                        <p class="text-muted">lorem ipsum dolor sit
                                                            amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et
                                                            dolore magna.</p>
                                                    </div>
                                                    <span class="media-right label-main">
                                                        <label class="label bg-primary">New</label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-xl-6">
                                                <div class="media p-t-10">
                                                    <div class="media-left">
                                                        <img class="media-object m-r-10"
                                                            src="..\files\assets\images\logo-blue.png"
                                                            alt="Generic placeholder image">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="company-name">
                                                            <p><a href="#!">UI Industrial Designer</a>
                                                            </p>
                                                            <span class="text-muted f-14">December 16,
                                                                2017</span>
                                                        </div>
                                                        <p class="text-muted">lorem ipsum dolor sit
                                                            amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et
                                                            dolore magna.</p>
                                                    </div>
                                                    <span class="media-right label-main">
                                                        <label class="label bg-danger">30 days
                                                            ago</label>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-lg-12 col-xl-6">
                                                <div class="media p-t-10">
                                                    <div class="media-left">
                                                        <img class="media-object m-r-10"
                                                            src="..\files\assets\images\logo-blue.png"
                                                            alt="Generic placeholder image">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="company-name">
                                                            <p><a href="#!">UX/UI web Designer</a></p>
                                                            <span class="text-muted f-14">December 16,
                                                                2017</span>
                                                        </div>
                                                        <p class="text-muted">lorem ipsum dolor sit
                                                            amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et
                                                            dolore magna.</p>
                                                    </div>
                                                    <span class="media-right label-main">
                                                        <label class="label bg-primary">Updates</label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-xl-6">
                                                <div class="media p-t-10">
                                                    <div class="media-left">
                                                        <img class="media-object m-r-10"
                                                            src="..\files\assets\images\logo-blue.png"
                                                            alt="Generic placeholder image">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="company-name">
                                                            <p><a href="#!">Developer</a></p>
                                                            <span class="text-muted f-14">December 16,
                                                                2017</span>
                                                        </div>
                                                        <p class="text-muted">lorem ipsum dolor sit
                                                            amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et
                                                            dolore magna.</p>
                                                    </div>
                                                    <span class="media-right label-main">
                                                        <label class="label bg-danger">2 week
                                                            ago</label>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Similar Jobs card end -->
                            </div>
                            <!-- Left column end -->

                        </div>
                    </div>
                    <!-- Page body start -->
                </div>
            </div>
            <!-- Main-body end -->

            <div id="styleSelector">

            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    <!-- Validation js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/pages/form-validation/validate.js"></script>

    <script src="//cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{ asset('assets') }}/bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript"
        src="{{ asset('assets') }}/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript"
        src="{{ asset('assets') }}/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js">
    </script>
    <script type="text/javascript" src="{{ asset('assets') }}/bower_components/jquery-i18next/js/jquery-i18next.min.js">
    </script>
@endsection
