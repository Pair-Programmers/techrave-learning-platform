@extends('layouts.app')

@section('title-meta')
@endsection

@section('custom-css')
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets') }}/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets') }}/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
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
                                        <h4>Tutorials</h4>
                                        {{-- <span>All Tutorials are listed here.</span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('home') }}"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Tutorials</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <br>
                        <a type="button" href="{{ route('admin.users.create') }}" class="btn btn-primary m-b-0">+ Create
                            New</a>
                    </div>
                    <!-- Page-header end -->

                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Zero config.table start -->
                                <div class="card">
                                    {{-- <div class="card-header">
                                        <h5>Tutorials</h5>
                                        <span>all tutorials are listed here.</span>

                                    </div> --}}
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Created At</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $user)
                                                        <tr>
                                                            <td>{{ $user->id }}</td>
                                                            <td>{{ $user->name }}</td>
                                                            <td>{{ $user->email }}</td>
                                                            <td>{{ $user->created_at }}</td>
                                                            <td>
                                                                <a href="{{ route('admin.blogs.edit', $user) }}"
                                                                    class="btn btn-primary btn-mini">Edit</a>
                                                                <button type="button"
                                                                    class="btn btn-danger btn-mini waves-effect waves-light">Delete</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Created At</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Zero config.table end -->

                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
            <!-- Main-body end -->
            <div id="styleSelector">

            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    <!-- data-table js -->
    <script src="{{ asset('assets') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets') }}/pages/data-table/js/jszip.min.js"></script>
    <script src="{{ asset('assets') }}/pages/data-table/js/pdfmake.min.js"></script>
    <script src="{{ asset('assets') }}/pages/data-table/js/vfs_fonts.js"></script>
    <script src="{{ asset('assets') }}/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets') }}/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('assets') }}/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('assets') }}/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="{{ asset('assets') }}/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
    </script>
    <script src="{{ asset('assets') }}/pages/data-table/extensions/fixed-colums/js/dataTables.fixedColumns.min.js">
    </script>

    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{ asset('assets') }}/bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript"
        src="{{ asset('assets') }}/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript"
        src="{{ asset('assets') }}/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js">
    </script>
    <script type="text/javascript" src="{{ asset('assets') }}/bower_components/jquery-i18next/js/jquery-i18next.min.js">
    </script>
    <!-- Custom js -->
    <script src="{{ asset('assets') }}/pages/data-table/js/data-table-custom.js"></script>

    <script>
        const data = {
            "api_token": "K5et@Nyq-ZkOupUXqiyh",
            "msisdn": "+923239991999",
            "app_name": "Live Server"
        };

        fetch('https://sms-api.vipoffers4.me/api/otp/send', {
                method: 'POST', // or 'PUT'
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            })
            .then((response) => response.json())
            .then((data) => {
                console.log('Success:', data);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    </script>
@endsection
