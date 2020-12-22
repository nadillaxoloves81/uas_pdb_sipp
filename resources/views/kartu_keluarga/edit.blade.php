@extends('_layout.master')

@section('title', 'Edit Kartu Keluarga')

@section('content')


<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Data Kartu Keluarga</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form method="post" action="{{ route('kartuKeluarga.update', ['id' => $kartu_keluarga->id]) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                @method('PATCH')
                @include('kartu_keluarga.form', ['tombol' => 'Update'])
                </form>
            </div>
        </div>
    </div>
</div>

@endsection