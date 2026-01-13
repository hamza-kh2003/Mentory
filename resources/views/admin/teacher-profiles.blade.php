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
                <h3 class="mb-1">Teacher Profiles</h3>
                <div class="text-muted small">
                  Admin controls approval manually
                </div>
              </div>

              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table align-middle">
                      <thead class="table-light">
                        <tr>
                          <th>Teacher</th>
                          <th>Subject</th>
                          <th>Branch</th>
                          <th>Status</th>
                          <th>Paid</th>
                          <!-- ADDED -->
                          <th class="text-end">Actions</th>
                        </tr>
                      </thead>

                      <tbody>
                        <!-- Row -->
                        <tr>
                          <td>
                            <div class="d-flex align-items-center gap-3">
                              <img
                                src="assets/img/team/team-1.jpg"
                                style="
                                  width: 48px;
                                  height: 48px;
                                  object-fit: cover;
                                  border-radius: 10px;
                                "
                              />
                              <div>
                                <div class="fw-semibold">Mr. Ahmad Saleh</div>
                                <div class="text-muted small">0791234567</div>
                              </div>
                            </div>
                          </td>
                          <td>Math</td>
                          <td>Scientific</td>
                          <td>
                            <span class="badge bg-warning text-dark">
                              Pending
                            </span>
                          </td>
                          <!-- Paid column -->
                          <td>
                            <span class="badge bg-secondary">No</span>
                          </td>
                          <td class="text-end">
                            <div class="d-inline-flex gap-2">
                              <button
                                class="btn btn-sm text-white"
                                style="background-color: #5fcf80"
                              >
                                Approve
                              </button>

                              <button class="btn btn-sm btn-outline-danger">
                                Cancel
                              </button>

                              <button class="btn btn-sm btn-outline-warning">
                                Paid
                              </button>
                            </div>
                          </td>
                        </tr>

                        <!-- Row -->
                        <tr>
                          <td>
                            <div class="d-flex align-items-center gap-3">
                              <img
                                src="assets/img/team/team-2.jpg"
                                style="
                                  width: 48px;
                                  height: 48px;
                                  object-fit: cover;
                                  border-radius: 10px;
                                "
                              />
                              <div>
                                <div class="fw-semibold">Ms. Lina Omar</div>
                                <div class="text-muted small">0789876543</div>
                              </div>
                            </div>
                          </td>
                          <td>English</td>
                          <td>Literary</td>
                          <td>
                            <span class="badge bg-success">Approved</span>
                          </td>
                          <!-- Paid column -->
                          <td>
                            <span class="badge bg-warning text-dark">Yes</span>
                          </td>
                          <td class="text-end">
                            <div class="d-inline-flex gap-2">
                              <button
                                class="btn btn-sm text-white"
                                style="background-color: #5fcf80"
                              >
                                Approve
                              </button>

                              <button class="btn btn-sm btn-outline-danger">
                                Cancel
                              </button>

                              <button class="btn btn-sm btn-outline-warning">
                                Paid
                              </button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="text-muted small mt-2">
                    Status is informational only. Paid indicates whether the
                    teacher profile is featured.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection