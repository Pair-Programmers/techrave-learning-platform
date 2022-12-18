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

                    <!-- Page-body start -->
                    <div class="page-body">
                        <!-- Row start -->
                        <div class="row">
                            <!-- Multiple Open Accordion start -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">All Topics</h5>
                                    </div>
                                    <div class="card-block accordion-block">
                                        <div id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="accordion-panel">
                                                <div class="accordion-heading" role="tab" id="headingOne">
                                                    <div class="card-title accordion-title row">
                                                        <a class="accordion-msg col-sm-10" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            Heading 1
                                                        </a>
                                                        <div class="com-sm-2" style="border-top: solid; display:flex">
                                                            <h2>asd</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                                    aria-labelledby="headingOne">
                                                    <div class="accordion-content accordion-desc">
                                                        <div class="col-sm-12">
                                                            <textarea rows="5" cols="5" class="form-control" placeholder="write from here.."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-panel">
                                                <div class="accordion-heading" role="tab" id="headingTwo">
                                                    <h3 class="card-title accordion-title">
                                                        <a class="accordion-msg" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Heading 2
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingTwo">
                                                    <div class="accordion-content accordion-desc">
                                                        <div class="col-sm-12">
                                                            <textarea rows="5" cols="5" class="form-control" placeholder="write from here.."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-panel">
                                                <div class=" accordion-heading" role="tab" id="headingThree">
                                                    <h3 class="card-title accordion-title">
                                                        <a class="accordion-msg" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Heading 3
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                                    aria-labelledby="headingThree">
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
@endsection
