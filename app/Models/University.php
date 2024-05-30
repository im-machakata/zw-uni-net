<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'about',
        'keywords',
        'website',
        'contact_email',
        'application_url',
    ];

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
