@extends('dashboard.layouts.main')
@section('content')
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                  <div class="col-lg-8 mb-4 order-0">
                    <div class="card">
                      <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Selamat Datang Muhamad Iqbal Assadullah</h5>
                            <p class="mb-4">
                              Kamu login sebagai <span class="fw-bold">Admin</span>. Berikan aksesmu!
                            </p>

                            <a href="{{ route('email.index') }}" class="btn btn-sm btn-outline-primary">Mulai</a>
                          </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                          <div class="card-body pb-0 px-0 px-md-4">
                            <img
                              src="{{ asset('assets/img/vektor-email.png') }}"
                              height="140"
                              alt="View Badge User"
                              data-app-dark-img="man-with-laptop-dark.png"
                              data-app-light-img="man-with-laptop-light.png"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                      <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <i class="menu-icon tf-icons bx bx-check-double text-success bg-light bg-gradient shadow-sm p-2 rounded-2"></i>
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Email Aktif</span>
                            <h3 class="card-title mb-2">222</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                {{-- <img
                                  src="{{ asset('assets/img/icons/unicons/chart-success.png') }}"
                                  alt="Credit Card"
                                  class="rounded"
                                /> --}}
                                <i class="menu-icon tf-icons bx bx-message-rounded-x text-danger bg-light bg-gradient shadow-sm p-2 rounded-2"></i>
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Email Tidak Aktif</span>
                            <h3 class="card-title text-nowrap mb-1">221</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Total Revenue -->
                  <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                    <div class="card">
                      <div class="row row-bordered g-0">
                        <div class="col-md-8">
                          <h5 class="card-header m-0 me-2 pb-3">Grafik Email Marketing</h5>
                          <div id="totalRevenueChart" class="px-2"></div>
                        </div>
                        <div class="col-md-4">
                          <div class="card-body">
                            <div class="text-center">
                              <div class="dropdown">
                                <button
                                  class="btn btn-sm btn-outline-primary dropdown-toggle"
                                  type="button"
                                  id="growthReportId"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  2022
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                  <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                  <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                  <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div id="growthChart"></div>
                          <div class="text-center fw-semibold pt-3 mb-2">Frekuensi Pengiriman</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/ Total Revenue -->
                  <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                    <div class="row">
                      <div class="col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                {{-- <img src="{{ asset('assets/img/icons/unicons/chart-success.png') }}" alt="Credit Card" class="rounded" /> --}}
                                <i class="menu-icon tf-icons bx bxs-contact text-success bg-light bg-gradient shadow-sm p-2 rounded-2"></i>
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Kontak</span>
                            <h3 class="card-title text-nowrap mb-2">225</h3>
                          </div>
                        </div>
                      </div>
                      <div class="col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                {{-- <img src="{{ asset('assets/img/icons/unicons/chart-success.png') }}" alt="Credit Card" class="rounded" /> --}}
                                <i class="menu-icon tf-icons bx bx-mail-send text-success bg-light bg-gradient shadow-sm p-2 rounded-2"></i>
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Pengiriman Email</span>
                            <h3 class="card-title mb-2">250</h3>
                          </div>
                        </div>
                      </div>
                      <!-- </div>
      <div class="row"> -->
                      <div class="col-12 mb-4">
                        <div class="card">
                          <div class="card-body">
                            {{-- <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                              <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                <div class="card-title">
                                  <h5 class="text-nowrap mb-2"></h5>
                                  <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                </div>
                                <div class="mt-sm-auto">
                                  <small class="text-success text-nowrap fw-semibold"
                                    ><i class="bx bx-chevron-up"></i> 68.2%</small
                                  >
                                  <h3 class="mb-0">$84,686k</h3>
                                </div>
                              </div>
                              <div id="profileReportChart"></div>
                            </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
@endsection
