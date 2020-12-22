@csrf
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kartu_keluarga_id">No. Kartu Keluarga<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="kartu_keluarga_id" id="kartu_keluarga_id" class="form-control col-md-7 col-xs-12 @error('kartu_keluarga_id') is-invalid @enderror">
            <option disabled selected value="null">Pilih No. Kartu Keluarga</option>
        @foreach ($kartu_keluargas as $kartu_keluarga)
            @if($kartu_keluarga->id == (old('kartu_keluarga_id') ?? $penduduk->kartu_keluarga_id ?? ''))
            <option value="{{ $kartu_keluarga->id }}" selected>{{ $kartu_keluarga->no }}</option>
            @else
            <option value="{{ $kartu_keluarga->id }}">{{ $kartu_keluarga->no }}</option>
            @endif
        @endforeach
        </select>
        @error('kartu_keluarga_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="nama" id="nama" class="form-control col-md-7 col-xs-12 @error('nama') is-invalid @enderror" value="{{ old('nama') ?? $penduduk->nama ?? '' }}" placeholder="Masukkan Nama">
        @error('nama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nik">NIK<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="nik" id="nik" class="form-control col-md-7 col-xs-12 @error('nik') is-invalid @enderror" value="{{ old('nik') ?? $penduduk->nik ?? '' }}" placeholder="Masukkan 16 digit angka NIK">
        @error('nik')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat_lahir">Tempat Lahir<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control col-md-7 col-xs-12 @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir') ?? $penduduk->tempat_lahir ?? '' }}" placeholder="Masukkan tempat lahir">
        @error('tempat_lahir')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal_lahir">Tanggal Lahir <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input id="tanggal_lahir" type="date" name="tanggal_lahir" class="form-control col-md-7 col-xs-12 @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') ?? $penduduk->tanggal_lahir ?? '' }}">
        @error('tanggal_lahir')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="agama">Agama<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="agama" id="agama" class="form-control col-md-7 col-xs-12 @error('agama') is-invalid @enderror" value="{{ old('agama') ?? $penduduk->agama ?? '' }}" placeholder="Masukkan tempat lahir">
        @error('agama')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_kelamin">Jenis Kelamin<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control col-md-7 col-xs-12 @error('jenis_kelamin') is-invalid @enderror" value="{{ old('jenis_kelamin') ?? $penduduk->jenis_kelamin ?? '' }}" placeholder="Masukkan jenis kelamin">
        @error('jenis_kelamin')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="level_pendidikan_id">Level Pendidikan<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="level_pendidikan_id" id="level_pendidikan_id" class="form-control col-md-7 col-xs-12 @error('level_pendidikan_id') is-invalid @enderror">
            <option disabled selected value="null">Pilih Level Pendidikan</option>
        @foreach ($level_pendidikans as $level_pendidikan)
            @if($level_pendidikan->id == (old('level_pendidikan_id') ?? $penduduk->level_pendidikan_id ?? ''))
            <option value="{{ $level_pendidikan->id }}" selected>{{ $level_pendidikan->nama }}</option>
            @else
            <option value="{{ $level_pendidikan->id }}">{{ $level_pendidikan->nama }}</option>
            @endif
        @endforeach
        </select>
        @error('level_pendidikan_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pekerjaan_id">Pekerjaan<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="pekerjaan_id" id="pekerjaan_id" class="form-control col-md-7 col-xs-12 @error('pekerjaan_id') is-invalid @enderror">
            <option disabled selected value="null">Pilih Pekerjaan</option>
        @foreach ($pekerjaans as $pekerjaan)
            @if($pekerjaan->id == (old('pekerjaan_id') ?? $penduduk->pekerjaan_id ?? ''))
            <option value="{{ $pekerjaan->id }}" selected>{{ $pekerjaan->nama }}</option>
            @else
            <option value="{{ $pekerjaan->id }}">{{ $pekerjaan->nama }}</option>
            @endif
        @endforeach
        </select>
        @error('pekerjaan_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_pernikahan">Status Penikahan<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="status_pernikahan" id="status_pernikahan" class="form-control col-md-7 col-xs-12 @error('status_pernikahan') is-invalid @enderror" value="{{ old('status_pernikahan') ?? $penduduk->status_pernikahan ?? '' }}" placeholder="Masukkan status pernikahan">
        @error('status_pernikahan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_keluarga">Status Keluarga<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="status_keluarga" id="status_keluarga" class="form-control col-md-7 col-xs-12 @error('status_keluarga') is-invalid @enderror" value="{{ old('status_keluarga') ?? $penduduk->status_keluarga ?? '' }}" placeholder="Masukkan status keluarga">
        @error('status_keluarga')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kewarganegaraan_id">Kewarganegaraan<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <select name="kewarganegaraan_id" id="kewarganegaraan_id" class="form-control col-md-7 col-xs-12 @error('kewarganegaraan_id') is-invalid @enderror">
            <option disabled selected value="null">Pilih Kewarganegaraan</option>
        @foreach ($kewarganegaraans as $kewarganegaraan)
            @if($kewarganegaraan->id == (old('kewarganegaraan_id') ?? $penduduk->kewarganegaraan_id ?? ''))
            <option value="{{ $kewarganegaraan->id }}" selected>{{ $kewarganegaraan->nama }}</option>
            @else
            <option value="{{ $kewarganegaraan->id }}">{{ $kewarganegaraan->nama }}</option>
            @endif
        @endforeach
        </select>
        @error('kewarganegaraan_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ayah">Nama Ayah<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="ayah" id="ayah" class="form-control col-md-7 col-xs-12 @error('ayah') is-invalid @enderror" value="{{ old('ayah') ?? $penduduk->ayah ?? '' }}" placeholder="Masukkan nama ayah">
        @error('ayah')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ibu">Nama Ibu<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="ibu" id="ibu" class="form-control col-md-7 col-xs-12 @error('ibu') is-invalid @enderror" value="{{ old('ibu') ?? $penduduk->ibu ?? '' }}" placeholder="Masukkan nama ibu">
        @error('ibu')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <a href="{{ route('penduduk.index') }}" class="btn btn-primary" type="button">Cancel</a>
        <button class="btn btn-primary" type="reset">Reset</button>
        <button type="submit" class="btn btn-success">{{ $tombol }}</button>
    </div>
</div>