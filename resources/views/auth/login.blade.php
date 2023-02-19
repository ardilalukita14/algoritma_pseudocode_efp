@extends('auth.main')

@section('content')
<div class="content">
        <div class="brand" style="padding-top:120px;">
        </div>
                    <form id="login-form" method="POST" action="{{ route('login') }}">
                        @csrf

                        <h2 class="login-title">Log in</h2>
                            <center>
                                <img src="{{asset('backend/html/src/img/logos/logo-vue.png')}}" alt="Constra" style=" height:90px">
                            </center>
                            <br></br>
                        <div class="form-group">
                            <div class="input-group-icon right">
                                <div class="input-icon"><i class="fa fa-envelope"></i></div>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                        <div class="input-group-icon right">
                            <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group d-flex justify-content-between">
                        <label class="ui-checkbox ui-checkbox-info">
                            <input type="checkbox">
                            <span class="input-span"></span>Remember me</label>
                        <a href="forgot_password.html">Forgot password?</a>
                    </div> -->
                    <div class="form-group">
                        <button class="btn btn-info btn-block" type="submit">Login</button>
                    </div>
                        <!-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

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
                        </div> -->
                        <div class="text-center">Belum memiliki akun ?
                <a class="color-blue" href="/register">Register</a>
            </div>
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
