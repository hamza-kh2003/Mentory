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
                <h3 class="mb-1">Students</h3>
                <div class="text-muted small">
                  View and manage registered students
                </div>
              </div>

              <!-- Table -->
              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center mb-3"
                  >
                    <div class="fw-semibold">All Students</div>
                    <div class="text-muted small">Showing 8 students</div>
                  </div>

                  <div class="table-responsive">
                    <table class="table align-middle">
                      <thead class="table-light">
                        <tr>
                          <th>Student</th>
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
                            <div class="fw-semibold">Hamza Ahmad</div>
                          </td>
                          <td>hamza@email.com</td>
                          <td>0791234567</td>
                          <td class="text-muted small">2026-01-10</td>
                          <td class="text-end">
                            <button class="btn btn-sm btn-outline-danger">
                              Delete
                            </button>
                          </td>
                        </tr>

                        <!-- Row -->
                        <tr>
                          <td>
                            <div class="fw-semibold">Sara Khaled</div>
                          </td>
                          <td>sara@email.com</td>
                          <td>0789988776</td>
                          <td class="text-muted small">2026-01-08</td>
                          <td class="text-end">
                            <button class="btn btn-sm btn-outline-danger">
                              Delete
                            </button>
                          </td>
                        </tr>

                        <!-- Row -->
                        <tr>
                          <td>
                            <div class="fw-semibold">Omar Naser</div>
                          </td>
                          <td>omar@email.com</td>
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
                    Deleting a student will remove the account permanently.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection