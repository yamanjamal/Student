<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'date','subject_id'
    ];

    public function Students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function Records()
    {
        return $this->hasMany(Record::class);
    }

    public function Subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
