<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;


class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'course'
    ];

    public function subjects() {
        return $this->hasMany(Subject::class);
    }

}
