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
                <h3 class="mb-1">Reviews</h3>
                <div class="text-muted small">
                  View and manage teacher reviews
                </div>
              </div>

              <!-- Reviews Table -->
              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center mb-3"
                  >
                    <div class="fw-semibold">All Reviews</div>
                    <div class="text-muted small">Showing 6 reviews</div>
                  </div>

                  <div class="table-responsive">
                    <table class="table align-middle">
                      <thead class="table-light">
                        <tr>
                          <th>Student</th>
                          <th>Teacher</th>
                          <th>Rating</th>
                          <th>Comment</th>
                          <th>Created</th>
                          <th class="text-end">Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        <!-- Review -->
                        <tr>
                          <td>Hamza Ahmad</td>
                          <td>Mr. Ahmad Saleh</td>
                          <td>
                            <i class="bi bi-star-fill text-warning"></i> 5
                          </td>
                          <td style="max-width: 320px">
                            <div
                              class="small"
                              style="white-space: nowrap; overflow-x: auto"
                            >
                              Very clear explanation and helpful teacher. The
                              session was long and detailed and helped me
                              understand many concepts I struggled with during
                              Tawjihi preparation.
                            </div>
                          </td>
                          <td class="text-muted small">2026-01-12</td>
                          <td class="text-end">
                            <button class="btn btn-sm btn-outline-danger">
                              Delete
                            </button>
                          </td>
                        </tr>

                        <!-- Review -->
                        <tr>
                          <td>Sara Khaled</td>
                          <td>Ms. Lina Omar</td>
                          <td>
                            <i class="bi bi-star-fill text-warning"></i> 4
                          </td>
                          <td style="max-width: 320px">
                            <div
                              class="small"
                              style="white-space: nowrap; overflow-x: auto"
                            >
                              Good teaching style but sometimes explanations
                              take longer than expected. Still very helpful
                              overall.
                            </div>
                          </td>
                          <td class="text-muted small">2026-01-10</td>
                          <td class="text-end">
                            <button class="btn btn-sm btn-outline-danger">
                              Delete
                            </button>
                          </td>
                        </tr>

                        <!-- Review -->
                        <tr>
                          <td>Omar Naser</td>
                          <td>Mr. Yazan Khaled</td>
                          <td>
                            <i class="bi bi-star-fill text-warning"></i> 5
                          </td>
                          <td style="max-width: 320px">
                            <div
                              class="small"
                              style="white-space: nowrap; overflow-x: auto"
                            >
                              Excellent explanations, very patient, and focuses
                              on exam-style questions which helped me a lot.
                            </div>
                          </td>
                          <td class="text-muted small">2026-01-08</td>
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
                    Deleting a review will remove it permanently from the
                    system.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection