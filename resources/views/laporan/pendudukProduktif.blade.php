@extends('_layout.master')

@section('title', 'Penduduk Produktif')

@section('content')


<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Laporan Penduduk Produktif Rentang Usia 15 - 64 tahun</h2>
                <a href="{{ route('cetakPendudukUsiaProduktif') }}" class="btn btn-round btn-primary pull-right" target="_blank"><i class="fa fa-print"></i> Cetak</a>
                <div class="clearfix"></div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    @foreach($pendudukProduktifs as $pendudukProduktif)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pendudukProduktif->nama }}</td>
                            <td>{{ $pendudukProduktif->nik }}</td>
                            <td>{{ $pendudukProduktif->jenis_kelamin }}</td>
                            <td>{{ $pendudukProduktif->tanggal_lahir }}</td>
                    @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection