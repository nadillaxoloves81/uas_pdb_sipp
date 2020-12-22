@extends('_layout.master')

@section('title', 'Daftar Anggota Keluarga')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Daftar Anggota Kartu Keluarga No. {{ $kartu_keluarga->no }}</h2>
            <a href="{{ route('anggotaKeluarga.create', ['id' => $kartu_keluarga->id]) }}" class="btn btn-round btn-success pull-right">Tambah Data</a>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
            
            <table id="datatable-fixed-header" class="table table-striped table-bordered overflow-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>Status Keluarga</th>
                    <th>Aksi</th>
                </tr>
                </thead>


                <tbody>
                @foreach($penduduks as $penduduk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $penduduk->nama }}</td>
                    <td>{{ $penduduk->nik }}</td>
                    <td>{{ $penduduk->jenis_kelamin }}</td>
                    <td>{{ $penduduk->status_keluarga }}</td>
                    <td>
                        <form class="form-inline " method="POST" action="{{ route('anggotaKeluarga.destroy', ['id' => $penduduk->id]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="badge bg-red btn-delete" data-name="{{ $penduduk->nama }}" data-table="penduduk">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('kartuKeluarga.index') }}" class="btn btn-round btn-primary">Kembali</a>
            </div>
        </div>
    </div>

    @endsection