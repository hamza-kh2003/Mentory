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
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div>
            <h3 class="mb-1">Teacher Profile</h3>
            <div class="text-muted small">
              Review teacher information before approval
            </div>
          </div>

          <a href="{{ route('admin.teacher-profiles') }}"
             class="btn btn-sm btn-outline-secondary">
            ← Back
          </a>
        </div>

        <!-- Profile Card -->
        <div class="card shadow-sm border-0 mb-4">
          <div class="card-body">

            <div class="d-flex flex-column flex-md-row gap-4">
              <!-- Image -->
              <img
                src="{{ asset('assets/img/trainers/trainer-1.jpg') }}"
                alt="Teacher"
                style="width:160px;height:160px;object-fit:cover;border-radius:12px"
              />

              <!-- Info -->
              <div class="flex-grow-1">
                <h4 class="mb-1">Mr. Ahmad Saleh</h4>
                <div class="text-muted mb-2">
                  Math • Scientific
                </div>

                <div class="row g-2 small mb-3">
                  <div class="col-md-6">
                    <strong>Phone:</strong> 0791234567
                  </div>
                  <div class="col-md-6">
                    <strong>Experience:</strong> 8 years
                  </div>
                  <div class="col-md-6">
                    <strong>Status:</strong>
                    <span class="badge bg-warning text-dark">Pending</span>
                  </div>
                  <div class="col-md-6">
                    <strong>Paid:</strong>
                    <span class="badge bg-secondary">No</span>
                  </div>
                </div>

                <hr>

                <h6>About</h6>
                <p class="text-muted mb-0">
                  Tawjihi Math teacher focused on problem-solving strategies and
                  exam techniques. Weekly practice tests and structured plans
                  for each student.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Actions -->
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <h5 class="mb-3">Admin Actions</h5>

            <div class="d-flex flex-wrap gap-2">
              <!-- Approve -->
              <button class="btn text-white"
                      style="background-color:#5fcf80">
                Approve Profile
              </button>

              <!-- Reject -->
              <button class="btn btn-outline-danger">
                Reject Profile
              </button>

              <!-- Toggle Paid -->
              <button class="btn btn-outline-warning">
                Mark as Paid
              </button>
            </div>

            <div class="text-muted small mt-3">
              Approval controls visibility for students.  
              Paid status controls priority in teachers list.
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection
