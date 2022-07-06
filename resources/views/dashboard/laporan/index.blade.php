@extends('dashboard.layouts.main')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    {{-- <h6 class="fw-bold"><a href="{{ route('contact.index') }}" class="text-muted fw-light">Contact/</a>Contact List</h6> --}}
    <h2 class="fw-bold">Laporan</h2>
    {{-- <h6 class="fw-bold">Manage Sender Address</h6> --}}
    <div class="d-flex justify-content-between">
        <h5 class="d-inline">You cant manually validate template individual email address .</h5>
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
            <th>Label</th>
            <th>Domain</th>
            <th>Email Address</th>
            <th>Type</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Table cell</td>
            <td>Table cell</td>
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
