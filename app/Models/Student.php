<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Academic;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'name',
        'age',
        'address',
    ];

    public function academic()
    {
        return $this->hasOne(Academic::class, 'student_id', 'id');
    }

    public function country()
    {
        return $this->hasOne(Country::class, 'student_id', 'id');
    }
}
