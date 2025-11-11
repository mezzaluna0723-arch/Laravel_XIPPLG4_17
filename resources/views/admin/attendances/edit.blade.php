@extends('layouts.admin')
@section('title', 'Edit Absensi')

@section('content')
<div class="container">
    <h1>Edit Data Absensi</h1>
    <form action="{{ route('admin.attendances.update', $attendance->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Siswa</label>
            <select name="student_id" class="form-control" required>
                @foreach($students as $student)
                    <option value="{{ $student->id }}" {{ $student->id == $attendance->student_id ? 'selected' : '' }}>
                        {{ $student->nama_lengkap }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" value="{{ $attendance->tanggal }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="Hadir" {{ $attendance->status == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                <option value="Izin" {{ $attendance->status == 'Izin' ? 'selected' : '' }}>Izin</option>
                <option value="Sakit" {{ $attendance->status == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                <option value="Alfa" {{ $attendance->status == 'Alfa' ? 'selected' : '' }}>Alfa</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control">{{ $attendance->keterangan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
