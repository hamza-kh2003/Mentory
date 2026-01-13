@extends('layouts.master')

@section('title','Teachers')

@section('content')
    
  <section class="py-4">
        <div class="container" data-aos="fade-up">
          <!-- Search -->
          <div class="card shadow-sm border-0 mb-2">
            <div class="card-body">
              <form class="row g-2">
                <div class="col-12 col-md-9">
                  <div class="input-group">
                    <span class="input-group-text bg-white">
                      <i class="bi bi-search"></i>
                    </span>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search teacher by name..."
                    />
                  </div>
                </div>
                <div class="col-12 col-md-3 d-grid">
                  <button
                    type="button"
                    class="btn text-white"
                    style="background-color: #5fcf80"
                  >
                    Search
                  </button>
                </div>
              </form>
            </div>
          </div>

          <!-- Result Count -->
          <div class="text-muted small mb-3">
            Showing <strong>12</strong> teachers
          </div>

          <!-- Subject Filters -->
          <div class="d-flex flex-wrap gap-2 mb-3">
            <button
              class="btn btn-sm text-white"
              style="background-color: #5fcf80"
            >
              All
            </button>
            <button class="btn btn-sm btn-outline-success">Math</button>
            <button class="btn btn-sm btn-outline-success">Physics</button>
            <button class="btn btn-sm btn-outline-success">Chemistry</button>
            <button class="btn btn-sm btn-outline-success">Arabic</button>
            <button class="btn btn-sm btn-outline-success">English</button>
          </div>

          <!-- Branch Filters -->
          <div class="d-flex flex-wrap gap-2 mb-4">
            <button class="btn btn-sm btn-outline-secondary active">All</button>
            <button class="btn btn-sm btn-outline-secondary">Scientific</button>
            <button class="btn btn-sm btn-outline-secondary">Literary</button>
          </div>

          <!-- Teacher Cards -->
          <div class="row g-4">
            <!-- Card -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card h-100 shadow-sm border-0">
                <img
                  src="assets/img/about.jpg"
                  class="card-img-top"
                  alt="Teacher photo"
                  style="height: 220px; object-fit: cover"
                />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-start mb-1"
                  >
                    <h5 class="card-title mb-0">Mr. Ahmad Saleh</h5>
                    <div class="text-end small">
                      <i class="bi bi-star-fill text-warning"></i>
                      <strong>4.8</strong>
                      <div class="text-muted">(120)</div>
                    </div>
                  </div>

                  <p class="text-muted small mb-3">Math • Scientific</p>

                  <!-- Buttons -->
                  <div class="d-flex gap-2">
                    <a
                      href="{{route('student.teacher-details')}}"
                      class="btn btn-outline-success flex-grow-1"
                    >
                      View Details
                    </a>

                    <!-- Add to Favorite -->
                    <button
                      type="button"
                      class="btn btn-outline-danger"
                      title="Add to favorites"
                    >
                      <i class="bi bi-heart"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card h-100 shadow-sm border-0">
                <img
                  src="assets/img/about.jpg"
                  class="card-img-top"
                  alt="Teacher photo"
                  style="height: 220px; object-fit: cover"
                />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-start mb-1"
                  >
                    <h5 class="card-title mb-0">Mr. Ahmad Saleh</h5>
                    <div class="text-end small">
                      <i class="bi bi-star-fill text-warning"></i>
                      <strong>4.8</strong>
                      <div class="text-muted">(120)</div>
                    </div>
                  </div>

                  <p class="text-muted small mb-3">Math • Scientific</p>

                  <!-- Buttons -->
                  <div class="d-flex gap-2">
                    <a
                      href="{{route('student.teacher-details')}}"
                      class="btn btn-outline-success flex-grow-1"
                    >
                      View Details
                    </a>

                    <!-- Add to Favorite -->
                    <button
                      type="button"
                      class="btn btn-outline-danger"
                      title="Add to favorites"
                    >
                      <i class="bi bi-heart"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Card -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card h-100 shadow-sm border-0">
                <img
                  src="assets/img/about.jpg"
                  class="card-img-top"
                  alt="Teacher photo"
                  style="height: 220px; object-fit: cover"
                />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-start mb-1"
                  >
                    <h5 class="card-title mb-0">Mr. Ahmad Saleh</h5>
                    <div class="text-end small">
                      <i class="bi bi-star-fill text-warning"></i>
                      <strong>4.8</strong>
                      <div class="text-muted">(120)</div>
                    </div>
                  </div>

                  <p class="text-muted small mb-3">Math • Scientific</p>

                  <!-- Buttons -->
                  <div class="d-flex gap-2">
                    <a
                      href="{{route('student.teacher-details')}}"
                      class="btn btn-outline-success flex-grow-1"
                    >
                      View Details
                    </a>

                    <!-- Add to Favorite -->
                    <button
                      type="button"
                      class="btn btn-outline-danger"
                      title="Add to favorites"
                    >
                      <i class="bi bi-heart"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Card -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card h-100 shadow-sm border-0">
                <img
                  src="assets/img/about.jpg"
                  class="card-img-top"
                  alt="Teacher photo"
                  style="height: 220px; object-fit: cover"
                />
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-start mb-1"
                  >
                    <h5 class="card-title mb-0">Mr. Ahmad Saleh</h5>
                    <div class="text-end small">
                      <i class="bi bi-star-fill text-warning"></i>
                      <strong>4.8</strong>
                      <div class="text-muted">(120)</div>
                    </div>
                  </div>

                  <p class="text-muted small mb-3">Math • Scientific</p>

                  <!-- Buttons -->
                  <div class="d-flex gap-2">
                    <a
                      href="{{route('student.teacher-details')}}"
                      class="btn btn-outline-success flex-grow-1"
                    >
                      View Details
                    </a>

                    <!-- Add to Favorite -->
                    <button
                      type="button"
                      class="btn btn-outline-danger"
                      title="Add to favorites"
                    >
                      <i class="bi bi-heart"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection