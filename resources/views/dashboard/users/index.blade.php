@extends('dashboard.layouts.app')

@section('title', 'Dashboard - Date Produk')

@push('css')
  <link href="{{ asset('/') }}vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Fuel Man</h1>
  {{-- <a class="btn btn-primary mb-3" href="}">Tambahkan Fuel Man</a> --}}

  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <div class="card shad ow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Fuel Man</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Fuel Man</th>
              <th>Email Login</th>
              <th>##</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Nama Fuel Man</th>
              <th>Email Login</th>
              <th>##</th>
            </tr>
          </tfoot>
          <tbody>
            @forelse ($users as $user)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  {{-- <form onsubmit="return confirm('Yakin ingin menghapus data?');"
                    action="{{ route('categories.destroy', $category->id) }}" method="POST">
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning"><i
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
