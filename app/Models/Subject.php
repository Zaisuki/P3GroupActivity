<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;


class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'title',
        'student_id',
    ];

    public function students() {
        return $this->belongsTo(Student::class);
    }
}
