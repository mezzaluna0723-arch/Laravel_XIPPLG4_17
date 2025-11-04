@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Siswa</h2>

    <a href="{{ route('admin.students.create') }}" class="btn btn-primary mb-3">+ Tambah Siswa</a>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>NISN</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->nis }}</td>
                    <td>{{ $student->nama_lengkap }}</td>
                    <td>{{ $student->jenis_kelamin }}</td>
                    <td>{{ $student->nisn }}</td>
                    <td>
                        <a href="{{ route('admin.students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data siswa</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
