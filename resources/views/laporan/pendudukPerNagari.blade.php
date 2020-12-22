@extends('_layout.master')

@section('title', 'Penduduk Tiap Nagari')

@section('content')


<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Daftar Penduduk pada Nagari {{ $namaNagari->nama }}</h2>
                <a href="{{ route('cetakPendudukPerNagari', ['id' => $namaNagari->id]) }}" class="btn btn-round btn-primary pull-right" target="_blank"><i class="fa fa-print"></i> Cetak</a>
                <div class="clearfix"></div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

            
            <form method="post" action="{{ route('pendudukPerNagari') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nagari">Nagari <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="nagari" id="nagari" class="form-control col-md-7 col-xs-12 @error('nagari') is-invalid @enderror">
                            <option disabled selected value="null">Pilih Jorong</option>
                        @foreach ($nagaris as $nagari)
                            <option value="{{ $nagari->id }}">{{ $nagari->nama }}</option>
                        @endforeach
                        </select>
                        @error('nagari')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Pilih</button>

                        <a href="{{ route('pendudukNagari') }}" class="btn btn-success">All Data</a>
                    </div>
                </div>
            </form>

            <table id="datatable-fixed-header" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach($results as $result)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $result->nama }}</td>
                        <td>{{ $result->nik }}</td>
                        <td>{{ $result->jenis_kelamin }}</td>
                @endforeach
                    </tr>
                </tbody>
            </table>

            </div>
        </div>
    </div>
</div>

@endsection