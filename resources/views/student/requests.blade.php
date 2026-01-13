@extends('layouts.master')

@section('title','Requests')

@section('content')
    
   <section class="py-4">
        <div class="container" data-aos="fade-up">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
              <h3 class="mb-1">My Requests</h3>
              <p class="text-muted small mb-0">
                Track your service requests status
              </p>
            </div>

          </div>

          <div class="row g-3">
            <!-- Request -->
            <div class="col-12">
              <div class="card shadow-sm border-0">
                <div
                  class="card-body d-flex flex-wrap justify-content-between align-items-center gap-3"
                >
                  <div>
                    <h6 class="mb-1">Mr. Ahmad Saleh</h6>
                    <div class="text-muted small">Math • Scientific</div>
                  </div>

                  <div>
                    <span class="badge bg-warning text-dark px-3 py-2">
                      Pending
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Request -->
            <div class="col-12">
              <div class="card shadow-sm border-0">
                <div
                  class="card-body d-flex flex-wrap justify-content-between align-items-center gap-3"
                >
                  <div>
                    <h6 class="mb-1">Ms. Lina Omar</h6>
                    <div class="text-muted small">English • Literary</div>
                  </div>

                  <div>
                    <span class="badge bg-success px-3 py-2"> Completed </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="text-muted small mt-3">
            You can rate and comment on a teacher only after the request is
            marked as
            <strong>Completed</strong>.
          </div>
        </div>
      </section>
@endsection