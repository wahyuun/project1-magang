@extends('dashboard.layouts.main')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h2 class="fw-bold">Contact List</h2>
    {{-- <h6 class="fw-bold">Manage Sender Address</h6> --}}
    <div class="d-flex justify-content-between">
        <h5 class="d-inline">Manage your contact in list to easily send campaigns and automated email workflows.</h5>
        <a href="{{ route('contact.create') }}" class="btn btn-primary">+ Tambah Kontak</a>
    </div>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
    {{-- <-- radio --> --}}
      <div class="card-body">
        <div class="row gy-3">
          <div class="col-md">
          <div class="col-md">
        </div>
      </div>

<!-- Responsive Table -->

<div class="card">
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr class="text-nowrap">
            <th>No</th>
            <th>Name</th>
            <th>Subscribers</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Responsive Table -->
@endsection
