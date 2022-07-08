@extends('auth.layouts.authenticate')
@section('authenticate')
<!-- Register -->
<div class="card">
    <div class="card-body">
        <!-- Logo -->
        <div class="app-brand justify-content-center">
            <a href="/" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                    <img class="mt-3" src="{{ asset('assets/img/logo.png') }}" width="150" alt="">
                </span>
            </a>
        </div>
        <!-- /Logo -->

        <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                autocomplete="email" placeholder="contoh@example.com" autofocus>
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
                    id="remember-me" {{ old('remember') ? 'checked' : '' }}>
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
