@extends('layouts.master')

@section('title','Admin Dashboard')

@section('content')
     <section class="py-4">
    <div class="container-fluid container-xl" data-aos="fade-up">
      <div class="row g-4">

        <!-- Sidebar -->
         @include('layouts.partials.side')

        <!-- Content -->
        <div class="col-12 col-lg-9">
          <div class="mb-3">
            <h3 class="mb-1">Subjects & Branches</h3>
            <div class="text-muted small">
              Manage available subjects and branches
            </div>
          </div>

          <div class="row g-4">
            <!-- Add Subject -->
            <div class="col-12 col-md-6">
              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <h5 class="mb-3">Add Subject</h5>

                  <form>
                    <div class="mb-3">
                      <label class="form-label">Subject Name</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="e.g. Math"
                      />
                    </div>

                    <div class="d-grid">
                      <button
                        type="button"
                        class="btn text-white"
                        style="background-color:#5fcf80"
                      >
                        Add Subject
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- Add Branch -->
            <div class="col-12 col-md-6">
              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <h5 class="mb-3">Add Branch</h5>

                  <form>
                    <div class="mb-3">
                      <label class="form-label">Branch Name</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="e.g. Scientific"
                      />
                    </div>

                    <div class="d-grid">
                      <button
                        type="button"
                        class="btn text-white"
                        style="background-color:#5fcf80"
                      >
                        Add Branch
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- Subjects Table -->
            <div class="col-12 col-md-6">
              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <h5 class="mb-3">Subjects</h5>

                  <div class="table-responsive">
                    <table class="table align-middle">
                      <thead class="table-light">
                        <tr>
                          <th>Name</th>
                          <th class="text-end">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Math</td>
                          <td class="text-end">
                            <button class="btn btn-sm btn-outline-danger">
                              Delete
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>English</td>
                          <td class="text-end">
                            <button class="btn btn-sm btn-outline-danger">
                              Delete
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>

            <!-- Branches Table -->
            <div class="col-12 col-md-6">
              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <h5 class="mb-3">Branches</h5>

                  <div class="table-responsive">
                    <table class="table align-middle">
                      <thead class="table-light">
                        <tr>
                          <th>Name</th>
                          <th class="text-end">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Scientific</td>
                          <td class="text-end">
                            <button class="btn btn-sm btn-outline-danger">
                              Delete
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>Literary</td>
                          <td class="text-end">
                            <button class="btn btn-sm btn-outline-danger">
                              Delete
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection