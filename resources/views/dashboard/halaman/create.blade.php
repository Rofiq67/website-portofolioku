@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{ route('halaman.index')}}" class="btn btn-primary">Kembali</a></div>

    <form action="{{ route('halaman.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text"
                class="form-control form-control-sm" name="judul" id="judul" 
                aria-describedby="helpId" placeholder="Masukan judul halaman" value="{{ Session::get('judul') }}">
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control summernote" rows="5" name="isi" placeholder="Masukan isi halaman"
            value="{{ Session::get('isi') }}"></textarea>
        </div>
        <button class="btn btn-success" name="simpan" type="submit">Simpan</button>
        
    </form>



@endsection