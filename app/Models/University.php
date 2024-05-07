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
        'programs',
        'keywords',
        'requirements',
        'website',
        'contact_email',
    ];
}
