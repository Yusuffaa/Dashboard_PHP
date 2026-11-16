<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'niy',
        'start_date',
    ];

    public function subjects()
    {
        return $this->hasMany(Subject::class, 'teacher_id');
    }
}
