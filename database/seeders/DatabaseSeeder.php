<?php
namespace Database\Seeders;
use App\Models\Classroom;
use App\Models\User;
use App\Models\Teachers;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
            ]
        );

        Classroom::factory(10)
            ->hasStudents(5)
            ->create();

        Teachers::factory(10)
            ->has(Subject::factory(), 'subjects')
            ->create();
    }
}
