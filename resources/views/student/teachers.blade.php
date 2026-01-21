@extends('layouts.master')

@section('title','Teachers')

@section('content')
    
  <section class="py-4">
        <div class="container" data-aos="fade-up">
          <!-- Search -->
 <form class="row g-2" method="GET" action="{{ route('pages.teachers') }}">

  @if(request('subject_id'))
    <input type="hidden" name="subject_id" value="{{ request('subject_id') }}">
  @endif

  @if(request('branch_id'))
    <input type="hidden" name="branch_id" value="{{ request('branch_id') }}">
  @endif

  <div class="col-12 col-md-9">
    <input
      type="text"
      name="q"
      value="{{ request('q') }}"
      class="form-control"
      placeholder="Search teacher by name..."
    />
  </div>

  <div class="col-12 col-md-3 d-grid">
    <button type="submit" class="btn text-white" style="background-color:#5fcf80">
      Search
    </button>
  </div>
</form>


          <!-- Result Count -->
          <div class="text-muted small mt-2 mb-3">
             Showing <strong>{{ $teachers->total() }}</strong> teachers
          </div>

           <!-- Subject Filters -->
<div class="text-muted small fw-semibold mb-1">
  Filter by Subject:
</div>
         
<div class="d-flex flex-wrap gap-2 mb-3">

  {{-- All Subjects --}}
  <a
    href="{{ route('pages.teachers', array_filter([
      'q' => request('q'),
      'branch_id' => request('branch_id'),
    ])) }}"
    class="btn btn-sm {{ request('subject_id') ? 'btn-outline-success' : 'text-white' }}"
    style="{{ request('subject_id') ? '' : 'background-color:#5fcf80' }}"
  >
    All
  </a>

  {{-- Subjects --}}
  @foreach($subjects as $s)
    <a
      href="{{ route('pages.teachers', array_filter([
        'q' => request('q'),
        'subject_id' => $s->id,
        'branch_id' => request('branch_id'),
      ])) }}"
      class="btn btn-sm {{ (string)request('subject_id') === (string)$s->id ? 'text-white' : 'btn-outline-success' }}"
      style="{{ (string)request('subject_id') === (string)$s->id ? 'background-color:#5fcf80' : '' }}"
    >
      {{ $s->name }}
    </a>
  @endforeach
</div>


        <!-- Branch Filters -->

        <div class="text-muted small fw-semibold mb-1">
  Filter by Branch:
</div>


<div class="d-flex flex-wrap gap-2 mb-4">

  {{-- All Branches --}}
  <a
    href="{{ route('pages.teachers', array_filter([
      'q' => request('q'),
      'subject_id' => request('subject_id'),
    ])) }}"
    class="btn btn-sm btn-outline-secondary {{ request('branch_id') ? '' : 'active' }}"
  >
    All
  </a>

  {{-- Branches --}}
  @foreach($branches as $b)
    <a
      href="{{ route('pages.teachers', array_filter([
        'q' => request('q'),
        'subject_id' => request('subject_id'),
        'branch_id' => $b->id,
      ])) }}"
      class="btn btn-sm btn-outline-secondary {{ (string)request('branch_id') === (string)$b->id ? 'active' : '' }}"
    >
      {{ $b->name }}
    </a>
  @endforeach
</div>

<!-- clear filter-->
@if(request()->filled('q') || request()->filled('subject_id') || request()->filled('branch_id'))
  <div class="mb-3">
    <a href="{{ route('pages.teachers') }}" class="btn btn-sm btn-light border">
      Clear filters
    </a>
  </div>
@endif



          <!-- Teacher Cards -->
                  <div class="row g-4">

  @forelse($teachers as $t)
    <div class="col-12 col-sm-6 col-lg-4">
      <div class="card h-100 shadow-sm border-0">

        {{-- Image --}}
        <img
          src="{{ $t->image_path
                ? asset('storage/'.$t->image_path)
                : asset('assets/img/teacher-placeholder.jpg') }}"
          class="card-img-top"
          alt="Teacher photo"
          style="height:220px; object-fit:cover;"
        />

        <div class="card-body d-flex flex-column">

          {{-- Name + Rating --}}
          <div class="d-flex justify-content-between align-items-start mb-1">
            <h5 class="card-title mb-0">{{ $t->display_name }}</h5>

           <div class="text-end small">
  <i class="bi bi-star-fill text-warning"></i>
  <strong>{{ number_format($t->reviews_avg_rating ?? 0, 1) }}</strong>
  <div class="text-muted">
    ({{ $t->reviews_count }}) reviews
  </div>
</div>
          </div>

          {{-- Subject / Branch --}}
          <p class="text-muted small mb-2">
            {{ $t->subject?->name }} - {{ $t->branch?->name }}
          </p>

          {{-- Paid Badge 
          @if($t->is_featured)
            <span class="badge bg-warning text-dark mb-3 align-self-start">
              Paid
            </span>
          @endif--}}

          {{-- Buttons --}}
          <div class="mt-auto d-flex gap-2">
            <a
              href="{{ route('student.teacher-details', $t->id) }}"
              class="btn btn-outline-success flex-grow-1"
            >
              View Details
            </a>

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
  @empty
    <div class="col-12 text-center text-muted py-5">
      No teachers found.
    </div>
  @endforelse

</div>

@if($teachers->hasPages())
  <div class="pagination-wrapper mt-4 d-flex justify-content-center">
    {{ $teachers->links('pagination::bootstrap-5') }}
  </div>
@endif


        </div>
      </section>
@endsection