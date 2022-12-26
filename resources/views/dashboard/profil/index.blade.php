@extends('dashboard.layout')

@section('konten')
<form action="{{ route('profil.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-between">
        <div class="col-5">
            <h3>Profile</h3>
            @if (get_meta_value('_foto'))
                <img style="max-width: 100px;max-height:100px" 
                src="{{ asset('foto') . '/' . get_meta_value('_foto') }}">
            @endif
            <div class="mb-3">
                <label for="_foto" class="form-label">Profile Image</label>
                <input type="file" name="_foto" id="_foto" class="form-control form-control-sm"
                value="{{ get_meta_value('_foto') }}">
            </div>
            <div class="mb-3">
                <label for="_kota" class="form-label">Kota</label>
                <input type="text" name="_kota" id="_kota" class="form-control form-control-sm"
                value="{{ get_meta_value('_kota') }}">
            </div>
            <div class="mb-3">
                <label for="_provinsi" class="form-label">Provinsi</label>
                <input type="text" name="_provinsi" id="_provins" class="form-control form-control-sm"
                value="{{ get_meta_value('_provinsi') }}">
            </div>
            <div class="mb-3">
                <label for="_nohp" class="form-label">Nomor Telepon</label>
                <input type="text" name="_nohp" id="_nohp" class="form-control form-control-sm"
                value="{{ get_meta_value('_nohp') }}">
            </div>
            <div class="mb-3">
                <label for="_email" class="form-label">Alamat Email</label>
                <input type="text" name="_email" id="_email" class="form-control form-control-sm"
                value="{{ get_meta_value('_email') }}">
            </div>
        </div>
        <div class="col-5">
            <h3>Sosial Media</h3>
            <div class="mb-3">
                <label for="_facebook" class="form-label">Facebook</label>
                <input type="text" name="_facebook" id="_facebook" class="form-control form-control-sm"
                value="{{ get_meta_value('_facebook') }}">
            </div>
            <div class="mb-3">
                <label for="_instagram" class="form-label">Instagram</label>
                <input type="text" name="_instagram" id="_instagram" class="form-control form-control-sm"
                value="{{ get_meta_value('_instagram') }}">
            </div>
            <div class="mb-3">
                <label for="_github" class="form-label">Github</label>
                <input type="text" name="_github" id="_github" class="form-control form-control-sm"
                value="{{ get_meta_value('_github') }}">
            </div>
            <div class="mb-3">
                <label for="_gitlab" class="form-label">Gitlab</label>
                <input type="text" name="_gitlab" id="_gitlab" class="form-control form-control-sm"
                value="{{ get_meta_value('_gitlab') }}">
            </div>
            <div class="mb-3">
                <label for="_linkedin" class="form-label">Linkedin</label>
                <input type="text" name="_linkedin" id="_linkedin" class="form-control form-control-sm"
                value="{{ get_meta_value('_linkedin') }}">
            </div>
        </div>
    </div>
    
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>
@endsection
{{-- @push('child-scripts')
    <script>
        $(document).ready(function() {
            $('.skill').tokenfield({
                autocomplete: {
                    source: [{!! $skill !!}],
                    delay: 100
                },
                showAutocompleteOnFocus: true
            });
        });
    </script>
@endpush --}}