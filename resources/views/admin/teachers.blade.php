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
              <!-- Header -->
              <div class="mb-3">
                <h3 class="mb-1">Teachers</h3>
                <div class="text-muted small">
                  View and manage teacher accounts
                </div>
              </div>

              <!-- Table -->
              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center mb-3"
                  >
                    <div class="fw-semibold">All Teachers</div>
                    <div class="text-muted small">Showing 5 teachers</div>
                  </div>

                  <div class="table-responsive">
                    <table class="table align-middle">
                      <thead class="table-light">
                        <tr>
                          <th>Teacher</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Joined</th>
                          <th class="text-end">Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        <!-- Row -->
                        <tr>
                          <td>
                            <div class="fw-semibold">Mr. Ahmad Saleh</div>
                          </td>
                          <td>ahmad@email.com</td>
                          <td>0791234567</td>
                          <td class="text-muted small">2026-01-09</td>
                          <td class="text-end">
                            <button class="btn btn-sm btn-outline-danger">
                              Delete
                            </button>
                          </td>
                        </tr>

                        <!-- Row -->
                        <tr>
                          <td>
                            <div class="fw-semibold">Ms. Lina Omar</div>
                          </td>
                          <td>lina@email.com</td>
                          <td>0789988776</td>
                          <td class="text-muted small">2026-01-07</td>
                          <td class="text-end">
                            <button class="btn btn-sm btn-outline-danger">
                              Delete
                            </button>
                          </td>
                        </tr>

                        <!-- Row -->
                        <tr>
                          <td>
                            <div class="fw-semibold">Mr. Yazan Khaled</div>
                          </td>
                          <td>yazan@email.com</td>
                          <td>0774455667</td>
                          <td class="text-muted small">2026-01-05</td>
                          <td class="text-end">
                            <button class="btn btn-sm btn-outline-danger">
                              Delete
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="text-muted small mt-2">
                    Deleting a teacher will remove the user account and all
                    related data.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection