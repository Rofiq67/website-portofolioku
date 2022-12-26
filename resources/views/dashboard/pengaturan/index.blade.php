@extends('dashboard.layout')

@section('konten')
<form action="{{ route('pengaturan.update') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label for="" class="col-sm-2"> About </label>
        <div class="col-sm-6">
            <select name="_halaman_about" id="" class="form-control form-control-sm">
                <option value="">Pilih</option>
                @foreach ($datahalaman as $item)
                    <option value="{{ $item->id }}" {{ get_meta_value('_halaman_about')==$item->id?'selected' : '' }}>{{ $item->judul }}</option>
                    {{-- tonton yt menit 52 buat cara bacanya  --}}
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2"> Interest </label>
        <div class="col-sm-6">
            <select name="_halaman_interest" id="" class="form-control form-control-sm">
                <option value="">Pilih</option>
                @foreach ($datahalaman as $item)
                    <option value="{{ $item->id }}" {{ get_meta_value('_halaman_interest') == $item->id?'selected' : '' }}>{{ $item->judul }}</option>
                    {{-- tonton yt menit 52 buat cara bacanya  --}}
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2"> Sertifikat </label>
        <div class="col-sm-6">
            <select name="_halaman_sertifikat" id="" class="form-control form-control-sm">
                <option value="">Pilih</option>
                @foreach ($datahalaman as $item)
                    <option value="{{ $item->id }}" {{ get_meta_value('_halaman_sertifikat') == $item->id ? 'selected' : '' }}>{{ $item->judul }}</option>
                    {{-- tonton yt menit 52 buat cara bacanya  --}}
                @endforeach
            </select>
        </div>
    </div>
    



    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>
@endsection
