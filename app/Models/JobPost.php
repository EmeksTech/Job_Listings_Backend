<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'title', 
        'description',
        'location',
        'salary',
        'companyName',
        'companyDescription',
        'contactEmail',
        'contactPhone'
    ];
}
