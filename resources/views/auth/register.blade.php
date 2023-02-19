@extends('auth.main')

@section('content')
<div class="content">
        <div class="brand" style="padding-top:120px;">
        </div>
                <form id="register-form" method="POST" action="{{ route('login') }}">
                        @csrf
                    <h2 class="login-title">Register</h2>
                    <center>
                        <img src="{{asset('backend/html/src/img/logos/logo-vue.png')}}" alt="Constra" style=" height:90px">
                    </center>
                    <br></br>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" placeholder="Username" id="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                        
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input class="form-control @error('kelas') is-invalid @enderror" type="text" name="kelas" placeholder="Kelas" id="kelas" value="{{ old('kelas') }}" required autocomplete="kelas" autofocus>
                                        
                                @error('kelas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" id="email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" id="password" required autocomplete="password" autofocus>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <input class="form-control @error('password-confirm') is-invalid @enderror" type="password" name="password-confirm" placeholder="Confirm Password" id="password-confirm" required autocomplete="new-password" autofocus>

                                @error('password-confirm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group text-left">
                            <label class="ui-checkbox ui-checkbox-info">
                                <input type="checkbox" name="agree">
                                <span class="input-span"></span>Saya yakin untuk melakukan pendaftaran akun</label>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block" type="submit">Submit</button>
                        </div>
                        <div class="text-center">Sudah memiliki akun ?
                            <a class="color-blue" href="/login">Login di sini</a>
                        </div>
                    </form>
                    <br></br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
