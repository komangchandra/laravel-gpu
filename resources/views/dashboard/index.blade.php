@extends('dashboard.layouts.app')

@section('title', 'Dashboard')

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Welcome {{ Auth::user()->name }}</h1>

  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    {{-- <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Total Penjualan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                Rp 100
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    <!-- Earnings (Monthly) Card Example -->
    {{-- <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Produk Terlaris</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                  Tidak ada penjualan
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-cart-plus fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    <!-- Earnings (Monthly) Card Example -->
    {{-- <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
              </div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    <!-- Pending Requests Card Example -->
    {{-- <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Pending Requests</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
@endsection

{{-- @push('js')
  <!-- Page level plugins -->
  <script src="{{ asset('/') }}dash/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('/') }}dash/js/demo/chart-area-demo.js"></script>
  <script src="{{ asset('/') }}dash/js/demo/chart-pie-demo.js"></script>
@endpush --}}
