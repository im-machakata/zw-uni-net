<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'university_id'
    ];

    public function requirements()
    {
        return $this->hasMany(ProgramRequirement::class);
    }
    
    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
