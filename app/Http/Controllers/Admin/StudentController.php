<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:students',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'nisn' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->route('admin.students.index')->with('success', 'Data berhasil ditambah!');
    }

    // 🆕 Tambahkan function EDIT
    public function edit($id)
    {
        // Ambil data student berdasarkan ID
        $student = Student::findOrFail($id);

        // Kirim ke view edit
        return view('admin.students.edit', compact('student'));
    }

    // 🆕 Tambahkan function UPDATE
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $request->validate([
            'nis' => 'required|unique:students,nis,' . $id,
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'nisn' => 'required',
        ]);

        $student->update($request->all());

        return redirect()->route('admin.students.index')->with('success', 'Data berhasil diperbarui!');
    }
}
