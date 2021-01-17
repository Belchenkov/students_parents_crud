<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    public $timestamps = true;

    protected $fillable = [
        'fio',
        'phone',
        'email',
        'address'
    ];

    /**
     * @return BelongsToMany
     */
    public function parents(): belongsToMany
    {
        return $this->belongsToMany(
            ParentOfStudent::class,
            'student_parent',
            'student_id',
            'parent_id'
        );
    }
}
