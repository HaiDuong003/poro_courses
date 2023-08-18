<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instructor extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'instructors';
    protected $fillable = [
        'name',
        'email',
        'password',
        'bio',
        'avatar',
    ];
}
