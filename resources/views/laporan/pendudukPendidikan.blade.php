@extends('_layout.master')

@section('title', 'Penduduk Berdasar Pendidikan')

@section('content')


<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Laporan Penduduk dengan Level Pendidikan SMP/SLTP ke Bawah Per Nagari</h2>
                <a href="{{ route('cetakPendudukLevelPendidikan') }}" class="btn btn-round btn-primary pull-right" target="_blank"><i class="fa fa-print"></i> Cetak</a>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable-fixed-header" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nagari</th>
                            <th>Total Penduduk (Orang)</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    @foreach($jumlahPenduduks as $jumlahPenduduk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $jumlahPenduduk->nama }}</td>
                            <td class="text-center">{{ $jumlahPenduduk->total }}</td>
                        </tr>
                    @endforeach
                    </tbody>

                    <tfooter>
                        <tr>
                            <td colspan="2">Total Keseluruhan</td>
                            <td class="text-center"><b>{{ $total }}</b></td>
                        </tr>
                    </tfooter>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection