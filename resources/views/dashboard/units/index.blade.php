@extends('dashboard.layouts.app')

@section('title', 'Dashboard - Date Unit')

@push('css')
  <link href="{{ asset('/') }}vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Unit</h1>
  <a class="btn btn-primary mb-3" href="{{ route('units.create') }}">Tambahkan Unit</a>

  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <div class="card shad ow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Unit</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>No Unit</th>
              <th>Nama Unit</th>
              <th>Owner</th>
              <th>Kapasitas</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>No Unit</th>
              <th>Nama Unit</th>
              <th>Owner</th>
              <th>Kapasitas</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
          <tbody>
            @forelse ($units as $unit)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $unit->id }}</td>
                <td>{{ $unit->unit_name }}</td>
                <td>{{ $unit->owner }}</td>
                <td>{{ $unit->capacity }}</td>
                <td>
                  <form onsubmit="return confirm('Yakin ingin menghapus data?');"
                    action="" method="POST">
                    <a href="" class="btn btn-sm btn-warning"><i
                        class="fa fa-pencil-alt"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                  </form>

                  {{-- <form onsubmit="return confirm('Yakin ingin menghapus data?');"
                    action="{{ route('units.destroy', $category->id) }}" method="POST">
                    <a href="{{ route('units.edit', $category->id) }}" class="btn btn-sm btn-warning"><i
                        class="fa fa-pencil-alt"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                  </form> --}}
                </td>
              </tr>
            @empty
              <div class="alert alert-danger">
                Data kosong.
              </div>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection


@push('js')
  <!-- Page level plugins -->
  <script src="{{ asset('/') }}vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ asset('/') }}vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('/') }}js/demo/datatables-demo.js"></script>
@endpush
