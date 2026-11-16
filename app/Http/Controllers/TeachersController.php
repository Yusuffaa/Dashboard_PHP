<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teachers;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teachers::with('subjects')->get();

        return view('admin.teachers.index', [
            'title' => 'Teachers',
            'teachers' => $teachers
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'niy' => 'required|numeric|unique:teachers,niy',
            'start_date' => 'required|date',
        ], [
            'name.required' => 'Nama teacher wajib diisi.',
            'niy.required' => 'NIY wajib diisi.',
            'niy.numeric' => 'NIY harus berupa angka.',
            'niy.unique' => 'NIY sudah terdaftar! Gunakan NIY lain.',
            'start_date.required' => 'Tanggal mulai wajib diisi.',
        ]);

        Teachers::create($validated);

        return redirect()
            ->route('admin.teachers.index')
            ->with('success', 'Teacher berhasil ditambahkan.');
    }
}
