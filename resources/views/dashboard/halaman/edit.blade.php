@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{ route('halaman.index')}}" class="btn btn-primary">Kembali</a></div>

    <form action="{{ route('halaman.update', $data->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text"
                class="form-control form-control-sm" name="judul" id="judul" 
                aria-describedby="helpId" placeholder="Masukan judul halaman" value="{{ $data->judul }}">
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control summernote" rows="5" name="isi" placeholder="Masukan isi halaman"
            >{{ $data->isi }}</textarea>
        </div>
        <button class="btn btn-success" name="simpan" type="submit">Simpan</button>
        
    </form>



@endsection