<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Classroom;
use Illuminate\Contracts\View\View;

class ClassroomController extends Controller
{
    public function index(): View
    {
        $classrooms = Classroom::query()
            ->with('students')
            ->get();

        return view('admin.Classroom.index', [
            'title' => 'Classrooms',
            'classrooms' => $classrooms,
        ]);
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'major' => 'required|string|max:255',
    ]);

    Classroom::create($validated);

    return redirect()
        ->route('admin.classroom')
        ->with('success', 'Classroom berhasil ditambahkan.');
}
}
