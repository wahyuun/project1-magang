<!DOCTYPE html>
<html
lang="en"
class="light-style"
dir="ltr"
data-theme="theme-default"
data-assets-path="../assets/"
data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Error 404</title>

    <meta name="description" content="" />

    @include('dashboard.layouts.link.head')

</head>

<body>
    <!-- Error -->
    <div class="container-xxl container-p-y">
        <div class="misc-wrapper">
            <h2 class="mb-2 mx-2">Halaman tidak ditemukan :(</h2>
            <p class="mb-4 mx-2">Oops! 😖 Url tidak ditemukan.</p>
            <a href="{{ route('login') }}" class="btn btn-primary">Kembali</a>
            <div class="mt-3">
                <img
                src="{{ asset('assets/img/404-error.png') }}"
                alt="page-misc-error-light"
                width="500"
                class="img-fluid"
                data-app-dark-img="illustrations/page-misc-error-dark.png"
                data-app-light-img="illustrations/page-misc-error-light.png"
                />
            </div>
        </div>
    </div>
    <!-- /Error -->
    <!-- Content -->

    @include('dashboard.layouts.link.body')

</body>
</html>
