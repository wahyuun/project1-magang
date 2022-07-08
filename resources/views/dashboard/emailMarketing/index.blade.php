@extends('dashboard.layouts.main')
@section('content')

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h2 class="fw-bold">Email</h2>
    <div class="d-flex justify-content-between">
        <h5 class="d-inline">Kamu dapat mengirim Email lebih dari satu penerima.</h5>
    </div>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Label</label>
                            <div class="col-sm-10">
                                <input
                                type="text"
                                class="form-control"
                                id="basic-default-company"
                                placeholder="Masukan Nama Label"
                                />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Penerima</label>
                            <div class="col-sm-10">
                                {{-- <input type="text" class="form-control" id="basic-default-name" placeholder="Masukan Email Penerima" /> --}}
                                <select class="penerima form-control" name="penerima" multiple="multiple">
                                    <option value="AL">All</option>
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="WY">asdas</option>
                                    <option value="WY">32sad</option>
                                    <option value="WY">asd</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Subjek</label>
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
                                id="body"
                                class="form-control"
                                placeholder="Masukan Pesan"
                                name="body"
                                ></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Responsive Table -->
            <div class="card">
                <div class="table-responsive text-nowrap p-3">
                    <table class="table table-stripped" id="tableMarketing">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Email Penerima</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Wahyu</td>
                                <td>Table cell</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Table cell</td>
                                <td>Table cell</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Responsive Table -->
        </div>
        <!-- Basic with Icons -->
        {{-- Select2 --}}
        @endsection


