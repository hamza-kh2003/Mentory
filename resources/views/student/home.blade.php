@extends('layouts.master')

@section('title', 'MentorRate - Find Your Perfect Mentor')

@section('css')
<style>
  .feature-card{
    transition: all .25s ease;
  }
  .feature-card:hover{
    transform: translateY(-6px);
    box-shadow: 0 12px 28px rgba(0,0,0,.10) !important;
    border-color: rgba(95,207,128,.35) !important;
  }
  .feature-icon{
    width: 56px;
    height: 56px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 14px;
    background: rgba(95,207,128,.12);
    color: #5fcf80;
  }
</style>
@endsection

@section('content')
    
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background py-5">
        <img src="{{ asset('assets/img/hero.png') }}" alt="" data-aos="fade-in" />

        <div class="container">
            <div class="hero-content py-5">
                <h2 data-aos="fade-up" data-aos-delay="100">
                    Learn Smarter,<br />Choose the Right Mentor
                </h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    Find verified teachers, book sessions, and rate with confidence.
                </p>
                <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('pages.teachers') }}" class="btn-get-started">Browse Teachers</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- Featured Teachers -->
    <section id="featured-teachers" class="section py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Featured Teachers</h2>
                <p class="text-muted">Top mentors highlighted by admin</p>
            </div>

            <div id="featuredTeachersCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row g-4">
                            <!-- Teacher 1 -->
                            <div class="col-md-4">
                                <div class="card shadow-sm border-0 h-100">
                                    <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?fit=crop&w=400&h=300&q=80" 
                                         class="card-img-top"
                                         style="height:220px;object-fit:cover" 
                                         alt="Teacher">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h5 class="mb-0 fw-bold">Mr. Ahmad Saleh</h5>
                                            <span class="badge" style="background-color: #5fcf80; color: white;">Featured</span>
                                        </div>
                                        <div class="text-muted small mb-3">Math • Scientific</div>
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="text-warning me-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </div>
                                            <span class="text-muted ms-2">4.8 (120)</span>
                                        </div>
                                        <a href="#" class="btn w-100" style="background-color: #5fcf80; color: white;">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Teacher 2 -->
                            <div class="col-md-4">
                                <div class="card shadow-sm border-0 h-100">
                                    <img src="https://images.unsplash.com/photo-1582750433449-648ed127bb54?fit=crop&w=400&h=300&q=80" 
                                         class="card-img-top"
                                         style="height:220px;object-fit:cover" 
                                         alt="Teacher">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h5 class="mb-0 fw-bold">Ms. Sarah Johnson</h5>
                                            <span class="badge" style="background-color: #5fcf80; color: white;">Featured</span>
                                        </div>
                                        <div class="text-muted small mb-3">English • Literary</div>
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="text-warning me-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <span class="text-muted ms-2">4.9 (98)</span>
                                        </div>
                                        <a href="#" class="btn w-100" style="background-color: #5fcf80; color: white;">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Teacher 3 -->
                            <div class="col-md-4">
                                <div class="card shadow-sm border-0 h-100">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?fit=crop&w=400&h=300&q=80" 
                                         class="card-img-top"
                                         style="height:220px;object-fit:cover" 
                                         alt="Teacher">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h5 class="mb-0 fw-bold">Dr. Michael Chen</h5>
                                            <span class="badge" style="background-color: #5fcf80; color: white;">Featured</span>
                                        </div>
                                        <div class="text-muted small mb-3">Physics • Scientific</div>
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="text-warning me-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <span class="text-muted ms-2">4.7 (76)</span>
                                        </div>
                                        <a href="#" class="btn w-100" style="background-color: #5fcf80; color: white;">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row g-4">
                            <!-- Teacher 4 -->
                            <div class="col-md-4">
                                <div class="card shadow-sm border-0 h-100">
                                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?fit=crop&w=400&h=300&q=80" 
                                         class="card-img-top"
                                         style="height:220px;object-fit:cover" 
                                         alt="Teacher">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h5 class="mb-0 fw-bold">Prof. Elena Rodriguez</h5>
                                            <span class="badge" style="background-color: #5fcf80; color: white;">Featured</span>
                                        </div>
                                        <div class="text-muted small mb-3">Chemistry • Scientific</div>
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="text-warning me-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </div>
                                            <span class="text-muted ms-2">4.6 (64)</span>
                                        </div>
                                        <a href="#" class="btn w-100" style="background-color: #5fcf80; color: white;">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Teacher 5 -->
                            <div class="col-md-4">
                                <div class="card shadow-sm border-0 h-100">
                                    <img src="https://images.unsplash.com/photo-1544717305-99670f9c28c6?fit=crop&w=400&h=300&q=80" 
                                         class="card-img-top"
                                         style="height:220px;object-fit:cover" 
                                         alt="Teacher">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h5 class="mb-0 fw-bold">Mr. Omar Yousef</h5>
                                            <span class="badge" style="background-color: #5fcf80; color: white;">Featured</span>
                                        </div>
                                        <div class="text-muted small mb-3">Arabic • Literary</div>
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="text-warning me-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <span class="text-muted ms-2">4.5 (51)</span>
                                        </div>
                                        <a href="#" class="btn w-100" style="background-color: #5fcf80; color: white;">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Teacher 6 -->
                            <div class="col-md-4">
                                <div class="card shadow-sm border-0 h-100">
                                    <img src="https://images.unsplash.com/photo-1542740348-39501cd6e2b4?fit=crop&w=400&h=300&q=80" 
                                         class="card-img-top"
                                         style="height:220px;object-fit:cover" 
                                         alt="Teacher">
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h5 class="mb-0 fw-bold">Ms. Lina Omar</h5>
                                            <span class="badge" style="background-color: #5fcf80; color: white;">Featured</span>
                                        </div>
                                        <div class="text-muted small mb-3">Biology • Scientific</div>
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="text-warning me-2">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <span class="text-muted ms-2">4.9 (89)</span>
                                        </div>
                                        <a href="#" class="btn w-100" style="background-color: #5fcf80; color: white;">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#featuredTeachersCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" style="background-color: #5fcf80; border-radius: 50%;"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#featuredTeachersCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" style="background-color: #5fcf80; border-radius: 50%;"></span>
                </button>
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('pages.teachers') }}" class="btn" style="color: #5fcf80; border-color: #5fcf80; padding: 10px 40px;">
                    View All Teachers
                </a>
            </div>
        </div>
    </section>
    <!-- /Featured Teachers -->

    <!-- About Us -->
    <section id="about" class="section py-5 bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>About MentorRate</h2>
                <p class="text-muted">Trusted ratings, real learning</p>
            </div>

            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid rounded" alt="" />
                </div>

                <div class="col-lg-6">
                    <p class="mb-4">
                        MentorRate helps students find the right teacher with verified reviews.
                        Reviews are allowed only after a completed request.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="bi bi-check-circle me-2" style="color: #5fcf80;"></i>
                            <span>Only <strong>approved</strong> teacher profiles appear to students.</span>
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-check-circle me-2" style="color: #5fcf80;"></i>
                            <span>Requests ensure ratings come from real interactions.</span>
                        </li>
                        <li class="mb-4">
                            <i class="bi bi-check-circle me-2" style="color: #5fcf80;"></i>
                            <span>Filter by subject and branch, then sort by rating.</span>
                        </li>
                    </ul>
                    <a href="{{ route('pages.teachers') }}" class="text-decoration-none fw-bold" style="color: #5fcf80;">
                        Browse Teachers <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Us -->

    <!-- Why Choose Us -->
    <section id="why-us" class="section py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Why Choose Us</h2>
                <p class="text-muted">We focus on simplicity and trust</p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="h-100 p-4">
                        <h3 class="mb-4">Why MentorRate?</h3>
                        <p class="mb-4">
                            No fake reviews — ratings are linked to real requests.
                            Students discover the best teachers faster.
                        </p>
                        <a href="{{ route('pages.teachers') }}" class="text-decoration-none fw-bold" style="color: #5fcf80;">
                            Explore Now <i class="bi bi-chevron-right ms-1"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="text-center p-4 h-100">
                                <i class="bi bi-shield-check display-6 mb-3" style="color: #5fcf80;"></i>
                                <h4 class="mb-3">Approved Profiles</h4>
                                <p class="text-muted">Teachers appear only after admin approval to keep quality high.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="text-center p-4 h-100">
                                <i class="bi bi-funnel display-6 mb-3" style="color: #5fcf80;"></i>
                                <h4 class="mb-3">Smart Filtering</h4>
                                <p class="text-muted">Filter by subject and branch, then quickly find your match.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="text-center p-4 h-100">
                                <i class="bi bi-star-fill display-6 mb-3" style="color: #5fcf80;"></i>
                                <h4 class="mb-3">Trusted Ratings</h4>
                                <p class="text-muted">Reviews are tied to completed requests — real experience only.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Why Choose Us -->

    <!-- Features -->
    <section id="features" class="section py-5 bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Our Features</h2>
                <p class="text-muted">Everything you need to find the perfect mentor</p>
            </div>

            <div class="row gy-4">

                {{-- Feature Card --}}
                <div class="col-lg-3 col-md-4">
                    <div class="card h-100 border feature-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon mb-3">
                                <i class="bi bi-search fs-3"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Search Teachers</h5>
                            <p class="text-muted small mb-0">Find mentors quickly by name.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="card h-100 border feature-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon mb-3">
                                <i class="bi bi-funnel fs-3"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Filter by Subject</h5>
                            <p class="text-muted small mb-0">Pick the subject you need.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="card h-100 border feature-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon mb-3">
                                <i class="bi bi-diagram-3 fs-3"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Filter by Branch</h5>
                            <p class="text-muted small mb-0">Scientific or Literary options.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="card h-100 border feature-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon mb-3">
                                <i class="bi bi-send-check fs-3"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Request a Teacher</h5>
                            <p class="text-muted small mb-0">Send a request in one click.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="card h-100 border feature-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon mb-3">
                                <i class="bi bi-star-fill fs-3"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Rate After Completed</h5>
                            <p class="text-muted small mb-0">Only real reviews after completion.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="card h-100 border feature-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon mb-3">
                                <i class="bi bi-person-badge fs-3"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Teacher Profiles</h5>
                            <p class="text-muted small mb-0">Clear info, bio, and stats.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="card h-100 border feature-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon mb-3">
                                <i class="bi bi-patch-check fs-3"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Featured Teachers</h5>
                            <p class="text-muted small mb-0">Admin highlighted top mentors.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="card h-100 border feature-card">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon mb-3">
                                <i class="bi bi-shield-lock fs-3"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Role Protected</h5>
                            <p class="text-muted small mb-0">Permissions for each user role.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /Features -->

    <!-- CTA Section -->
    <section class="section py-5" style="background-color: #5fcf80;">
        <div class="container">
            <div class="text-center py-4">
                <h3 class="text-white mb-3">Ready to Find Your Perfect Mentor?</h3>
                <p class="text-white mb-4">Join thousands of successful students who improved their learning with MentorRate.</p>
                <a href="{{ route('pages.teachers') }}" class="btn btn-light px-4">
                    Browse Teachers
                </a>
            </div>
        </div>
    </section>
    <!-- /CTA Section -->

@endsection

