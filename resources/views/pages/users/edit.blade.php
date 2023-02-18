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
                                        <h4>Edit User</h4>
                                        {{-- <span>Create Tutorials from here.</span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="{{route('home')}}"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">Users</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{route('admin.users.edit', $user)}}">Edit</a>
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
                            <div class="col-sm-12">
                                <!-- Basic Inputs Validation start -->
                                <div class="card">
                                    {{-- <div class="card-header">
                                        <h5>Create Blog</h5>
                                        <span>fill all information to crate a blog</span>

                                    </div> --}}
                                    <div class="card-block">
                                        <form method="POST" action="{{route('admin.users.update', $user)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="name" id="title"
                                                        placeholder="" value="{{$user->name}}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Select Role</label>
                                                <div class="col-sm-10">
                                                    <select name="role" class="form-control">
                                                        @if ($user->role == 'Admin')
                                                        <option value="Guest">Guest</option>
                                                        <option value="Admin" selected>Admin</option>
                                                        <option value="Coordinator">Coordinator</option>
                                                        @elseif ($user->role == 'Guest')
                                                        <option value="Guest" selected>Guest</option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="Coordinator">Coordinator</option>
                                                        @else
                                                        <option value="Guest">Guest</option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="Coordinator" selected>Coordinator</option>
                                                        @endif

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="email" id="summary"
                                                    value="{{$user->email}}">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="password" id="summary"
                                                        >
                                                    <span class="messages"></span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="is_active"
                                                            @if ($user->is_active == true)
                                                                checked
                                                            @endif
                                                                id="is_active-1" value="1"> Active
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="is_active"
                                                                id="is_active-2" value="0" @if ($user->is_active == false)
                                                                checked
                                                            @endif> InActive
                                                        </label>
                                                    </div>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2"></label>
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Basic Inputs Validation end -->

                            </div>
                        </div>
                    </div>
                    <!-- Page body end -->
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
    <script type="text/javascript" src="{{ asset('assets') }}/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets') }}/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

    <script>
        CKEDITOR.replace( 'description' );
    </script>
@endsection
