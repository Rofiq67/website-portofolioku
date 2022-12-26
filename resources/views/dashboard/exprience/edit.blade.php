@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{ route('exprience.index')}}" class="btn btn-primary">Kembali</a></div>

    <form action="{{ route('exprience.update', $data->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="judul" class="form-label">Posisi</label>
            <input type="text"
                class="form-control form-control-sm" name="judul" id="judul" 
                aria-describedby="helpId" placeholder="Masukan data dengan tepat" value="{{ $data->judul}}">
        </div>
        <div class="mb-3">
            <label for="info1" class="form-label">Perusahaan</label>
            <input type="text"
                class="form-control form-control-sm" name="info1" id="info1" 
                aria-describedby="helpId" placeholder="Masukan data dengan tepat" value="{{ $data->info1}}">
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">Tanggal Mulai</div>
                <div class="col-auto"><input type="date" class="form-control
                    form-control-sm" name="tgl_mulai" placeholder="dd/mm/yy"
                    value="{{  $data->tgl_mulai }}"></div>
                <div class="col-auto">Tanggal Akhir</div>
                <div class="col-auto"><input type="date" class="form-control
                    form-control-sm" name="tgl_akhir" placeholder="dd/mm/yy"
                    value="{{  $data->tgl_akhir }}"></div>
            </div>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control summernote" rows="5" name="isi" placeholder="Masukan data dengan tepat"
            >{{  $data->isi }}</textarea>
        </div>
        <button class="btn btn-success" name="simpan" type="submit">Simpan</button>
        
    </form>



@endsection