@extends('layouts.master')

@section('title','Favorites')

@section('content')
    
 <section class="py-5">
        <div class="container" data-aos="fade-up">
          <!-- Page Title -->
          <div class="text-center mb-4">
            <h3 class="mb-1">My Favorite Teachers</h3>
            <p class="text-muted">Teachers you saved for quick access</p>
          </div>

          <!-- Result Count -->
          <div class="text-muted small mb-3">
            Showing <strong>3</strong> favorite teachers
          </div>

          <!-- Favorites Grid -->
          <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card h-100 shadow-sm border-0">
                <img
                  src="./assets/img/hero.png"
                  class="card-img-top"
                  alt="Teacher photo"
                  style="height: 220px; object-fit: cover"
                />

                <div class="card-body">
                  <!-- Name + Rating -->
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

                  <!-- Subject / Branch -->
                  <p class="text-muted small mb-3">Math • Scientific</p>

                  <!-- Actions -->
                  <div class="d-flex gap-2">
                    <a
                      href="teacher-details.html"
                      class="btn btn-outline-success flex-grow-1"
                    >
                      View Details
                    </a>

                    <button
                      type="button"
                      class="btn btn-outline-danger"
                      title="Remove from favorites"
                    >
                      <i class="bi bi-trash"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card h-100 shadow-sm border-0">
                <img
                  src="./assets/img/apple-touch-icon.png"
                  class="card-img-top"
                  alt="Teacher photo"
                  style="height: 220px; object-fit: cover"
                />

                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-start mb-1"
                  >
                    <h5 class="card-title mb-0">Ms. Lina Omar</h5>

                    <div class="text-end small">
                      <i class="bi bi-star-fill text-warning"></i>
                      <strong>4.6</strong>
                      <div class="text-muted">(78)</div>
                    </div>
                  </div>

                  <p class="text-muted small mb-3">English • Literary</p>

                  <div class="d-flex gap-2">
                    <a
                      href="teacher-details.html"
                      class="btn btn-outline-success flex-grow-1"
                    >
                      View Details
                    </a>

                    <button
                      type="button"
                      class="btn btn-outline-danger"
                      title="Remove from favorites"
                    >
                      <i class="bi bi-trash"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card h-100 shadow-sm border-0">
                <img
                  src="./assets/img/hero-bg.jpg"
                  class="card-img-top"
                  alt="Teacher photo"
                  style="height: 220px; object-fit: cover"
                />

                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-start mb-1"
                  >
                    <h5 class="card-title mb-0">Mr. Yazan Khaled</h5>

                    <div class="text-end small">
                      <i class="bi bi-star-fill text-warning"></i>
                      <strong>4.9</strong>
                      <div class="text-muted">(205)</div>
                    </div>
                  </div>

                  <p class="text-muted small mb-3">Physics • Scientific</p>

                  <div class="d-flex gap-2">
                    <a
                      href="teacher-details.html"
                      class="btn btn-outline-success flex-grow-1"
                    >
                      View Details
                    </a>

                    <button
                      type="button"
                      class="btn btn-outline-danger"
                      title="Remove from favorites"
                    >
                      <i class="bi bi-trash"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Empty State Example (لو ما في Favorites) -->
          <!--
      <div class="text-center py-5">
        <i class="bi bi-heart text-danger fs-1"></i>
        <h4 class="mt-3">No favorites yet</h4>
        <p class="text-muted mb-4">
          Browse teachers and add them to your favorites to see them here.
        </p>
        <a href="teachers.html" class="btn text-white" style="background-color:#5fcf80">
          Browse Teachers
        </a>
      </div>
      -->

          <div class="text-muted small mt-4">
            Tip: Removing a teacher from favorites will not affect your service
            requests.
          </div>
        </div>
      </section>
  
@endsection