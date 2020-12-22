@extends('_layout.master')

@section('title', 'Daftar Penduduk')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Daftar Penduduk</h2>
            <a href="{{ route('penduduk.create') }}" class="btn btn-round btn-success pull-right">Tambah Data</a>
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
                        <form class="form-inline " method="POST" action="{{ route('penduduk.destroy', ['id' => $penduduk->id]) }}">
                            @csrf
                            @method('delete')
                            <a href="{{ route('penduduk.show', ['id' => $penduduk->id]) }}" class="badge bg-blue">View</a>    
                            <a href="/penduduk/{{ $penduduk->id }}/edit" class="badge bg-orange d-inline-flex">Edit</a>
                            <button type="submit" class="badge bg-red btn-delete" data-name="{{ $penduduk->nama }}" data-table="penduduk">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>

    @endsection