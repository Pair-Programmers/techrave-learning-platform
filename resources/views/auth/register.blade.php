{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body class="fix-menu">
    @include('partials.loader')
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <form class="md-float-material form-material" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="text-center">
                            <img src="..\files\assets\images\logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                {{-- <div class="row m-b-20">
                                    <div class="col-md-6">
                                        <a href="#!"
                                            class="btn btn-facebook m-b-20 btn-block waves-effect waves-light"><i
                                                class="icofont icofont-social-facebook"></i>facebook</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#!"
                                            class="btn btn-twitter m-b-0 btn-block waves-effect waves-light"><i
                                                class="icofont icofont-social-twitter"></i>twitter</a>
                                    </div>
                                </div> --}}
                                <p class="text-muted text-center p-b-5">Sign up with your regular account</p>
                                @error('name')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                                @error('email')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                                @error('password')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                                <div class="form-group form-primary">
                                    <input type="text" name="name" class="form-control" required=""
                                        placeholder="Your Name">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control" required=""
                                        placeholder="Email">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password" class="form-control" required=""
                                                placeholder="Password">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password_confirmation" class="form-control"
                                                required="" placeholder="Confirm Password">
                                            <span class="form-bar"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-25 text-left">
                                    {{-- <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">I read and accept <a href="#">Terms
                                                        &amp;
                                                        Conditions.</a></span>
                                            </label>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Send me the <a href="">Newsletter</a>
                                                    weekly.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign
                                            up now</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                                        <p class="text-inverse text-left"><a href="index-1.htm"><b class="f-w-600">Back
                                                    to website</b></a></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="..\files\assets\images\auth\Logo-small-bottom.png"
                                            alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    @include('partials.script')
</body>

</html>
