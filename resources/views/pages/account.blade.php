@extends('layouts.master')

@section('title','Account Setting')

@section('content')
      <section class="py-5">
        <div class="container" data-aos="fade-up">
          <!-- Page Title -->
          <div class="text-center mb-4">
            <h3 class="mb-1">My Account</h3>
            <p class="text-muted">
              Manage your personal information and security settings
            </p>
          </div>

          <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
              <!-- Profile Info -->
              <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                  <h5 class="mb-3">Profile Information</h5>

                  <form>
                    <div class="mb-3">
                      <label class="form-label">Full Name</label>
                      <input
                        type="text"
                        class="form-control"
                        value="Hamza Ahmad"
                      />
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input
                        type="email"
                        class="form-control"
                        value="hamza@email.com"
                      />
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Phone Number</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="07XXXXXXXX"
                      />
                    </div>

                    <div class="d-grid">
                      <button
                        type="button"
                        class="btn text-white"
                        style="background-color: #5fcf80"
                      >
                        Save Changes
                      </button>
                    </div>
                  </form>
                </div>
              </div>

              <!-- Change Password -->
              <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                  <h5 class="mb-3">Change Password</h5>

                  <form>
                    <div class="mb-3">
                      <label class="form-label">Current Password</label>
                      <input type="password" class="form-control" />
                    </div>

                    <div class="mb-3">
                      <label class="form-label">New Password</label>
                      <input type="password" class="form-control" />
                    </div>

                    <div class="mb-3">
                      <label class="form-label">Confirm New Password</label>
                      <input type="password" class="form-control" />
                    </div>

                    <div class="d-grid">
                      <button type="button" class="btn btn-outline-success">
                        Update Password
                      </button>
                    </div>
                  </form>
                </div>
              </div>

              <!-- Delete Account -->
              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <h5 class="text-danger mb-2">Delete Account</h5>
                  <p class="text-muted small mb-3">
                    This action is permanent and cannot be undone.
                  </p>

                  <div class="d-grid">
                    <button
                      type="button"
                      class="btn btn-danger"
                      data-bs-toggle="modal"
                      data-bs-target="#deleteAccountModal"
                    >
                      Delete My Account
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Delete Account Modal -->
      <div
        class="modal fade"
        id="deleteAccountModal"
        tabindex="-1"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-danger">Confirm Account Deletion</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>

            <div class="modal-body">
              Are you sure you want to delete your account?
              <br />
              <strong>This action cannot be undone.</strong>
            </div>

            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-light"
                data-bs-dismiss="modal"
              >
                Cancel
              </button>
              <button type="button" class="btn btn-danger">Yes, Delete</button>
            </div>
          </div>
        </div>
      </div>
@endsection