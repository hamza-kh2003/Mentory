@extends('layouts.master')

@section('title','My Requests')

@section('content')
<section class="py-4">
  <div class="container" data-aos="fade-up">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h3 class="mb-1">My Requests</h3>
        <p class="text-muted small mb-0">
          Track your lesson requests status
        </p>
      </div>
    </div>

    <!-- Alerts -->
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    @if(session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif

    <!-- Requests List -->
    <div class="row g-3">

      @forelse($requests as $req)
        <div class="col-12">
          <div class="card shadow-sm border-0">
            <div class="card-body d-flex flex-wrap justify-content-between align-items-center gap-3">

              <!-- Teacher Info -->
              <div>
                <h6 class="mb-1">
                  {{ $req->teacherProfile->display_name }}
                </h6>
                <div class="text-muted small">
                  {{ $req->teacherProfile->subject?->name }}
                  •
                  {{ $req->teacherProfile->branch?->name }}
                </div>
              </div>

              <!-- Right Side: Status + Action -->
              <div class="d-flex align-items-center gap-2">

                @php
                  $badgeClass = match($req->status) {
                    'pending'   => 'bg-warning text-dark',
                    'accepted'  => 'bg-info text-dark',
                    'completed' => 'bg-success',
                    'rejected'  => 'bg-danger',
                    default     => 'bg-secondary',
                  };
                @endphp

                <span class="badge {{ $badgeClass }} px-3 py-2">
                  {{ ucfirst($req->status) }}
                </span>

                {{-- Action button appears ONLY when completed --}}
                @if($req->status === 'completed')
                  <a
                    href="{{ route('student.teacher-details', $req->teacherProfile->id) }}#add-review"
                    class="btn btn-sm btn-outline-success"
                  >
                    Rate Teacher
                  </a>
                @endif

              </div>

            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center text-muted py-5">
          You have no requests yet.
        </div>
      @endforelse

    </div>

    <!-- Pagination -->
    @if($requests->hasPages())
      <div class="mt-4 d-flex justify-content-center">
        {{ $requests->links('pagination::bootstrap-5') }}
      </div>
    @endif

    <!-- Footer Note -->
    <div class="text-muted small mt-3">
      You can rate and comment on a teacher only after the request is marked as
      <strong>Completed</strong>.
    </div>

  </div>
</section>
@endsection
