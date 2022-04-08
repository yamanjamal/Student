<?php

namespace App\Models;

use App\Http\Controllers\SemesterController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'semester_id',
    ];


    public function Sessions(){

        return $this->hasMany(Session::class);

    }

    public function Semester(){

        return $this->belongsTo(Semester::class);

    }

    public function Students()
    {
        return $this->belongsToMany(Student::class);
    }

}
