@extends('_layout.master')

@section('title', 'Tambah Penduduk')

@section('content')


<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tambah Data Penduduk</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form method="post" action="{{ route('penduduk.store') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    @include('penduduk.form', ['tombol' => 'Save'])
                </form>
            </div>
        </div>
    </div>
</div>

@endsection