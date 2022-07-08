@extends('dashboard.layouts.main')
@section('content')

<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h6 class="fw-bold"><a href="{{ route('contact.index') }}" class="text-muted fw-light">Daftar Kontak/</a>Tambah Kontak</h6>
    <h2 class="fw-bold">Tambah Kontak</h2>
    <h5 class="mb-5">Manajemen kontakmu dengan format CSV dan manual.</h5>


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
                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="basic-default-name" placeholder="Masukan Nama" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">List Source</label>
                <div class="col-sm-10">
                    <div class="form-check mt-3">
                        <input
                          name="default-radio-1"
                          class="form-check-input"
                          type="radio"
                          value=""
                          id="defaultRadio1"
                        />
                        <label class="form-check-label d-block fw-bold" for="defaultRadio1"> Upload File </label>
                        <small>CSV</small>
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
                        <label class="form-check-label d-block fw-bold" for="defaultRadio2"> Tambah Manual </label>
                        <small>Copy dan paste kontak</small>
                      </div>

                </div>

              </div>
              <div class="row mb-3">

                <label class="col-sm-2 col-form-label" for="basic-default-message">Tambah Kontak</label>

                <div class="col-sm-10">
                    {{-- popup --}}
                     <!-- Modal -->
                     <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>

                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                              <p>
                                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                auctor fringilla.
                              </p>
                              <p>
                                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                              </p>
                              <p>
                                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                lacus vel augue laoreet rutrum faucibus dolor auctor.
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="demo-inline-spacing">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt provident facilis autem consectetur quisquam suscipit facere, tenetur commodi blanditiis dicta ut aliquid tempora, natus, quos dignissimos ipsam illum quia quam. <a href="" data-bs-toggle="modal"
                            data-bs-target="#modalScrollable">Petunjuk</a></p>
                            <textarea
                            id="basic-default-message"
                            class="form-control"
                            placeholder="Hi, Do you have a moment to talk Joe?"
                            aria-label="Hi, Do you have a moment to talk Joe?"
                            aria-describedby="basic-icon-default-message2"
                          ></textarea>
                      </div>
                    </div>
                    {{-- popup --}}



                </div>
              {{-- <div class="col-md">
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
                      id="defaultRadio2"
                      checked
                    />
                    <label class="form-check-label" for="defaultRadio2"> Both/Dll </label>
                  </div> --}}

                <button type="button" class="btn btn-primary mt-4">Tambah</button>
                <a href="{{ route('contact.index') }}" class="btn btn-outline-secondary mt-4">Kembali</a>

            </form>
          </div>
        </div>
      </div>
      <!-- Basic with Icons -->





      @endsection
