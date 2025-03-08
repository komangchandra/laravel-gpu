@extends('dashboard.layouts.app')

@section('title', 'Dashboard - Tambah Activity')

@push('css')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
@endpush

@section('content')
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambahkan data Activity</h1>

    <div class="row">
      <div class="col-lg-8">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form tambah Activity</h6>
          </div>
          <div class="card-body">
            <form action="{{ route('activities.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3 row">
                <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-4">
                  <input type="date" class="form-control" id="date" name="date" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="shift" class="col-sm-2 col-form-label">Shift</label>
                <div class="col-sm-4">
                  <select class="form-select" aria-label="Default select example" id="shift" name="shift" required>
                    <option selected>Pilih Shift</option>
                    <option value="Siang">Siang</option>
                    <option value="Malam">Malam</option>
                  </select>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="pit" class="col-sm-2 col-form-label">PIT</label>
                <div class="col-sm-4">
                  <select class="form-select" aria-label="Default select example" id="pit" name="pit" required>
                    <option selected>Pilih PIT</option>
                    <option value="PIT 6">PIT 6</option>
                    <option value="PIT Jaya">PIT Jaya</option>
                    <option value="PIT Agria">PIT Agria</option>
                  </select>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="shift" class="col-sm-2 col-form-label">Activity</label>
                <div class="col-sm-4">
                  <select class="form-select" aria-label="Default select example" id="shift" name="shift" required>
                    <option selected>Pilih Activity</option>
                    <option value="Coal">Coal</option>
                    <option value="OB">OB</option>
                  </select>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="owner" class="col-sm-2 col-form-label">Unit Exca</label>
                <div class="col-sm-6">
                  <select class="form-select" aria-label="Default select example" id="shift" name="shift" required>
                    <option selected>Pilih Unit</option>
                    @foreach ($units as $unit)
                      <option value="{{ $unit->id }}">{{ $unit->unit_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="owner" class="col-sm-2 col-form-label">Unit DT 1</label>
                <div class="col-sm-6">
                  <select class="form-select" aria-label="Default select example" id="shift" name="shift" required>
                    <option selected>Pilih Unit</option>
                    @foreach ($units as $unit)
                      <option value="{{ $unit->id }}">{{ $unit->unit_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="owner" class="col-sm-2 col-form-label">Unit DT 2</label>
                <div class="col-sm-6">
                  <select class="form-select" aria-label="Default select example" id="shift" name="shift" required>
                    <option selected>Pilih Unit</option>
                    @foreach ($units as $unit)
                      <option value="{{ $unit->id }}">{{ $unit->unit_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="owner" class="col-sm-2 col-form-label">Unit DT 3</label>
                <div class="col-sm-6">
                  <select class="form-select" aria-label="Default select example" id="shift" name="shift" required>
                    <option selected>Pilih Unit</option>
                    @foreach ($units as $unit)
                      <option value="{{ $unit->id }}">{{ $unit->unit_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="owner" class="col-sm-2 col-form-label">Unit DT 4</label>
                <div class="col-sm-6">
                  <select class="form-select" aria-label="Default select example" id="shift" name="shift" required>
                    <option selected>Pilih Unit</option>
                    @foreach ($units as $unit)
                      <option value="{{ $unit->id }}">{{ $unit->unit_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="owner" class="col-sm-2 col-form-label">Unit DT 5</label>
                <div class="col-sm-6">
                  <select class="form-select" aria-label="Default select example" id="shift" name="shift" required>
                    <option selected>Pilih Unit</option>
                    @foreach ($units as $unit)
                      <option value="{{ $unit->id }}">{{ $unit->unit_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="ritase" class="col-sm-2 col-form-label">Ritase</label>
                <div class="col-sm-4">
                  <input type="number" class="form-control" id="ritase" name="ritase" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="start" class="col-sm-2 col-form-label">Mulai</label>
                <div class="col-sm-4">
                  <input type="time" class="form-control" id="start" name="start" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label for="finish" class="col-sm-2 col-form-label">Finish</label>
                <div class="col-sm-4">
                  <input type="time" class="form-control" id="finish" name="finish" required>
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
