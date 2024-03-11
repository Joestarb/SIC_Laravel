<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_has_activites extends Model
{
    use HasFactory;
    protected $table = 'student_has_activities'; // Si el nombre de la tabla no sigue la convención de Laravel

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function activity()
    {
        return $this->belongsTo(Activities::class, 'activity_id');
    }
}
