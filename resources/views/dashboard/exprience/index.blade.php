@extends('dashboard.layout')

@section('konten')
    <p class="card-title">Exprience</p>
    <div class="pb-3"><a href="{{ route('exprience.create') }}" class="btn btn-primary">Tambah Exprience</a></div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Posisi</th>
                    <th>Nama Perusahaan</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Akhir</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->info1 }}</td>
                        <td>{{ $item->tgl_mulai_indo }}</td>
                        <td>{{ $item->tgl_akhir_indo }}</td>
                        <td>
                            <a href="{{ route('exprience.edit', $item->id )}}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('exprience.destroy', $item->id )}}" class="d-inline"
                                onsubmit="return confirm('Konfirmasi untuk menghapus data')" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" name="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection






