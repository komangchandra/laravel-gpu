@extends('dashboard.layouts.app')

@section('title', 'Dashboard - Activity')

@push('css')
  <link href="{{ asset('/') }}vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Transaksi</h1>
  <a class="btn btn-primary mb-3" href="">Tambahkan Activity</a>

  @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <div class="card shad ow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Activity</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>No Unit</th>
              <th>Divisi</th>
              <th>Jam</th>
              <th>HM</th>
              <th>Vol</th>
              <th>Flow Awal</th>
              <th>Flow Akhir</th>
              <th>Fuel Man</th>
              <th>Driver</th>
              <th>Lokasi</th>
              <th>##</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>No Unit</th>
              <th>Divisi</th>
              <th>Jam</th>
              <th>HM</th>
              <th>Vol</th>
              <th>Flow Awal</th>
              <th>Flow Akhir</th>
              <th>Fuel Man</th>
              <th>Driver</th>
              <th>Lokasi</th>
              <th>##</th>
            </tr>
          </tfoot>
          <tbody>
            @forelse ($transactions as $transaction)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $transaction->unit->unit_id }}</td>
                <td>{{ $transaction->unit->owner }}</td>
                <td>{{ $transaction->time }}</td>
                <td>{{ $transaction->hm }}</td>
                <td>{{ $transaction->vol }}</td>
                <td>{{ $transaction->initial_flow }}</td>
                <td>{{ $transaction->final_flow }}</td>
                <td>{{ $transaction->user->name }}</td>
                <td>{{ $transaction->driver }}</td>
                <td>{{ $transaction->location }}</td>
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
                    action="{{ route('activities.destroy', $category->id) }}" method="POST">
                    <a href="{{ route('activities.edit', $category->id) }}" class="btn btn-sm btn-warning"><i
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
