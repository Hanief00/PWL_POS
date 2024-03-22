@extends ('layouts.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Edit')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ubah Kategori</h3>
        </div>
        <form action="/PWL_POS/public/kategori/update/{{ $data->kategori_id }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="card-body">
                <div class="form-group">
                    <label for="kodeKategori">Kode Kategori</label>
                    <input type="text" class="form-control" id="kodekategori" name="kodeKategori" placeholder="Masukkan Kode Kategori" value="{{ $data->kategori_kode }}">
                </div>
                <div class="form-group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" class="form-control" id="namaKategori" name="namaKategori" placeholder="Masukkan Nama Kategori" value="{{ $data->kategori_nama }}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
                <a href="{{ url('/kategori') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection