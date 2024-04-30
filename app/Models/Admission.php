<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $fillable = [
        'school_id',
        'student_id',
        'message',
    ];
    protected $table = 'admission_messages';

    public function student()
    {
        return $this->belongsTo(User::class);
    }
    public function school()
    {
        return $this->belongsTo(User::class);
    }
    public function academicRecords(){
        // placeholder
    }
}
