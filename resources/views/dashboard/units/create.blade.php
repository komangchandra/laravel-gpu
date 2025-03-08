@extends('dashboard.layouts.app')

@section('title', 'Dashboard - Tambah Unit')

@push('css')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endpush

@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambahkan data unit</h1>

    <div class="row">
      <div class="col-lg-9">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form tambah unit</h6>
          </div>
          <div class="card-body">
            <form action="{{ route('units.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">ID Unit</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="id" name="id" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="unit_name" class="col-sm-2 col-form-label">Nama Unit</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="unit_name" name="unit_name" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="owner" class="col-sm-2 col-form-label">Owner</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="owner" name="owner" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="capacity" class="col-sm-2 col-form-label">Kapasitas</label>
                <div class="col-sm-2">
                  <input type="number" class="form-control" id="capacity" name="capacity" required>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Tambah Unit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection

@push('js')
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
@endpush
