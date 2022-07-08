@extends('dashboard.layouts.main')
@section('content')

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h6 class="fw-bold"><a href="{{ route('sender.index') }}" class="text-muted fw-light">Manage Sender Email/</a>Tambah Email</h6>
    <h2 class="fw-bold">Informasi Email</h2>
    <h5 class="mb-5">Manajemen email untuk cek validasi.</h5>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Email Penerima</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" placeholder="Masukan Email Penerima" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Subject</label>
                            <div class="col-sm-10">
                                <input
                                type="text"
                                class="form-control"
                                id="basic-default-company"
                                placeholder="Masukan Subject"
                                />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Pesan</label>
                            <div class="col-sm-10">
                                <textarea
                                id="basic-default-message"
                                class="form-control"
                                placeholder="Masukan Pesan"
                                aria-label="Hi, Do you have a moment to talk Joe?"
                                aria-describedby="basic-icon-default-message2"
                                onkeyup="count_up(this);"
                                ></textarea>
                                <span class="text-muted pull-right d-block text-end" id="count1">0</span>
                            </div>
                        </div>
                        <div class="col-md">
                            <small class="text-light fw-semibold">Tipe Email</small>
                            <div class="form-check mt-3">
                                <input
                                name="default-radio-1"
                                class="form-check-input"
                                type="radio"
                                value=""
                                id="defaultRadio1"
                                />
                                <label class="form-check-label" for="defaultRadio1"> Website Email </label>
                            </div>
                            <div class="form-check">
                                <input
                                name="default-radio-1"
                                class="form-check-input"
                                type="radio"
                                value=""
                                id="defaultRadio2"
                                checked
                                />
                                <label class="form-check-label" for="defaultRadio2"> Newslatter Email </label>
                            </div>
                            <div class="form-check">
                                <input
                                name="default-radio-1"
                                class="form-check-input"
                                type="radio"
                                value=""
                                id="defaultRadio3"
                                checked
                                />
                                <label class="form-check-label" for="defaultRadio3"> Both/Dll </label>
                            </div>

                            <button type="button" class="btn btn-primary mt-4">TAMBAH</button>
                            <button type="button" class="btn btn-outline-secondary mt-4">BATAL</button>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Basic with Icons -->


            {{-- Menampilkan jumlah karakter --}}
            <script>
                function count_up(obj) {
                    document.getElementById('count1').innerHTML = obj.value.length;
                }
            </script>

            @endsection
