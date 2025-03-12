@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
@vite('resources/assets/vendor/libs/apex-charts/apex-charts.scss')
@endsection

@section('vendor-script')
@vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')
@endsection

@section('page-script')
@vite('resources/assets/js/dashboards-analytics.js')
@endsection

@section('content')
<div class="row gy-6">
  <!-- Transactions -->
  <div class="col-12">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex flex-column align-items-center justify-content-between">
          <h5 class="card-title m-0 me-2">Working on this...</h5>
          <div class="d-flex flex-column align-items-center">
            <img src="{{asset('assets/img/illustrations/misc-under-maintenance.png')}}" alt="misc-error" class="img-fluid z-1" width="780">
            {{-- <div>
              <a href="{{url('/')}}" class="btn btn-primary text-center my-12">Back to home</a>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
