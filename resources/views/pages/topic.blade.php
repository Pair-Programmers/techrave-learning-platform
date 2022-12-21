@extends('layouts.app')

@section('title-meta')
@endsection

@section('custom-css')
@endsection

@section('page-content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Topics Management</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Topic</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    <!-- Page-body start -->
                    <div class="page-body">
                        <!-- Row start -->
                        <div class="row">
                            <!-- Multiple Open Accordion start -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-primary" id="addH1" onclick="addH1();">
                                            <i class="icofont icofont-plus"></i> Add Heading 1
                                        </button>

                                    </div>
                                    {{-- <button class="btn btn-inverse btn-outline-inverse btn-icon"><i class="icofont icofont-ui-rating"></i></button> --}}
                                    <div class="card-block accordion-block">
                                        <div id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="accordion-panel">
                                                <div class="accordion-heading" role="tab" id="headingOne">
                                                    <div class="card-title accordion-title row">
                                                        <a class="accordion-msg col-sm-10" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapse-1-0-0"
                                                            aria-expanded="true" aria-controls="collapse-1-0-0">
                                                            Heading 1
                                                        </a>
                                                        <div class="com-sm-2" style="border-top: 1px solid #ddd; padding-top: 4px;">
                                                            <div class="icon-btn">
                                                                <button class="btn btn-primary btn-outline-primary btn-icon" onclick="addH2();"><i class="icofont icofont-plus"></i></button>
                                                                <button class="btn btn-danger btn-outline-danger btn-icon"><i class="icofont icofont-minus"></i></button>
                                                                <button class="btn btn-inverse btn-outline-inverse btn-icon"><i class="icofont icofont-ui-rate-blank"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapse-1-0-0" class="panel-collapse collapse in" role="tabpanel"
                                                    aria-labelledby="headingOne">
                                                    <div class="accordion-content accordion-desc">
                                                        <div class="col-sm-12">
                                                            <textarea rows="5" cols="5" class="form-control" placeholder="write from here.."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Multiple Open Accordion ends -->
                        </div>
                        <!-- Row end -->
                    </div>
                    <!-- Page-body end -->
                </div>

                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    <!-- Accordion js -->
    <script type="text/javascript" src="{{ asset('assets') }}/pages/accordion/accordion.js"></script>

    <script>
        var counterH1 = 1;
        $("#addH1").click(function() {
            counterH1++;
            var h1Section = `<div class="accordion-panel">
                                                <div class="accordion-heading" role="tab" id="headingOne">
                                                    <div class="card-title accordion-title row">
                                                        <a class="accordion-msg col-sm-10" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapse-${counterH1}-0-0"
                                                            aria-expanded="true" aria-controls="collapse-${counterH1}-0-0">
                                                            Heading 1
                                                        </a>
                                                        <div class="com-sm-2" style="border-top: 1px solid #ddd; padding-top: 4px;">
                                                            <div class="icon-btn">
                                                                <button class="btn btn-primary btn-outline-primary btn-icon"><i class="icofont icofont-plus"></i></button>
                                                                <button class="btn btn-danger btn-outline-danger btn-icon"><i class="icofont icofont-minus"></i></button>
                                                                <button class="btn btn-inverse btn-outline-inverse btn-icon"><i class="icofont icofont-ui-rate-blank"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapse-${counterH1}-0-0" class="panel-collapse collapse in" role="tabpanel"
                                                    aria-labelledby="headingOne">
                                                    <div class="accordion-content accordion-desc">
                                                        <div class="col-sm-12">
                                                            <textarea rows="5" cols="5" class="form-control" placeholder="write from here.."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>`;
            $("#accordion").append(h1Section);
        });
    </script>
@endsection
