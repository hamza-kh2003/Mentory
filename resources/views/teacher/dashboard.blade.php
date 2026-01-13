@extends('layouts.master')

@section('title','Teacher Dashboard')

@section('content')
     <section class="py-4">
        <div class="container" data-aos="fade-up">
          <!-- Header -->
          <div
            class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4"
          >
            <div>
              <h3 class="mb-1">Teacher Panel</h3>
              <div class="text-muted small">
                Manage your profile and student service requests
              </div>
            </div>

            <!-- Approval Status -->
            <span class="badge bg-warning text-dark px-3 py-2">
              Pending Approval
            </span>
          </div>

          <!-- Info Message -->
          <div class="alert alert-warning small">
            Your profile is under review. Students will not see your profile
            until admin approval.
          </div>

          <div class="row g-4">
            <!-- Teacher Profile -->
            <div class="col-12 col-lg-5">
              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <h5 class="mb-3">Teacher Profile</h5>

                  <form>
                    <!-- ✅ Teacher Image (ONLY ADDITION) -->
                    <div class="mb-3 text-center">
                      <img
                        src="assets/img/teacher-placeholder.jpg"
                        alt="Teacher Image"
                        class="rounded-circle mb-2"
                        style="width: 120px; height: 120px; object-fit: cover"
                      />
                      <label class="form-label d-block">Profile Image</label>
                      <input type="file" class="form-control" />
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Display Name</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Mr. Ahmad Saleh"
                      />
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Subject</label>
                      <select class="form-select">
                        <option selected disabled>Select subject</option>
                        <option>Math</option>
                        <option>Physics</option>
                        <option>Chemistry</option>
                        <option>Arabic</option>
                        <option>English</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Branch</label>
                      <select class="form-select">
                        <option selected disabled>Select branch</option>
                        <option>Scientific</option>
                        <option>Literary</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Experience (Years)</label>
                      <input
                        type="number"
                        class="form-control"
                        placeholder="5"
                      />
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Phone</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="07XXXXXXXX"
                      />
                    </div>

                    <div class="mb-3">
                      <label class="form-label">About</label>
                      <textarea
                        class="form-control"
                        rows="4"
                        placeholder="Short bio..."
                      ></textarea>
                    </div>

                    <div class="d-grid">
                      <button
                        type="button"
                        class="btn text-white"
                        style="background-color: #5fcf80"
                      >
                        Save Profile
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- Requests Table -->
            <div class="col-12 col-lg-7">
              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center mb-3"
                  >
                    <h5 class="mb-0">Student Service Requests</h5>
                    <span class="text-muted small">
                      Accept / Cancel / Complete
                    </span>
                  </div>

                  <div class="table-responsive">
                    <table class="table align-middle">
                      <thead class="table-light">
                        <tr>
                          <th>Student</th>
                          <th>Phone</th>
                          <th>Status</th>
                          <th class="text-end">Actions</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>
                            <div class="fw-semibold">Student A</div>
                            <div class="text-muted small">
                              Math • Scientific
                            </div>
                          </td>
                          <td class="text-muted">0791234567</td>
                          <td>
                            <span class="badge bg-warning text-dark"
                              >Pending</span
                            >
                          </td>
                          <td class="text-end">
                            <div class="d-inline-flex gap-2">
                              <button
                                class="btn btn-sm text-white"
                                style="background-color: #5fcf80"
                              >
                                Accept
                              </button>
                              <button class="btn btn-sm btn-outline-danger">
                                Cancel
                              </button>
                              <button class="btn btn-sm btn-outline-success">
                                Complete
                              </button>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <div class="fw-semibold">Student B</div>
                            <div class="text-muted small">
                              English • Literary
                            </div>
                          </td>
                          <td class="text-muted">0789876543</td>
                          <td>
                            <span class="badge bg-info text-dark"
                              >Accepted</span
                            >
                          </td>
                          <td class="text-end">
                            <div class="d-inline-flex gap-2">
                              <button
                                class="btn btn-sm text-white"
                                style="background-color: #5fcf80"
                              >
                                Accept
                              </button>
                              <button class="btn btn-sm btn-outline-danger">
                                Cancel
                              </button>
                              <button class="btn btn-sm btn-outline-success">
                                Complete
                              </button>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <div class="fw-semibold">Student C</div>
                            <div class="text-muted small">
                              Physics • Scientific
                            </div>
                          </td>
                          <td class="text-muted">0775554433</td>
                          <td>
                            <span class="badge bg-success">Completed</span>
                          </td>
                          <td class="text-end">
                            <div class="d-inline-flex gap-2">
                              <button
                                class="btn btn-sm text-white"
                                style="background-color: #5fcf80"
                              >
                                Accept
                              </button>
                              <button class="btn btn-sm btn-outline-danger">
                                Cancel
                              </button>
                              <button class="btn btn-sm btn-outline-success">
                                Complete
                              </button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="text-muted small">
                    Tip: Mark the request as <strong>Completed</strong> after
                    finishing the service so the student can rate you.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection