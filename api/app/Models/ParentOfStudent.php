<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentOfStudent extends Model
{
    use HasFactory;

    protected $table = 'parent_of_students';

    protected $fillable = [
        'fio',
        'phone'
    ];
}
