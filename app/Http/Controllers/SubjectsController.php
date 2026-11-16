<?php
namespace App\Http\Controllers;
use App\Models\Subject;
use App\Models\Teachers;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class SubjectsController extends Controller
{
    public function index(): View
    {
        $subjects = Subject::with('teacher')->get();
        $teachers = Teachers::all();

        return view('admin.subjects.index', [
            'title' => 'Subjects',
            'subjects' => $subjects,
            'teachers' => $teachers,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'teacher_id' => 'required|exists:teachers,id',
        ], [
            'name.required' => 'Nama subject wajib diisi.',
            'teacher_id.required' => 'Teacher wajib dipilih.',
            'teacher_id.exists' => 'Teacher tidak ditemukan.',
        ]);

        Subject::create($validated);

        return redirect()
            ->route('admin.subjects')
            ->with('success', 'Subject berhasil ditambahkan.');
    }
}
