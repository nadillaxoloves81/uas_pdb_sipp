@extends('_layout.master')

@section('title', 'Detail Penduduk')

@section('content')


<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Detail Data Penduduk {{ $penduduk->nama }}</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="form-group">
                    <table class="table" style="width:75%; margin:auto" style="overflow:hidden">
                        <tr>
                            <td><label class="control-label" >No. Kartu Keluarga</label></td>
                            <td>:</td>
                            <td><span class="col-md-7 col-xs-12">{{ $penduduk->nik }}</span></td>
                        </tr>

                        <tr>
                            <td><label class="control-label" >NIK</label></td>
                            <td>:</td>
                            <td><span class="col-md-7 col-xs-12">{{ $penduduk->kartu_keluarga->no }}</span></td>
                        </tr>

                        <tr>
                            <td><label class="control-label" >Nama</label></td>
                            <td>:</td>
                            <td><span class="col-md-7 col-xs-12">{{ $penduduk->nama }}</span></td>
                        </tr>

                        <tr>
                            <td><label class="control-label" >Tempat Lahir</label></td>
                            <td>:</td>
                            <td><span class="col-md-7 col-xs-12">{{ $penduduk->tempat_lahir }}</span></td>
                        </tr>

                        <tr>
                            <td><label class="control-label" >Tanggal Lahir</label></td>
                            <td>:</td>
                            <td><span class="col-md-7 col-xs-12">{{ $penduduk->tanggal_lahir }}</span></td>
                        </tr>

                        <tr>
                            <td><label class="control-label" >Agama</label></td>
                            <td>:</td>
                            <td><span class="col-md-7 col-xs-12">{{ $penduduk->agama }}</span></td>
                        </tr>

                        <tr>
                            <td><label class="control-label" >Jenis Kelamin</label></td>
                            <td>:</td>
                            <td><span class="col-md-7 col-xs-12">{{ $penduduk->jenis_kelamin }}</span></td>
                        </tr>

                        <tr>
                            <td><label class="control-label" >Level Pendidikan</label></td>
                            <td>:</td>
                            <td><span class="col-md-7 col-xs-12">{{ $penduduk->level_pendidikan->nama }}</span></td>
                        </tr>

                        <tr>
                            <td><label class="control-label" >Pekerjaan</label></td>
                            <td>:</td>
                            <td><span class="col-md-7 col-xs-12">{{ $penduduk->pekerjaan->nama }}</span></td>
                        </tr>

                        <tr>
                            <td><label class="control-label" >Status Pernikahan</label></td>
                            <td>:</td>
                            <td><span class="col-md-7 col-xs-12">{{ $penduduk->status_pernikahan }}</span></td>
                        </tr>

                        <tr>
                            <td><label class="control-label" >Status Keluarga</label></td>
                            <td>:</td>
                            <td><span class="col-md-7 col-xs-12">{{ $penduduk->status_keluarga }}</span></td>
                        </tr>

                        <tr>
                            <td><label class="control-label" >Kewarganegaraan</label></td>
                            <td>:</td>
                            <td><span class="col-md-7 col-xs-12">{{ $penduduk->Kewarganegaraan->nama }}</span></td>
                        </tr>

                        <tr>
                            <td><label class="control-label" >Ayah</label></td>
                            <td>:</td>
                            <td><span class="col-md-7 col-xs-12">{{ $penduduk->ayah }}</span></td>
                        </tr>

                        <tr>
                            <td><label class="control-label" >Ibu</label></td>
                            <td>:</td>
                            <td><span class="col-md-7 col-xs-12">{{ $penduduk->ibu }}</span></td>
                        </tr>
                    </table>
                </div>

                <a href="{{ route('penduduk.index') }}" class="btn btn-round btn-success">Kembali</a>
            </div>
        </div>
    </div>
</div>

@endsection