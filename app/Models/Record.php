<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'appear',
        'student_id',
        'session_id',
    ];

    public function Session()
    {
        return $this->belongsTo(Session::class);
    }

    public function Student()
    {
        return $this->belongsTo(Student::class);
    }
}
