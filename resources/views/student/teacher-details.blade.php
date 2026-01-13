@extends('layouts.master')

@section('title','Teacher Details')

@section('content')
 <section class="py-4">
        <div class="container" data-aos="fade-up">
          <div class="row g-4">
            <!-- Left: Teacher Info -->
            <div class="col-12 col-lg-8">
              <div class="card shadow-sm border-0">
                <div class="card-body">
                  <div class="d-flex flex-column flex-md-row gap-3">
                    <!-- Photo -->
                    <img
                      src="assets/img/trainers/trainer-1.jpg"
                      alt="Teacher"
                      class="rounded"
                      style="width: 170px; height: 170px; object-fit: cover"
                    />

                    <!-- Info -->
                    <div class="flex-grow-1">
                      <div
                        class="d-flex justify-content-between align-items-start"
                      >
                        <div>
                          <h3 class="mb-1">Mr. Ahmad Saleh</h3>

                          <!-- ✅ REMOVED: Subject • Branch under name -->
                          <!-- <div class="text-muted">
                      <span class="me-2">Math</span> •
                      <span class="ms-2">Scientific</span>
                    </div> -->
                        </div>

                        <!-- Rating -->
                        <div class="text-end">
                          <div class="fw-semibold">
                            <i class="bi bi-star-fill text-warning"></i>
                            4.8
                          </div>
                          <div class="text-muted small">(120 reviews)</div>
                        </div>
                      </div>

                      <hr class="my-3" />

                      <!-- Quick Details -->
                      <div class="row g-2 small">
                        <div class="col-12 col-md-6">
                          <div class="p-2 bg-light rounded">
                            <i class="bi bi-briefcase me-1"></i>
                            <strong>Experience:</strong> 8 years
                          </div>
                        </div>

                        <!-- ✅ REPLACED: Location -> Subject -->
                        <div class="col-12 col-md-6">
                          <div class="p-2 bg-light rounded">
                            <i class="bi bi-book me-1"></i>
                            <strong>Subject:</strong> Math
                          </div>
                        </div>

                        <!-- ✅ REPLACED: Mode -> Branch -->
                        <div class="col-12 col-md-6">
                          <div class="p-2 bg-light rounded">
                            <i class="bi bi-diagram-3 me-1"></i>
                            <strong>Branch:</strong> Scientific
                          </div>
                        </div>

                        <div class="col-12 col-md-6">
                          <div class="p-2 bg-light rounded">
                            <i class="bi bi-telephone me-1"></i>
                            <strong>Phone:</strong> 07XXXXXXXX
                          </div>
                        </div>
                      </div>

                      <hr class="my-3" />

                      <!-- Bio -->
                      <h6 class="mb-2">About</h6>
                      <p class="text-muted mb-0">
                        Tawjihi Math teacher focused on problem-solving
                        strategies and exam techniques. Weekly practice tests
                        and structured plans for each student. Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. A quae dolores
                        quia quis illum, et rem veniam fugit ex? Dolore nihil
                        nostrum eius eveniet suscipit possimus nobis, qui
                        quisquam assumenda iste velit commodi fugiat quos,
                        itaque quaerat minima impedit molestias.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Reviews Section -->
              <div class="card shadow-sm border-0 mt-4">
                <div class="card-body">
                  <div
                    class="d-flex justify-content-between align-items-center mb-3"
                  >
                    <h5 class="mb-0">Reviews</h5>
                    <span class="text-muted small"
                      >Latest comments from students</span
                    >
                  </div>

                  <!-- Review item -->
                  <div class="border rounded p-3 mb-3">
                    <div
                      class="d-flex justify-content-between align-items-start"
                    >
                      <div>
                        <div class="fw-semibold">Student A</div>
                        <div class="text-muted small">Math • Scientific</div>
                      </div>
                      <div class="text-end small">
                        <i class="bi bi-star-fill text-warning"></i>
                        <strong>5.0</strong>
                        <div class="text-muted">2 days ago</div>
                      </div>
                    </div>
                    <p class="mb-0 mt-2 text-muted">
                      Very clear explanation and great practice material. Helped
                      me improve fast.
                    </p>
                  </div>

                  <!-- Review item -->
                  <div class="border rounded p-3 mb-3">
                    <div
                      class="d-flex justify-content-between align-items-start"
                    >
                      <div>
                        <div class="fw-semibold">Student B</div>
                        <div class="text-muted small">Math • Scientific</div>
                      </div>
                      <div class="text-end small">
                        <i class="bi bi-star-fill text-warning"></i>
                        <strong>4.0</strong>
                        <div class="text-muted">1 week ago</div>
                      </div>
                    </div>
                    <p class="mb-0 mt-2 text-muted">
                      Good teacher, explains concepts step by step.
                    </p>
                  </div>

                  <div class="alert alert-warning small mb-0">
                    You can leave a review only after the teacher marks your
                    request as <strong>Completed</strong>.
                  </div>
                </div>
              </div>

              <!-- Add Review (Visible ONLY after Completed) -->
              <div class="card shadow-sm border-0 mt-4">
                <div class="card-body">
                  <h5 class="mb-3">Add Your Review</h5>

                  <form>
                    <!-- Rating -->
                    <div class="mb-3">
                      <label class="form-label fw-semibold">Your Rating</label>
                      <div class="d-flex gap-2">
                        <input
                          type="radio"
                          class="btn-check"
                          name="rating"
                          id="rate5"
                          checked
                        />
                        <label class="btn btn-outline-warning" for="rate5"
                          >5 ★</label
                        >

                        <input
                          type="radio"
                          class="btn-check"
                          name="rating"
                          id="rate4"
                        />
                        <label class="btn btn-outline-warning" for="rate4"
                          >4 ★</label
                        >

                        <input
                          type="radio"
                          class="btn-check"
                          name="rating"
                          id="rate3"
                        />
                        <label class="btn btn-outline-warning" for="rate3"
                          >3 ★</label
                        >

                        <input
                          type="radio"
                          class="btn-check"
                          name="rating"
                          id="rate2"
                        />
                        <label class="btn btn-outline-warning" for="rate2"
                          >2 ★</label
                        >

                        <input
                          type="radio"
                          class="btn-check"
                          name="rating"
                          id="rate1"
                        />
                        <label class="btn btn-outline-warning" for="rate1"
                          >1 ★</label
                        >
                      </div>
                    </div>

                    <!-- Comment -->
                    <div class="mb-3">
                      <label class="form-label fw-semibold">Your Comment</label>
                      <textarea
                        class="form-control"
                        rows="4"
                        placeholder="Share your experience with this teacher..."
                      ></textarea>
                    </div>

                    <!-- Submit -->
                    <div class="d-grid">
                      <button
                        type="submit"
                        class="btn text-white"
                        style="background-color: #5fcf80"
                      >
                        Submit Review
                      </button>
                    </div>

                    <div class="text-muted small mt-2">
                      You can submit only one review per completed request.
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- Right: Actions -->
            <div class="col-12 col-lg-4">
              <div
                class="card shadow-sm border-0 position-sticky"
                style="top: 110px"
              >
                <div class="card-body">
                  <h5 class="mb-2">Request Service</h5>
                  <p class="text-muted small">
                    Click below to send a request. After completion, you can
                    rate and comment once.
                  </p>

                  <div class="d-grid mb-2">
                    <a
                      href="login.html"
                      class="btn text-white"
                      style="background-color: #5fcf80"
                    >
                      Request Service
                    </a>
                  </div>

                  <!-- ✅ ADDED: Add to Favorite under Request Service -->
                  <div class="d-grid mb-3">
                    <button type="button" class="btn btn-outline-danger">
                      <i class="bi bi-heart me-1"></i> Add to Favorite
                    </button>
                  </div>

                  <hr />

                  <div class="small text-muted">
                    <div class="d-flex justify-content-between mb-2">
                      <span>Subject</span>
                      <strong>Math</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                      <span>Branch</span>
                      <strong>Scientific</strong>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                      <span>Rating</span>
                      <strong>4.8</strong>
                    </div>
                    <div class="d-flex justify-content-between">
                      <span>Reviews</span>
                      <strong>120</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection