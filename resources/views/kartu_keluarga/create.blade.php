@extends('_layout.master')

@section('title', 'Tambah Kartu Keluarga')

@section('content')


<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tambah Data Kartu Keluarga</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form method="post" action="{{ route('kartuKeluarga.store') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    @include('kartu_keluarga.form', ['tombol' => 'Save'])
                </form>
            </div>
        </div>
    </div>
</div>

@endsection