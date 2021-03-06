@extends('layouts.template')
@section('content')
<div class="main-content">
    <section class="section">
      <h1 class="section-header">
        <div> {{ $title }} </div>
      </h1>
      @if ($message = Session::get('success'))
        <div class="alert alert-success alert-has-icon alert-dismissible show fade">
            <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
            <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            <div class="alert-title">Sukses</div>
            {{ $message }}
            </div>
        </div>
      @elseif($message = Session::get('danger'))
        <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
            <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
            <div class="alert-body">
            <button class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
            <div class="alert-title">Hapus</div>
                Data berhasil dihapus.
            </div>
        </div>
      @else

      @endif
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-right">
                      <a href=" {{ route('transaksi.create') }} " class="btn btn-primary">Tambah Data</a>
                    </div>
                    {{-- <h4>Latest Posts</h4> --}}
                </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr class="text-center">
                        <th>Kode Transaksi</th>
                        {{-- <th>Scan KTP</th> --}}
                        <th>ID Properti</th>
                        <th>ID Pengguna Android</th>
                        <th>ID Admin</th>
                        <th>Total Pembayaran</th>
                        {{-- <th>Aksi</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($tabel_transaksi as $item)
                    <tr class="text-center">
                        <td>{{ $item->kode_transaksi }}</td>
                        {{-- <td>
                            <img src="{{ url($item->bukti_pembayaran) }}" width="75" height="75" alt="{{ $item->id_properti }}" style="object-fit:contain">
                        </td> --}}
                        <td>{{ ucwords( $item->nama_pemilik) }}</td>
                        <td>{{ ucwords($item->username )}}</td>
                        <td>{{ ucwords($item->name) }}</td>
                        <td>Rp {{ number_format($item->total_bayar, 2, '.',',') }}</td>
                        {{-- <td> --}}
                            {{-- <form action=" {{ route('transaksi.destroy', $item->id_transaksi)}} " method="POST"> --}}
                                {{-- <a class="btn btn-primary btn-action mr-1" href="{{ route('properti.edit', $item->id) }}" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a> --}}
                                {{-- @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></button>
                            </form> --}}
                        {{-- </td> --}}
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
</div>
@endsection
