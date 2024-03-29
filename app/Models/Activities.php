<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activities extends Model
{
    use HasFactory;
    public function students()
    {
        return $this->hasMany(student_has_activites::class, 'activity_id');
    }
}
