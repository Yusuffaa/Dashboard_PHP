<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        return view('admin.about',
        ['title' => 'About',
        'nama' => 'Yusuf Akbar',
        'kelas' => 'XI PPLG 3',
        'sekolah' => 'SMK Raden Umar Said',
        'alamat' => 'Jl. Sudimoro, Gribig Muneng',
        'github' => 'https://github.com/Yusuffaa'
        ]
        );

    }
}
