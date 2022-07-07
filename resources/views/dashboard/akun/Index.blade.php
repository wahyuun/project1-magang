@extends('dashboard.layouts.main')
@section('content')

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h2 class="fw-bold">Akun</h2>
    {{-- <h6 class="fw-bold">Manage Sender Address</h6> --}}
    <div class="d-flex justify-content-between">
        <h5 class="d-inline">You cant manually validate template individual email address .</h5>
    </div>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-notifications.html"
                    ><i class="bx bx-bell me-1"></i> Notifications</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages-account-settings-connections.html"
                    ><i class="bx bx-link-alt me-1"></i> Connections</a
                    >
                </li>
            </ul>
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="../assets/img/avatars/1.png"
                          alt="user-avatar"
                          class="d-block rounded d-block"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input
                                type="file"
                                id="upload"
                                class="account-file-input"
                                hidden
                                accept="image/png, image/jpeg"
                                />
                            </label>
                            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>

                        </div>
                    </div>
                    <small class="text-muted mb-0 fst-italic">*Format JPG, JPEG, PNG maksimal 2mb</small>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">First Name</label>
                                <input id="firstName" type="text" class="form-control @error('firstName')
                                is-invalid @enderror" name="firstName" value="{{ old('firstName') }}"
                                register autocomplete="firstName" autofocus>
                            </div>
                            @error('name')
                            <span class="text-danger auto-close" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="mb-3 col-md-6">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input id="lastName" type="text" class="form-control @error('lastName')
                                is-invalid @enderror" name="lastName" value="{{ old('lastName') }}"
                                autocomplete="lastName" autofocus>
                            </div>
                            @error('lastName')
                            <span class="text-danger auto-close" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}"autocomplete="email">
                            </div>
                            @error('email')
                            <span class="text-danger auto-close" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="mb-3 col-md-6">
                                <label for="language" class="form-label">Role</label>
                                <select id="language" class="select2 form-select">
                                    <option value="">Pilih Role</option>
                                    <option value="en">Admin</option>
                                    <option value="fr">Operator</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" />
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Simpan perubahan</button>
                            {{-- <button type="reset" class="btn btn-outline-secondary">Cancel</button> --}}
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
            <div class="card">
                <h5 class="card-header">Hapus Akun</h5>
                <div class="card-body">
                    <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                            <h6 class="alert-heading fw-bold mb-1">Apa anda yakin untuk menghapus akun ini?</h6>
                            <p class="mb-0">Setelah Anda menghapus akun Anda, tidak ada jalan untuk kembali. Harap yakin.</p>
                        </div>
                    </div>
                    <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                            <input
                            class="form-check-input"
                            type="checkbox"
                            name="accountActivation"
                            id="accountActivation"
                            />
                            <label class="form-check-label" for="accountActivation"
                            >Saya mengkonfirmasi penonaktifan akun saya</label
                            >
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Nonaktifkan Akun</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

@endsection
