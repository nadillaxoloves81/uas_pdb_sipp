@extends('_layout.master')

@section('title', 'Daftar Kartu Keluarga')

@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Daftar Kartu Keluarga</h2>
                <a href="{{ route('kartuKeluarga.create') }}" class="btn btn-round btn-success pull-right">Tambah Data</a>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
            
            <table id="datatable-fixed-header" class="table table-striped table-bordered overflow-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>No. Kartu Keluarga</th>
                    <th>Jorong</th>
                    <th>Tanggal Pencatatan</th>
                    <th>Aksi</th>
                </tr>
                </thead>


                <tbody>
                @foreach($kartu_keluargas as $kartu_keluarga)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kartu_keluarga->no }}</td>
                    <td>{{ $kartu_keluarga->jorong->nama }}</td>
                    <td>{{ $kartu_keluarga->tanggal_pencatatan }}</td>
                    <td>
                        <form class="form-inline d-inline" method="POST" action="{{ route('kartuKeluarga.destroy', ['id' => $kartu_keluarga->id]) }}">
                            <a href="{{ route('kartuKeluarga.show', ['id' => $kartu_keluarga->id]) }}" class="badge bg-blue">View</a>    
                            <a href="/kartuKeluarga/{{ $kartu_keluarga->id }}/edit" class="badge bg-orange">Edit</a>
                            @csrf
                            @method('delete')
                            <button type="submit" class="badge bg-red btn-delete" data-name="{{ $kartu_keluarga->no }}" data-table="kartu_keluarga">
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