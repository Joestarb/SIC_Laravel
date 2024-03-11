<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name_student','lastname_student','id_student','birthdate','comments'];
    public function activities()
    {
        return $this->hasMany(student_has_activites::class, 'student_id');
    }
}

