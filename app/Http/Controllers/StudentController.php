<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class StudentController extends Controller
{


    public function index(): View
    {
      $students = Student::query()
        ->with('classroom')
        ->get();
       $classrooms = Classroom::query()->get();

      return view('admin.Student.index', [
        'title' => 'Students',
        'students' => $students,
        'classrooms' => $classrooms,
      ]);
    }


public function store(Request $request)
{
    $validated = $request->validate([
        'nis' => 'required|numeric|max:99999999999999999999|unique:students,nis',
        'name' => 'required|string|max:255',
        'classroom_id' => 'required|exists:classrooms,id',
        'address' => 'nullable|string|max:255',
    ], [
        'nis.required' => 'NIS wajib diisi.',
        'nis.numeric' => 'NIS harus berupa angka.',
        'nis.unique' => 'NIS sudah digunakan.',
        'name.required' => 'Nama siswa wajib diisi.',
        'classroom_id.required' => 'Kelas wajib dipilih.',
        'classroom_id.exists' => 'Kelas tidak ditemukan.',
        'address.string' => 'Format alamat tidak valid.',
    ]);

    Student::create($validated);

    return redirect()
        ->route('admin.student.index')
        ->with('success', 'Data siswa berhasil ditambahkan.');
}

}
