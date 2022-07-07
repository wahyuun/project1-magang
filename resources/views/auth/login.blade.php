{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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



                            </div>
                        </div>

                        <div class="row mb-3">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}



@extends('auth.layouts.authenticate')
@section('authenticate')
<!-- Register -->
<div class="card">
    <div class="card-body">
        <!-- Logo -->
        <div class="app-brand justify-content-center">
            <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                    <img class="mt-3" src="{{ asset('assets/img/logo.png') }}" width="150" alt="">
                </span>
            </a>
        </div>
        <!-- /Logo -->
        <h4 class="mb-2">Selamat Datang</h4>

        <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                autocomplete="email" placeholder="namaemail@example.com" autofocus>
            </div>
            @error('email')
            <span class="text-danger auto-close" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        <small>Lupa Password?</small>
                    </a>
                    @endif

                </div>
                <div class="input-group input-group-merge">
                    <input id="password" type="password" class="form-control"
                    name="password" placeholder="&#xb7;&#xb7;&#xb7;" autocomplete="current-password">
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
                @error('password')
                <span class="text-danger auto-close" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember"
                    id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember-me"> Ingat saya </label>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
            </div>
        </form>
    </div>
</div>
<!-- /Register -->
@endsection
