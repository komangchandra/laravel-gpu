@extends('dashboard.layouts.app')

@section('title', 'Dashboard - Tambah FT')

@push('css')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endpush

@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambahkan data FT</h1>

    <div class="row">
      <div class="col-lg-8">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form tambah FT</h6>
          </div>
          <div class="card-body">
            <form action="{{ route('fuels.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3 row">
                <label for="fuel_truck_id" class="col-sm-2 col-form-label">Kode FT</label>
                <div class="col-sm-4">
                  <input type="text" style="text-transform:uppercase" class="form-control" id="fuel_truck_id" name="fuel_truck_id" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="fuel_truck_name" class="col-sm-2 col-form-label">Nama Fuel Truck</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="fuel_truck_name" name="fuel_truck_name" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="volume" class="col-sm-2 col-form-label">Kapasitas Volume</label>
                <div class="col-sm-4">
                  <input type="number" style="text-transform:uppercase" class="form-control" id="volume" name="volume" required>
                </div>
              </div> 
              <button type="submit" class="btn btn-primary">Tambah Activity</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection

{{-- @push('js')
  <script>
    document.getElementById('image').onchange = function(evt) {
      var reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('preview-image').src = e.target.result;
        document.getElementById('preview-image').style.display = 'block';
      };
      reader.readAsDataURL(this.files[0]);
    };
  </script>
@endpush --}}
