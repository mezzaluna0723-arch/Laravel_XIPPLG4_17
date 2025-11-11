@extends('layouts.admin')
@section('title', 'Data Absensi')

@section('content')
<div class="container">
    <h1 class="mb-4">Data Absensi</h1>
    <a href="{{ route('admin.attendances.create') }}" class="btn btn-primary mb-3">+ Tambah Absensi</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Siswa</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attendances as $attendance)
            <tr>
                <td>{{ $attendance->id }}</td>
                <td>{{ $attendance->student->nama_lengkap }}</td>
                <td>{{ $attendance->tanggal }}</td>
                <td>{{ $attendance->status }}</td>
                <td>{{ $attendance->keterangan }}</td>
                <td>
                    <a href="{{ route('admin.attendances.edit', $attendance->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.attendances.destroy', $attendance->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
