<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['name' => 'X PPLG 1', 'major' => 'PPLG'],
            ['name' => 'X PPLG 2', 'major' => 'PPLG'],
            ['name' => 'XI PPLG 1', 'major' => 'PPLG'],
            ['name' => 'XI PPLG 2', 'major' => 'PPLG'],
            ['name' => 'XII PPLG 1', 'major' => 'PPLG'],
            ['name' => 'X TKJ 1', 'major' => 'TKJ'],
            ['name' => 'XI TKJ 1', 'major' => 'TKJ'],
            ['name' => 'XII TKJ 1', 'major' => 'TKJ'],
            ['name' => 'X AKL 1', 'major' => 'AKL'],
            ['name' => 'XI AKL 1', 'major' => 'AKL'],
        ];

        foreach ($data as $item) {
            Classroom::create($item);
        }
    }
}
