<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ParentOfStudent extends Model
{
    use HasFactory;

    protected $table = 'parent_of_students';
    protected $fillable = [
        'fio',
        'phone'
    ];

    /**
     * @return BelongsToMany
     */
    public function students(): belongsToMany
    {
        return $this->belongsToMany(
            Student::class,
            'student_parent',
            'parent_id',
            'student_id'
        );
    }
}
