@csrf
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no">Nomor <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="no" id="no" class="form-control col-md-7 col-xs-12 @error('no') is-invalid @enderror" value="{{ old('no') ?? $kartu_keluarga->no ?? ''}}" placeholder="16 digit angka No. KK">
        @error('no')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jorong_id">Jorong <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="jorong_id" id="jorong_id" class="form-control col-md-7 col-xs-12 @error('jorong_id') is-invalid @enderror">
            <option disabled selected value="null">Pilih Jorong</option>
        @foreach ($jorongs as $jorong)
            @if($jorong->id == (old('jorong_id') ?? $kartu_keluarga->jorong_id ?? ''))
            <option value="{{ $jorong->id }}" selected>{{ $jorong->nama }}</option>
            @else
            <option value="{{ $jorong->id }}">{{ $jorong->nama }}</option>
            @endif
        @endforeach
        </select>
        @error('jorong_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_pencatatan">Tanggal Pencatatan <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="tanggal_pencatatan" type="date" name="tanggal_pencatatan" class="form-control col-md-7 col-xs-12 @error('tanggal_pencatatan') is-invalid @enderror" value="{{ old('tanggal_pencatatan') ?? $kartu_keluarga->tanggal_pencatatan ?? ''}}">
        @error('tanggal_pencatatan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <a href="{{ route('kartuKeluarga.index') }}" class="btn btn-primary" type="button">Cancel</a>
        <button class="btn btn-primary" type="reset">Reset</button>
        <button type="submit" class="btn btn-success">{{ $tombol }}</button>
    </div>
</div>