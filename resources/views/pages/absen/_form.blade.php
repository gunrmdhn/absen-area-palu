@csrf
<div class="col-lg-6">
    <label for="bulan_tahun" class="form-label">Bulan / Tahun</label>
    <input type="month" value="{{ old('bulan_tahun') }}" @class([
        'form-control',
        'rounded-0',
        'is-invalid' => $errors->has('bulan_tahun'),
    ]) id="bulan_tahun" name="bulan_tahun">
    {{-- <input type="month" value="{{ old('bulan', $absen->bulan) }}" @class([
            'form-control',
            'rounded-0',
            'is-invalid' => $errors->has('bulan'),
        ]) id="bulan"
            name="bulan"> --}}
</div>
<div class="col-lg-6">
    <label for="file" class="form-label">File</label>
    <input type="file" @class([
        'form-control',
        'rounded-0',
        'is-invalid' => $errors->has('file'),
    ]) id="file" name="file">
</div>
<div class="col-lg-12">
    <div class="d-flex">
        @if (request()->routeIs('absen.edit'))
            <div class="btn-group flex-fill">
                <a href="{{ route('absen.index') }}" class="btn btn-secondary rounded-start-0">Kembali</a>
                <button type="submit" class="btn btn-warning text-white rounded-end-0">Simpan</button>
            </div>
        @else
            <button class="btn btn-success flex-fill rounded-0" type="submit">Tambah</button>
        @endif
    </div>
</div>
