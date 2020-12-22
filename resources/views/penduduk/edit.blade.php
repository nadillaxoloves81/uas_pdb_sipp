@extends('_layout.master')

@section('title', 'Edit Penduduk')

@section('content')


<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Data Penduduk</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form method="post" action="{{ route('penduduk.update', ['id' => $penduduk->id]) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                @method('PATCH')
                @include('penduduk.form', ['tombol' => 'Update'])
                </form>
            </div>
        </div>
    </div>
</div>

@endsection