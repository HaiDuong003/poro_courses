<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'students';
    //    thêm các trường của bảng để add
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'total_money',
        'role'
    ];
}
