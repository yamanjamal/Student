<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function Subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function Sessions()
    {
        return $this->belongsToMany(Session::class);
    }

    public function Records()
    {
        return $this->hasMany(Record::class);
    }

}
