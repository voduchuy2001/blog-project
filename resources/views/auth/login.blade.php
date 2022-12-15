{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address')
                                }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                                }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


@include('admin.layouts.header')

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">
            <div class="container">
                <div class="row flex-center min-vh-100 py-5">
                    <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a
                            class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
                            <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img
                                    src="admin/assets/img/icons/logo.png" alt="phoenix" width="58" /></div>
                        </a>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
                                <div class="form-icon-container"><input class="form-control form-icon-input" id="email"
                                        type="email" placeholder="name@example.com" name="email" />
                                        @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        <span
                                        class="fas fa-user text-900 fs--1 form-icon"></span></div>
                            </div>
                            <div class="mb-3 text-start"><label class="form-label" for="password">Password</label>
                                <div class="form-icon-container"><input class="form-control form-icon-input"
                                        type="password" placeholder="Password" name="password" />
                                        @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        <span
                                        class="fas fa-key text-900 fs--1 form-icon"></span></div>
                            </div>
                            <div class="row flex-between-center mb-7">
                                <div class="col-auto">
                                    <div class="form-check mb-0"><input class="form-check-input" id="basic-checkbox"
                                            type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked'
                                            : '' }}><label class="form-check-label mb-0" for="basic-checkbox">Remember
                                            me</label></div>
                                </div>
                                {{-- <div class="col-auto"><a class="fs--1 fw-semi-bold"
                                        href="{{ route('password.request') }}">Forgot Password?</a></div> --}}
                            </div><button class="btn btn-primary w-100 mb-3">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    @include('admin.layouts.right-sidebar')

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    @include('admin.layouts.js')
</body>


<!-- Mirrored from prium.github.io/phoenix/v1.6.0/pages/authentication/simple/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Dec 2022 09:53:35 GMT -->

</html>