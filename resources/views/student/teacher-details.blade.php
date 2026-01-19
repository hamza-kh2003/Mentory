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
                src="{{ $teacher->image_path
                      ? asset('storage/'.$teacher->image_path)
                      : asset('assets/img/teacher-placeholder.jpg') }}"
                alt="Teacher"
                class="rounded"
                style="width:170px;height:170px;object-fit:cover"
              />

              <!-- Info -->
              <div class="flex-grow-1">
                <div class="d-flex justify-content-between align-items-start">
                  <div>
                    <h3 class="mb-1">{{ $teacher->display_name }}</h3>
                  </div>

                  <!-- Rating -->
                  <div class="text-end">
                    <div class="fw-semibold">
                      <i class="bi bi-star-fill text-warning"></i>
                      @if(!is_null($teacher->reviews_avg_rating))
                        {{ number_format($teacher->reviews_avg_rating, 1) }}
                      @else
                        0.0
                      @endif
                    </div>
                    <div class="text-muted small">
                      ({{ $teacher->reviews_count }} reviews)
                    </div>
                  </div>
                </div>

                <hr class="my-3" />

                <!-- Quick Details -->
                <div class="row g-2 small">
                  <div class="col-12 col-md-6">
                    <div class="p-2 bg-light rounded">
                      <i class="bi bi-briefcase me-1"></i>
                      <strong>Experience:</strong>
                      {{ $teacher->experience_years }} years
                    </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="p-2 bg-light rounded">
                      <i class="bi bi-book me-1"></i>
                      <strong>Subject:</strong>
                      {{ $teacher->subject?->name }}
                    </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="p-2 bg-light rounded">
                      <i class="bi bi-diagram-3 me-1"></i>
                      <strong>Branch:</strong>
                      {{ $teacher->branch?->name }}
                    </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="p-2 bg-light rounded">
                      <i class="bi bi-telephone me-1"></i>
                      <strong>Phone:</strong>
                      {{ $teacher->phone }}
                    </div>
                  </div>
                </div>

                <hr class="my-3" />

                <!-- Bio -->
                <h6 class="mb-2">About</h6>
                <p class="text-muted "     style=" max-height:160px; overflow-y:auto; overflow-wrap:anywhere; 
                word-break:break-word;  padding-right:6px; ">
                  {{ $teacher->bio ?? 'No bio yet.' }}
                </p>

              </div>
            </div>
          </div>
        </div>

        <!-- Reviews Section -->
        <div class="card shadow-sm border-0 mt-4">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="mb-0">Reviews</h5>
              <span class="text-muted small">
                Latest comments from students
              </span>
            </div>

            @if($reviews->isEmpty())
              <div class="text-muted">No reviews yet.</div>
            @else
              @foreach($reviews as $r)
                <div class="border rounded p-3 mb-3">
                  <div class="d-flex justify-content-between align-items-start">
                    <div>
                      <div class="fw-semibold">
                        {{ $r->serviceRequest?->student?->name ?? 'Student' }}
                      </div>
                      <div class="text-muted small">
                        {{ $teacher->subject?->name }} • {{ $teacher->branch?->name }}
                      </div>
                    </div>

                    <div class="text-end small">
                      <i class="bi bi-star-fill text-warning"></i>
                      <strong>{{ number_format($r->rating, 1) }}</strong>
                      <div class="text-muted">
                        {{ $r->created_at->diffForHumans() }}
                      </div>
                    </div>
                  </div>

                  @if($r->comment)
                    <p class="mb-0 mt-2 text-muted">
                      {{ $r->comment }}
                    </p>
                  @endif
                </div>
              @endforeach
            @endif

            <div class="alert alert-warning small mb-0">
              You can leave a review only after the teacher marks your request as
              <strong>Completed</strong>.
            </div>
          </div>
        </div>

        <!-- Add Review (static for now) -->
        <div class="card shadow-sm border-0 mt-4 " id="add-review">
          <div class="card-body">
            <h5 class="mb-3">Add Your Review</h5>

            <form>
              <div class="mb-3">
                <label class="form-label fw-semibold">Your Rating</label>
                <div class="d-flex gap-2">
                  @for($i = 5; $i >= 1; $i--)
                    <input
                      type="radio"
                      class="btn-check"
                      name="rating"
                      id="rate{{ $i }}"
                    />
                    <label class="btn btn-outline-warning" for="rate{{ $i }}">
                      {{ $i }} ★
                    </label>
                  @endfor
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label fw-semibold">Your Comment</label>
                <textarea
                  class="form-control"
                  rows="4"
                  placeholder="Share your experience with this teacher..."
                ></textarea>
              </div>

              <div class="d-grid">
                <button
                  type="submit"
                  class="btn text-white"
                  style="background-color:#5fcf80"
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
        <div class="card shadow-sm border-0 position-sticky" style="top:110px">
          <div class="card-body">
            <h5 class="mb-2">Request Service</h5>
            <p class="text-muted small">
              Click below to send a request. After completion, you can rate and comment once.
            </p>

            <div class="d-grid mb-2">
  @guest
    <a href="{{ route('login') }}" class="btn text-white" style="background-color:#5fcf80">
      Request Lesson
    </a>
  @else
    @if(auth()->user()->role === 'student')
      <form method="POST" action="{{ route('student.requests.store', $teacher->id) }}">
        @csrf
        <button type="submit" class="btn text-white w-100" style="background-color:#5fcf80">
          Request Lesson
        </button>
      </form>
    @else
      <button type="button" class="btn btn-secondary w-100" disabled>
        Request Lesson
      </button>
    @endif
  @endguest
</div>


            <div class="d-grid mb-3">
              <button type="button" class="btn btn-outline-danger">
                <i class="bi bi-heart me-1"></i> Add to Favorite
              </button>
            </div>

            <hr />

            <div class="small text-muted">
              <div class="d-flex justify-content-between mb-2">
                <span>Subject</span>
                <strong>{{ $teacher->subject?->name }}</strong>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <span>Branch</span>
                <strong>{{ $teacher->branch?->name }}</strong>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <span>Rating</span>
                <strong>
                  {{ number_format($teacher->reviews_avg_rating ?? 0, 1) }}
                </strong>
              </div>
              <div class="d-flex justify-content-between">
                <span>Reviews</span>
                <strong>{{ $teacher->reviews_count }}</strong>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection
